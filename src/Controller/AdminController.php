<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\ReclamationRepository;
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
    private $passwordHasher;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserRepository $userRepository,
        ReclamationRepository $reclamationRepository,
        UserPasswordHasherInterface $passwordHasher
    ) {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
        $this->reclamationRepository = $reclamationRepository;
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/', name: 'app_admin_dashboard')]
    public function dashboard(): Response
    {
        // Get user statistics
        $stats = [
            'users' => [
                'total' => $this->userRepository->count([]),
                'admin' => $this->userRepository->count(['role' => 'ADMIN']),
                'driver' => $this->userRepository->count(['role' => 'DRIVER']),
                'banned' => $this->userRepository->count(['isBanned' => true]),
            ],
            'claims' => [
                'total' => $this->reclamationRepository->count([]),
                'pending' => $this->reclamationRepository->count(['status' => 'pending']),
                'resolved' => $this->reclamationRepository->count(['status' => 'resolved']),
                'rejected' => $this->reclamationRepository->count(['status' => 'rejected']),
            ],
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
        $role = $request->query->get('role');
        $query = $request->query->get('q');

        // Get users based on filters
        if ($query) {
            $users = $this->userRepository->searchUsers($query);
            $total = count($users);
            // Apply manual pagination
            $users = array_slice($users, ($page - 1) * $limit, $limit);
        } elseif ($role) {
            $criteria = ['role' => strtoupper($role)];
            $total = $this->userRepository->count($criteria);
            $users = $this->userRepository->findBy($criteria, ['lastName' => 'ASC'], $limit, ($page - 1) * $limit);
        } else {
            $criteria = [];
            $total = $this->userRepository->count($criteria);
            $users = $this->userRepository->findBy($criteria, ['lastName' => 'ASC'], $limit, ($page - 1) * $limit);
        }

        $stats = [
            'total' => $this->userRepository->count([]),
            'admin' => $this->userRepository->count(['role' => 'ADMIN']),
            'driver' => $this->userRepository->count(['role' => 'DRIVER']),
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
            $user->setRole($request->request->get('role'));

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
                $user->setRole($newRole);
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
            $user = new User();
            $user->setFirstName($request->request->get('firstName'));
            $user->setLastName($request->request->get('lastName'));
            $user->setEmail($request->request->get('email'));
            $user->setRole($request->request->get('role', 'USER'));
            
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
        
        return $this->render('admin/create_user.html.twig');
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
