<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Form\AgentFormType;
use App\Repository\AgentRepository;
use App\Repository\OfficeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class AgentController extends AbstractController
{
    #[Route('/agent', name: 'agent_list')]
    public function index(AgentRepository $agentRepository, OfficeRepository $officeRepository): Response
    {
        /*$agents = $agentRepository->findAll();
        return $this->render('agent/index.html.twig', [
            'agents' => $agents,
        ]);*/
        return $this->render('agent/agentsUser.html.twig', [
            'agents' => $agentRepository->findAll(),
            'offices' => $officeRepository->findAll(),
        ]);
    }

    #[Route('/agentAdmin', name: 'agent_list_admin')]
    public function index2(AgentRepository $agentRepository, OfficeRepository $officeRepository): Response
    {
        /*$agents = $agentRepository->findAll();
        return $this->render('agent/index.html.twig', [
            'agents' => $agents,
        ]);*/
        return $this->render('agent/agentsAdmin.html.twig', [
            'agents' => $agentRepository->findAll(),
            'offices' => $officeRepository->findAll(),
        ]);
    }

    #[Route('/agent/new', name: 'agent_new')]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $agent = new Agent();
        $form = $this->createForm(AgentFormType::class, $agent);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $pictureFile = $form->get('pictureP')->getData();
            $office = $agent->getOffice();
            if ($office) {
                $office->setAgents($office->getAgents() + 1);
            }
    
            if ($pictureFile) {
                $originalFilename = pathinfo($pictureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pictureFile->guessExtension();
    
                try {
                    $pictureFile->move(
                        $this->getParameter('pictures_directory'), // make sure it's set in services.yaml
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception('Upload failed.');
                }
    
                $agent->setPictureP('uploads/agents/'.$newFilename);
            }
    
            $entityManager->persist($agent);
            $entityManager->flush();
    
            $this->addFlash('success', 'Agent added successfully!');
            return $this->redirectToRoute('agent_list_admin');
        }
    
        return $this->render('agent/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/agent/edit/{id}', name: 'agent_edit')]
    public function edit(Request $request, Agent $agent, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(AgentFormType::class, $agent);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $pictureFile = $form->get('pictureP')->getData();
            $office = $agent->getOffice();
    
            if ($office) {
                $office->setAgents($office->getAgents() + 1);
            }
    
            if ($pictureFile) {
                // Process the new image upload
                $originalFilename = pathinfo($pictureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pictureFile->guessExtension();
    
                try {
                    // Move the new file to the directory
                    $pictureFile->move(
                        $this->getParameter('pictures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception('Upload failed.');
                }
    
                // Update the picture path in the database
                $agent->setPictureP('uploads/agents/'.$newFilename);
            }
    
            // Persist updates to the agent entity
            $entityManager->flush();
    
            $this->addFlash('success', 'Agent updated successfully!');
            return $this->redirectToRoute('agent_list_admin');
        }

    
        return $this->render('agent/form.html.twig', [
            'form' => $form->createView(),
            'current_picture' => $agent->getPictureP(),  // Pass the current picture path to the template
        ]);
    }

    #[Route('/agent/delete/{id}', name: 'agent_delete')]
    public function delete(Agent $agent, EntityManagerInterface $entityManager): Response
    {
        $office = $agent->getOffice();

        if ($office) {
            // Decrement the number of agents in the office
            $office->setAgents($office->getAgents() - 1);
            $entityManager->persist($office);
        }

        $entityManager->remove($agent);
        $entityManager->flush();
        $this->addFlash('success', 'Agent deleted successfully!');
        return $this->redirectToRoute('agent_list_admin');
    }
}

