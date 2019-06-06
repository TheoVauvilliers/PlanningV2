<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlanningRepository")
 */
class Planning
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datetimeDebut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datetimeFin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatetimeDebut(): ?\DateTimeInterface
    {
        return $this->datetimeDebut;
    }

    public function setDatetimeDebut(\DateTimeInterface $datetimeDebut): self
    {
        $this->datetimeDebut = $datetimeDebut;

        return $this;
    }

    public function getDatetimeFin(): ?\DateTimeInterface
    {
        return $this->datetimeFin;
    }

    public function setDatetimeFin(\DateTimeInterface $datetimeFin): self
    {
        $this->datetimeFin = $datetimeFin;

        return $this;
    }

    public function toJson()
    {
        return [
            'id' => $this->id,
            'datetimeDebut' => $this->datetimeDebut,
            'datetimeFin' => $this->datetimeFin
        ];
    }
}
