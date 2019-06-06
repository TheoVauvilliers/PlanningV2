<?php

namespace App\Repository;

use App\Entity\TypeDeSalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TypeDeSalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeDeSalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeDeSalle[]    findAll()
 * @method TypeDeSalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeDeSalleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TypeDeSalle::class);
    }

    // /**
    //  * @return TypeDeSalle[] Returns an array of TypeDeSalle objects
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
    public function findOneBySomeField($value): ?TypeDeSalle
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
