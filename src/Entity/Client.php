<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $ad1;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ad2;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ad3;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $cpostal;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $commune;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $tel;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $portable;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=260)
     */
    private $mail;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reservation", mappedBy="client")
     */
    private $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAd1(): ?string
    {
        return $this->ad1;
    }

    public function setAd1(string $ad1): self
    {
        $this->ad1 = $ad1;

        return $this;
    }

    public function getAd2(): ?string
    {
        return $this->ad2;
    }

    public function setAd2(?string $ad2): self
    {
        $this->ad2 = $ad2;

        return $this;
    }

    public function getAd3(): ?string
    {
        return $this->ad3;
    }

    public function setAd3(?string $ad3): self
    {
        $this->ad3 = $ad3;

        return $this;
    }

    public function getCpostal(): ?string
    {
        return $this->cpostal;
    }

    public function setCpostal(string $cpostal): self
    {
        $this->cpostal = $cpostal;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

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

    public function getPortable(): ?string
    {
        return $this->portable;
    }

    public function setPortable(?string $portable): self
    {
        $this->portable = $portable;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setClient($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->contains($reservation)) {
            $this->reservations->removeElement($reservation);
            // set the owning side to null (unless already changed)
            if ($reservation->getClient() === $this) {
                $reservation->setClient(null);
            }
        }

        return $this;
    }

    public function toJson(): ?array
    {
        return [
            'id' => $this->id,
            'titre' => $this->titre,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'ad1' => $this->ad1,
            'ad2' => $this->ad2,
            'ad3' => $this->ad3,
            'cpostal' => $this->cpostal,
            'commune' => $this->commune,
            'tel' => $this->tel,
            'comment' => $this->comment,
            'portable' => $this->portable,
            'fax' => $this->fax,
            'mail' => $this->mail
        ];
    }
}