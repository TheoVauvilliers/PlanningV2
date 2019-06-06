<?php

namespace App\Repository;

use App\Entity\VAnnuTAgent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VAnnuTAgent|null find($id, $lockMode = null, $lockVersion = null)
 * @method VAnnuTAgent|null findOneBy(array $criteria, array $orderBy = null)
 * @method VAnnuTAgent[]    findAll()
 * @method VAnnuTAgent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VAnnuTAgentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VAnnuTAgent::class);
    }

    // /**
    //  * @return VAnnuTAgent[] Returns an array of VAnnuTAgent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VAnnuTAgent
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
