<?php
// src/Controller/DashboardController.php

namespace App\Controller;

use App\Repository\TransportRepository;
use App\Repository\DriverRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(TransportRepository $transportRepository, DriverRepository $driverRepository): Response
    {
        // Count total transports
        $transportCount = $transportRepository->count([]);

        // Count available transports
        $availableTransportCount = $transportRepository->count(['disponibility' => true]);

        // Count total drivers
        $driverCount = $driverRepository->count([]);

        // Count assigned drivers (drivers who have a transport assigned)
        $assignedDriverCount = $driverRepository->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->where('d.transport IS NOT NULL')
            ->getQuery()
            ->getSingleScalarResult();

        // Fetch recent transports (limit to 5)
        $recentTransports = $transportRepository->findBy([], ['id' => 'DESC'], 5);

        return $this->render('dashboard/index.html.twig', [
            'transport_count' => $transportCount,
            'available_transport_count' => $availableTransportCount,
            'driver_count' => $driverCount,
            'assigned_driver_count' => $assignedDriverCount,
            'recent_transports' => $recentTransports,
        ]);
    }
}
