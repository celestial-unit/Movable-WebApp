<?php
// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Event;
use Doctrine\ORM\EntityManagerInterface;


class HomeController extends AbstractController
{
    #[Route('/back', name: 'home')]
    public function index(): Response
    {
        return $this->render('index1.html.twig');
    }
    #[Route('/eventback', name: 'event_page')]
    public function events(EntityManagerInterface $entityManager): Response
    {
        $events = $entityManager->getRepository(Event::class)->findAll();
    
        return $this->render('event/eventback.html.twig', [
            'events' => $events,
        ]);
    
}
}