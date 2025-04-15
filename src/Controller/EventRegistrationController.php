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

#[Route('/event/registration')]
final class EventRegistrationController extends AbstractController
{
    #[Route('/', name: 'app_event_registration_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $registrations = $entityManager->getRepository(EventRegistration::class)
            ->findAllWithEvent();

        return $this->render('event_registration/index.html.twig', [
            'event_registrations' => $registrations
        ]);
    }

    #[Route('/new', name: 'app_event_registration_new_no_event', methods: ['GET'])]
    public function newWithoutEvent(EntityManagerInterface $entityManager): Response
    {
        $events = $entityManager->getRepository(Event::class)->findUpcomingEvents();

        return $this->render('event_registration/select_event.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/new/{eventId<\d+>}', name: 'app_event_registration_new', methods: ['GET', 'POST'])]
    public function new(int $eventId, Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = $entityManager->getRepository(Event::class)->find($eventId);
        
        if (!$event) {
            throw new NotFoundHttpException('Event not found.');
        }

        $eventRegistration = new EventRegistration();
        $eventRegistration->setEvent($event);

        $form = $this->createForm(EventRegistrationType::class, $eventRegistration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventRegistration->setStatus('Pending');
            $entityManager->persist($eventRegistration);
            $entityManager->flush();

            return $this->redirectToRoute('app_event_registration_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event_registration/new.html.twig', [
            'form' => $form->createView(),
            'event' => $event
        ]);
    }

    // Keep show, edit, and delete actions the same as before
    #[Route('/{id}/pdf', name: 'app_event_registration_pdf', methods: ['GET'])]
    public function generatePdf(int $id, EntityManagerInterface $entityManager, PdfGenerator $pdfGenerator): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);

        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event registration not found');
        }

        return $pdfGenerator->generate('event_registration/pdf.html.twig', [
            'event_registration' => $eventRegistration,
        ]);
    }
    #[Route('/{id<\d+>}', name: 'app_event_registration_show', methods: ['GET'])]
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

    #[Route('/{id}/edit', name: 'app_event_registration_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);

        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event Registration not found');
        }

        $form = $this->createForm(EventRegistrationType::class, $eventRegistration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventRegistration->setStatus('Pending');
            $entityManager->flush();

            return $this->redirectToRoute('app_event_registration_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event_registration/edit.html.twig', [
            'event_registration' => $eventRegistration,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_registration_delete', methods: ['POST'])]
    public function delete(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);

        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event Registration not found');
        }

        if ($this->isCsrfTokenValid('delete'.$eventRegistration->getId(), $request->request->get('_token'))) {
            $entityManager->remove($eventRegistration);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_event_registration_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/qrcode', name: 'app_event_registration_qrcode', methods: ['GET'])]
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