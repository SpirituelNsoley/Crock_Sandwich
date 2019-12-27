<?php

namespace App\Repository;

use App\Entity\Bread;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Bread|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bread|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bread[]    findAll()
 * @method Bread[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BreadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bread::class);
    }

    // /**
    //  * @return Bread[] Returns an array of Bread objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bread
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
