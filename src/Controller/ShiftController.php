<?php
namespace App\Controller;

use App\Entity\Shift;
use App\Form\ShiftType;
use App\Repository\ShiftRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\DriverRepository;

#[Route('/shift')]
final class ShiftController extends AbstractController
{
    #[Route(name: 'app_shift_index', methods: ['GET'])]
    public function index(ShiftRepository $shiftRepository): Response
    {
        return $this->render('shift/index.html.twig', [
            'shifts' => $shiftRepository->findAll(),
        ]);
    }

    #[Route('/shift/{id}', name: 'app_shift_show', methods: ['GET'])]
    public function show(Shift $shift): Response
    {
        return $this->render('shift/show.html.twig', [
            'shift' => $shift,
        ]);
    }

    #[Route('/new', name: 'app_shift_new', methods: ['GET', 'POST'])]
public function new(Request $request, DriverRepository $driverRepository, EntityManagerInterface $entityManager): Response
{
    // Get all drivers from the repository
    $drivers = $driverRepository->findAll();

    // Create a new Shift entity
    $shift = new Shift();

    // Create the form and pass the drivers as an option
    $form = $this->createForm(ShiftType::class, $shift, [
        'drivers' => $drivers,  // Pass the list of drivers to the form
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Use the injected EntityManagerInterface to persist and flush the entity
        $entityManager->persist($shift);
        $entityManager->flush();

        // Redirect after successful form submission
        return $this->redirectToRoute('app_shift_index');
    }

    return $this->render('shift/new.html.twig', [
        'form' => $form->createView(),
    ]);
}


    #[Route('/shift/{id}/edit', name: 'app_shift_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Shift $shift, DriverRepository $driverRepository, EntityManagerInterface $entityManager): Response
    {
        $drivers = $driverRepository->findAll();
        $form = $this->createForm(ShiftType::class, $shift, [
            'drivers' => $drivers,
        ]);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_shift_index');
        }

        return $this->render('shift/edit.html.twig', [
            'shift' => $shift,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/shift/{id}', name: 'app_shift_delete', methods: ['POST'])]
    public function delete(Request $request, Shift $shift, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $shift->getId(), $request->get('_token'))) {
            $entityManager->remove($shift);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_shift_index');
    }

    #[Route('/api/shifts', name: 'api_shifts', methods: ['GET'])]
public function getShifts(Request $request, ShiftRepository $shiftRepository): JsonResponse
{
    $driverId = $request->query->get('driver_id');
    $shifts = $driverId ? $shiftRepository->findBy(['driver' => $driverId]) : $shiftRepository->findAll();
    
    $events = [];
    foreach ($shifts as $shift) {
        $color = match ($shift->getType()) {
            'Morning' => '#28a745',    // green
            'Night' => '#007bff',      // blue
            'Evening' => '#ffc107',    // yellow
            default => '#6c757d',      // gray
        };
        
        $events[] = [
            'id' => $shift->getId(),
            'title' => ($shift->getDriver() ? $shift->getDriver()->getName() : 'Unknown') . ' - ' . $shift->getType(),
            'start' => $shift->getStartTime()->format('Y-m-d\TH:i:s'),
            'end' => $shift->getEndTime()->format('Y-m-d\TH:i:s'),
            'description' => 'Driver: ' . $shift->getDriver()?->getName(),
            'color' => $color, // ✅ include the color in the response
        ];
    }
    
    return new JsonResponse($events);
}

    #[Route('/calendar', name: 'calendarss')]
    public function calendar(): Response
    {
        return $this->render('shift/calendar.html.twig');
    } 
    
}
