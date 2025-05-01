<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\GeocodingService;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/event')]
final class EventController extends AbstractController
{
    #[Route(name: 'app_event_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
{
    // Get all events
    $events = $entityManager->getRepository(Event::class)->findAll();

    // Get the earliest future event (find the one with the earliest 'dateevent' and 'startEvent' in case of a tie)
    $earliestEvent = null;
    $earliestYear = $earliestMonth = $earliestDay = null;
    $earliestStartTime = null; // To store the earliest start time in case of a tie
    $currentDate = new \DateTime();  // Get the current date

    foreach ($events as $event) {
        $eventDate = $event->getDateevent();
        if ($eventDate) {
            // Split the date string into year, month, and day
            list($year, $month, $day) = explode('-', $eventDate);

            // Convert to integers for proper comparison
            $year = (int)$year;
            $month = (int)$month;
            $day = (int)$day;

            // Check if the event is not finished (i.e., its date is in the future)
            $eventDateTime = \DateTime::createFromFormat('Y-m-d', $eventDate);
            if ($eventDateTime && $eventDateTime >= $currentDate) {
                // Compare parts (year, month, day) to find the earliest future event
                if (!$earliestYear || $year < $earliestYear || ($year == $earliestYear && $month < $earliestMonth) || ($year == $earliestYear && $month == $earliestMonth && $day < $earliestDay)) {
                    // Update if we found a truly earlier event
                    $earliestYear = $year;
                    $earliestMonth = $month;
                    $earliestDay = $day;
                    $earliestEvent = $event;
                    $earliestStartTime = $event->getStartEvent();  // Store the startEvent time for tie-breaking
                } elseif ($year == $earliestYear && $month == $earliestMonth && $day == $earliestDay) {
                    // If the dates are the same, break the tie by comparing startEvent time
                    if ($event->getStartEvent() < $earliestStartTime) {
                        $earliestEvent = $event;
                        $earliestStartTime = $event->getStartEvent();  // Update the start time
                    }
                }
            }
        }
    }

    // Get finished events (those with 'dateevent' before today)
    $finishedEvents = [];

    foreach ($events as $event) {
        $eventDate = \DateTime::createFromFormat('Y-m-d', $event->getDateevent());
        if ($eventDate && $eventDate < $currentDate) {
            $finishedEvents[] = $event;
        }
    }

    return $this->render('event/index.html.twig', [
        'events' => $events,
        'earliestEvent' => $earliestEvent,  // Pass the earliest future event
        'finishedEvents' => $finishedEvents,
    ]);
}

    #[Route('/back', name: 'app_eventback_index', methods: ['GET'])]
    public function adminIndex(EntityManagerInterface $entityManager): Response
    {
        $events = $entityManager->getRepository(Event::class)->findAll();
        return $this->render('event/eventback.html.twig', [
            'events' => $events
        ]);
    }

    #[Route('/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_event_show', methods: ['GET'])]
    public function show(int $id, EntityManagerInterface $entityManager): Response
    
{
    $event = $entityManager->getRepository(Event::class)->find($id);

    if (!$event) {
        throw $this->createNotFoundException('Event not found.');
    }

    return $this->render('event/show.html.twig', [
        'event' => $event,
    ]);
}


    #[Route('/{id}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/search', name: 'app_event_search', methods: ['GET'])]
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
                    $queryBuilder->andWhere("e.$field LIKE :$field")->setParameter($field, "%$value%");
                } elseif ($field === 'dateevent') {
                    $queryBuilder->andWhere("e.$field LIKE :$field")->setParameter($field, "%$value%");
                } elseif ($field === 'startEvent') {
                    $queryBuilder->andWhere("e.$field = :$field")->setParameter($field, new \DateTime($value));
                } else {
                    $queryBuilder->andWhere("e.$field = :$field")->setParameter($field, $value);
                }
            }
        }
    
        // Fetch events based on search filters
        $events = $queryBuilder->getQuery()->getResult();
    
        // Fetch earliest upcoming event
        $earliestEvent = $entityManager->getRepository(Event::class)->createQueryBuilder('e')
            ->where('e.dateevent >= :today')
            ->setParameter('today', (new \DateTime())->format('Y-m-d'))
            ->orderBy('e.dateevent', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    
        // Fetch finished events (past events)
        $finishedEvents = $entityManager->getRepository(Event::class)->createQueryBuilder('e')
            ->where('e.dateevent < :today')
            ->setParameter('today', (new \DateTime())->format('Y-m-d'))
            ->orderBy('e.dateevent', 'DESC')
            ->getQuery()
            ->getResult();
    
        return $this->render('event/index.html.twig', [
            'events' => $events,
            'earliestEvent' => $earliestEvent,
            'finishedEvents' => $finishedEvents
        ]);
    }
    #[Route('coordinates/{city}', name: 'app_event_coordinates', methods: ['GET'])]
public function getCoordinates(
    string $city, 
    GeocodingService $geocodingService
): JsonResponse {
    try {
        $coordinates = $geocodingService->getCoordinates($city);
        
        return $this->json([
            'city' => $city,
            'coordinates' => $coordinates
        ]);
    } catch (\Exception $e) {
        return $this->json([
            'error' => 'Could not retrieve coordinates',
            'message' => $e->getMessage()
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
    #[Route('/coordinates', name: 'app_event_coordinates_page', methods: ['GET'])]
public function coordinatesPage(Request $request): Response
{
    $city = $request->query->get('city');
    
    if (!$city) {
        return $this->redirectToRoute('app_event_index');
    }

    return $this->render('event/coordinates.html.twig', [
        'city' => $city
    ]);
}

    

}
