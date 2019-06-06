<?php

namespace App\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

use App\Form\ReservationType;
use App\Form\ReservationEditType;

use App\Entity\Reservation;


class ReservationController extends AbstractController
{
    /**
     * @Route("/planning/reservation", name="reservation")
     */
    public function reservation(Request $request, ObjectManager $manager, Security $security)
    {
        $dateFormat = true;
        $canRes = true;
        $sameDate = false;

        $reservation = new Reservation();

        $form = $this->createForm(ReservationType::class, $reservation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $minDeb = $reservation->getPlanning()->getDatetimeDebut();
            $minDeb = $minDeb->format('i');

            $minFin = $reservation->getPlanning()->getDatetimeFin();
            $minFin = $minFin->format('i');


            if (($minDeb == '00' || $minDeb == '30') && ($minFin == '00' || $minFin == '30')) {
                if ($reservation->getPlanning()->getDatetimeDebut() != $reservation->getPlanning()->getDatetimeFin()) {

                    $reservation->setEtatres(0)
                                ->setTypres('R')
                                ->setDatcre(new \DateTime())
                                ->setUtilcre($security->getUser()->getCptutil())
                                ->setVisPlan(0);

                    $managerReservation = $this->getDoctrine()->getManager()->getRepository(Reservation::class);
                    $canRes = $managerReservation->findByRoomAndDate($reservation->getSalle()->getLibelle(), $reservation->getPlanning()->getDatetimeDebut(), $reservation->getPlanning()->getDatetimeFin());

                    if(!$canRes) {
                        $manager->persist($reservation);
                        $manager->flush();
                        return $this->redirectToRoute('planning');
                    } else {
                        $canRes = false;
                    }
                } else {
                    $sameDate = true;
                }
            } else {
                $dateFormat = false;
            }

        }

        return $this->render('reservation/reservation.html.twig', [
            'form' => $form->createView(),
            'date' => $dateFormat,
            'canRes' => $canRes,
            'sameDate' => $sameDate
        ]);
    }

    /**
     * @Route("/planning/visualiser/{id}", name="visualiser", defaults={"id" =0})
     */
    public function visualiser(Reservation $reservation)
    {
        $form = $this->createForm(ReservationType::class, $reservation);

        return $this->render('reservation/visualiser.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/planning/modification/{id}", name="modification", defaults={"id" = 0})
     */
    public function modification(Reservation $reservation, Request $request, ObjectManager $manager, Security $security)
    {
        $dateFormat = true;
        $canRes = true;
        $sameDate = false;

        $alreadyAccepted = $reservation->getVisPlan();

        $form = $this->createForm(ReservationEditType::class, $reservation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($form->getClickedButton()->getName() == "accept") {
                $this->accepter($reservation, $manager);
                return $this->redirectToRoute('planning');

            } elseif ($form->getClickedButton()->getName() === "delete") {
                $this->supprimer($reservation, $manager);
                return $this->redirectToRoute('planning');

            } else {
                $minDeb = $reservation->getPlanning()->getDatetimeDebut();
                $minDeb = $minDeb->format('i');

                $minFin = $reservation->getPlanning()->getDatetimeFin();
                $minFin = $minFin->format('i');


                if (($minDeb == '00' || $minDeb == '30') && ($minFin == '00' || $minFin == '30')) {
                    if ($reservation->getPlanning()->getDatetimeDebut() !== $reservation->getPlanning()->getDatetimeFin()) {

                        $reservation->setDatmod(new \DateTime())
                                    ->setUtilmod($security->getUser()->getCptutil());

                        $managerReservation = $this->getDoctrine()->getManager()->getRepository(Reservation::class);
                        $resPossible = $managerReservation->findByRoomAndDate2($reservation->getSalle()->getLibelle(), $reservation->getId(), $reservation->getPlanning()->getDatetimeDebut(), $reservation->getPlanning()->getDatetimeFin());

                        $canRes = !count($resPossible);

                        if($canRes) {
                            $manager->persist($reservation);
                            $manager->flush();
                            return $this->redirectToRoute('planning');

                        } else {
                            $canRes = false;
                        }
                    } else {
                        $sameDate = true;
                    }
                } else {
                    $dateFormat = false;
                }

            }
        }

        return $this->render('reservation/modification.html.twig', [
            'form' => $form->createView(),
            'date' => $dateFormat,
            'canRes' => $canRes,
            'alreadyAccepted' => $alreadyAccepted,
            'sameDate' => $sameDate
        ]);
    }

    private function supprimer(Reservation $reservation, ObjectManager $manager) {
        $manager->remove($reservation);
        $manager->flush();
    }

    private function accepter(Reservation $reservation, ObjectManager $manager) {
        $reservation->setVisPlan(true);

        $manager->persist($reservation);
        $manager->flush();
    }
}