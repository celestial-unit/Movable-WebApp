<?php

namespace App\Controller;
use App\Repository\RateRepository;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Entity\Agent;
use App\Entity\Rate;
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
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AgentController extends AbstractController
{
    #[Route('/agent', name: 'agent_list')]#[Route('/agent', name: 'agent_list')]
    public function index(Request $request, AgentRepository $agentRepository, OfficeRepository $officeRepository): Response
    {
        $searchTerm = $request->query->get('search');
    
        if ($searchTerm) {
            // If search term is provided, find agents by name
            $agents = $agentRepository->createQueryBuilder('a')
                ->where('LOWER(a.name) LIKE :search')
                ->setParameter('search', '%' . strtolower($searchTerm) . '%')
                ->getQuery()
                ->getResult();
        } else {
            // Otherwise, return all agents
            $agents = $agentRepository->findAll();
        }
    
        return $this->render('agent/agentsUser.html.twig', [
            'agents' => $agents,
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
    #[Route('/agents/{id}/rate', name: 'rate_agent', methods: ['GET', 'POST'])]
    public function rateAgent(Request $request, Agent $agent, EntityManagerInterface $em, HttpClientInterface $client): Response
    {
        // Create a new Rate object
        $rating = new Rate();
        $rating->setAgent($agent);
    
        // Create the form for rating and comment
        $form = $this->createFormBuilder($rating)
            ->add('rating', NumberType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Please provide a rating']),
                    new Range([
                        'min' => 1,
                        'max' => 5,
                        'notInRangeMessage' => 'Rating must be between {{ min }} and {{ max }}',
                    ]),
                ],
            ])
            ->add('comment', TextareaType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Please provide a comment']),
                ],
            ])
            ->add('submit', SubmitType::class, ['label' => 'Submit Rating'])
            ->getForm();
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Get the comment from the form
                $comment = $rating->getComment();
                
                // Call the Flask API for sentiment analysis
                $response = $client->request('GET', 'http://127.0.0.1:5000/analyze_sentiment', [
                    'query' => ['comment' => $comment],
                ]);
                
                // Get sentiment from the response
                $data = $response->toArray();
                $sentiment = $data['sentiment'] ?? 'Neutral';
    
                // Set the sentiment to the Rate entity
                $rating->setSentiment($sentiment);
    
                // Persist the rate object
                $em->persist($rating);
                $em->flush();
    
                // Add success message and redirect
                $this->addFlash('success', 'Thanks for your feedback!');
                return $this->redirectToRoute('agent_list');
            } catch (\Exception $e) {
                // Handle errors
                $this->addFlash('error', 'An error occurred while saving your rating.');
            }
        }
    
        // Render the form for both GET and failed POST
        return $this->render('agent/rate.html.twig', [
            'agent' => $agent,
            'form' => $form->createView(),
        ]);
    }

   #[Route('/agent/statistics', name: 'agent_statistics')]
   public function agentStatistics(RateRepository $rateRepository): Response
   {
       // Fetch the sentiment statistics (happy, neutral, angry)
       $sentimentStatistics = $rateRepository->createQueryBuilder('r')
           ->select(
               'SUM(CASE WHEN r.sentiment = :happy THEN 1 ELSE 0 END) AS happy_count',
               'SUM(CASE WHEN r.sentiment = :neutral THEN 1 ELSE 0 END) AS neutral_count',
               'SUM(CASE WHEN r.sentiment = :angry THEN 1 ELSE 0 END) AS angry_count',
               'COUNT(r.id) AS total_ratings'
           )
           ->setParameter('happy', 'happy')
           ->setParameter('neutral', 'neutral')
           ->setParameter('angry', 'angry')
           ->getQuery()
           ->getSingleResult();

       return $this->render('agent/statisticsAgent.html.twig', [
           'sentiment_statistics' => $sentimentStatistics,
       ]);
   }
    

}


