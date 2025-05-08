<?php

namespace App\Controller\Destination;

use App\Entity\Destination\Favorite;
use App\Form\Destination\FavoriteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Destination\Destination;
use App\Repository\Destination\FavoriteRepository as DestinationFavoriteRepository;
use App\Repository\DestinationRepository;
use App\Repository\Destination\FavoriteRepository ;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\SecurityBundle\Security;



#[Route('/favorite')]
final class FavoriteController extends AbstractController
{
    #[Route(name: 'app_favorite_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $favorites = $entityManager
            ->getRepository(Favorite::class)
            ->findAll();

        return $this->render('favorite/index.html.twig', [
            'favorites' => $favorites,
        ]);
    }

    #[Route('/new', name: 'app_favorite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $favorite = new Favorite();
        $form = $this->createForm(FavoriteType::class, $favorite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($favorite);
            $entityManager->flush();

            return $this->redirectToRoute('app_favorite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('favorite/new.html.twig', [
            'favorite' => $favorite,
            'form' => $form,
        ]);
    }

    #[Route('/{id_favorite}', name: 'app_favorite_show', methods: ['GET'])]
    public function show(Favorite $favorite): Response
    {
        return $this->render('favorite/show.html.twig', [
            'favorite' => $favorite,
        ]);
    }

    #[Route('/{id_favorite}/edit', name: 'app_favorite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Favorite $favorite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FavoriteType::class, $favorite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_favorite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('favorite/edit.html.twig', [
            'favorite' => $favorite,
            'form' => $form,
        ]);
    }

    #[Route('/{id_favorite}', name: 'app_favorite_delete', methods: ['POST'])]
    public function delete(Request $request, Favorite $favorite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$favorite->getIdfavorite(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($favorite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_favorite_index', [], Response::HTTP_SEE_OTHER);
    }

    
   // src/Controller/Destination/FavoriteController.php


#[IsGranted('ROLE_USER')]
#[Route('/toggle/{id}', name: 'toggle_favorite', methods: ['POST'])]
public function toggleFavorite(
    int $id,
    DestinationRepository $destinationRepository,
    FavoriteRepository $favoriteRepository,
    EntityManagerInterface $em,
    Security $security,
    Request $request // Add Request parameter
): JsonResponse {
    $user = $security->getUser();
    $destination = $destinationRepository->find($id);

    // Return JSON errors for unauthenticated users or missing destinations
    if (!$user) {
        return new JsonResponse(['status' => 'error', 'message' => 'User not authenticated'], 401);
    }

    // Validate CSRF token
    $csrfToken = $request->headers->get('X-CSRF-Token');
    if (!$this->isCsrfTokenValid('toggle_favorite', $csrfToken)) {
        return new JsonResponse(['status' => 'error', 'message' => 'Invalid CSRF token'], 403);
    }

    if (!$destination) {
        return new JsonResponse(['status' => 'error', 'message' => 'Destination not found'], 404);
    }

    try {
        $favorite = $favoriteRepository->findOneBy([
            'id_user' => $user,
            'id_destination' => $destination
        ]);

        if ($favorite) {
            $em->remove($favorite);
            $status = 'removed';
        } else {
            $favorite = new Favorite();
            $favorite->setIdUser($user);
            $favorite->setIdDestination($destination);
            $em->persist($favorite);
            $status = 'added';
        }

        $em->flush();
        return new JsonResponse(['status' => $status]);

    } catch (\Exception $e) {
        return new JsonResponse(['status' => 'error', 'message' => $e->getMessage()], 500);
    }
}
    

#[Route('/favorite/list', name: 'app_favorite_list')]
public function list(FavoriteRepository $favoriteRepository): Response
{
    $user = $this->getUser(); // Get current logged-in user
    $favorites = $favoriteRepository->findBy(['id_user' => $this->getUser()]);


    return $this->render('Destinations/favorite/show.html.twig', [
        'favorites' => $favorites,
    ]);
}


}
