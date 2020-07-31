<?php

namespace App\Repository;

use App\Entity\DatasPage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DatasPage|null find($id, $lockMode = null, $lockVersion = null)
 * @method DatasPage|null findOneBy(array $criteria, array $orderBy = null)
 * @method DatasPage[]    findAll()
 * @method DatasPage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatasPageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DatasPage::class);
    }


    // /**
    //  * @return DatasPage[] Returns an array of DatasPage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DatasPage
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
