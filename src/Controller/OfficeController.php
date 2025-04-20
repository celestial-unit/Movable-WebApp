<?php

namespace App\Controller;
use App\Entity\Office;
use App\Form\OfficeType;
use App\Repository\OfficeRepository;
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
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $office = new Office();
        $form = $this->createForm(OfficeType::class, $office);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($office);
            $em->flush();
            $this->addFlash('success', 'Office added!');
            return $this->redirectToRoute('office_list_admin');
        }
    
        return $this->render('office/form.html.twig', ['form' => $form->createView()]);
    }
    
    #[Route('/office/edit/{id}', name: 'office_edit_admin')]
    public function edit(Office $office, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(OfficeType::class, $office);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Office updated!');
            return $this->redirectToRoute('office_list_admin');
        }
    
        return $this->render('office/form.html.twig', ['form' => $form->createView()]);
    }
    
    #[Route('/office/delete/{id}', name: 'office_delete_admin')]
    public function delete(Office $office, EntityManagerInterface $em): Response
    {
        $em->remove($office);
        $em->flush();
        $this->addFlash('success', 'Office deleted.');
        return $this->redirectToRoute('office_list_admin');
    }
    
}
