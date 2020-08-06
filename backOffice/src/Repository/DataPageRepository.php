<?php

namespace App\Repository;

use App\Entity\DataPage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataPage|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataPage|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataPage[]    findAll()
 * @method DataPage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataPageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataPage::class);
    }

    // /**
    //  * @return DataPage[] Returns an array of DataPage objects
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
    public function findOneBySomeField($value): ?DataPage
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
