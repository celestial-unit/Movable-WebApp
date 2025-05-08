<?php

namespace App\Controller;
use App\Repository\RateRepository;
use App\Service\NotificationService;
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
use Knp\Component\Pager\PaginatorInterface;

class AgentController extends AbstractController
{
    #[Route('/agent', name: 'agent_list')]
    public function index(Request $request, AgentRepository $agentRepository, OfficeRepository $officeRepository, PaginatorInterface $paginator): Response
    {
        $searchTerm = $request->query->get('search');
        $queryBuilder = $agentRepository->createQueryBuilder('a');
    
        if ($searchTerm) {
            $queryBuilder->where('LOWER(a.name) LIKE :search')
                ->setParameter('search', '%' . strtolower($searchTerm) . '%');
        }
    
        $query = $queryBuilder->getQuery();
        
        $agents = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6 // Number of items per page
        );
    
        return $this->render('agent/agentsUser.html.twig', [
            'agents' => $agents,
            'offices' => $officeRepository->findAll(),
        ]);
    }
    


    #[Route('/admin/agents', name: 'agent_list_admin')]
    public function index2(Request $request, AgentRepository $agentRepository, OfficeRepository $officeRepository, PaginatorInterface $paginator): Response
    {
        $searchTerm = $request->query->get('search', '');
        $sortBy = $request->query->get('sort', 'name');
        $direction = $request->query->get('direction', 'asc');
    
        // Create query builder
        $queryBuilder = $agentRepository->createQueryBuilder('a');
    
        // Apply search filter if search term exists
        if ($searchTerm) {
            $queryBuilder
                ->where('LOWER(a.name) LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . strtolower($searchTerm) . '%');
        }
    

        $allowedFields = ['name', 'phone']; 
        if (in_array($sortBy, $allowedFields, true)) {
            $queryBuilder->orderBy('a.' . $sortBy, $direction);
        } else {
            $queryBuilder->orderBy('a.name', 'asc'); 
        }
    

        $agents = $paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            
        );
    
       
        if ($request->isXmlHttpRequest() || $request->headers->get('Turbo-Frame')) {
            return $this->render('agent/_agents_list.html.twig', [
                'agents' => $agents,
            ]);
        }
    
        return $this->render('agent/agentsAdmin.html.twig', [
            'agents' => $agents,
            'offices' => $officeRepository->findAll(),
        ]);
    }
    
    


    #[Route('/agent/new', name: 'agent_new')]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger, NotificationService $notificationService): Response
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
                        $this->getParameter('pictures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception('Upload failed.');
                }
    
                $agent->setPictureP('uploads/agents/'.$newFilename);
            }
    
            $entityManager->persist($agent);
            $entityManager->flush();

            // Create notification
            $notificationService->createNotification(
                "New agent {$agent->getName()} has been added",
                'agent',
                $agent->getId()
            );
    
            $this->addFlash('success', 'Agent added successfully!');
            return $this->redirectToRoute('agent_list_admin');
        }
    
        return $this->render('agent/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/agent/edit/{id}', name: 'agent_edit')]
    public function edit(Request $request, Agent $agent, EntityManagerInterface $entityManager, SluggerInterface $slugger, NotificationService $notificationService): Response
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
                $originalFilename = pathinfo($pictureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pictureFile->guessExtension();
    
                try {
                    $pictureFile->move(
                        $this->getParameter('pictures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception('Upload failed.');
                }
    
                $agent->setPictureP('uploads/agents/'.$newFilename);
            }
    
            $entityManager->flush();

            // Create notification
            $notificationService->createNotification(
                "Agent {$agent->getName()} has been updated",
                'agent',
                $agent->getId()
            );
    
            $this->addFlash('success', 'Agent updated successfully!');
            return $this->redirectToRoute('agent_list_admin');
        }
    
        return $this->render('agent/form.html.twig', [
            'form' => $form->createView(),
            'current_picture' => $agent->getPictureP(),
        ]);
    }

    #[Route('/agent/delete/{id}', name: 'agent_delete')]
    public function delete(Agent $agent, EntityManagerInterface $entityManager, NotificationService $notificationService): Response
    {
        $office = $agent->getOffice();
        $agentName = $agent->getName();

        if ($office) {
            $office->setAgents($office->getAgents() - 1);
            $entityManager->persist($office);
        }

        $entityManager->remove($agent);
        $entityManager->flush();

        // Create notification
        $notificationService->createNotification(
            "Agent {$agentName} has been deleted",
            'agent'
        );

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

                $comment = $rating->getComment();
                
    
                $response = $client->request('GET', 'http://127.0.0.1:5000/analyze_sentiment', [
                    'query' => ['comment' => $comment],
                ]);
 
                $data = $response->toArray();
                $sentiment = $data['sentiment'] ?? 'Neutral';
    
        
                $rating->setSentiment($sentiment);

                $em->persist($rating);
                $em->flush();
   
                $this->addFlash('success', 'Thanks for your feedback!');
                return $this->redirectToRoute('agent_list');
            } catch (\Exception $e) {
  
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
    
    #[Route('/agent/export-csv', name: 'agent_export_csv')]
    public function exportCsv(AgentRepository $agentRepository): Response
    {
        $agents = $agentRepository->findAll();
        
        $response = new Response();
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="agents.csv"');
        
        $handle = fopen('php://output', 'w+');
        
        // Add UTF-8 BOM
        fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));
        
        // Add the header of the CSV file
        fputcsv($handle, [
            'ID',
            'Name',
            'Email',
            'Type',
            'Status',
            'Phone',
            'Birthdate',
            'Office',
            'Created At',
            'Updated At'
        ]);
        
        // Add the data
        foreach ($agents as $agent) {
            fputcsv($handle, [
                $agent->getId(),
                $agent->getName(),
                $agent->getEmail(),
                $agent->getType(),
                $agent->getStatus(),
                $agent->getPhone(),
                $agent->getBirthdate() ? $agent->getBirthdate()->format('Y-m-d') : '',
                $agent->getOffice() ? $agent->getOffice()->getName() : '',
                $agent->getCreatedAt() ? $agent->getCreatedAt()->format('Y-m-d H:i:s') : '',
                $agent->getUpdatedAt() ? $agent->getUpdatedAt()->format('Y-m-d H:i:s') : ''
            ]);
        }
        
        fclose($handle);
        
        return $response;
    }
}

