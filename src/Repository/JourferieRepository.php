<?php

namespace App\Repository;

use App\Entity\Jourferie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Jourferie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jourferie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jourferie[]    findAll()
 * @method Jourferie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JourferieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Jourferie::class);
    }

    // /**
    //  * @return Jourferie[] Returns an array of Jourferie objects
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
    public function findOneBySomeField($value): ?Jourferie
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
