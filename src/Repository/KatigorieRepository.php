<?php

namespace App\Repository;

use App\Entity\Katigorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Katigorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Katigorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Katigorie[]    findAll()
 * @method Katigorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KatigorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Katigorie::class);
    }

    // /**
    //  * @return Katigorie[] Returns an array of Katigorie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Katigorie
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
