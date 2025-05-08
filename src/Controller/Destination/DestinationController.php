<?php

namespace App\Controller\Destination;


use App\Entity\Destination\Destination;
use App\Form\Destination\DestinationType;
use App\Repository\Destination\FavoriteRepository as DestinationFavoriteRepository;
use App\Repository\Destination\ParkingSpotRepository ;
use App\Repository\FavoriteRepository ;
use App\Repository\DestinationRepository ;
use App\Repository\ParkingSpotRepository as RepositoryParkingSpotRepository;
use ContainerYoygjJv\getParkingSpotRepositoryService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


#[Route('/destinations')]
final class DestinationController extends AbstractController
{
    #[Route('/courses', name: 'Destinations_page')]
public function courses(EntityManagerInterface $entityManager): Response
{
    $destinations = $entityManager->getRepository(Destination::class)->findAll();

    return $this->render('Destinations/destination/index.html.twig', [
        'destinations' => $destinations,
    ]);
}


    #[Route('/new', name: 'app_destination_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $destination = new Destination();
        $form = $this->createForm(DestinationType::class, $destination);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Handle image upload
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                try {
                    // Move the file to the directory where images are stored
                    $imageFile->move(
                        $this->getParameter('destination_images_directory'), // Path configured in services.yaml
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle file upload error
                    $this->addFlash('error', 'Image upload failed!');
                    return $this->redirectToRoute('app_destination_new');
                }

                // Set the image filename to the entity
                $destination->setImage($newFilename);
            }


            $entityManager->persist($destination);
            $entityManager->flush();

            return $this->redirectToRoute('Destinations_page', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Destinations/destination/new.html.twig', [
            'destination' => $destination,
            'form' => $form,
        ]);
    }

     // Frontend: Display Destinations in Cards
     
     #[Route('/destinations', name: 'app_destination_cards')]
     public function showCards(
         DestinationRepository $repo,
         SessionInterface $session // Inject session instead of FavoriteRepository
     ): Response {
         $destinations = $repo->findAllWithParkingSpots();
     
         $favoriteIds = $session->get('favorite_ids', []); // get the favorite IDs from session
     
         return $this->render('Destinations/destination/cards.html.twig', [
             'destinations' => $destinations,
             'favoriteIds' => $favoriteIds,
         ]);
     }




    #[Route('/{idDestination}', name: 'app_destination_back', methods: ['GET'])]
    public function showS(Destination $destination): Response
    {
        return $this->render('Destinations/destination/show.html.twig', [
            'destination' => $destination,
            
        ]);
    }

    #[Route('/{idDestination}/edit', name: 'app_destination_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Destination $destination, EntityManagerInterface $entityManager): Response
{
    $oldImage = $destination->getImage();

    // Convert image path to File object if it exists
    if ($destination->getImage()) {
        $destination->setImage(
            new File($this->getParameter('destination_images_directory') . '/' . $destination->getImage())
        );
    }

    $form = $this->createForm(DestinationType::class, $destination);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            $newFilename = uniqid().'.'.$imageFile->guessExtension();
            try {
                $imageFile->move(
                    $this->getParameter('destination_images_directory'),
                    $newFilename
                );
                $destination->setImage($newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Image upload failed!');
                return $this->redirectToRoute('app_destination_edit', [
                    'idDestination' => $destination->getIdDestination()
                ]);
            }
        } else {
            $destination->setImage($oldImage);
        }

        $entityManager->flush();
        return $this->redirectToRoute('Destinations_page');
    }

    return $this->render('Destinations/destination/edit.html.twig', [
        'destination' => $destination,
        'form' => $form->createView(),
    ]);
}


    #[Route('/{idDestination}', name: 'app_destination_delete', methods: ['POST'])]
    public function delete(Request $request, Destination $destination, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$destination->getIdDestination(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($destination);
            $entityManager->flush();
        }

        return $this->redirectToRoute('Destinations_page', [], Response::HTTP_SEE_OTHER);
    }

   

    // Add this SHOW route BEFORE the DELETE route
#[Route('/show/{idDestination}', name: 'app_destination_show', methods: ['GET'])]
public function show(Destination $destination): Response
{
    return $this->render('Destinations/parkingspot/destinationSpots.html.twig', [
        'destination' => $destination,
        'parking_spots' => $destination->getParkingSpots()
    ]);
}







#[Route('/destination/{id}/parking', name: 'app_parking_details')]
public function parkingDetails(Request $request, Destination $destination, RepositoryParkingSpotRepository $parkingSpotRepository)
{
    $availability = $request->query->get('availability');
    $accessible = $request->query->get('accessible');

    $criteria = ['destination' => $destination];

    if ($availability) {
        $criteria['isAvailable'] = $availability;
    }

    if ($accessible) {
        $criteria['isAccessible'] = $accessible;
    }

    $parking_spots = $parkingSpotRepository->findBy($criteria);

    return $this->render('front/parking_details.html.twig', [
        'destination' => $destination,
        'parking_spots' => $parking_spots,
    ]);
}

#[Route('/destinations/search', name: 'app_destination_search')]
    public function searchDestinations(Request $request, DestinationRepository $destinationRepository,SessionInterface $session): Response
    {
        
        $query = $request->query->get('query', '');
        

        // Filter destinations by name
        if ($query) {
            $destinations = $destinationRepository->findBySearchQuery($query);
        } else {
            $destinations = $destinationRepository->findAll();
        }

        // Fetch favorite destination IDs from the session or database
        $favoriteIds = $session->get('favorite_ids', []);
        return $this->render('Destinations/destination/cards.html.twig', [
            'destinations' => $destinations,
            'favoriteIds' => $favoriteIds,
        ]);
    }


}
