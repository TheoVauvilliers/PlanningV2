<?php

namespace App\Repository;

use App\Entity\Salle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Salle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Salle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Salle[]    findAll()
 * @method Salle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Salle::class);
    }

    /**
     * @return Salle[]|null
     */
    public function findAllByLocation($locationId)
    {
        return $this->createQueryBuilder('s')
            ->Where('s.lieu = :location')
            ->setParameter(':location', $locationId)
            ->orderBy('s.libelle', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Salle[]|null
     */
    public function findAllByTypeDeSalle($typeId)
    {
        return $this->createQueryBuilder('s')
            ->Where('s.typeDeSalle = :type')
            ->setParameter(':type', $typeId)
            ->orderBy('s.libelle', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }


    /*
    public function findOneBySomeField($value): ?Salle
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
