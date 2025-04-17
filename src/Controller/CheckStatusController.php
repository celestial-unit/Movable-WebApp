<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\CheckStatusType;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class UserController extends AbstractController
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
        $form->handleRequest($request);

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
            $reservation = $reservationRepository->findOneByEmail($email);

            if (!$reservation) {
                return $this->json([
                    'success' => false,
                    'message' => 'No reservation found with this email address.',
                ], Response::HTTP_NOT_FOUND);
            }

            return $this->json([
                'success' => true,
                'reservation' => [
                    'date' => $reservation->getDate()->format('Y-m-d H:i'),
                    'status' => $reservation->getStatus(),
                    'location' => $reservation->getLocation(),
                    'seats' => $reservation->getSeats(),
                    'agentType' => $reservation->getAgentType(),
                    'paymentMode' => $reservation->getPaymentMode(),
                    'transport' => $reservation->getTransport(),
                    'Driver' => $reservation->getDriver(),
                ]
            ]);

        } catch (\Exception $e) {
            $this->logger->error('Reservation check error: '.$e->getMessage());
            return $this->json([
                'success' => false,
                'message' => 'An error occurred while checking your reservation.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}