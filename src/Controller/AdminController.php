<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\ReclamationRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    private $entityManager;
    private $userRepository;
    private $reclamationRepository;
    private $reservationRepository;
    private $passwordHasher;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserRepository $userRepository,
        ReclamationRepository $reclamationRepository,
        ReservationRepository $reservationRepository,
        UserPasswordHasherInterface $passwordHasher
    ) {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
        $this->reclamationRepository = $reclamationRepository;
        $this->reservationRepository = $reservationRepository;
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/', name: 'app_admin_dashboard')]
    public function dashboard(): Response
    {
        // Get user statistics
        $stats = [
            'users' => [
                'total' => $this->userRepository->count([]),
                'admin' => $this->userRepository->countByRole('ADMIN'),
                'driver' => $this->userRepository->countByRole('DRIVER'),
                'banned' => $this->userRepository->count(['isBanned' => true])
            ],
            'claims' => [
                'total' => $this->reclamationRepository->count([]),
                'pending' => $this->reclamationRepository->count(['status' => 'pending']),
                'resolved' => $this->reclamationRepository->count(['status' => 'resolved']),
                'rejected' => $this->reclamationRepository->count(['status' => 'rejected'])
            ],
            'reservations' => [
                'total' => $this->reservationRepository->count([]),
                'pending' => $this->reservationRepository->count(['status' => 'pending']),
                'approved' => $this->reservationRepository->count(['status' => 'approved']),
                'rejected' => $this->reservationRepository->count(['status' => 'rejected'])
            ]
        ];

        return $this->render('admin/dashboard.html.twig', [
            'stats' => $stats,
        ]);
    }

    #[Route('/users', name: 'app_admin_users')]
    public function users(Request $request): Response
    {
        $page = $request->query->getInt('page', 1);
        $limit = 10;
        $offset = ($page - 1) * $limit;
        
        // Get filter parameters
        $role = $request->query->get('role');
        $query = $request->query->get('q');

        // Convert role to database format if needed
        if ($role) {
            // Remove ROLE_ prefix if it exists, as database stores roles without prefix
            $role = str_replace('ROLE_', '', $role);
        }

        // Use the combined filter method
        [$users, $total] = $this->userRepository->findByFilters(
            $query,
            $role,
            $offset,
            $limit
        );
        $stats = [
            'total' => $this->userRepository->count([]),
            'admin' => $this->userRepository->countByRole('ADMIN'),
            'driver' => $this->userRepository->countByRole('DRIVER'),
            'banned' => $this->userRepository->count(['isBanned' => true]),
        ];

        return $this->render('admin/users.html.twig', [
            'users' => $users,
            'stats' => $stats,
            'currentPage' => $page,
            'total_pages' => ceil($total / $limit),
            'role' => $role,
            'query' => $query,
        ]);
    }

    #[Route('/users/{id}/edit', name: 'app_admin_user_edit', methods: ['GET', 'POST'])]
    public function editUser(Request $request, User $user): Response
    {
        if ($request->isMethod('POST')) {
            $user->setFirstName($request->request->get('firstName'));
            $user->setLastName($request->request->get('lastName'));
            $user->setEmail($request->request->get('email'));
            
            // Update user roles
            $role = $request->request->get('role');
            // Reset roles to just ROLE_USER
            $user->setRoles(['ROLE_USER']);
            
            // Add appropriate role based on selection
            if ($role === 'ADMIN') {
                $user->addRole('ROLE_ADMIN');
            } elseif ($role === 'DRIVER') {
                $user->addRole('ROLE_DRIVER');
            }
            // Handle password change if provided
            if ($password = $request->request->get('password')) {
                $hashedPassword = $this->passwordHasher->hashPassword($user, $password);
                $user->setPassword($hashedPassword);
            }

            // Handle status
            $user->setIsBanned($request->request->get('status') === 'banned');

            $this->entityManager->flush();
            $this->addFlash('success', 'User updated successfully.');

            return $this->redirectToRoute('app_admin_users');
        }

        return $this->render('admin/edit_user.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/users/{id}/ban', name: 'app_admin_user_ban', methods: ['GET', 'POST'])]
    public function banUser(Request $request, User $user): Response
    {
        if ($request->isMethod('POST')) {
            $user->setIsBanned(true);
            $user->setBanReason($request->request->get('banReason'));

            $duration = $request->request->get('banDuration');
            if ($duration !== 'permanent') {
                $expiryDate = new \DateTime();
                switch ($duration) {
                    case '24h': $expiryDate->modify('+24 hours'); break;
                    case '48h': $expiryDate->modify('+48 hours'); break;
                    case '7d': $expiryDate->modify('+7 days'); break;
                    case '30d': $expiryDate->modify('+30 days'); break;
                    case 'custom':
                        $days = $request->request->getInt('customDays', 0);
                        if ($days > 0) {
                            $expiryDate->modify("+$days days");
                        }
                        break;
                }
                $user->setBanExpiryDate($expiryDate);
            }

            $this->entityManager->flush();
            $this->addFlash('success', 'User has been banned.');

            return $this->redirectToRoute('app_admin_users');
        }

        return $this->render('admin/ban_user.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/users/{id}/unban', name: 'app_admin_user_unban')]
    public function unbanUser(User $user): Response
    {
        $user->setIsBanned(false);
        $user->setBanReason(null);
        $user->setBanExpiryDate(null);

        $this->entityManager->flush();
        $this->addFlash('success', 'User has been unbanned.');

        return $this->redirectToRoute('app_admin_users');
    }

    #[Route('/users/{id}/change-role', name: 'app_admin_user_change_role', methods: ['GET', 'POST'])]
    public function changeRole(Request $request, User $user): Response
    {
        if ($request->isMethod('POST')) {
            $newRole = $request->request->get('role');
            if (in_array($newRole, ['USER', 'ADMIN', 'DRIVER'])) {
                // Reset roles to just ROLE_USER
                $user->setRoles(['ROLE_USER']);
                
                // Add appropriate role based on selection
                if ($newRole === 'ADMIN') {
                    $user->addRole('ROLE_ADMIN');
                } elseif ($newRole === 'DRIVER') {
                    $user->addRole('ROLE_DRIVER');
                }
                
                $this->entityManager->flush();
                $this->addFlash('success', 'User role has been updated.');
                return $this->redirectToRoute('app_admin_users');
            }
        }

        return $this->render('admin/roles.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/users/create', name: 'app_admin_user_create', methods: ['GET', 'POST'])]
    public function createUser(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            // Check if email already exists
            $email = $request->request->get('email');
            $existingUser = $this->userRepository->findOneBy(['email' => $email]);
            
            if ($existingUser) {
                $this->addFlash('error', 'Email already exists. Please use a different email address.');
                return $this->render('admin/create_user.html.twig', [
                    'form_data' => $request->request->all()
                ]);
            }
            
            $user = new User();
            $user->setFirstName($request->request->get('firstName'));
            $user->setLastName($request->request->get('lastName'));
            $user->setEmail($email);
            
            // Set user roles based on selection
            $role = $request->request->get('role', 'USER');
            // Set default role to ROLE_USER
            $user->setRoles(['ROLE_USER']);
            
            // Add appropriate additional role if needed
            if ($role === 'ADMIN') {
                $user->addRole('ROLE_ADMIN');
            } elseif ($role === 'DRIVER') {
                $user->addRole('ROLE_DRIVER');
            }
            // Hash the password
            $hashedPassword = $this->passwordHasher->hashPassword(
                $user,
                $request->request->get('password')
            );
            $user->setPassword($hashedPassword);
            
            // Save the user
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            
            $this->addFlash('success', 'User created successfully.');
            return $this->redirectToRoute('app_admin_users');
        }
        

        return $this->render('admin/create_user.html.twig', [
            'form_data' => []
        ]);
    }

    #[Route('/banned-users', name: 'app_admin_banned_users')]
    public function bannedUsers(): Response
    {
        $users = $this->userRepository->findBy(['isBanned' => true]);

        return $this->render('admin/banned_users.html.twig', [
            'users' => $users,
        ]);
    }
}
