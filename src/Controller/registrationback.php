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
final class registrationback extends AbstractController
{
    #[Route('/registration', name: 'app_eventback_registration_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $registrations = $entityManager->getRepository(EventRegistration::class)
            ->findAllWithEvent();

        return $this->render('event_registration/eventregistrationback.html.twig', [
            'event_registrations' => $registrations
        ]);
    }

    #[Route('/newbackregistration', name: 'app_eventback_registration_new_no_event', methods: ['GET'])]
    public function newWithoutEvent(EntityManagerInterface $entityManager): Response
    {
        $events = $entityManager->getRepository(Event::class)->findUpcomingEvents();

        return $this->render('event_registration/select_event.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/newback/{eventId<\d+>}', name: 'app_eventback_registration_new', methods: ['GET', 'POST'])]
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
            $entityManager->persist($eventRegistration);
            $entityManager->flush();

            return $this->redirectToRoute('app_eventback_registration_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event_registration/new1.html.twig', [
            'form' => $form->createView(),
            'event' => $event
        ]);
    }

    // Keep show, edit, and delete actions the same as before

    #[Route('/back/{id}', name: 'app_eventback_registration_show', methods: ['GET'])]
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

    #[Route('/{id}/editback', name: 'app_eventback_registration_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $eventRegistration = $entityManager->getRepository(EventRegistration::class)->find($id);

        if (!$eventRegistration) {
            throw $this->createNotFoundException('Event Registration not found');
        }

        $form = $this->createForm(EventRegistrationType::class, $eventRegistration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_eventback_registration_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event_registration/edit1.html.twig', [
            'event_registration' => $eventRegistration,
            'form' => $form,
        ]);
    }

    #[Route('/back/{id}', name: 'app_eventback_registration_delete', methods: ['POST'])]
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

        return $this->redirectToRoute('app_eventback_registration_index', [], Response::HTTP_SEE_OTHER);
    }
}