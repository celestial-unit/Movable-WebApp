<?php

namespace App\Controller;

use App\Entity\Transport;
use App\Form\TransportType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class TransportController extends AbstractController
{
    #[Route('/transport/list', name: 'transport_list')]
    public function listTransports(EntityManagerInterface $entityManager): Response
    {
        // Fetch all transports for display
        $transports = $entityManager->getRepository(Transport::class)->findAll();

        // Render the transport list template
        return $this->render('transport/list.html.twig', [
            'transports' => $transports,
        ]);
    }

    #[Route('/transport/new', name: 'transport_new')]
    #[Route('/transport/edit/{id}', name: 'transport_edit')]
    public function manageTransport(
        Request $request, 
        EntityManagerInterface $entityManager, 
        ValidatorInterface $validator, 
        $id = null
    ): Response {
        // If editing an existing transport, get it from the database
        if ($id) {
            $transport = $entityManager->getRepository(Transport::class)->find($id);
            if (!$transport) {
                throw $this->createNotFoundException('Transport not found');
            }
        } else {
            // Otherwise, create a new transport entity
            $transport = new Transport();
        }
    
        // Create the form and handle the request
        $form = $this->createForm(TransportType::class, $transport);
        $form->handleRequest($request);
    
        // If form is submitted and valid, persist the data
        if ($form->isSubmitted() && $form->isValid()) {
            // Persist the transport entity if valid
            $entityManager->persist($transport);
            $entityManager->flush();
    
            // Redirect to the transport list page
            return $this->redirectToRoute('transport_list');
        }
    
        // If there are form errors, pass them to the view
        $errors = [];
        if ($form->isSubmitted() && !$form->isValid()) {
            $errors = $form->getErrors(true, true); // Get all form errors
        }
    
        // Render the template with the form, transport entity, and any validation errors
        return $this->render('transport/new.html.twig', [
            'form' => $form->createView(),
            'errors' => $errors, // Pass the errors to the view
            'transport' => $transport, // Pass the transport entity to the view
        ]);
    }
    
    #[Route('/transport/delete/{id}', name: 'transport_delete')]
    public function deleteTransport($id, EntityManagerInterface $entityManager): Response
    {
        $transport = $entityManager->getRepository(Transport::class)->find($id);
        if ($transport) {
            $entityManager->remove($transport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('transport_list');
    }
}
