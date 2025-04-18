<?php

namespace App\Controller\Back;

use App\Entity\EventRegistration;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/event/registrationback')]
final class EventRegistrationBackController extends AbstractController
{
    #[Route('/registration', name: 'app_event_registration_back_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Check if user has admin role
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Only administrators can access this page.');
        }
        
        // Get all event registrations
        $eventRegistrations = $entityManager
            ->getRepository(EventRegistration::class)
            ->findAll();
        
        return $this->render('event_registration/back/index.html.twig', [
            'event_registrations' => $eventRegistrations,
            'is_admin' => true
        ]);
    }
}

