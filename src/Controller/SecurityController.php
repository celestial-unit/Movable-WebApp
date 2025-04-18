<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SecurityController extends AbstractController
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

    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        
        // Last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // This method is intentionally empty because the logout is handled by Symfony's security system
        // The controller will never be executed
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route('/forgot-password', name: 'app_forgot_password')]
    public function forgotPassword(
        Request $request,
        UserRepository $userRepository,
        TokenGeneratorInterface $tokenGenerator,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $user = $userRepository->findOneBy(['email' => $email]);
            
            // Check if user exists
            if (!$user) {
                $this->addFlash('danger', 'No account found with this email.');
                return $this->redirectToRoute('app_forgot_password');
            }

            // Generate a reset token
            $token = $tokenGenerator->generateToken();
            $user->setResetToken($token);
            $user->setResetTokenExpiresAt(new \DateTime('+1 hour'));
            
            $entityManager->persist($user);
            $entityManager->flush();
            
            // Generate a reset link with token
            $resetUrl = $this->generateUrl(
                'app_reset_password',
                ['token' => $token],
                UrlGeneratorInterface::ABSOLUTE_URL
            );
            
            // Send reset password email
            $email = (new Email())
                ->from('noreply@movable.com')
                ->to($user->getEmail())
                ->subject('Password Reset Request')
                ->html(
                    $this->renderView('security/emails/reset_password.html.twig', [
                        'resetUrl' => $resetUrl,
                        'user' => $user,
                    ])
                );
            
            $mailer->send($email);
            
            $this->addFlash('success', 'A password reset link has been sent to your email.');
            return $this->redirectToRoute('app_login');
        }
        
        return $this->render('security/forgot_password.html.twig');
    }
    
    #[Route('/reset-password/{token}', name: 'app_reset_password')]
    public function resetPassword(
        Request $request,
        string $token,
        UserRepository $userRepository,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        // Find user by reset token
        $user = $userRepository->findOneBy(['resetToken' => $token]);
        
        // Check if token is valid and not expired
        if (!$user || $user->getResetTokenExpiresAt() < new \DateTime()) {
            $this->addFlash('danger', 'Invalid or expired reset token.');
            return $this->redirectToRoute('app_forgot_password');
        }
        
        // Handle form submission
        if ($request->isMethod('POST')) {
            $password = $request->request->get('password');
            $confirmPassword = $request->request->get('confirm_password');
            
            if ($password !== $confirmPassword) {
                $this->addFlash('danger', 'Passwords do not match.');
                return $this->redirectToRoute('app_reset_password', ['token' => $token]);
            }
            
            // Update user's password
            $hashedPassword = $passwordHasher->hashPassword($user, $password);
            $user->setPassword($hashedPassword);
            
            // Clear reset token
            $user->setResetToken(null);
            $user->setResetTokenExpiresAt(null);
            
            $entityManager->persist($user);
            $entityManager->flush();
            
            $this->addFlash('success', 'Your password has been reset successfully. You can now login.');
            return $this->redirectToRoute('app_login');
        }
        
        return $this->render('security/reset_password.html.twig', [
            'token' => $token
        ]);
    }

    #[Route('/check-banned', name: 'app_check_banned')]
    public function checkBannedStatus(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user) {
            return new Response(json_encode(['banned' => false]));
        }
        
        $isBanned = $user->isBanned();
        
        if ($isBanned) {
            $this->container->get('security.token_storage')->setToken(null);
            $this->container->get('session')->invalidate();
            
            $response = [
                'banned' => true,
                'reason' => $user->getBanReason(),
                'expiry' => $user->getBanExpiryDate() ? $user->getBanExpiryDate()->format('Y-m-d H:i:s') : null
            ];
        } else {
            $response = ['banned' => false];
        }
        
        return new Response(json_encode($response));
    }

    #[Route('/update-last-login', name: 'app_update_last_login')]
    public function updateLastLogin(Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if ($user && $request->isXmlHttpRequest()) {
            $user->setLastLogin(new \DateTime());
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            
            return new Response(json_encode(['success' => true]));
        }
        
        return new Response(json_encode(['success' => false]));
    }
}

