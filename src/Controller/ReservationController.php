<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Destination;
use App\Entity\User;
use App\Form\ReservationType;
use App\Form\DestinationType;
use App\Repository\ReservationRepository;
use App\Repository\DestinationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Psr\Log\LoggerInterface;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private ReservationRepository $reservationRepository;
    private DestinationRepository $destinationRepository;
    private LoggerInterface $logger;

    public function __construct(
        EntityManagerInterface $entityManager,
        ReservationRepository $reservationRepository,
        DestinationRepository $destinationRepository,
        LoggerInterface $logger
    ) {
        $this->entityManager = $entityManager;
        $this->reservationRepository = $reservationRepository;
        $this->destinationRepository = $destinationRepository;
        $this->logger = $logger;
    }

    #[Route('/', name: 'app_reservation_index')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        // Get user's reservations
        $reservations = $this->reservationRepository->findBy(['user' => $user], ['createdAt' => 'DESC']);
        
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        $reservation = new Reservation();
        $reservation->setUser($user);
        
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Begin transaction
                $this->entityManager->beginTransaction();

                // Set creation time
                $reservation->setCreatedAt(new \DateTime());
                
                // Update location from destination if set
                if ($reservation->getDestination()) {
                    $reservation->setLocation($reservation->getDestination()->getLocation());
                }

                $this->entityManager->persist($reservation);
                $this->entityManager->flush();
                
                // Commit transaction
                $this->entityManager->commit();

                $this->addFlash('success', 'Your reservation has been submitted successfully!');
                return $this->redirectToRoute('app_reservation_show', ['id' => $reservation->getId()]);
            } catch (\Exception $e) {
                // Rollback transaction on error
                if ($this->entityManager->getConnection()->isTransactionActive()) {
                    $this->entityManager->rollback();
                }

                $this->logger->error('Reservation creation failed: ' . $e->getMessage(), [
                    'exception' => $e,
                    'user_id' => $user->getId()
                ]);

                $this->addFlash('error', 'Error creating reservation. Please try again.');
            }
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_show', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function show(Reservation $reservation): Response
    {
        // Only allow viewing if admin or the owner
        if (!$this->isReservationAccessible($reservation)) {
            throw new AccessDeniedException('You cannot view this reservation.');
        }
        
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/cancel', name: 'app_reservation_cancel', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function cancel(Request $request, Reservation $reservation): Response
    {
        // Only allow cancellation if owner and the reservation is pending
        if (!$this->isReservationAccessible($reservation) || !$reservation->isPending()) {
            throw new AccessDeniedException('You cannot cancel this reservation.');
        }
        
        if ($this->isCsrfTokenValid('cancel'.$reservation->getId(), $request->request->get('_token'))) {
            try {
                $reservation->setStatus(Reservation::STATUS_REJECTED);
                $reservation->setUpdatedAt(new \DateTime());
                
                $this->entityManager->persist($reservation);
                $this->entityManager->flush();
                
                $this->addFlash('success', 'Your reservation has been canceled successfully.');
            } catch (\Exception $e) {
                $this->logger->error('Reservation cancellation failed: ' . $e->getMessage());
                $this->addFlash('error', 'Error canceling reservation. Please try again.');
            }
        }
        
        return $this->redirectToRoute('app_reservation_index');
    }
    
    #[Route('/admin/dashboard', name: 'app_reservation_admin_dashboard')]
    #[IsGranted('ROLE_ADMIN')]
    public function adminDashboard(Request $request): Response
    {
        // Get filter parameters
        $status = $request->query->get('status');
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 10;
        
        // Prepare filters
        $filters = [];
        
        if ($status) {
            $filters['status'] = $status;
        }
        
        // Get all reservations with filters
        $reservations = $this->reservationRepository->findBy(
            $filters,
            ['createdAt' => 'DESC'],
            $limit,
            ($page - 1) * $limit
        );
        
        // Get counts for statistics
        $stats = [
            'total' => $this->reservationRepository->count([]),
            'pending' => $this->reservationRepository->count(['status' => Reservation::STATUS_PENDING]),
            'approved' => $this->reservationRepository->count(['status' => Reservation::STATUS_APPROVED]),
            'rejected' => $this->reservationRepository->count(['status' => Reservation::STATUS_REJECTED]),
        ];
        
        // Calculate total pages
        $total = $this->reservationRepository->count($filters);
        $totalPages = ceil($total / $limit);
        
        return $this->render('admin/reservation_dashboard.html.twig', [
            'reservations' => $reservations,
            'stats' => $stats,
            'page' => $page,
            'total_pages' => $totalPages,
            'status' => $status,
        ]);
    }
    
    #[Route('/admin/reservations/{id}/approve', name: 'app_reservation_admin_approve', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function adminApprove(Request $request, Reservation $reservation): Response
    {
        if ($this->isCsrfTokenValid('approve'.$reservation->getId(), $request->request->get('_token'))) {
            try {
                $reservation->approve();
                
                $this->entityManager->persist($reservation);
                $this->entityManager->flush();
                
                $this->addFlash('success', 'Reservation has been approved successfully.');
            } catch (\Exception $e) {
                $this->logger->error('Reservation approval failed: ' . $e->getMessage());
                $this->addFlash('error', 'Error approving reservation. Please try again.');
            }
        }
        
        return $this->redirectToRoute('app_reservation_admin_dashboard');
    }
    
    #[Route('/admin/reservations/{id}/reject', name: 'app_reservation_admin_reject', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function adminReject(Request $request, Reservation $reservation): Response
    {
        if ($this->isCsrfTokenValid('reject'.$reservation->getId(), $request->request->get('_token'))) {
            try {
                $reservation->reject();
                
                $this->entityManager->persist($reservation);
                $this->entityManager->flush();
                
                $this->addFlash('success', 'Reservation has been rejected successfully.');
            } catch (\Exception $e) {
                $this->logger->error('Reservation rejection failed: ' . $e->getMessage());
                $this->addFlash('error', 'Error rejecting reservation. Please try again.');
            }
        }
        
        return $this->redirectToRoute('app_reservation_admin_dashboard');
    }
    
    #[Route('/admin/destinations', name: 'app_reservation_admin_destinations')]
    #[IsGranted('ROLE_ADMIN')]
    public function adminDestinations(): Response
    {
        $destinations = $this->destinationRepository->findAll();
        
        return $this->render('admin/destinations.html.twig', [
            'destinations' => $destinations,
        ]);
    }
    
    #[Route('/admin/destinations/new', name: 'app_reservation_admin_destination_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function adminNewDestination(Request $request): Response
    {
        $destination = new Destination();
        
        $form = $this->createForm(DestinationType::class, $destination);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $this->entityManager->persist($destination);
                $this->entityManager->flush();
                
                $this->addFlash('success', 'Destination has been created successfully.');
                return $this->redirectToRoute('app_reservation_admin_destinations');
            } catch (\Exception $e) {
                $this->logger->error('Destination creation failed: ' . $e->getMessage());
                $this->addFlash('error', 'Error creating destination. Please try again.');
            }
        }
        
        return $this->render('admin/destination_form.html.twig', [
            'form' => $form->createView(),
            'destination' => $destination,
        ]);
    }
    
    #[Route('/admin/destinations/{id}/edit', name: 'app_reservation_admin_destination_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function adminEditDestination(Request $request, Destination $destination): Response
    {
        $form = $this->createForm(DestinationType::class, $destination);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $this->entityManager->flush();
                
                $this->addFlash('success', 'Destination has been updated successfully.');
                return $this->redirectToRoute('app_reservation_admin_destinations');
            } catch (\Exception $e) {
                $this->logger->error('Destination update failed: ' . $e->getMessage());
                $this->addFlash('error', 'Error updating destination. Please try again.');
            }
        }
        
        return $this->render('admin/destination_form.html.twig', [
            'form' => $form->createView(),
            'destination' => $destination,
        ]);
    }
    
    #[Route('/admin/destinations/{id}/delete', name: 'app_reservation_admin_destination_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function adminDeleteDestination(Request $request, Destination $destination): Response
    {
        if ($this->isCsrfTokenValid('delete'.$destination->getId(), $request->request->get('_token'))) {
            try {
                // Check if there are any reservations using this destination
                $reservationsCount = $this->reservationRepository->count(['destination' => $destination]);
                
                if ($reservationsCount > 0) {
                    $this->addFlash('error', 'Cannot delete destination. It is used by ' . $reservationsCount . ' reservations.');
                } else {
                    $this->entityManager->remove($destination);
                    $this->entityManager->flush();
                    
                    $this->addFlash('success', 'Destination has been deleted successfully.');
                }
            } catch (\Exception $e) {
                $this->logger->error('Destination deletion failed: ' . $e->getMessage());
                $this->addFlash('error', 'Error deleting destination. Please try again.');
            }
        }
        
        return $this->redirectToRoute('app_reservation_admin_destinations');
    }
    
    /**
     * Helper method to check if the current user can access a reservation
     */
    private function isReservationAccessible(Reservation $reservation): bool
    {
        /** @var User $user */
        $user = $this->getUser();
        
        // Admins can access all reservations
        if ($this->isGranted('ROLE_ADMIN')) {
            return true;
        }
        
        // Regular users can only access their own reservations
        return $reservation->getUser() === $user;
    }
}

