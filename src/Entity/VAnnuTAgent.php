<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="v_annu_t_agent")
 * @ORM\Entity(repositoryClass="App\Repository\VAnnuTAgentRepository")
 */
class VAnnuTAgent implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $idagent;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cptutil;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Role", inversedBy="agent")
     * @ORM\JoinTable(name="agent_role",
     *      joinColumns={@ORM\JoinColumn(name="id_agent", referencedColumnName="idagent")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_role", referencedColumnName="id")}
     *      )
     */
    private $role;

    private $roles = [];

    public function __construct()
    {
        $this->role = new ArrayCollection();
    }

    // public function getId(): ?int
    // {
    //     return $this->id;
    // }

    public function getIdagent(): ?int
    {
        return $this->idagent;
    }

    public function setIdagent(int $idagent): self
    {
        $this->idagent = $idagent;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCptutil(): ?string
    {
        return $this->cptutil;
    }

    public function setCptutil(string $cptutil): self
    {
        $this->cptutil = $cptutil;

        return $this;
    }

    /**
     * @return Collection|Role[]
     */
    public function getRole(): Collection
    {
        return $this->role;
    }

    public function addRole(role $role): self
    {
        if (!$this->role->contains($role)) {
            $this->role[] = $role;
        }

        return $this;
    }

    public function removeRole(Role $role): self
    {
        if ($this->role->contains($role)) {
            $this->role->removeElement($role);
        }

        return $this;
    }


    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */

    public function getUsername(): string
    {
        return (string) $this->cptutil;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = [];

        foreach($this->role as $role){
            $roles[] = $role->getLibelle();
        }

        return $roles;
    }

    public function setRoles(array $roles): self
    {
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return "";
        // return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        // $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
