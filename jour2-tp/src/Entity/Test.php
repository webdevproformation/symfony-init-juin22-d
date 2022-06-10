<?php 
namespace App\Entity ;
// créer une table test 
// contenir 3 champs 
// id 
// titre
// date 
/**
CREATE TABLE test(
    id INTEGER NOT NULL AUTO_INCREMENT,
    titre VARCHAR(100) NOT NULL,
    date DATETIME ,
    CONSTRAINT PRIMARY KEY (id)
)
*/
use Doctrine\ORM\Mapping as ORM ;

#[ORM\Entity()]
class Test{

    #[ORM\Id] 
    #[ORM\GenerateValue]
    #[ORM\Column(type: "integer" , nullable: false)]
    private int $id ;

    #[ORM\Column(type: "string" , length: 100, nullable: false)]
    private string $titre ;

    #[ORM\Column(type: "datetime")]
    private \DateTime $date ;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    } 

}

// symfony console make:entity --regenerate

// transformer notre Entity = class annotée => Migration

// symfony console make:migration
// fichier de migration (structure de vos tables )

// symfony console doctrine:migrations:migrate
// symfony console d:m:m