<?php

namespace App\Repository;

use App\Entity\Notification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class NotificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Notification::class);
    }

    public function findUnreadNotifications(): array
    {
        return $this->createQueryBuilder('n')
            ->where('n.isRead = :isRead')
            ->setParameter('isRead', false)
            ->orderBy('n.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function countUnreadNotifications(): int
    {
        try {
            $count = $this->createQueryBuilder('n')
                ->select('COUNT(n.id)')
                ->where('n.isRead = :isRead')
                ->setParameter('isRead', false)
                ->getQuery()
                ->getSingleScalarResult();

            return (int) $count;
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return 0;
        }
    }
} 