<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Entity\Payment;
use Payum\Core\Payum;
use Payum\Core\Request\GetHumanStatus;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;  // Assure-toi d'importer RedirectResponse
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class PaymentController extends AbstractController
{
    #[Route('/pay/{id}', name: 'pay_ticket')]
    public function payTicket(Ticket $ticket, Payum $payum, EntityManagerInterface $em): RedirectResponse
    {
        $payment = new Payment();
        $payment->setNumber(uniqid());
        $payment->setCurrencyCode('EUR');
        $payment->setTotalAmount((int)($ticket->getPrice() * 100)); // en centimes
        $payment->setDescription('Ticket for ' . $ticket->getDestination());
        $payment->setClientId($this->getUser()->getId());
        $payment->setClientEmail($this->getUser()->getEmail());
        $payment->setTicket($ticket);

        $em->persist($payment);
        $em->flush();

        // Créer un token Stripe Checkout
        $captureToken = $payum->getTokenFactory()->createCaptureToken(
            'stripe_checkout',  // Nom du gateway
            $payment,
            'payment_done'      // Route appelée après le paiement
        );

        return $this->redirect($captureToken->getTargetUrl());
    }

    #[Route('/payment/done', name: 'payment_done')]
    public function doneAction(Request $request, Payum $payum, EntityManagerInterface $em, MailerInterface $mailer): RedirectResponse
    {
        try {
            $token = $payum->getHttpRequestVerifier()->verify($request);
            $gateway = $payum->getGateway($token->getGatewayName());

            $gateway->execute($status = new GetHumanStatus($token));
            $payment = $status->getFirstModel();

            // Vérification que le modèle est bien une instance de Payment
            if (!$payment instanceof Payment || !$payment->getTicket()) {
                throw new \Exception("Invalid payment data.");
            }

            $ticket = $payment->getTicket();

            if ($status->isCaptured()) {
                $ticket->setStatus('Paid');
                $em->flush();

                $this->addFlash('success', 'Payment completed successfully!');
                $email = (new Email())
                    ->from('brmariem667@gmail.com')  // Ton adresse email d'envoi
                    ->to($payment->getClientEmail())
                    ->subject('Test Email Symfony')
                    ->html($this->renderView('emails/payment_confirmation.html.twig', [
                    'ticket' => $ticket,
                    'payment' => $payment
             ]));
                    
            try {
                    $mailer->send($email);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Échec de l\'envoi de l\'email: ' . $e->getMessage());
                }

                // Redirection après le paiement réussi
                return $this->redirectToRoute('app_ticket_show', ['id' => $ticket->getId()]);
            } elseif ($status->isFailed()) {
                $this->addFlash('error', 'Payment failed. Please try again.');
            } elseif ($status->isPending()) {
                $this->addFlash('warning', 'Payment is still pending. Please wait.');
            } else {
                $this->addFlash('info', 'Payment status: ' . $status->getValue());
            }

            return $this->redirectToRoute('pay_ticket', ['id' => $ticket->getId()]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'An error occurred: ' . $e->getMessage());
            return $this->redirectToRoute('app_front_home'); // ou une page d'erreur dédiée
        }
    }

    #[Route('/payment/cancel', name: 'payment_cancel')]
    public function cancelAction(Request $request): RedirectResponse
    {
        $this->addFlash('error', 'Payment was cancelled.');
        return $this->redirectToRoute('app_front_home');
    }
}
