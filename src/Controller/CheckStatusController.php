<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Ticket;
use App\Form\CheckStatusType;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class CheckStatusController extends AbstractController
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/check-status', name: 'app_check_status')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(CheckStatusType::class);
        return $this->render('check_status.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/api/check-reservation', name: 'app_reservation_check', methods: ['POST'])]
    public function checkReservation(Request $request, ReservationRepository $reservationRepository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? null;
    
        if (!$email) {
            return $this->json([
                'success' => false,
                'message' => 'Email is required.',
            ], Response::HTTP_BAD_REQUEST);
        }
    
        try {
            $reservation = $reservationRepository->findOneBy(['user' => $email], ['createdAt' => 'DESC']);
            
            if (!$reservation) {
                return $this->json([
                    'success' => false,
                    'message' => 'No reservation found with this email address.',
                ], Response::HTTP_NOT_FOUND);
            }
    
            // Get the first ticket if exists
            $ticket = $reservation->getTickets()->first();
            
            $responseData = [
                'success' => true,
                'reservation' => [
                    'id' => $reservation->getId(),
                    'date' => $reservation->getDate()->format('Y-m-d H:i'),
                    'status' => $reservation->getStatus(),
                    'location' => $reservation->getLocation(),
                    'seats' => $reservation->getSeats(),
                    'paymentMode' => $reservation->getPaymentMode(),
                    'transport' => $reservation->getTransport() ? $reservation->getTransport()->getName() : 'Not assigned',
                    'driver' => $reservation->getDriver() ? $reservation->getDriver()->getFullName() : 'Not assigned',
                    'hasTicket' => $ticket !== false,
                    'ticketId' => $ticket ? $ticket->getId() : null,
                    'ticketNumber' => $ticket ? $ticket->getTicketNumber() : null
                ]
            ];
    
            return $this->json($responseData);
    
        } catch (\Exception $e) {
            $this->logger->error('Reservation check error: '.$e->getMessage());
            return $this->json([
                'success' => false,
                'message' => 'An error occurred while checking your reservation.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    
    }
}