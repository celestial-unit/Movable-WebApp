<?php

namespace App\Repository;

use App\Entity\Destination\Destination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DestinationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Destination::class);
    }

    public function findAllWithRelatedData(): array
    {
        return $this->createQueryBuilder('d')
            // Example: Join with a related entity if exists (e.g., d.parkingSpots)
            // ->leftJoin('d.parkingSpots', 'p')
            // ->addSelect('p')
            ->leftJoin('d.destination', 'de')
            ->addSelect('d')
            ->getQuery()
            ->getResult();
    }
    public function findAllWithParkingSpots()
{
    return $this->createQueryBuilder('d')
        ->leftJoin('d.parkingSpots', 'p')
        ->addSelect('p')
        ->getQuery()
        ->getResult();
}

public function findBySearchQuery(string $query)
    {
        return $this->createQueryBuilder('d')
            ->where('d.name LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->getQuery()
            ->getResult();
    }
}

