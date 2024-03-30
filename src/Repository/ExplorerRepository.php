<?php

namespace App\Repository;

use App\Entity\Explorer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Explorer>
 *
 * @method Explorer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Explorer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Explorer[]    findAll()
 * @method Explorer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExplorerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Explorer::class);
    }

    //    /**
    //     * @return Explorer[] Returns an array of Explorer objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Explorer
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
