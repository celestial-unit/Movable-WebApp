<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
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

    #[Route(name: 'app_eventback_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $events = $entityManager
            ->getRepository(Event::class)
            ->findAll();

        return $this->render('event/eventback.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/newback1', name: 'app_eventback_new', methods: ['GET', 'POST'])]
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

    #[Route('/back1event/{id<\d+>}', name: 'app_eventback_show', methods: ['GET'])]
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

    #[Route('/{id}/editevent', name: 'app_eventback_edit', methods: ['GET', 'POST'])]
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

    #[Route('/event/{id}', name: 'app_eventback_delete', methods: ['POST'])]
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

    #[Route('/searchback', name: 'app_eventback_search', methods: ['GET'])]
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
    #[Route('/statistics', name: 'app_event_statistics', methods: ['GET'])]
public function statistics(EntityManagerInterface $entityManager): Response
{
    // Example: Get the count of events grouped by 'type'
    $query = $entityManager->createQuery(
        'SELECT e.type, COUNT(e.id) as event_count
         FROM App\Entity\Event e
         GROUP BY e.type'
    );
    
    $statistics = $query->getResult();
    
    // Prepare data for the chart (e.g., labels and values)
    $labels = [];
    $values = [];
    
    foreach ($statistics as $stat) {
        $labels[] = 'Type ' . $stat['type'];  // Customize the label
        $values[] = $stat['event_count'];
    }

    return $this->render('event/statistics.html.twig', [
        'labels' => json_encode($labels),
        'values' => json_encode($values),
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
