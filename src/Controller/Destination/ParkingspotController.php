<?php

namespace App\Controller\Destination;

use App\Entity\Destination\Parkingspot;
use App\Form\Destination\ParkingspotType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/parkingspot')]
final class ParkingspotController extends AbstractController
{
    #[Route(name: 'app_parkingspot_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $parkingspots = $entityManager
            ->getRepository(Parkingspot::class)
            ->findAll();

        return $this->render('Destinations/parkingspot/index.html.twig', [
            'parkingspots' => $parkingspots,
        ]);
    }

    #[Route('/new', name: 'app_parkingspot_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $parkingspot = new Parkingspot();
        $form = $this->createForm(ParkingspotType::class, $parkingspot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($parkingspot);
            $entityManager->flush();

            return $this->redirectToRoute('app_parkingspot_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Destinations/parkingspot/new.html.twig', [
            'parkingspot' => $parkingspot,
            'form' => $form,
        ]);
    }

    #[Route('/{id_parking}', name: 'app_parkingspot_show', methods: ['GET'])]
    public function show(Parkingspot $parkingspot): Response
    {
        return $this->render('Destinations/parkingspot/show.html.twig', [
            'parkingspot' => $parkingspot,
        ]);
    }

    #[Route('/{id_parking}/edit', name: 'app_parkingspot_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Parkingspot $parkingspot, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParkingspotType::class, $parkingspot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_parkingspot_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Destinations/parkingspot/edit.html.twig', [
            'parkingspot' => $parkingspot,
            'form' => $form,
        ]);
    }

    #[Route('/{id_parking}', name: 'app_parkingspot_delete', methods: ['POST'])]
    public function delete(Request $request, Parkingspot $parkingspot, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$parkingspot->getId_parking(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($parkingspot);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_parkingspot_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id_parking}/update-availability', name: 'app_parkingspot_update_availability', methods: ['POST'])]
    public function updateAvailability(int $id_parking, EntityManagerInterface $entityManager): JsonResponse
    {
        $parkingspot = $entityManager->getRepository(Parkingspot::class)->find($id_parking);

        if (!$parkingspot) {
            return new JsonResponse(['error' => 'Parking spot not found'], 404);
        }

        // Toggle availability
        $isAvailable = $parkingspot->getIsAvailable() === 'yes' ? 'no' : 'yes';
        $parkingspot->setIsAvailable($isAvailable);
        $entityManager->flush();

        return new JsonResponse(['isAvailable' => $isAvailable === 'yes']);
    }
}
