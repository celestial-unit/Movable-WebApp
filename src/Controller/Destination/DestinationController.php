<?php

namespace App\Controller\Destination;


use App\Entity\Destination\Destination;
use App\Form\Destination\DestinationType;
use App\Repository\DestinationRepository ;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;


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
     public function showCards(DestinationRepository $repo): Response
     {
         
     return $this->render('Destinations/destination/cards.html.twig', [
         'destinations' => $repo->findAllWithParkingSpots(),
     ]);
     }

    #[Route('/{id}', name: 'app_destination_back', methods: ['GET'])]
    public function showS(Destination $destination): Response
    {
        return $this->render('Destinations/destination/show.html.twig', [
            'destination' => $destination,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_destination_edit', methods: ['GET', 'POST'])]
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
                    'id' => $destination->getId()
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


    #[Route('/{id}', name: 'app_destination_delete', methods: ['POST'])]
    public function delete(Request $request, Destination $destination, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$destination->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($destination);
            $entityManager->flush();
        }

        return $this->redirectToRoute('Destinations_page', [], Response::HTTP_SEE_OTHER);
    }

   

    // Add this SHOW route BEFORE the DELETE route
#[Route('/show/{id}', name: 'app_destination_show', methods: ['GET'])]
public function show(Destination $destination): Response
{
    return $this->render('Destinations/parkingspot/destinationSpots.html.twig', [
        'destination' => $destination,
        'parking_spots' => $destination->getParkingSpots()
    ]);
}
}
