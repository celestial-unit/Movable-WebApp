<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\DriverRepository;

class DriverController extends AbstractController
{
    #[Route('/drivers', name: 'driver_index', methods: ['GET'])]
    public function index(DriverRepository $driverRepository): Response
    {
        return $this->render('driver/driver.html.twig', [
            'drivers' => $driverRepository->findAll(),
        ]);
    }
}
