<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    //    /**
    //     * @return Reservation[] Returns an array of Reservation objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Reservation
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function findWithFilters(
        string $status,
        ?string $dateFrom = null,
        ?string $dateTo = null,
        ?int $destinationId = null,
        ?string $transportType = null,
        ?string $agentType = null,
        string $sort = 'date_desc'
    ): array {
        $qb = $this->createQueryBuilder('r')
            ->andWhere('r.status = :status')
            ->setParameter('status', $status);
    
        if ($dateFrom) {
            $qb->andWhere('r.date >= :dateFrom')
               ->setParameter('dateFrom', new \DateTime($dateFrom));
        }
    
        if ($dateTo) {
            $qb->andWhere('r.date <= :dateTo')
               ->setParameter('dateTo', new \DateTime($dateTo));
        }
    
        if ($destinationId) {
            $qb->andWhere('r.destination = :destinationId')
               ->setParameter('destinationId', $destinationId);
        }
    
        if ($transportType) {
            $qb->join('r.transport', 't')
               ->andWhere('t.type = :transportType')
               ->setParameter('transportType', $transportType);
        }
    
        if ($agentType) {
            $qb->join('r.agent', 'a')
               ->andWhere('a.type = :agentType')
               ->setParameter('agentType', $agentType);
        }
    
        // Apply sorting
        switch ($sort) {
            case 'price_asc':
                $qb->orderBy('r.price', 'ASC');
                break;
            case 'price_desc':
                $qb->orderBy('r.price', 'DESC');
                break;
            case 'date_asc':
                $qb->orderBy('r.date', 'ASC');
                break;
            case 'date_desc':
            default:
                $qb->orderBy('r.date', 'DESC');
                break;
        }
    
        return $qb->getQuery()->getResult();
    }

    public function getBookingsPerDay(int $days = 30): array
    {
        $startDate = new \DateTime("-$days days");
        
        return $this->createQueryBuilder('r')
            ->select([
                "SUBSTRING(r.date, 1, 10) as day",  // Extracts YYYY-MM-DD
                "COUNT(r.id) as count"
            ])
            ->where('r.date >= :startDate')
            ->setParameter('startDate', $startDate)
            ->groupBy('day')
            ->orderBy('day', 'ASC')
            ->getQuery()
            ->getResult();
    }

public function getPopularRoutes(int $limit = 5): array
{
    return $this->createQueryBuilder('r')
        ->select([
            "d.name as destination",
            "COUNT(r.id) as count"
        ])
        ->join('r.destination', 'd')
        ->groupBy('destination')
        ->orderBy('count', 'DESC')
        ->setMaxResults($limit)
        ->getQuery()
        ->getResult();
}

public function getTransportDistribution(): array
{
    return $this->createQueryBuilder('r')
        ->select([
            "t.Type as transport",
            "COUNT(r.id) as count"
        ])
        ->join('r.transport', 't')
        ->groupBy('transport')
        ->orderBy('count', 'DESC')
        ->getQuery()
        ->getResult();
}
    public function findOneByEmail(string $email): ?Reservation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function save(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function getSeasonalTrends(): array
{
    return $this->createQueryBuilder('r')
        ->select([
            "MONTH(r.date) as month",
            "COUNT(r.id) as count"
        ])
        ->groupBy('month')
        ->orderBy('month', 'ASC')
        ->getQuery()
        ->getResult();
}
public function getRevenueMetrics(): array
{
    return $this->createQueryBuilder('r')
        ->select([
            "SUM(r.price) as totalRevenue",
            "AVG(r.price) as averageRevenue",
            "DATE(r.date) as day",
            "SUM(r.price) as dailyRevenue"
        ])
        ->where('r.status = :status')
        ->setParameter('status', Reservation::STATUS_APPROVED)
        ->groupBy('day')
        ->orderBy('day', 'ASC')
        ->getQuery()
        ->getResult();
}
public function getCancellationRate(): float
{
    $total = $this->count([]);
    $cancelled = $this->count(['status' => Reservation::STATUS_REJECTED]);
    
    return $total > 0 ? ($cancelled / $total) * 100 : 0;
}
}
