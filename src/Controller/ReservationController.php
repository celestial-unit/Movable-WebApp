<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

#[Route('/reservation', name: 'app_reservation_', methods: ['GET', 'POST'])]
class ReservationController extends AbstractController
{
    private $logger;
    private $reservationRepository;

    public function __construct(LoggerInterface $logger, ReservationRepository $reservationRepository)
    {
        $this->logger = $logger;
        $this->reservationRepository = $reservationRepository;
    }

    #[Route('/', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Begin transaction
                $entityManager->beginTransaction();

                // Set timestamps
                $reservation->setCreatedAt(new \DateTimeImmutable());
                
                // Store related entity data
                if ($reservation->getTransport()) {
                    $reservation->setTransportType($reservation->getTransport()->getType());
                }
                
                if ($reservation->getDriver()) {
                    $reservation->setDriverName($reservation->getDriver()->getName());
                }
                
                if ($reservation->getAgent()) {
                    $reservation->setAgentType($reservation->getAgent()->getType());
                }
                
                if ($reservation->getDestination()) {
                    $reservation->setLocation($reservation->getDestination()->getLocation());
                }

                // Persist and flush
                $entityManager->persist($reservation);
                $entityManager->flush();

                // Verify storage
                $storedReservation = $this->reservationRepository->find($reservation->getId());
                if (!$storedReservation) {
                    throw new \Exception('Reservation not found in database after saving.');
                }

                // Verify critical fields
                $verificationPassed = $this->verifyStoredData($reservation, $storedReservation);
                if (!$verificationPassed) {
                    throw new \Exception('Data verification failed after storage.');
                }

                // Commit transaction if everything is OK
                $entityManager->commit();

                $this->addFlash('success', 'Reservation created and verified successfully!');
                return $this->redirectToRoute('app_reservation_show', ['id' => $reservation->getId()]);

            } catch (\Exception $e) {
                // Rollback transaction on error
                if ($entityManager->getConnection()->isTransactionActive()) {
                    $entityManager->rollback();
                }

                $this->logger->error('Reservation creation failed: ' . $e->getMessage(), [
                    'exception' => $e,
                    'reservation_data' => [
                        'transport' => $reservation->getTransport() ? $reservation->getTransport()->getId() : null,
                        'destination' => $reservation->getDestination() ? $reservation->getDestination()->getId() : null,
                    ]
                ]);

                 $this->addFlash('error', 'Error creating reservation: ' . $e->getMessage());
                
                if ($this->getParameter('kernel.debug')) {
                    $this->addFlash('debug', 'Debug info: ' . $e->getTraceAsString());
                }
            }
        }

        return $this->render('reservation/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function verifyStoredData(Reservation $original, Reservation $stored): bool
    {
        $errors = [];
        
        // Verify transport type
        if ($original->getTransport() && 
            $stored->getTransportType() !== $original->getTransport()->getType()) {
            $errors[] = 'Transport type mismatch';
        }

        // Verify location
        if ($original->getDestination() && 
            $stored->getLocation() !== $original->getDestination()->getLocation()) {
            $errors[] = 'Location mismatch';
        }

        // Verify agent type
        if ($original->getAgent() && 
            $stored->getAgentType() !== $original->getAgent()->getType()) {
            $errors[] = 'Agent type mismatch';
        }

        if (!empty($errors)) {
            $this->logger->warning('Data verification errors', ['errors' => $errors]);
            return false;
        }

        return true;
    }

    #[Route('/thankyou/{id}', name: 'thankyou', methods: ['GET'])]
    public function thankyou(Reservation $reservation): Response
    {
        return $this->render('reservation/thankyou.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->beginTransaction();
                
                // Update stored values from relationships
                if ($reservation->getTransport()) {
                    $reservation->setTransportType($reservation->getTransport()->getType());
                }
                
                if ($reservation->getDestination()) {
                    $reservation->setLocation($reservation->getDestination()->getLocation());
                }
                
                $reservation->setUpdatedAt(new \DateTime());
                $entityManager->flush();
                
                // Verify update
                $updatedReservation = $this->reservationRepository->find($reservation->getId());
                if (!$this->verifyStoredData($reservation, $updatedReservation)) {
                    throw new \Exception('Data verification failed after update.');
                }
                
                $entityManager->commit();
                
                $this->addFlash('success', 'Reservation updated and verified successfully!');
                return $this->redirectToRoute('app_reservation_show', ['id' => $reservation->getId()]);
                
            } catch (\Exception $e) {
                if ($entityManager->getConnection()->isTransactionActive()) {
                    $entityManager->rollback();
                }
                
                $this->logger->error('Reservation update failed: ' . $e->getMessage());
                $this->addFlash('error', 'Error updating reservation: ' . $e->getMessage());
            }
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($reservation);
                $entityManager->flush();
                
                // Verify deletion
                $deleted = $this->reservationRepository->find($reservation->getId());
                if ($deleted) {
                    throw new \Exception('Reservation still exists after deletion attempt.');
                }
                
                $this->addFlash('success', 'Reservation deleted successfully!');
            } catch (\Exception $e) {
                $this->logger->debug('Delete attempt', [
                    'received_token' => $request->request->get('_token'),
                    'expected_token' => $this->container->get('security.csrf.token_manager')
                                         ->getToken('delete'.$reservation->getId())->getValue(),
                    'token_valid' => $this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))
                ]);
                $this->addFlash('error', 'Error deleting reservation: ' . $e->getMessage());
            }
        }

        return $this->redirectToRoute('app_reservation_new');
    }
}