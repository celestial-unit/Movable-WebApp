<?php

namespace App\Security;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class AuthenticationEntryPoint implements AuthenticationEntryPointInterface
{
    use TargetPathTrait;

    private UrlGeneratorInterface $urlGenerator;
    private LoggerInterface $logger;
    private RequestStack $requestStack;

    public function __construct(
        UrlGeneratorInterface $urlGenerator,
        LoggerInterface $logger,
        RequestStack $requestStack
    ) {
        $this->urlGenerator = $urlGenerator;
        $this->logger = $logger;
        $this->requestStack = $requestStack;
    }

    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        $this->logAuthenticationFailure($request, $authException);

        $session = $this->requestStack->getSession();
        $flashBag = $session->getFlashBag();
        $pathInfo = $request->getPathInfo();
        $targetPath = $request->getUri();

        // Save the intended URL for redirection after login
        if (!$this->isAuthPage($pathInfo)) {
            $this->saveTargetPath($session, 'main', $targetPath);
        }

        // Handle banned users
        if ($authException && str_contains(strtolower($authException->getMessage()), 'banned')) {
            $flashBag->add('error', 'Your account has been banned. Please contact support for assistance.');
            return new RedirectResponse($this->urlGenerator->generate('app_front_home'));
        }

        // Route-specific flash messages
        $flashBag->add(...$this->getFlashMessageForPath($pathInfo));

        return new RedirectResponse($this->urlGenerator->generate('app_login', [
            'redirect' => $targetPath
        ]));
    }

    private function logAuthenticationFailure(Request $request, ?AuthenticationException $authException): void
    {
        $this->logger->info('Authentication required for: ' . $request->getPathInfo(), [
            'exception'   => $authException ? $authException->getMessage() : 'No authentication provided',
            'ip'          => $request->getClientIp(),
            'user_agent'  => $request->headers->get('User-Agent'),
        ]);
    }

    private function isAuthPage(string $path): bool
    {
        return str_contains($path, '/login') || str_contains($path, '/register');
    }

    private function getFlashMessageForPath(string $path): array
    {
        return match (true) {
            str_starts_with($path, '/dashboard'),
            str_starts_with($path, '/user'),
            str_starts_with($path, '/claims') => ['info', 'Please log in to access your dashboard.'],

            str_starts_with($path, '/admin') => ['warning', 'Administrative access requires authentication.'],

            default => ['info', 'Authentication is required to access this resource.']
        };
    }
}
