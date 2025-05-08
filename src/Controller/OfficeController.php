<?php

namespace App\Controller;
use App\Entity\Office;
use App\Form\OfficeType;
use App\Repository\OfficeRepository;
use App\Service\NotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OfficeController extends AbstractController
{
    #[Route('/office', name: 'office_list_admin')]
    public function index(OfficeRepository $officeRepo): Response
    {
        return $this->render('office/officeAdmin.html.twig', [
            'offices' => $officeRepo->findAll(),
        ]);
    }
    
    #[Route('/office/new', name: 'office_new')]
    public function new(Request $request, EntityManagerInterface $em, NotificationService $notificationService): Response
    {
        $office = new Office();
        $form = $this->createForm(OfficeType::class, $office);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($office);
            $em->flush();

            // Create notification
            $notificationService->createNotification(
                "New office {$office->getName()} has been added",
                'office',
                $office->getId()
            );

            $this->addFlash('success', 'Office added!');
            return $this->redirectToRoute('office_list_admin');
        }
    
        return $this->render('office/form.html.twig', ['form' => $form->createView()]);
    }
    
    #[Route('/office/edit/{id}', name: 'office_edit_admin')]
    public function edit(Office $office, Request $request, EntityManagerInterface $em, NotificationService $notificationService): Response
    {
        $form = $this->createForm(OfficeType::class, $office);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            // Create notification
            $notificationService->createNotification(
                "Office {$office->getName()} has been updated",
                'office',
                $office->getId()
            );

            $this->addFlash('success', 'Office updated!');
            return $this->redirectToRoute('office_list_admin');
        }
    
        return $this->render('office/form.html.twig', ['form' => $form->createView()]);
    }
    
    #[Route('/office/delete/{id}', name: 'office_delete_admin')]
    public function delete(Office $office, EntityManagerInterface $em, NotificationService $notificationService): Response
    {
        $officeName = $office->getName();
        $em->remove($office);
        $em->flush();

        // Create notification
        $notificationService->createNotification(
            "Office {$officeName} has been deleted",
            'office'
        );

        $this->addFlash('success', 'Office deleted.');
        return $this->redirectToRoute('office_list_admin');
    }
    
    #[Route('/office/export-csv', name: 'office_export_csv')]
    public function exportCsv(OfficeRepository $officeRepository): Response
    {
        $offices = $officeRepository->findAll();
        
        $response = new Response();
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="offices.csv"');
        
        $handle = fopen('php://output', 'w+');
        
        // Add UTF-8 BOM
        fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));
        
        // Add the header of the CSV file
        fputcsv($handle, [
            'ID',
            'Name',
            'Location',
            'Number of Agents',
            'Phone Number'
        ]);
        
        // Add the data
        foreach ($offices as $office) {
            fputcsv($handle, [
                $office->getId(),
                $office->getName(),
                $office->getLocation(),
                $office->getAgents(),
                $office->getPhone()
            ]);
        }
        
        fclose($handle);
        
        return $response;
    }
}
