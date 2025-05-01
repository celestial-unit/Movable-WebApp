<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Ticket;
use App\Repository\ReservationRepository;
use App\Repository\DestinationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Psr\Log\LoggerInterface;

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
class WaitlistController extends AbstractController
{
    private LoggerInterface $logger;
    private EntityManagerInterface $em;
    private DestinationRepository $destinationRepo;
    private ReservationRepository $reservationRepo;
    private MailerInterface $mailer;

    public function __construct(
        LoggerInterface $logger,
        EntityManagerInterface $em,
        DestinationRepository $destinationRepo,
        ReservationRepository $reservationRepo,
        MailerInterface $mailer
    ) {
        $this->logger = $logger;
        $this->em = $em;
        $this->destinationRepo = $destinationRepo;
        $this->reservationRepo = $reservationRepo;
        $this->mailer = $mailer;
    }

    #[Route('/reservation', name: 'admin_waitlist_index')]
    public function index(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        
        $pendingReservations = $this->reservationRepo->findWithFilters(
            Reservation::STATUS_PENDING,
            $filters['dateFrom'],
            $filters['dateTo'],
            $filters['destinationId'],
            $filters['transportType'],
            $filters['agentType'],
            $filters['sort']
        );

        return $this->render('admin/reservation_management.html.twig', [
            'pending_reservations' => $pendingReservations,
            'approved_count' => $this->reservationRepo->count(['status' => Reservation::STATUS_APPROVED]),
            'rejected_count' => $this->reservationRepo->count(['status' => Reservation::STATUS_REJECTED]),
            'destinations' => $this->destinationRepo->findBy([], ['name' => 'ASC']),
        ]);
    }

    private function getFiltersFromRequest(Request $request): array
    {
        return [
            'dateFrom' => $request->query->get('date_from'),
            'dateTo' => $request->query->get('date_to'),
            'destinationId' => $request->query->get('destination'),
            'transportType' => $request->query->get('transport'),
            'agentType' => $request->query->get('agent_type'),
            'sort' => $request->query->get('sort', 'date_desc'),
        ];
    }

