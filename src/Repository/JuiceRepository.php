<?php

namespace App\Repository;

use App\Entity\Juice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Juice|null find($id, $lockMode = null, $lockVersion = null)
 * @method Juice|null findOneBy(array $criteria, array $orderBy = null)
 * @method Juice[]    findAll()
 * @method Juice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JuiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Juice::class);
    }

    // /**
    //  * @return Juice[] Returns an array of Juice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Juice
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
