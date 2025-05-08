<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class HomeController extends AbstractController
{
    private $userRepository;
    private $reclamationRepository;

    public function __construct(
        UserRepository $userRepository,
        ReclamationRepository $reclamationRepository
    ) {
        $this->userRepository = $userRepository;
        $this->reclamationRepository = $reclamationRepository;
    }

    #[Route('/', name: 'app_front_home')]
    public function index(): Response
    {
        $user = $this->getUser();
        
        // Show the homepage for all users - don't redirect
        return $this->render('front/home/index.html.twig', [
            'is_logged_in' => $user !== null
        ]);
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    #[IsGranted('ROLE_USER')]
    public function dashboard(): Response
    {
        $user = $this->getUser();
        
        // If not logged in, redirect to login
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        // For admin users
        if ($this->isGranted('ROLE_ADMIN')) {
            $stats = [
                'total_users' => $this->userRepository->count([]),
                'total_claims' => $this->reclamationRepository->count([]),
                'pending_claims' => $this->reclamationRepository->count(['status' => 'Pending']),
                'resolved_claims' => $this->reclamationRepository->count(['status' => 'Resolved'])
            ];
            
            return $this->render('admin/dashboard.html.twig', [
                'stats' => $stats
            ]);
        }
        
        // For regular users
        $stats = [
            'my_claims' => $this->reclamationRepository->count(['user' => $user]),
            'pending_claims' => $this->reclamationRepository->count(['user' => $user, 'status' => 'Pending']),
            'resolved_claims' => $this->reclamationRepository->count(['user' => $user, 'status' => 'Resolved'])
        ];
        
        return $this->render('user/dashboard.html.twig', [
            'stats' => $stats
        ]);
    }
}
