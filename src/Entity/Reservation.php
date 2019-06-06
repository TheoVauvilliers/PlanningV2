<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=260)
     */
    private $libres;

    /**
     * @ORM\Column(type="integer")
     */
    private $etatres;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $beneficiaire;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $typres;

    /**
     * @ORM\Column(type="date")
     */
    private $datcre;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $utilcre;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datmod;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $utilmod;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Planning", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="planning", referencedColumnName="id")
     */
    private $planning;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Typeven", inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeven;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Salle", inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $salle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visPlan;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibres(): ?string
    {
        return $this->libres;
    }

    public function setLibres(string $libres): self
    {
        $this->libres = $libres;

        return $this;
    }

    public function getEtatres(): ?int
    {
        return $this->etatres;
    }

    public function setEtatres(int $etatres): self
    {
        $this->etatres = $etatres;

        return $this;
    }



    public function getBeneficiaire(): ?string
    {
        return $this->beneficiaire;
    }

    public function setBeneficiaire(?string $beneficiaire): self
    {
        $this->beneficiaire = $beneficiaire;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getTypres(): ?string
    {
        return $this->typres;
    }

    public function setTypres(string $typres): self
    {
        $this->typres = $typres;

        return $this;
    }

    public function getDatcre(): ?\DateTimeInterface
    {
        return $this->datcre;
    }

    public function setDatcre(\DateTimeInterface $datcre): self
    {
        $this->datcre = $datcre;

        return $this;
    }

    public function getUtilcre(): ?string
    {
        return $this->utilcre;
    }

    public function setUtilcre(string $utilcre): self
    {
        $this->utilcre = $utilcre;

        return $this;
    }

    public function getDatmod(): ?\DateTimeInterface
    {
        return $this->datmod;
    }

    public function setDatmod(?\DateTimeInterface $datmod): self
    {
        $this->datmod = $datmod;

        return $this;
    }

    public function getUtilmod(): ?string
    {
        return $this->utilmod;
    }

    public function setUtilmod(?string $utilmod): self
    {
        $this->utilmod = $utilmod;

        return $this;
    }

    public function getPlanning(): ?Planning
    {
        return $this->planning;
    }

    public function setPlanning(?Planning $planning): self
    {
        $this->planning = $planning;

        return $this;
    }

    public function toJson(): ?array
    {
        return [
            'id' => $this->id,
            'libres' => $this->libres,
            'etatres' => $this->etatres,
            'typeven' => $this->getTypeven()->toJson(),
            'beneficiaire' => $this->beneficiaire,
            'client' => $this->getClient()->toJson(),
            'comment' => $this->comment,
            'typres' => $this->typres,
            'datcre' => $this->datcre,
            'utilcre' => $this->utilcre,
            'datmod' => $this->datmod,
            'utilmod' => $this->utilmod,
            'planning' => $this->getPlanning()->toJson(),
            'salle' => $this->getSalle()->toJson(),
            'visPlan' => $this->visPlan
        ];
    }

    public function getTypeven(): ?Typeven
    {
        return $this->typeven;
    }

    public function setTypeven(?Typeven $typeven): self
    {
        $this->typeven = $typeven;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getSalle(): ?salle
    {
        return $this->salle;
    }

    public function setSalle(?salle $salle): self
    {
        $this->salle = $salle;

        return $this;
    }

    public function getVisPlan(): ?bool
    {
        return $this->visPlan;
    }

    public function setVisPlan(bool $visPlan): self
    {
        $this->visPlan = $visPlan;

        return $this;
    }
}