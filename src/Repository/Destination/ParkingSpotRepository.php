<?php

namespace App\Repository\Destination;

use App\Entity\ParkingSpot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ParkingSpot>
 *
 * @method ParkingSpot|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParkingSpot|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParkingSpot[]    findAll()
 * @method ParkingSpot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParkingSpotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParkingSpot::class);
    }

    /**
     * Find parking spots by availability and max fees for a specific destination.
     *
     * @param array $criteria Example: ['destination' => DestinationEntity, 'isAvailable' => 'yes']
     * @param float|null $maxFees
     * @return ParkingSpot[]
     */
    public function findByMaxFeesAndAvailability(array $criteria, ?float $maxFees): array
    {
        $qb = $this->createQueryBuilder('p')
            ->where('p.destination = :destination')
            ->setParameter('destination', $criteria['destination']);

        if (isset($criteria['isAvailable'])) {
            $qb->andWhere('p.isAvailable = :available')
               ->setParameter('available', $criteria['isAvailable']);
        }

        if ($maxFees !== null) {
            $qb->andWhere('p.parkingFees <= :maxFees')
               ->setParameter('maxFees', $maxFees);
        }

        return $qb->getQuery()->getResult();
    }
}
