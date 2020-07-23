<?php

namespace App\Repository;

use App\Entity\Chords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Chords|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chords|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chords[]    findAll()
 * @method Chords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chords::class);
    }

    // /**
    //  * @return Chords[] Returns an array of Chords objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Chords
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
