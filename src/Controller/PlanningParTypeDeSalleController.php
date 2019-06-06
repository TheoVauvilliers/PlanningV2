<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

use App\Entity\Reservation;
use App\Entity\Salle;
use App\Entity\TypeDeSalle;

class PlanningParTypeDeSalleController extends AbstractController
{
    /**
     * @Route("/planning/typeDeSalle", name="PlanningParTypeDeSalle")
     */
    public function index(Request $request, Security $security)
    {
        $managerPrestataire = $this->getDoctrine()->getManager()->getRepository(TypeDeSalle::class);
        $typeDeSalles = $managerPrestataire->findAll();

        $typeDeSalleCourant = $request->request->get("typeSelection");

        if ($typeDeSalleCourant != null) {
            $accessToPlanning = true;
            $date = new \DateTime();
            $datejs = 'xx '.$date->format('m d Y');
            $reservation = $this->calcResa($typeDeSalleCourant, $datejs);
            $reservation = json_encode($reservation);

        } else {
            $accessToPlanning = false;
            $reservation = null;
        }

        return $this->render('planningParTypeDeSalle/index.html.twig', [
            'types' => $typeDeSalles,
            'currentType' => $typeDeSalleCourant,
            'planning' => $accessToPlanning,
            'reservation' => $reservation,
            'role' => json_encode($security->getUser()->getRoles()[0])
        ]);
    }

    /**
     * @Route("/planning/typeDeSalle/ajax", name="PlanningParTypeDeSalleAjax")
     */
    public function reqAjax(Request $request) {

        if ($request->isXmlHttpRequest()) {
            // RECUPERE DONNEES REQUETE AJAX
            $typeDeSalle = $request->request->get("typeDeSalle");
            $data = $request->request->get("planningDate");

            $reservation = $this->calcResa($typeDeSalle, $data);

            //  -> RETURN LES HORAIRES DE TOUTES LES RESERVATION TRIE PAR SALLE
            return new JsonResponse($reservation);
        }
    }

    private function calcResa($typeDeSalle, $data) {
        // TRANSMETTRE LES RESERVATIONS TRIE PAR SALLE PAR RAPPORT AU TYPE DE SALLE
        //  -> RECUPERER LES SALLES
        $managerSalle = $this->getDoctrine()->getManager()->getRepository(Salle::class);
        $salles = $managerSalle->findAllByTypeDeSalle($typeDeSalle);

        $i=0;
        do {
            $salles[$i] = $salles[$i]->toJson();
            $i++;
        } while ($i < count($salles));

        //  -> RECUPERER LES RESERVATIONS POUR TOUTES LES SALLES
        // On manipule la date js pour la convertir en date php
        $dateExplode = explode(' ', $data);

        $datetimeDebut = new \DateTime($dateExplode[3] . '-' . $dateExplode[1] . '-' . $dateExplode[2] . ' 7:59');
        $datetimeDebut->format('Y-m-d H:i');

        $datetimeFin = new \DateTime($dateExplode[3] . '-' . $dateExplode[1] . '-' . $dateExplode[2] . ' 21:01');
        $datetimeFin->format('Y-m-d H:i');

        // On effectue les requêtes et trie le tableau
        $managerReservation = $this->getDoctrine()->getManager()->getRepository(Reservation::class);

        $i=0;
        do {
            $currentSalle = $salles[$i]['libelle'];
            $reservation[$currentSalle] = $managerReservation->findByRoomAndDate($currentSalle, $datetimeDebut, $datetimeFin);

            if (isset($reservation[$currentSalle][0])) {
                $y = 0;
                do {
                    $reservation[$currentSalle][$y] = $reservation[$currentSalle][$y]->toJson();
                    $y++;
                } while ($y < count($reservation[$currentSalle]));
            }
            $i++;
        } while($i < count($salles));

        return $reservation;
    }
}