<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Controller\EventRegistrationBackOfficeController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/eventback')]
final class eventControllerback extends AbstractController
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    #[Route('/', name: 'app_eventback_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $events = $entityManager
            ->getRepository(Event::class)
            ->findAll();

        return $this->render('event/eventback.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/new', name: 'app_eventback_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Apply profanity filtering
            $event->setTitle($this->checkProfanity($event->getTitle()));
            $event->setDescription($this->checkProfanity($event->getDescription()));

            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_eventback_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/new1.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_eventback_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(int $id, EntityManagerInterface $entityManager): Response
    {
        $event = $entityManager->getRepository(Event::class)->find($id);

        if (!$event) {
            throw $this->createNotFoundException('Event not found.');
        }

        return $this->render('event/show1.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_eventback_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Apply profanity filtering
            $event->setTitle($this->checkProfanity($event->getTitle()));
            $event->setDescription($this->checkProfanity($event->getDescription()));

            $entityManager->flush();

            return $this->redirectToRoute('app_eventback_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/edit1.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_eventback_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_eventback_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/check-profanity', name: 'app_eventback_check_profanity', methods: ['POST'])]
    public function checkProfanityApi(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $text = $data['text'] ?? '';

        return $this->json([
            'censoredText' => $this->checkProfanity($text)
        ]);
    }

    private function checkProfanity(string $text): string
    {
        if (empty($text)) {
            return $text;
        }

        try {
            $response = $this->httpClient->request(
                'GET',
                'https://api.api-ninjas.com/v1/profanityfilter',
                [
                    'query' => ['text' => $text],
                    'headers' => ['X-Api-Key' => '7MZ8I1rg6OPvkwKNycgUcQ==qCkRzAayzDJ26Nj3'],
                ]
            );

            if ($response->getStatusCode() === 200) {
                $content = $response->toArray();
                return $content['has_profanity'] ? $content['censored'] : $text;
            }
        } catch (\Exception $e) {
            // Log error if needed
        }

        return $text;
    }

    // Remaining methods unchanged (searchback, statistics)
    // ... [Keep the existing searchback and statistics methods as they were] ...

    #[Route('/search', name: 'app_eventback_search', methods: ['GET'])]
    public function search(Request $request, EntityManagerInterface $entityManager): Response
    {
        $queryBuilder = $entityManager->getRepository(Event::class)->createQueryBuilder('e');
    
        $filters = [
            'title' => $request->query->get('title'),
            'description' => $request->query->get('description'),
            'duration' => $request->query->get('duration'),
            'type' => $request->query->get('type'),
            'status' => $request->query->get('status'),
            'dateevent' => $request->query->get('dateevent'),
            'startEvent' => $request->query->get('startEvent'),
        ];
    
        foreach ($filters as $field => $value) {
            if ($value) {
                if ($field === 'title' || $field === 'description') {
                    // For title and description, use LIKE for partial matching
                    $queryBuilder->andWhere("e.$field LIKE :$field")->setParameter($field, "%$value%");
                } elseif ($field === 'dateevent') {
                    // Treat dateevent as a string and match it using LIKE
                    $queryBuilder->andWhere("e.$field LIKE :$field")->setParameter($field, "%$value%");
                } elseif ($field === 'startEvent') {
                    // Treat startEvent as a DateTime and convert it to a DateTime object
                    $queryBuilder->andWhere("e.$field = :$field")->setParameter($field, new \DateTime($value));
                } else {
                    // Other fields are treated normally
                    $queryBuilder->andWhere("e.$field = :$field")->setParameter($field, $value);
                }
            }
        }
        
    
        $events = $queryBuilder->getQuery()->getResult();
    
        return $this->render('event/eventback.html.twig', [
            'events' => $events, // Reusing index.html.twig
        ]);
    }
    #[Route('/statistics', name: 'app_eventback_statistics', methods: ['GET'])]
public function statistics(EntityManagerInterface $entityManager): Response
{
    // Get events count by type
    $eventsByType = $entityManager->createQuery(
        'SELECT e.type, COUNT(e.id) as count
         FROM App\Entity\Event e
         GROUP BY e.type'
    )->getResult();
    
    // Get upcoming events count
    $upcomingEvents = $entityManager->createQuery(
        'SELECT COUNT(e.id)
         FROM App\Entity\Event e
         WHERE e.dateevent >= :today'
    )->setParameter('today', new \DateTime('today'))
     ->getSingleScalarResult();

    // Get registrations by status
    $registrationsByStatus = $entityManager->createQuery(
        'SELECT er.status, COUNT(er.id) as count
         FROM App\Entity\EventRegistration er
         GROUP BY er.status'
    )->getResult();
    
    // Prepare data for the chart (e.g., labels and values)
    $labels = [];
    $values = [];
    
    foreach ($eventsByType as $stat) {
        $labels[] = 'Type ' . $stat['type'];  // Customize the label
        $values[] = $stat['count'];
    }

    return $this->render('event/statistics.html.twig', [
        'labels' => json_encode($labels),
        'values' => json_encode($values),
        'eventsByType' => $eventsByType,
        'upcomingEvents' => $upcomingEvents,
        'registrationsByStatus' => $registrationsByStatus
    ]);
}
#[Route('/registration/new/{eventId}', name: 'app_eventback_registration_new', methods: ['GET', 'POST'])]
public function newRegistration(
    int $eventId,
    Request $request,
    EntityManagerInterface $entityManager
): Response {
    // Check if user has admin role
    if (!$this->isGranted('ROLE_ADMIN')) {
        $this->addFlash('error', 'Only administrators can access this page.');
        return $this->redirectToRoute('app_eventback_index');
    }

    // Find the event
    $event = $entityManager->getRepository(Event::class)->find($eventId);
    
    // If event doesn't exist, redirect to event list with error message
    if (!$event) {
        $this->addFlash('error', 'Event not found. It may have been deleted.');
        return $this->redirectToRoute('app_eventback_index');
    }

    // Create new registration
    $registration = new \App\Entity\EventRegistration();
    $registration->setEvent($event);
    $registration->setRegistrationDate((new \DateTime())->format('Y-m-d H:i:s'));
    $registration->setStatus('Pending');

    // Create and handle the form
    $form = $this->createForm(\App\Form\EventRegistrationType::class, $registration);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        try {
            $entityManager->persist($registration);
            $entityManager->flush();
            
            $this->addFlash('success', 'Registration created successfully.');
            return $this->redirectToRoute('app_eventback_index');
        } catch (\Exception $e) {
            $this->addFlash('error', 'An error occurred while creating the registration.');
        }
    }

    return $this->render('event_registration/new1.html.twig', [
        'event' => $event,
        'form' => $form->createView()
    ]);
}

// In your controller
#[Route('/events-json', name: 'app_eventback_events_json', methods: ['GET'])]
public function getEventsJson(Request $request, EntityManagerInterface $entityManager): JsonResponse
{
    try {
        $start = $request->query->get('start');
        $end = $request->query->get('end');

        $query = $entityManager->createQueryBuilder()
            ->select('e')
            ->from(Event::class, 'e')
            ->where('e.dateevent BETWEEN :start AND :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery();

        $events = $query->getResult();

        if (!$events) {
            return new JsonResponse([]); // Return empty array so JS will handle "No event"
        }

        $eventData = array_map(function (Event $event) {
            return [
                'id' => $event->getId(),
                'title' => $event->getTitle(),
                'start' => $event->getDateevent() . 'T00:00:00',

                'description' => $event->getDescription(),
                'status' => $event->getStatus(),
                'type' => $event->getType(),
                'url' => $this->generateUrl('app_eventback_show', ['id' => $event->getId()]),
                'color' => $this->getEventColor($event->getType()),
                'extendedProps' => [
                    'duration' => $event->getDuration(),
                    'governorate' => $event->getStatus()
                ]
            ];
        }, $events);

        return new JsonResponse($eventData);
    } catch (\Exception $e) {
        return new JsonResponse(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}


private function getEventColor(int $type): string
{
    return match ($type) {
        1 => '#3788d8', // Conference
        2 => '#3cb371', // Workshop
        3 => '#ff6b6b', // Meeting
        default => '#6c757d',
    };
}
#[Route('/calendar', name: 'calendar', methods: ['GET'])]
public function calendar(): Response
{
    return $this->render('event/calendar.html.twig');
}

}
