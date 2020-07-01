<?php

namespace App\Repository;

use App\Entity\IndicativePrice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IndicativePrice|null find($id, $lockMode = null, $lockVersion = null)
 * @method IndicativePrice|null findOneBy(array $criteria, array $orderBy = null)
 * @method IndicativePrice[]    findAll()
 * @method IndicativePrice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IndicativePriceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IndicativePrice::class);
    }

    // /**
    //  * @return IndicativePrice[] Returns an array of IndicativePrice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IndicativePrice
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