    #[Route('/accept/{id}', name: 'admin_waitlist_accept', methods: ['POST'])]
    public function accept(Request $request, Reservation $reservation): Response
    {
        if (!$this->isCsrfTokenValid('accept'.$reservation->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Invalid CSRF token');
            return $this->redirectToRoute('admin_waitlist_index');
        }

        // Create ticket
        $ticket = new Ticket();
        $ticket
            ->setReservation($reservation)
            ->setStatus('approved')
            ->setPaymentMode($reservation->getPaymentMode())
            ->setTransport($reservation->getTransport())
            ->setDestination($reservation->getDestination() ? $reservation->getDestination()->getName() : null)
            ->setTransport($reservation->getTransport()->getType());

        $reservation->setStatus(Reservation::STATUS_APPROVED);
        $reservation->setUpdatedAt(new \DateTimeImmutable());

        $this->em->persist($ticket);
        $this->em->flush();

        // Send approval email
        try {
            $email = (new Email())
                ->from('noreply@yourdomain.com')
                ->to($reservation->getUser()->getEmail())
                ->subject('Your reservation has been approved')
                ->html($this->renderView('emails/reservation_approved.html.twig', [
                    'reservation' => $reservation,
                    'ticket' => $ticket,
                    'user' => $reservation->getUser()
                ]));

            $this->mailer->send($email);
        } catch (\Exception $e) {
            $this->logger->error('Failed to send approval email: '.$e->getMessage());
        }

        $this->addFlash('success', 'Reservation approved and ticket created. Notification email sent.');
        return $this->redirectToRoute('admin_waitlist_index');
    }

    #[Route('/reject/{id}', name: 'admin_waitlist_reject', methods: ['POST'])]
    public function reject(Request $request, Reservation $reservation): Response
    {
        if (!$this->isCsrfTokenValid('reject'.$reservation->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Invalid CSRF token');
            return $this->redirectToRoute('admin_waitlist_index');
        }

        $reservation->setStatus(Reservation::STATUS_REJECTED);
        $reservation->setUpdatedAt(new \DateTimeImmutable());
        
        $this->em->flush();

        // Send rejection email
        try {
            $email = (new Email())
                ->from('noreply@yourdomain.com')
                ->to($reservation->getUser()->getEmail())
                ->subject('Your reservation has been rejected')
                ->html($this->renderView('emails/reservation_rejected.html.twig', [
                    'reservation' => $reservation,
                    'user' => $reservation->getUser()
                ]));

            $this->mailer->send($email);
        } catch (\Exception $e) {
            $this->logger->error('Failed to send rejection email: '.$e->getMessage());
        }

        $this->addFlash('warning', 'Reservation rejected. Notification email sent.');
        return $this->redirectToRoute('admin_waitlist_index');
    }

    #[Route('/approved', name: 'admin_reservations_approved')]
    public function approvedReservations(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        
        $approvedReservations = $this->reservationRepo->findWithFilters(
            Reservation::STATUS_APPROVED,
            $filters['dateFrom'],
            $filters['dateTo'],
            $filters['destinationId'],
            $filters['transportType'],
            $filters['agentType'],
            $filters['sort']
        );

        return $this->render('admin/reservation_approved.html.twig', [
            'reservations' => $approvedReservations,
            'status' => 'approved',
            'destinations' => $this->destinationRepo->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/rejected', name: 'admin_reservations_rejected')]
    public function rejectedReservations(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        
        $rejectedReservations = $this->reservationRepo->findWithFilters(
            Reservation::STATUS_REJECTED,
            $filters['dateFrom'],
            $filters['dateTo'],
            $filters['destinationId'],
            $filters['transportType'],
            $filters['agentType'],
            $filters['sort']
        );

        return $this->render('admin/reservation_rejected.html.twig', [
            'reservations' => $rejectedReservations,
            'status' => 'rejected',
            'destinations' => $this->destinationRepo->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/calendar', name: 'admin_calendar')]
    public function calendar(): Response
    {
        $approvedReservations = $this->reservationRepo->findBy([
            'status' => Reservation::STATUS_APPROVED
        ], ['date' => 'ASC']);

        $reservationsByDate = [];
        foreach ($approvedReservations as $reservation) {
            $dateKey = $reservation->getDate()->format('Y-m-d');
            $reservationsByDate[$dateKey][] = $reservation;
        }

        return $this->render('admin/calendar.html.twig', [
            'reservationsByDate' => $reservationsByDate,
            'currentMonth' => new \DateTime(),
        ]);
    }

    #[Route('/calendar/{date}', name: 'admin_reservations_by_date')]
    public function reservationsByDate(string $date): Response
    {
        $startDate = new \DateTime($date);
        $endDate = (clone $startDate)->modify('+1 day');
        
        $reservations = $this->reservationRepo->createQueryBuilder('r')
            ->where('r.status = :status')
            ->andWhere('r.date >= :startDate')
            ->andWhere('r.date < :endDate')
            ->setParameter('status', Reservation::STATUS_APPROVED)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('r.date', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->render('admin/reservations_by_date.html.twig', [
            'reservations' => $reservations,
            'date' => $startDate,
        ]);
    }

    #[Route('/statistics', name: 'admin_statistics')]
    public function statistics(): Response
    {
        $totalReservations = $this->reservationRepo->count([]);
        $approvedCount = $this->reservationRepo->count(['status' => Reservation::STATUS_APPROVED]);
        $rejectedCount = $this->reservationRepo->count(['status' => Reservation::STATUS_REJECTED]);
        $pendingCount = $this->reservationRepo->count(['status' => Reservation::STATUS_PENDING]);

        $bookingsPerDay = $this->reservationRepo->getBookingsPerDay(30);
        $popularRoutes = $this->reservationRepo->getPopularRoutes(5);
        $transportDistribution = $this->reservationRepo->getTransportDistribution();

        return $this->render('admin/statistics.html.twig', [
            'totalReservations' => $totalReservations,
            'approvedCount' => $approvedCount,
            'rejectedCount' => $rejectedCount,
            'pendingCount' => $pendingCount,
            'bookingsPerDay' => $bookingsPerDay,
            'popularRoutes' => $popularRoutes,
            'transportDistribution' => $transportDistribution,
        ]);
    }

    #[Route('/api/admin/metrics', methods: ['GET'])]
    public function getMetrics(): JsonResponse
    {
        $data = [
            'bookingsPerDay' => $this->reservationRepo->getBookingsPerDay(30),
            'popularRoutes' => $this->reservationRepo->getPopularRoutes(5),
            'transportDistribution' => $this->reservationRepo->getTransportDistribution(),
            'statusDistribution' => [
                'approved' => $this->reservationRepo->count(['status' => Reservation::STATUS_APPROVED]),
                'rejected' => $this->reservationRepo->count(['status' => Reservation::STATUS_REJECTED]),
                'pending' => $this->reservationRepo->count(['status' => Reservation::STATUS_PENDING]),
            ]
        ];

        return $this->json($data);
    }
}