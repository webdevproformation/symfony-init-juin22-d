<?php 

namespace App\Controller ; 
# commence toujours par un namespace
# App\Dossier 
# cette ligne est OBLIGATOIRE ! car Symfony en a besoin de pour le charger
# namespace et spl_autoload_register

# nom de la class ==== nom fichier 
# namespace et spl_autoload_register et nom des fichiers 

use Symfony\Component\Routing\Annotation\Route; // composer require annotations
use Symfony\Component\HttpFoundation\Response ; // installé par défaut composant du coeur de symfony

class HomeController{
     /**
        // page html :Response 
        // ajouter une nouvelle fonctionnalité => composer require twig 
        // html + PHP => twig 

        // dans un controller => maximum de 6 à 8 méthodes 
        // contenir une fonctionnalité (page / formulaire / traitement) de votre site internet 

        // attention pas d'espace entre #[]
        // en général, l'uri = le nom de la fonction en général mais vous pouvez mettre le nom de fonction que vous voulez
        // comme Route, Response est une class de symfony (dans le dossier vendor) qui dispose d'un namesapce
        //version courte => use 
     *
     * @return Response
     */
    
    #[Route("/page")]
    public function page():Response{
        $contenu = "<h1>je suis une balise</h1>";
        return new Response($contenu);
    }


    # Expected method "index" on class "App\Controller\HomeController". Available methods: "".

    public function index(){
        echo "je suis la page d'accueil";
        die(); 
    }

    /**
     * correction de l'exo 1
     * la fonction ne retourne rien void (vide)
     *
     * @return void
     */
    public function exo1() :void{
        echo "je viens de créer ma première page sur Symfony";
        die();
    }

    /**
     * utilisation d'une annotation pour déclarer une nouvelle route dans notre projet 
     * sans utiliser de fichier .yaml
     *
     * @return void
     */
    #[Route("/exo2")]
    public function exo2() : void{
        echo "je viens d'ajouter une nouvelle fonctionnalité à Symfony";
        die();
    }

    /**
     * afficher l'heure de maintenant exo 3
     *
     * @return void
     */
    #[Route("/exo3")]
    public function exo3() : void{
        // date() // https://www.php.net/manual/fr/function.date.php
        // new DateTime() // https://www.php.net/manual/fr/class.datetime
        //$date = new DateTime();
        // var_dump($date->format("d/m/Y H:i"));
        $date = date("d/m/Y - H\hi");
        echo $date . "<br>";
        echo (new \DateTime())->format("d/m/Y - H\hi"); // 09/06/2022 - 11h03
        die(); 
    }

    #[Route("/debug")]
    public function debug() :void{
        // echo / var_dump() / die()
        // symfony fournit des fonctions qui permettent debugger et afficher du texte dans vos pages
        // dump() => symfony
        // dd() => symfony var_dump() + die()
        $user = [
            "nom" => "Alain",
            "age" => 22
        ];
       /*  var_dump($user);
        die();  */
        dd($user); 

    }

    /**
     * exo 4 utiliser les fonctions de débug de symfony
     * utiliser la fonction end() de php : https://www.php.net/manual/fr/function.end
     *
     * @return void
     */
    #[Route("/exo4")]
    public function exo4() :void{
        $panier = [
            "produit1" => 10 ,
            "produit2" => 12 ,
            "produit3" => 1 ,
            "produit4" => 4
        ];

        dump($panier["produit4"]); // solution 1 prenant l'index
        dump(end($panier)); // solution 2 end()
        die(); 
    }

    /**
     * correction exo5 concaténation avec un tableau 
     *
     * @return Response
     */
    #[Route("/exo5")]
    public function exo5() :Response {
        $user = [
            "nom" => "Alain",
            "adresse" => [
                "rue" => "75 rue de Paris",
                "CP" => 77000 ,
                "ville" => "Paris" 
            ]
            ];
        $phrase = "{$user['nom']} habite au <span class=\"adresse\">{$user['adresse']['rue']} dans le " . $user['adresse']['CP'] / 1000 . "</span></p>";
        return new Response($phrase); 
    }

    /**
     * correction exo5 concaténation avec un tableau  solution2
     *
     * @return Response
     */
    #[Route("/exo5-2")]
    public function exo52() :Response {
        $user = [
            "nom" => "Alain",
            "adresse" => [
                "rue" => "75 rue de Paris",
                "CP" => 77000 ,
                "ville" => "Paris" 
            ]
        ];
        extract($user);
        $phrase = "$nom habite au <span class=\"adresse\">{$adresse['rue']} dans le " . $adresse['CP'] / 1000 . "</span></p>";
        return new Response($phrase); 
    }
}




