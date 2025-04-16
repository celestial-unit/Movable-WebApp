<?php

namespace App\Repository;

use App\Entity\EventRegistration;
use App\Entity\User;
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
            ->orderBy('er.registration_date', 'DESC')
            ->getQuery()
            ->getResult();
    }
    
    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('er')
            ->leftJoin('er.event', 'e')
            ->addSelect('e')
            ->where('er.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }
}
