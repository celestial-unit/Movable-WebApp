<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class GoogleController extends AbstractController
{
    #[Route('/connect/google', name: 'connect_google')]
    public function connectAction(ClientRegistry $clientRegistry): RedirectResponse
    {
        return $clientRegistry
            ->getClient('google')
            ->redirect([
                'openid',
                'https://www.googleapis.com/auth/userinfo.email',
                'https://www.googleapis.com/auth/userinfo.profile'
            ]);
    }

    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectCheckAction(Request $request, ClientRegistry $clientRegistry): Response
    {
        // This method won't be executed - it's handled by the GoogleAuthenticator
        // We just need this route defined for the OAuth flow
        return new RedirectResponse($this->generateUrl('app_front_home'));
    }

    #[Route('/connect/google/failure', name: 'connect_google_failure')]
    public function connectFailureAction(Request $request): Response
    {
        /** @var IdentityProviderException $exception */
        $exception = $request->attributes->get('exception');
        
        $message = $exception ? $exception->getMessage() : 'An unknown error occurred with Google authentication.';
        
        $this->addFlash('error', $message);
        return $this->redirectToRoute('app_login');
    }
}

