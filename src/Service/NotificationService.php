<?php

namespace App\Service;

use App\Entity\Notification;
use Doctrine\ORM\EntityManagerInterface;

class NotificationService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createNotification(string $message, ?string $type = null, ?int $entityId = null): void
    {
        $notification = new Notification();
        $notification->setMessage($message);
        $notification->setType($type);
        $notification->setEntityId($entityId);

        $this->entityManager->persist($notification);
        $this->entityManager->flush();
    }

    public function markAsRead(Notification $notification): void
    {
        $notification->setIsRead(true);
        $this->entityManager->flush();
    }

    public function markAllAsRead(): void
    {
        $this->entityManager->createQueryBuilder()
            ->update(Notification::class, 'n')
            ->set('n.isRead', true)
            ->where('n.isRead = false')
            ->getQuery()
            ->execute();
    }
} 