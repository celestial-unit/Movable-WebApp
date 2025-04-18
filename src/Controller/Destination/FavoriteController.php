<?php

namespace App\Controller\Destination;

use App\Entity\Destination\Favorite;
use App\Form\Destination\FavoriteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

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
        if ($this->isCsrfTokenValid('delete'.$favorite->getId_favorite(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($favorite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_favorite_index', [], Response::HTTP_SEE_OTHER);
    }
}
