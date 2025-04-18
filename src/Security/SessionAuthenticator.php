<?php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class SessionAuthenticator
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    private function getSession()
    {
        return $this->requestStack->getSession();
    }

    public function onLogin(User $user, TokenInterface $token): void
    {
        $session = $this->getSession();
        
        // Store important user data in session
        $session->set('user_id', $user->getId());
        $session->set('user_role', $user->getRole());
        $session->set('last_activity', time());
        
        // Record login time
        $user->setLastLogin(new \DateTime());
    }

    public function validateSession(Request $request): bool
    {
        $session = $this->getSession();
        
        // Check if session exists
        if (!$session->has('user_id')) {
            return false;
        }

        // Check session timeout (30 minutes)
        $lastActivity = $session->get('last_activity', 0);
        $currentTime = time();
        
        if (($currentTime - $lastActivity) > 1800) { // 30 minutes
            $session->invalidate();
            return false;
        }

        // Update last activity time
        $session->set('last_activity', $currentTime);
        return true;
    }

    public function getSessionInfo(): array
    {
        $session = $this->getSession();
        
        return [
            'user_id' => $session->get('user_id'),
            'user_role' => $session->get('user_role'),
            'last_activity' => $session->get('last_activity'),
            'session_id' => $session->getId(),
            'created_at' => $session->get('created_at', new \DateTime()),
        ];
    }

    public function clearSession(): void
    {
        $this->getSession()->invalidate();
    }
}
