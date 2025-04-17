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
        $user = $this->getUser();
        $isAdmin = $user && in_array('ROLE_ADMIN', $user->getRoles());
        
        $currentDate = new \DateTime();
        $currentDateStr = $currentDate->format('Y-m-d');
        
        // Get upcoming events
        $events = $entityManager->getRepository(Event::class)
            ->createQueryBuilder('e')
            ->where('e.dateevent >= :today')
            ->setParameter('today', $currentDateStr)
            ->orderBy('e.dateevent', 'ASC')
            ->getQuery()
            ->getResult();
        
        // Get finished events
        $finishedEvents = $entityManager->getRepository(Event::class)
            ->createQueryBuilder('e')
            ->where('e.dateevent < :today')
            ->setParameter('today', $currentDateStr)
            ->orderBy('e.dateevent', 'DESC')
            ->getQuery()
            ->getResult();

        // Get earliest upcoming event (first from the sorted upcoming events)
        $earliestEvent = !empty($events) ? $events[0] : null;

    return $this->render('event/index.html.twig', [
        'events' => $events,
        'earliestEvent' => $earliestEvent,  // Pass the earliest future event
        'finishedEvents' => $finishedEvents,
        'is_admin' => $isAdmin
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
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $event = $entityManager->getRepository(Event::class)->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Event not found.');
        }
        
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
    public function delete(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $event = $entityManager->getRepository(Event::class)->find($id);
        
        if (!$event) {
            throw $this->createNotFoundException('Event not found.');
        }
        
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/search', name: 'app_event_search', methods: ['GET'])]
    public function search(Request $request, EntityManagerInterface $entityManager): Response 
    {
        $user = $this->getUser();
        $isAdmin = $user && in_array('ROLE_ADMIN', $user->getRoles());
        
        $queryBuilder = $entityManager->getRepository(Event::class)->createQueryBuilder('e');
        
        // If not admin, only show upcoming events
        if (!$isAdmin) {
            $queryBuilder->andWhere('e.dateevent >= :today')
                ->setParameter('today', (new \DateTime())->format('Y-m-d'));
        }
    
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
    
        $events = $queryBuilder->getQuery()->getResult();
    
        // Get earliest upcoming event
        $earliestEvent = null;
        $finishedEvents = [];

        if ($events) {
            $now = new \DateTime();
            $upcomingEvents = array_filter($events, function($event) use ($now) {
                return \DateTime::createFromFormat('Y-m-d', $event->getDateevent()) >= $now;
            });
            
            $finishedEvents = array_filter($events, function($event) use ($now) {
                return \DateTime::createFromFormat('Y-m-d', $event->getDateevent()) < $now;
            });

            if (!empty($upcomingEvents)) {
                $earliestEvent = reset($upcomingEvents);
            }
        }
    
        return $this->render('event/index.html.twig', [
            'events' => $events,
            'earliestEvent' => $earliestEvent,
            'finishedEvents' => $finishedEvents,
            'is_admin' => $isAdmin
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
