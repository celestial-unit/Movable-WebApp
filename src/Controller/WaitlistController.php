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
//#[IsGranted('ROLE_ADMIN')]
class WaitlistController extends AbstractController
{
    #[Route('/', name: 'admin_waitlist_index')]
    public function index(ReservationRepository $reservationRepo): Response
    {
        return $this->render('waitlist/admin_waitlist.twig', [
            'pending_reservations' => $reservationRepo->findBy(['status' => Reservation::STATUS_PENDING]),
        ]);
    }

    #[Route('/accept/{id}', name: 'admin_waitlist_accept')]
    public function accept(Reservation $reservation, EntityManagerInterface $em): Response
    {
        // Create ticket
        $ticket = new Ticket();
        $ticket
            ->setReservation($reservation)
            ->setPaymentMode($reservation->getPaymentMode())
            ->setTransport($reservation->getTransportType())
            ->setPrice($this->calculatePrice($reservation))
            ->setDestination($reservation->getLocation())
            ->setBookingDate(new \DateTime());

        $reservation->setStatus(Reservation::STATUS_APPROVED);

        $em->persist($ticket);
        $em->flush();

        $this->addFlash('success', 'Reservation approved and ticket created.');
        return $this->redirectToRoute('admin_waitlist_index');
    }

    #[Route('/reject/{id}', name: 'admin_waitlist_reject')]
    public function reject(Reservation $reservation, EntityManagerInterface $em): Response
    {
        $reservation->setStatus(Reservation::STATUS_REJECTED);
        $em->remove($reservation);
        $em->flush();

        $this->addFlash('warning', 'Reservation rejected and removed.');
        return $this->redirectToRoute('admin_waitlist_index');
    }

    private function calculatePrice(Reservation $reservation): float
    {
        // Implement your pricing logic here
        $basePrice = 100; // Example base price
        return $basePrice * $reservation->getSeats();
    }
}