<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route("/", name: "homepage")]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html');
    }

    #[Route("/courses", name: "courses")]
    public function courses(): Response
    {
        return $this->render('courses.html');
    }

    #[Route("/trainers", name: "trainers")]
    public function trainers(): Response
    {
        return $this->render('trainers.html');
    }

    #[Route("/events", name: "events")]
    public function events(): Response
    {
        return $this->render('events.html');
    }

    #[Route("/pricing", name: "pricing")]
    public function pricing(): Response
    {
        return $this->render('pricing.html');
    }
    #[Route("/contact", name: "contact")]
    public function contact(): Response
    {
        return $this->render('contact.html');
    }
}
