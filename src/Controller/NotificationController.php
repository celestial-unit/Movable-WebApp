<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Repository\NotificationRepository;
use App\Service\NotificationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotificationController extends AbstractController
{
    #[Route('/notifications', name: 'app_notifications')]
    public function index(NotificationRepository $notificationRepository): Response
    {
        $notifications = $notificationRepository->findUnreadNotifications();
        return $this->render('notification/index.html.twig', [
            'notifications' => $notifications,
        ]);
    }

    #[Route('/notifications/mark-as-read/{id}', name: 'app_notification_mark_as_read')]
    public function markAsRead(Notification $notification, NotificationService $notificationService): JsonResponse
    {
        $notificationService->markAsRead($notification);
        return new JsonResponse(['success' => true]);
    }

    #[Route('/notifications/mark-all-as-read', name: 'app_notification_mark_all_as_read')]
    public function markAllAsRead(NotificationService $notificationService): JsonResponse
    {
        $notificationService->markAllAsRead();
        return new JsonResponse(['success' => true]);
    }

    #[Route('/notifications/count', name: 'app_notification_count')]
    public function count(NotificationRepository $notificationRepository): JsonResponse
    {
        try {
            $count = $notificationRepository->countUnreadNotifications();
            return new JsonResponse(['count' => $count]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], 500);
        }
    }
} 