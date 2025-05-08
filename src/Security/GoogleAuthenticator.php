<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Security\Authenticator\OAuth2Authenticator;
use League\OAuth2\Client\Provider\GoogleUser;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;

class GoogleAuthenticator extends OAuth2Authenticator implements AuthenticationEntryPointInterface
{
    private ClientRegistry $clientRegistry;
    private EntityManagerInterface $entityManager;
    private RouterInterface $router;
    private UserRepository $userRepository;

    public function __construct(
        ClientRegistry $clientRegistry,
        EntityManagerInterface $entityManager,
        RouterInterface $router,
        UserRepository $userRepository
    ) {
        $this->clientRegistry = $clientRegistry;
        $this->entityManager = $entityManager;
        $this->router = $router;
        $this->userRepository = $userRepository;
    }

    public function supports(Request $request): ?bool
    {
        // Continue only if the route matches our expected callback route
        return $request->attributes->get('_route') === 'connect_google_check' 
            && $request->isMethod('GET');
    }

    public function authenticate(Request $request): Passport
    {
        $client = $this->clientRegistry->getClient('google');
        $accessToken = $this->fetchAccessToken($client);

        return new SelfValidatingPassport(
            new UserBadge($accessToken->getToken(), function() use ($accessToken, $client) {
                /** @var GoogleUser $googleUser */
                $googleUser = $client->fetchUserFromToken($accessToken);

                // Check if user exists by googleId
                $existingUser = $this->userRepository->findOneBy(['googleId' => $googleUser->getId()]);

                // If user doesn't exist with googleId, try to find by email
                if (!$existingUser) {
                    $existingUser = $this->userRepository->findOneBy(['email' => $googleUser->getEmail()]);
                }

                // Create new user if doesn't exist
                if (!$existingUser) {
                    $existingUser = new User();
                    $existingUser->setEmail($googleUser->getEmail());
                    // Generate a random password for Google users
                    $existingUser->setPassword(
                        password_hash(bin2hex(random_bytes(16)), PASSWORD_BCRYPT)
                    );
                    $existingUser->setFirstName($googleUser->getFirstName() ?? '');
                    $existingUser->setLastName($googleUser->getLastName() ?? '');
                    $existingUser->setRole('USER');
                }

                // Update or add Google ID to the user
                $existingUser->setGoogleId($googleUser->getId());
                
                // Set user's avatar if available
                if (method_exists($googleUser, 'getAvatar')) {
                    $existingUser->setAvatar($googleUser->getAvatar());
                }

                // Update last login
                $existingUser->setLastLogin(new \DateTime());

                // Save the user
                $this->entityManager->persist($existingUser);
                $this->entityManager->flush();

                return $existingUser;
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // Redirect to dashboard or homepage on successful login
        return new RedirectResponse($this->router->generate('app_front_home'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $message = strtr($exception->getMessageKey(), $exception->getMessageData());

        return new Response($message, Response::HTTP_FORBIDDEN);
    }

    /**
     * Called when authentication is needed, but it's not sent.
     * This redirects to the 'login' route.
     */
    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        return new RedirectResponse(
            $this->router->generate('app_login'),
            Response::HTTP_TEMPORARY_REDIRECT
        );
    }
}

