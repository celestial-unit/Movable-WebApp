<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Ticket;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
class WaitlistController extends AbstractController
{
    #[Route('/reservation', name: 'admin_waitlist_index')]
    public function index(ReservationRepository $reservationRepo): Response
    {
        return $this->render('admin/reservation_management.html.twig', [
            'pending_reservations' => $reservationRepo->findBy(['status' => Reservation::STATUS_PENDING]),
            'approved_count' => $reservationRepo->count(['status' => Reservation::STATUS_APPROVED]),
            'rejected_count' => $reservationRepo->count(['status' => Reservation::STATUS_REJECTED])
        ]);
    }

    #[Route('/accept/{id}', name: 'admin_waitlist_accept')]
    public function accept(Reservation $reservation, EntityManagerInterface $em): Response
    {
        // Create ticket
        $ticket = new Ticket();
        $ticket
            ->setReservation($reservation)
            ->setStatus('approved')
            ->setCreatedAt(new \DateTime());

        $reservation->setStatus(Reservation::STATUS_APPROVED);
        $reservation->setUpdatedAt(new \DateTime());

        $em->persist($ticket);
        $em->flush();

        $this->addFlash('success', 'Reservation approved and ticket created.');
        return $this->redirectToRoute('admin_waitlist_index');
    }

    #[Route('/reject/{id}', name: 'admin_waitlist_reject')]
    public function reject(Reservation $reservation, EntityManagerInterface $em): Response
    {
        $reservation->setStatus(Reservation::STATUS_REJECTED);
        $reservation->setUpdatedAt(new \DateTime());
        $em->flush();

        $this->addFlash('warning', 'Reservation rejected.');
        return $this->redirectToRoute('admin_waitlist_index');
    }
}

