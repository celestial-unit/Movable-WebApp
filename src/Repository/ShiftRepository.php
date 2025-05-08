<?php

namespace App\Repository;

use App\Entity\Shift;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Shift>
 *
 * @method Shift|null find($id, $lockMode = null, $lockVersion = null)
 * @method Shift|null findOneBy(array $criteria, array $orderBy = null)
 * @method Shift[]    findAll()
 * @method Shift[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShiftRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Shift::class);
    }

    /**
     * Find all shifts with the related driver eagerly loaded.
     */
    public function findAllWithDrivers(): array
    {
        return $this->createQueryBuilder('s')
            ->leftJoin('s.driver', 'd')  // Assuming 'driver' is the relation in the Shift entity
            ->addSelect('d')  // Eagerly fetch the driver
            ->getQuery()
            ->getResult();
    }
}
