<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Entity\Reservation;
use App\Form\TicketType;
use App\Repository\TicketRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ticket')]
class TicketController extends AbstractController
{
    #[Route('/{id}', name: 'app_ticket_show', methods: ['GET'])]
    public function show(Ticket $ticket): Response
    {
        // Check if reservation is approved
        if (!$ticket->getReservation()->isApproved()) {
            $this->addFlash('error', 'You can only view tickets for approved reservations.');
            return $this->redirectToRoute('app_check_status');
        }

        return $this->render('ticket/show.html.twig', [
            'ticket' => $ticket,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ticket_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ticket $ticket, EntityManagerInterface $entityManager): Response
    {
        // Check if reservation is approved
        if (!$ticket->getReservation()->isApproved()) {
            $this->addFlash('error', 'You can only edit tickets for approved reservations.');
            return $this->redirectToRoute('app_check_status');
        }

        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Update related reservation if needed
            $reservation = $ticket->getReservation();
            $reservation->setUpdatedAt(new \DateTime());
            
            $entityManager->flush();
            
            $this->addFlash('success', 'Ticket updated successfully!');
            return $this->redirectToRoute('app_ticket_show', ['id' => $ticket->getId()]);
        }

        return $this->render('ticket/edit.html.twig', [
            'ticket' => $ticket,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_ticket_delete', methods: ['POST'])]
    public function delete(Request $request, Ticket $ticket, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ticket->getId(), $request->request->get('_token'))) {
            // Delete the reservation as well
            $reservation = $ticket->getReservation();
            
            $entityManager->remove($ticket);
            $entityManager->remove($reservation);
            $entityManager->flush();
            
            $this->addFlash('success', 'Ticket and reservation deleted successfully!');
        }

        return $this->redirectToRoute('app_check_status');
    }
}