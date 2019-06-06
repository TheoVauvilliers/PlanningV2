<?php

namespace App\Repository;

use App\Entity\Typeven;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Typeven|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typeven|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typeven[]    findAll()
 * @method Typeven[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypevenRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Typeven::class);
    }

    // /**
    //  * @return Typeven[] Returns an array of Typeven objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Typeven
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
