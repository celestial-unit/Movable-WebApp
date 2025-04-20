<?php

namespace App\Repository;

use App\Entity\EventRegistration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EventRegistrationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EventRegistration::class);
    }

    public function findAllWithEvent(): array
    {
        return $this->createQueryBuilder('er')
            ->leftJoin('er.event', 'e')
            ->addSelect('e')
            ->getQuery()
            ->getResult();
    }
}