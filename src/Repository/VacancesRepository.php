<?php

namespace App\Repository;

use App\Entity\Vacances;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Vacances|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vacances|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vacances[]    findAll()
 * @method Vacances[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VacancesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Vacances::class);
    }

    // /**
    //  * @return Vacances[] Returns an array of Vacances objects
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
    public function findOneBySomeField($value): ?Vacances
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
