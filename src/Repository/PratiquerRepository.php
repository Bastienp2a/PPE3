<?php

namespace App\Repository;

use App\Entity\Pratiquer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pratiquer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pratiquer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pratiquer[]    findAll()
 * @method Pratiquer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PratiquerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pratiquer::class);
    }

    // /**
    //  * @return Pratiquer[] Returns an array of Pratiquer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pratiquer
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
