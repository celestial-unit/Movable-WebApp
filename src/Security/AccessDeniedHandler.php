<?php

namespace App\Security;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    private UrlGeneratorInterface $urlGenerator;
    private LoggerInterface $logger;
    private RequestStack $requestStack;
    private TokenStorageInterface $tokenStorage;
    private Security $security;

    public function __construct(
        UrlGeneratorInterface $urlGenerator,
        LoggerInterface $logger,
        RequestStack $requestStack,
        TokenStorageInterface $tokenStorage,
        Security $security
    ) {
        $this->urlGenerator = $urlGenerator;
        $this->logger = $logger;
        $this->requestStack = $requestStack;
        $this->tokenStorage = $tokenStorage;
        $this->security = $security;
    }

    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        // Get the current user information if available
        $token = $this->tokenStorage->getToken();
        $user = $token?->getUser();
        $userId = $user ? (method_exists($user, 'getId') ? $user->getId() : $user->getUserIdentifier()) : 'anonymous';

        // Log the access denied incident
        $this->logger->warning('Access denied to resource: ' . $request->getPathInfo(), [
            'exception' => $accessDeniedException->getMessage(),
            'user' => $userId,
            'ip' => $request->getClientIp(),
            'roles' => $token ? $token->getRoleNames() : []
        ]);

        // Get the session and add appropriate flash message
        $session = $this->requestStack->getSession();
        $flashBag = $session->getFlashBag();

        // Determine message based on the path and user status
        $pathInfo = $request->getPathInfo();
        
        if (str_starts_with($pathInfo, '/admin')) {
            $flashBag->add('error', 'You do not have administrative privileges to access this resource.');
            
            // If authenticated but not admin, send to dashboard
            if ($this->security->isGranted('ROLE_USER')) {
                return new RedirectResponse($this->urlGenerator->generate('app_dashboard'));
            }
            
            // If not authenticated, send to login
            return new RedirectResponse($this->urlGenerator->generate('app_login', [
                'redirect' => $request->getUri()
            ]));
        } 
        elseif (str_starts_with($pathInfo, '/dashboard') || str_starts_with($pathInfo, '/user') || str_starts_with($pathInfo, '/claims')) {
            $flashBag->add('error', 'You need to log in to access this resource.');
            return new RedirectResponse($this->urlGenerator->generate('app_login', [
                'redirect' => $request->getUri()
            ]));
        }
        
        // For other restricted areas, add generic message and redirect to homepage
        $flashBag->add('error', 'You do not have permission to access the requested resource.');
        return new RedirectResponse($this->urlGenerator->generate('app_front_home'));
    }
}

