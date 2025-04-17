<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\EventRegistration;
use App\Form\EventRegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

#[Route('/event/registrationback')]
final class EventRegistrationBackOfficeController extends AbstractController
{
    #[Route('/', name: 'app_eventback_registration_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Use standard findAll method if the custom repository method is not available
        try {
            $registrations = $entityManager->getRepository(EventRegistration::class)
                ->findAllWithEvent();
        } catch (\Exception $e) {
            // Fallback to standard method
            $registrations = $entityManager->getRepository(EventRegistration::class)
                ->findAll();
        }

        return $this->render('event_registration/eventregistrationback.html.twig', [
            'event_registrations' => $registrations
        ]);
    }

    #[Route('/select-event', name: 'app_eventback_registration_new_no_event', methods: ['GET'])]
    public function newWithoutEvent(EntityManagerInterface $entityManager): Response
    {
        $today = new \DateTime('today');
        $events = $entityManager->getRepository(Event::class)->createQueryBuilder('e')
            ->where('e.dateevent >= :today')
            ->setParameter('today', $today->format('Y-m-d'))
            ->orderBy('e.dateevent', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->render('event_registration/select_event.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/new/{eventId<\d+>}', name: 'app_eventback_registration_new', methods: ['GET', 'POST'])]
    public function new(int $eventId, Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = $entityManager->getRepository(Event::class)->find($eventId);
        
        if (!$event) {
            throw new NotFoundHttpException('Event not found.');
        }

        $eventRegistration = new EventRegistration();
        $eventRegistration->setEvent($event);
        
        // Set default status for new admin registrations
        $eventRegistration->setStatus('Confirmed');
        
        // Set current date/time as registration date (passing DateTime object)
        $eventRegistration->setRegistrationDate(new \DateTime('now'));

        // Create form with admin features enabled
        $form = $this->createForm(EventRegistrationType::class, $eventRegistration, [
            'is_admin' => true // Enable admin features
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // No need to modify registration_date as it's set above
                // Status and user will be set from form data automatically
                $entityManager->persist($eventRegistration);
                $entityManager->flush();
                
                $this->addFlash('success', 'Registration created successfully.');
                return $this->redirectToRoute('app_eventback_registration_index', [], Response::HTTP_SEE_OTHER);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Error creating registration: ' . $e->getMessage());
            }
        }

        return $this->render('event_registration/new1.html.twig', [
            'form' => $form,
            'event' => $event
        ]);
    }

    #[Route('/view/{id}', name: 'app_eventback_registration_show', methods: ['GET'])]
    public function show(int $id, EntityManagerInterface $entityManager): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);

        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event Registration not found');
        }

        return $this->render('event_registration/show1.html.twig', [
            'event_registration' => $eventRegistration,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_eventback_registration_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);

        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event Registration not found');
        }

        $form = $this->createForm(EventRegistrationType::class, $eventRegistration, [
            'is_admin' => true // Explicitly set is_admin to true for admin forms
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Event registration updated successfully!');
                return $this->redirectToRoute('app_eventback_registration_index', [], Response::HTTP_SEE_OTHER);
            } catch (\Exception $e) {
                $this->addFlash('error', 'An error occurred while updating the registration: ' . $e->getMessage());
            }
        }

        return $this->render('event_registration/edit1.html.twig', [
            'event_registration' => $eventRegistration,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_eventback_registration_delete', methods: ['POST'])]
    public function delete(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);

        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event Registration not found');
        }

        if ($this->isCsrfTokenValid('delete'.$eventRegistration->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($eventRegistration);
                $entityManager->flush();
                $this->addFlash('success', 'Event registration deleted successfully!');
            } catch (\Exception $e) {
                $this->addFlash('error', 'An error occurred while deleting the registration: ' . $e->getMessage());
            }
        }

        return $this->redirectToRoute('app_eventback_registration_index', [], Response::HTTP_SEE_OTHER);
    }
}

