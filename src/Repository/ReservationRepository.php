<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    /**
     * @return Reservation[]|null
     */
    public function findByRoomAndDate($room, $dateStart, $dateEnd)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT r 
                FROM App\Entity\Reservation r
                    INNER JOIN r.planning p
                    INNER JOIN r.salle s
                WHERE
                    s.libelle = :room
                    AND
                    (
                        (
                            (p.datetimeDebut > :dateStart)
                            AND
                            (p.datetimeDebut < :dateEnd)
                        )
                        OR
                        (
                            (p.datetimeFin > :dateStart)
                            AND
                            (p.datetimeFin < :dateEnd)
                        )
                        OR
                        (
                            (p.datetimeDebut < :dateStart)
                            AND
                            (p.datetimeFin > :dateEnd)
                        )
                    )
                ORDER BY p.datetimeDebut ASC
            '
        );

        $query->setParameter(':room', $room);
        $query->setParameter(':dateStart', $dateStart);
        $query->setParameter(':dateEnd', $dateEnd);

        return $result = $query->getResult();
    }

    /**
     * @return Reservation[]|null
     */
    public function findByRoomAndDate2($room, $id, $dateStart, $dateEnd)
    {
        $query = $this->getEntityManager()->createQuery(
            '
                SELECT r 
                FROM App\Entity\Reservation r
                    INNER JOIN r.planning p
                    INNER JOIN r.salle s
                WHERE s.libelle = :room 
                    AND r.id != :id	                
                    AND 
                    (
                        (
                            (p.datetimeDebut < :dateStart)
                            AND
                            (p.datetimeFin > :dateStart)
                        )
                        OR
                        (
                            (p.datetimeDebut < :dateEnd)
                            AND
                            (p.datetimeFin > :dateEnd)
                        )
                    )
            '
        );

        $query->setParameter(':room', $room);
        $query->setParameter(':id', $id);
        $query->setParameter(':dateStart', $dateStart);
        $query->setParameter(':dateEnd', $dateEnd);

        return $result = $query->getResult();
    }

    /*
    public function findOneBySomeField($value): ?Reservation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
