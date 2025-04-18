<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);
        $entityManager = $this->getEntityManager();
        $entityManager->persist($user);
        $entityManager->flush();
    }

    /**
     * Find a user by their email
     */
    public function findByEmail(string $email): ?User
    {
        return $this->findOneBy(['email' => $email]);
    }

    /**
     * Find banned users
     *
     * @return User[]
     */
    public function findBannedUsers(): array
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.isBanned = :banned')
            ->setParameter('banned', true)
            ->orderBy('u.banExpiryDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find users by role
     *
     * @return User[]
     */
    public function findByRole(string $role): array
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.role = :role')
            ->setParameter('role', $role)
            ->orderBy('u.lastName', 'ASC')
            ->addOrderBy('u.firstName', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find users with recent login (within last X days)
     *
     * @return User[]
     */
    public function findWithRecentLogin(int $days = 7): array
    {
        $date = new \DateTime();
        $date->modify("-$days days");

        return $this->createQueryBuilder('u')
            ->andWhere('u.lastLogin >= :date')
            ->setParameter('date', $date)
            ->orderBy('u.lastLogin', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find users without a recent login (more than X days)
     *
     * @return User[]
     */
    public function findWithoutRecentLogin(int $days = 30): array
    {
        $date = new \DateTime();
        $date->modify("-$days days");

        return $this->createQueryBuilder('u')
            ->andWhere('u.lastLogin < :date OR u.lastLogin IS NULL')
            ->setParameter('date', $date)
            ->orderBy('u.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search users by name or email
     *
     * @return User[]
     */
    public function searchUsers(string $term): array
    {
        $qb = $this->createQueryBuilder('u');
        
        return $qb->where(
                $qb->expr()->orX(
                    $qb->expr()->like('u.firstName', ':term'),
                    $qb->expr()->like('u.lastName', ':term'),
                    $qb->expr()->like('u.email', ':term')
                )
            )
            ->setParameter('term', '%' . $term . '%')
            ->orderBy('u.lastName', 'ASC')
            ->addOrderBy('u.firstName', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Count total users
     */
    public function countUsers(): int
    {
        return $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Count users by role
     */
    public function countByRole(string $role): int
    {
        return $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->andWhere('u.role = :role')
            ->setParameter('role', $role)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Get all users with pagination
     *
     * @return User[]
     */
    public function findAllPaginated(int $page = 1, int $limit = 10): array
    {
        $offset = ($page - 1) * $limit;
        
        return $this->createQueryBuilder('u')
            ->orderBy('u.lastName', 'ASC')
            ->addOrderBy('u.firstName', 'ASC')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->getQuery()
            ->getResult();
    }
    
    /**
     * Count banned users
     */
    public function countBannedUsers(): int
    {
        return $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->andWhere('u.isBanned = :banned')
            ->setParameter('banned', true)
            ->getQuery()
            ->getSingleScalarResult();
    }
    
    /**
     * Find users by filters with pagination and return total count
     *
     * @param string $query Search query for name/email filtering
     * @param string $role Filter by user role
     * @param int $offset Pagination offset
     * @param int $limit Pagination limit
     * @return array Array with [users, totalCount]
     */
    public function findByFilters(?string $query = null, ?string $role = null, int $offset = 0, int $limit = 10): array
    {
        // Create the base query builder
        $qb = $this->createQueryBuilder('u');
        
        // Apply search filter if query is provided
        if (!empty($query)) {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('u.firstName', ':query'),
                    $qb->expr()->like('u.lastName', ':query'),
                    $qb->expr()->like('u.email', ':query')
                )
            )
            ->setParameter('query', '%' . $query . '%');
        }
        
        // Apply role filter if role is provided
        if (!empty($role)) {
            $qb->andWhere('u.role = :role')
                ->setParameter('role', $role);
        }
        
        // Clone the query builder for count query
        $countQb = clone $qb;
        
        // Get total count
        $totalCount = $countQb
            ->select('COUNT(u.id)')
            ->getQuery()
            ->getSingleScalarResult();
        
        // Apply sorting and pagination to the main query
        $users = $qb
            ->orderBy('u.lastName', 'ASC')
            ->addOrderBy('u.firstName', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
        
        // Return both the results and the total count
        return [$users, $totalCount];
    }
}
