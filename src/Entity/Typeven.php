<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypevenRepository")
 */
class Typeven
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $codtype;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $libelle;

    /**
     * @ORM\Column(type="integer")
     */
    private $nateven;

    /**
     * @ORM\Column(type="integer")
     */
    private $coulfon;

    /**
     * @ORM\Column(type="integer")
     */
    private $coullib;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reservation", mappedBy="typeven")
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

    public function getCodtype(): ?string
    {
        return $this->codtype;
    }

    public function setCodtype(string $codtype): self
    {
        $this->codtype = $codtype;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getNateven(): ?int
    {
        return $this->nateven;
    }

    public function setNateven(int $nateven): self
    {
        $this->nateven = $nateven;

        return $this;
    }

    public function getCoulfon(): ?int
    {
        return $this->coulfon;
    }

    public function setCoulfon(int $coulfon): self
    {
        $this->coulfon = $coulfon;

        return $this;
    }

    public function getCoullib(): ?int
    {
        return $this->coullib;
    }

    public function setCoullib(int $coullib): self
    {
        $this->coullib = $coullib;

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
            $reservation->setTypeven($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->contains($reservation)) {
            $this->reservations->removeElement($reservation);
            // set the owning side to null (unless already changed)
            if ($reservation->getTypeven() === $this) {
                $reservation->setTypeven(null);
            }
        }

        return $this;
    }

    public function toJson(): ?array
    {
        return [
            'id' => $this->id,
            'codtype' => $this->codtype,
            'libelle' => $this->libelle,
            'nateven' => $this->nateven,
            'coulfon' => $this->coulfon,
            'coullib' => $this->coullib
        ];
    }
}
