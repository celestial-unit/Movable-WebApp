<?php
namespace App\Controller;

use App\Entity\Transport;
use App\Form\TransportType;
use App\Repository\TransportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/transport', name: 'admin_transport_')]
class AdminTransportController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(TransportRepository $transportRepository): Response
    {
        return $this->render('admin_transport/index.html.twig', [
            'transports' => $transportRepository->findAll(),
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

            $this->addFlash('success', 'Transport created successfully!');
            return $this->redirectToRoute('admin_transport_index');
        }

        return $this->render('admin_transport/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/stat', name: 'stat')]
    public function stat(TransportRepository $transportRepository): Response
    {
        $transports = $transportRepository->findAll();

        $busCount = 0;
        $carCount = 0;

        foreach ($transports as $transport) {
            $type = strtolower($transport->getType());
            if ($type === 'bus') {
                $busCount++;
            } elseif ($type === 'car') {
                $carCount++;
            }
        }

        return $this->render('admin_transport/stat.html.twig', [
            'busCount' => $busCount,
            'carCount' => $carCount,
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Transport $transport): Response
    {
        return $this->render('admin_transport/show.html.twig', [
            'transport' => $transport,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Transport $transport, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(TransportType::class, $transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Transport updated successfully!');
            return $this->redirectToRoute('admin_transport_index');
        }

        return $this->render('admin_transport/edit.html.twig', [
            'form' => $form->createView(),
            'transport' => $transport,
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Transport $transport, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $transport->getId(), $request->request->get('_token'))) {
            $em->remove($transport);
            $em->flush();
            $this->addFlash('success', 'Transport deleted successfully!');
        }

        return $this->redirectToRoute('admin_transport_index');
    }

    #[Route('/{id}/maintenance-check', name: 'maintenance_report')]
    public function checkMaintenance(Transport $transport): Response
    {
        if (!$transport) {
            throw $this->createNotFoundException('Transport not found');
        }

        return $this->redirectToRoute('transport_maintenance_report', ['id' => $transport->getId()]);
    }

    #[Route('/create-sample', name: 'create_sample')]
    public function createTransportWithVehicle(EntityManagerInterface $em): Response
    {
        $transport = new Transport();
        $transport->setType('Bus');
        $transport->setCapacity(40);
        $transport->setDisponibility(true);
        $transport->setDestination('Tunis');
        $transport->setModel('Mercedes Sprinter');
        $transport->setLicensePlate('123-TUN-456');
        $transport->setCurrentKilometers(50000);
        $transport->setLastMaintenanceDate(new \DateTime('2024-01-01'));
        $transport->setMaintenanceInterval(10000);

        $em->persist($transport);
        $em->flush();

        return $this->redirectToRoute('admin_transport_index');
    }
}