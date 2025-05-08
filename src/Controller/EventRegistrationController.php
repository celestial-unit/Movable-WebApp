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
use App\Service\PdfGenerator;
use Endroid\QrCode\Builder\Builder;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;

// We're not using a class-level route prefix to allow mixed route patterns
final class EventRegistrationController extends AbstractController
{
    #[Route('/event/registration/', name: 'app_event_registration_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $isAdmin = in_array('ROLE_ADMIN', $user->getRoles());
        
        // Get registrations based on user role
        if ($isAdmin) {
            $eventRegistrations = $entityManager
                ->getRepository(EventRegistration::class)
                ->findAll();
        } else {
            $eventRegistrations = $entityManager
                ->getRepository(EventRegistration::class)
                ->findBy(['user' => $user]);
        }

        return $this->render('event_registration/index.html.twig', [
            'event_registrations' => $eventRegistrations,
            'is_admin' => $isAdmin
        ]);
    }

    #[Route('/event/registration/new/{eventId<\d+>}', name: 'app_event_registration_new', methods: ['GET', 'POST'])]
    public function new(int $eventId, Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = $entityManager->getRepository(Event::class)->find($eventId);
        
        if (!$event) {
            throw new NotFoundHttpException('Event not found.');
        }
        
        // Get the current user
        $user = $this->getUser();
        if (!$user) {
            // Redirect to login if not logged in
            return $this->redirectToRoute('app_login');
        }

        // Check if user is an admin
        $isAdmin = $this->isGranted('ROLE_ADMIN');
        
        // Check if user already registered for this event (skip for admins)
        if (!$isAdmin) {
            $existingRegistration = $entityManager->getRepository(EventRegistration::class)
                ->findOneBy([
                    'event' => $event,
                    'user' => $user
                ]);

            if ($existingRegistration) {
                $this->addFlash('error', 'You have already registered for this event.');
                return $this->redirectToRoute('app_event_index');
            }
        }

        $eventRegistration = new EventRegistration();
        $eventRegistration->setEvent($event);
        $eventRegistration->setUser($user);
        
        // Set current date/time as registration date (passing DateTime object directly)
        $eventRegistration->setRegistrationDate((new \DateTime('now'))->format('Y-m-d'));
        $eventRegistration->setStatus('Pending');

        $form = $this->createForm(EventRegistrationType::class, $eventRegistration, [
            'is_admin' => false // Explicitly set is_admin to false for regular users
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($eventRegistration);
                $entityManager->flush();
                $this->addFlash('success', 'Registration submitted successfully!');
                return $this->redirectToRoute('app_event_registration_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'An error occurred while processing your registration.');
            }
        }

        return $this->render('event_registration/new.html.twig', [
            'form' => $form->createView(),
            'event' => $event
        ]);
    }

    #[Route('/event/registration/admin/new/{eventId<\d+>}', name: 'app_event_registration_new_admin', methods: ['GET', 'POST'])]
    public function newAdmin(int $eventId, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Check if user has admin role
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Only administrators can access this page.');
        }

        $event = $entityManager->getRepository(Event::class)->find($eventId);
        
        if (!$event) {
            throw new NotFoundHttpException('Event not found.');
        }

        $eventRegistration = new EventRegistration();
        $eventRegistration->setEvent($event);
        
        // Set current date/time as registration date (passing DateTime object directly)
        $eventRegistration->setRegistrationDate((new \DateTime())->format('Y-m-d'));

        // For admin registrations, default to 'Confirmed' status
        $eventRegistration->setStatus('Confirmed');

        $form = $this->createForm(EventRegistrationType::class, $eventRegistration, [
            'is_admin' => true
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($eventRegistration);
                $entityManager->flush();
                $this->addFlash('success', 'Registration created successfully!');
                return $this->redirectToRoute('app_eventback_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'An error occurred while creating the registration.');
            }
        }

        return $this->render('event_registration/newback.html.twig', [
            'form' => $form->createView(),
            'event' => $event,
            'is_admin' => true
        ]);
    }

    // Keep show, edit, and delete actions the same as before
    #[Route('/event/registration/{id}/pdf', name: 'app_event_registration_pdf', methods: ['GET'])]
    public function generatePdf(int $id, EntityManagerInterface $entityManager, PdfGenerator $pdfGenerator): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);
    
        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event registration not found');
        }
    
        $event = $eventRegistration->getEvent();
        $user = $eventRegistration->getUser();
    
        // Handle nullable user
        $userName = $user ? $user->getFirstName().' '.$user->getLastName() : 'Guest User';
        $userEmail = $user ? $user->getEmail() : 'N/A';
    
        // Convert string date to DateTime object
        $eventDate = \DateTime::createFromFormat('Y-m-d', $event->getDateevent());
        $registrationDate = \DateTime::createFromFormat('Y-m-d', $eventRegistration->getRegistrationDate());
    
        $pdfData = [
            'event' => [
                'title' => $event->getTitle(),
                'date' => $eventDate ? $eventDate->format('F j, Y') : 'N/A',
                'time' => $event->getStartEvent() ? $event->getStartEvent()->format('g:i A') : 'N/A',
                'location' => $event->getStatus(), // Based on your entity, status seems to store governorate
                'duration' => $event->getDuration().' minutes',
                'type' => $event->getType()
            ],
            'user' => [
                'name' => $userName,
                'email' => $userEmail,
            ],
            'registration' => [
                'id' => $eventRegistration->getId(),
                'date' => $registrationDate ? $registrationDate->format('F j, Y') : 'N/A',
                'status' => $eventRegistration->getStatus(),
            ],
            'qr_code_data' => sprintf(
                "EVENT TICKET\nID: %d\nEVENT: %s\nDATE: %s\nDURATION: %dmin\nATTENDEE: %s",
                $eventRegistration->getId(),
                $event->getTitle(),
                $eventDate ? $eventDate->format('Y-m-d H:i') : 'N/A',
                $event->getDuration(),
                $userName
            )
        ];
    
        return $pdfGenerator->generate('event_registration/pdf.html.twig', $pdfData);
    }
    #[Route('/event/registration/{id<\d+>}', name: 'app_event_registration_show', methods: ['GET'])]
    public function show(int $id, EntityManagerInterface $entityManager): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);

        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event Registration not found');
        }

        return $this->render('event_registration/show.html.twig', [
            'event_registration' => $eventRegistration,
        ]);
    }

    #[Route('/event/registration/{id}/edit', name: 'app_event_registration_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);

        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event Registration not found');
        }

        // Check if the user has permission to edit this registration
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $isAdmin = in_array('ROLE_ADMIN', $user->getRoles());
        if (!$isAdmin && $eventRegistration->getUser() !== $user) {
            throw $this->createAccessDeniedException('You cannot edit this registration.');
        }

        $form = $this->createForm(EventRegistrationType::class, $eventRegistration, [
            'is_admin' => $isAdmin // Pass user role information to the form
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Only admins can change status directly
                if (!$isAdmin) {
                    $eventRegistration->setStatus('Pending');
                }
                $entityManager->flush();
                $this->addFlash('success', 'Registration updated successfully!');
                return $this->redirectToRoute('app_event_registration_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'An error occurred while updating the registration.');
            }
        }

        return $this->render('event_registration/edit.html.twig', [
            'event_registration' => $eventRegistration,
            'form' => $form,
            'is_admin' => $isAdmin
        ]);
    }

    #[Route('/event/registration/{id}', name: 'app_event_registration_delete', methods: ['POST'])]
    public function delete(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);

        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event Registration not found');
        }
        
        // Check if the user has permission to delete this registration
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $isAdmin = in_array('ROLE_ADMIN', $user->getRoles());
        if (!$isAdmin && $eventRegistration->getUser() !== $user) {
            throw $this->createAccessDeniedException('You cannot delete this registration.');
        }

        if ($this->isCsrfTokenValid('delete'.$eventRegistration->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($eventRegistration);
                $entityManager->flush();
                $this->addFlash('success', 'Registration deleted successfully!');
            } catch (\Exception $e) {
                $this->addFlash('error', 'An error occurred while deleting the registration.');
            }
        }

        return $this->redirectToRoute('app_event_registration_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/event/registration/{id}/qrcode', name: 'app_event_registration_qrcode', methods: ['GET'])]
    public function qrCode(int $id, EntityManagerInterface $entityManager): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);
    
        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event registration not found');
        }
    
        // Format all details into a string
        $data = sprintf(
            "Registration ID: %d\nEvent: %s\nRegistration Date: %s\nStatus: %s",
            $eventRegistration->getId(),
            $eventRegistration->getEvent()->getTitle(),
            $eventRegistration->getRegistrationDate(),
            $eventRegistration->getStatus()
        );
    
        $result = Builder::create()
            ->data($data)
            ->size(300)
            ->margin(10)
            ->build();
            
        return new Response($result->getString(), 200, [
            'Content-Type' => $result->getMimeType(),
            'Content-Disposition' => (new ResponseHeaderBag())->makeDisposition(
                ResponseHeaderBag::DISPOSITION_INLINE,
                'qrcode.png'
            )
        ]);
    }
    
    
    
    
}
