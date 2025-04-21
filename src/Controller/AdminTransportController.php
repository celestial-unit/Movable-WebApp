<?php
namespace App\Controller;

use App\Entity\Transport;
use App\Form\TransportType;
use App\Repository\TransportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/transport', name: 'admin_transport_')]
class AdminTransportController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(TransportRepository $transportRepository): Response
    {
        return $this->render('admin_transport/index.html.twig', [
            'transports' => $transportRepository->findAll(),
            'controller_name' => 'AdminTransportController',
        ]);
    }
    
    #[Route('/new', name: 'new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $transport = new Transport();
        $form = $this->createForm(TransportType::class, $transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($transport);
            $em->flush();

            return $this->redirectToRoute('admin_transport_index');
        }

        return $this->render('admin_transport/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Show Transport
    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Transport $transport): Response
    {
        return $this->render('admin_transport/show.html.twig', [
            'transport' => $transport,
        ]);
    }

    // Edit Transport
    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Transport $transport, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(TransportType::class, $transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('admin_transport_index');
        }

        return $this->render('admin_transport/edit.html.twig', [
            'form' => $form->createView(),
            'transport' => $transport,
        ]);
    }

    // Delete Transport
    #[Route('/{id}/delete', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Transport $transport, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $transport->getId(), $request->request->get('_token'))) {
            $em->remove($transport);
            $em->flush();
        }

        return $this->redirectToRoute('admin_transport_index');
    }
}
