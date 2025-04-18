<?php

namespace App\Repository;

use App\Entity\Reclamation;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    /**
     * Find reclamations by status
     *
     * @return Reclamation[]
     */
    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.status = :status')
            ->setParameter('status', $status)
            ->orderBy('r.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find reclamations by user
     *
     * @return Reclamation[]
     */
    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.user = :user')
            ->setParameter('user', $user)
            ->orderBy('r.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find reclamations by user and status
     *
     * @return Reclamation[]
     */
    public function findByUserAndStatus(User $user, string $status): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.user = :user')
            ->andWhere('r.status = :status')
            ->setParameter('user', $user)
            ->setParameter('status', $status)
            ->orderBy('r.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find reclamations by category
     *
     * @return Reclamation[]
     */
    public function findByCategory(string $category): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.category = :category')
            ->setParameter('category', $category)
            ->orderBy('r.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find recent reclamations (within X days)
     *
     * @return Reclamation[]
     */
    public function findRecent(int $days = 7, int $limit = 10): array
    {
        $date = new \DateTime();
        $date->modify("-$days days");

        return $this->createQueryBuilder('r')
            ->andWhere('r.created_at >= :date')
            ->setParameter('date', $date)
            ->orderBy('r.created_at', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Get paginated list of all reclamations
     *
     * @return Paginator
     */
    public function findPaginated(int $page = 1, int $limit = 10, array $filters = []): Paginator
    {
        $query = $this->createQueryBuilder('r')
            ->leftJoin('r.user', 'u')
            ->addSelect('u');
        
        // Apply filters if provided
        if (!empty($filters['status'])) {
            $query->andWhere('r.status = :status')
                ->setParameter('status', $filters['status']);
        }
        
        if (!empty($filters['category'])) {
            $query->andWhere('r.category = :category')
                ->setParameter('category', $filters['category']);
        }
        
        if (!empty($filters['user'])) {
            $query->andWhere('r.user = :user')
                ->setParameter('user', $filters['user']);
        }
        
        if (!empty($filters['search'])) {
            $query->andWhere(
                $query->expr()->orX(
                    $query->expr()->like('r.title', ':search'),
                    $query->expr()->like('r.description', ':search')
                )
            )
            ->setParameter('search', '%' . $filters['search'] . '%');
        }
        
        // Apply default sorting
        $query->orderBy('r.created_at', 'DESC');
        
        // Pagination
        $query->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit);
        
        return new Paginator($query);
    }

    /**
     * Count reclamations by status
     */
    public function countByStatus(string $status): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->andWhere('r.status = :status')
            ->setParameter('status', $status)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Count total reclamations with filters
     */
    public function count(array $filters = []): int
    {
        $query = $this->createQueryBuilder('r')
            ->select('COUNT(r.id)');
        
        if (!empty($filters['status'])) {
            $query->andWhere('r.status = :status')
                ->setParameter('status', $filters['status']);
        }
        
        if (!empty($filters['category'])) {
            $query->andWhere('r.category = :category')
                ->setParameter('category', $filters['category']);
        }
        
        if (!empty($filters['user'])) {
            $query->andWhere('r.user = :user')
                ->setParameter('user', $filters['user']);
        }
        
        return $query->getQuery()->getSingleScalarResult();
    }

    /**
     * Get reclamation statistics
     * 
     * @return array Statistics about reclamations
     */
    public function getStatistics(): array
    {
        $totalQuery = $this->createQueryBuilder('r')
            ->select('COUNT(r.id) as total')
            ->getQuery();
        
        $statusQuery = $this->createQueryBuilder('r')
            ->select('r.status, COUNT(r.id) as count')
            ->groupBy('r.status')
            ->getQuery();
        
        $categoryQuery = $this->createQueryBuilder('r')
            ->select('r.category, COUNT(r.id) as count')
            ->groupBy('r.category')
            ->getQuery();
        
        $recentQuery = $this->createQueryBuilder('r')
            ->select('COUNT(r.id) as count')
            ->where('r.created_at >= :date')
            ->setParameter('date', new \DateTime('-7 days'))
            ->getQuery();
        
        $total = $totalQuery->getSingleScalarResult();
        $statusCounts = [];
        foreach ($statusQuery->getResult() as $row) {
            $statusCounts[$row['status']] = $row['count'];
        }
        
        $categoryCounts = [];
        foreach ($categoryQuery->getResult() as $row) {
            $categoryCounts[$row['category']] = $row['count'];
        }
        
        return [
            'total' => $total,
            'status' => $statusCounts,
            'categories' => $categoryCounts,
            'recent' => $recentQuery->getSingleScalarResult(),
        ];
    }
}
