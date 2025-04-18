<?php

namespace App\EventSubscriber;

use App\Security\SessionAuthenticator;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SessionSubscriber implements EventSubscriberInterface
{
    private $sessionAuthenticator;
    private $security;
    private $urlGenerator;

    public function __construct(
        SessionAuthenticator $sessionAuthenticator,
        Security $security,
        UrlGeneratorInterface $urlGenerator
    ) {
        $this->sessionAuthenticator = $sessionAuthenticator;
        $this->security = $security;
        $this->urlGenerator = $urlGenerator;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 256],
        ];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        $request = $event->getRequest();
        
        // Skip session check for public routes
        if (
            $request->attributes->get('_route') === 'app_login' ||
            $request->attributes->get('_route') === 'app_register' ||
            $request->attributes->get('_route') === 'app_logout' ||
            strpos($request->getPathInfo(), '/css/') === 0 ||
            strpos($request->getPathInfo(), '/js/') === 0 ||
            strpos($request->getPathInfo(), '/images/') === 0
        ) {
            return;
        }

        // Check if user is logged in
        if ($this->security->getUser()) {
            // Validate session
            if (!$this->sessionAuthenticator->validateSession($request)) {
                // Session expired or invalid
                $this->sessionAuthenticator->clearSession();
                
                $event->setResponse(new RedirectResponse(
                    $this->urlGenerator->generate('app_login', [
                        'expired' => true
                    ])
                ));
            }
        }
    }
}
