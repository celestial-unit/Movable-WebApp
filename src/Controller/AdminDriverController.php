<?php
namespace App\Controller;

use App\Entity\Driver;
use App\Form\DriverType;
use App\Repository\DriverRepository;
use App\Service\SmsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/driver', name: 'admin_driver_')]
class AdminDriverController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, DriverRepository $driverRepository, EntityManagerInterface $em): Response
    {
        // Création d'un nouveau conducteur
        $driver = new Driver();
        // Création du formulaire
        $form = $this->createForm(DriverType::class, $driver);
        $form->handleRequest($request);
    
        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($driver);
            $em->flush();


            return $this->redirectToRoute('admin_driver_index');
        }
    
        return $this->render('admin_driver/index.html.twig', [
            'form' => $form->createView(),
            'drivers' => $driverRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'new')]
    public function new(Request $request, EntityManagerInterface $em ): Response
    {
        $driver = new Driver();
        $form = $this->createForm(DriverType::class, $driver);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($driver);
            $em->flush();

            
            return $this->redirectToRoute('admin_driver_index');
        }

        return $this->render('admin_driver/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Driver $driver): Response
    {
        return $this->render('admin_driver/show.html.twig', [
            'driver' => $driver,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Driver $driver, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(DriverType::class, $driver);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('admin_driver_index');
        }

        return $this->render('admin_driver/edit.html.twig', [
            'form' => $form->createView(),
            'driver' => $driver,
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Driver $driver, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $driver->getId(), $request->request->get('_token'))) {
            $em->remove($driver);
            $em->flush();
        }

        return $this->redirectToRoute('admin_driver_index');
    }
   
}
