<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class UserController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private UserRepository $userRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserRepository $userRepository
    ) {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
    }


    #[Route("/user/profile", name: "app_user_profile", methods: ['GET', 'POST'])]
    public function profile(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute("app_login");
        }
        
        if ($request->isMethod('POST')) {
            $form = $request->request->get('form');
            
            if ($form === 'profile') {
                // Update profile information
                $user->setFirstName($request->request->get('firstName'));
                $user->setLastName($request->request->get('lastName'));
                $user->setEmail($request->request->get('email'));
                
                $this->entityManager->flush();
                $this->addFlash('success', 'Profile updated successfully.');
                
            } elseif ($form === 'password') {
                // Handle password change
                $currentPassword = $request->request->get('currentPassword');
                $newPassword = $request->request->get('newPassword');
                $confirmPassword = $request->request->get('confirmPassword');
                
                if (!$passwordHasher->isPasswordValid($user, $currentPassword)) {
                    $this->addFlash('error', 'Current password is incorrect.');
                } elseif ($newPassword !== $confirmPassword) {
                    $this->addFlash('error', 'New passwords do not match.');
                } elseif (strlen($newPassword) < 6) {
                    $this->addFlash('error', 'New password must be at least 6 characters long.');
                } else {
                    $user->setPassword($passwordHasher->hashPassword($user, $newPassword));
                    $this->entityManager->flush();
                    $this->addFlash('success', 'Password changed successfully.');
                }
            }
            
            return $this->redirectToRoute('app_user_profile');
        }
        
        return $this->render("user/profile.html.twig", [
            "user" => $user
        ]);
    }

    #[Route("/user/settings", name: "app_user_settings")]
    public function settings(Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute("app_login");
        }
        
        return $this->render("user/settings.html.twig", [
            "user" => $user
        ]);
    }

    #[Route("/user/{id}", name: "app_user_view", requirements: ["id" => "\d+"])]
    public function view(User $user): Response
    {
        // Only allow viewing other profiles for admins or the user themselves
        if ($user !== $this->getUser() && !$this->isGranted("ROLE_ADMIN")) {
            throw new AccessDeniedException("You cannot view this user profile.");
        }
        
        return $this->render("user/view.html.twig", [
            "user" => $user
        ]);
    }
}