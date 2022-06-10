<?php 

namespace App\Entity ;

use Doctrine\ORM\Mapping as ORM ;

#[ORM\Entity()]
class Exo{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer" , nullable : false )]
    private int $id;

    #[ORM\Column(type:"string" , nullable : false , length: 200 )]
    private string $nom ;

    #[ORM\Column(type:"string" , nullable : false , length: 200 )]
    private string $prenom ;

    #[ORM\Column(type:"datetime"  )]
    private \DateTime $dt_naissance ;

    #[ORM\Column(type:"boolean"  )]
    private bool $status ;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDtNaissance(): ?\DateTimeInterface
    {
        return $this->dt_naissance;
    }

    public function setDtNaissance(\DateTimeInterface $dt_naissance): self
    {
        $this->dt_naissance = $dt_naissance;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }
}