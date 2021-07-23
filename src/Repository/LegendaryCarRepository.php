<?php

namespace App\Repository;

use App\Entity\LegendaryCar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LegendaryCar|null find($id, $lockMode = null, $lockVersion = null)
 * @method LegendaryCar|null findOneBy(array $criteria, array $orderBy = null)
 * @method LegendaryCar[]    findAll()
 * @method LegendaryCar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegendaryCarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LegendaryCar::class);
    }

    // /**
    //  * @return LegendaryCar[] Returns an array of LegendaryCar objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LegendaryCar
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
