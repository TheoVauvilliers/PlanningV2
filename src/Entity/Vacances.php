<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VacancesRepository")
 */
class Vacances
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $datdeb;

    /**
     * @ORM\Column(type="date")
     */
    private $datfin;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $libvac;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatdeb(): ?\DateTimeInterface
    {
        return $this->datdeb;
    }

    public function setDatdeb(\DateTimeInterface $datdeb): self
    {
        $this->datdeb = $datdeb;

        return $this;
    }

    public function getDatfin(): ?\DateTimeInterface
    {
        return $this->datfin;
    }

    public function setDatfin(\DateTimeInterface $datfin): self
    {
        $this->datfin = $datfin;

        return $this;
    }

    public function getLibvac(): ?string
    {
        return $this->libvac;
    }

    public function setLibvac(string $libvac): self
    {
        $this->libvac = $libvac;

        return $this;
    }
}
