<?php 

namespace App\Controller ; 

use Symfony\Component\HttpFoundation\Response ;
use Symfony\Component\Routing\Annotation\Route ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ; 
// extends => héritage en programmation orienté objet => récupérer toutes les méthodes public protected du parent 
// AbstractController

class PageController extends AbstractController {

    #[Route("/page-complete")]
    public function pageComplete():Response{

        return $this->render("page/index.html.twig");

        // équivalent de faire return new Response()
        // dans symfony twig => entre le html et le PHP 
        // comme pour le yaml => spécifique à symfony 
        // cd jour2-tp
        // composer require twig
        // ajouter de nouvelles fonctionnalités dans le dossier vendor
        // nouveau dossier templates qui vient d'être créé
        // c'est que l'on va stocker tous les fichiers de vue => .html.twig
    }

    /**
     * correction exo6 - charger un fichier de vue .html.twig
     *
     * @return Response
     */
    #[Route("/exo6")]
    public function exo6() : Response{
        return $this->render("page/exo6.html.twig");
    }


    #[Route("/page-avec-variables")]
    public function pageAvecVariables() : Response{

        // la variable qui est mise en 2ème paramètre de la méthode render 
        // OBLIGATOIREMENT un tableau associatif
        // requete en base de données PDO prepare fetchAll
        // composer require twig => html + PHP 
        $data = [
            "titre" => "envoyer des variables",
            "produit" => [
                "nom" => "Produit 1",
                "prix" => 30 ,
                "disponible" => false ,
                "caracteristiques" => [ "eco responsable" , "made in france" ]
            ]
        ];
        // render est issue de class AbstractController 
        return $this->render("page/page-avec-variables.html.twig" , $data);
    }

    #[Route("/exo7")]
    public function exo7() :Response{
        $data = [
            "titre" => "Page réalisée via une base Yaml",
            "articles" => [
                [
                    "titre" => "titre 1",
                    "img" => "https://via.placeholder.com/500x250" ,
                    "contenu" => "Lorem ipsum 4, dolor sit amet consectetur adipisicing elit. Dolores, rerum, quod neque officiis velit nemo nesciunt est facilis dignissimos doloremque explicabo totam sed quam culpa recusandae dolorum iure molestias commodi?"
                ],
                [
                    "titre" => "titre 2",
                    "img" => "https://via.placeholder.com/500x250" ,
                    "contenu" => "Lorem ipsum 2, dolor sit amet consectetur adipisicing elit. Dolores, rerum, quod neque officiis velit nemo nesciunt est facilis dignissimos doloremque explicabo totam sed quam culpa recusandae dolorum iure molestias commodi?"
                ],
                [
                    "titre" => "titre 3",
                    "img" => "https://via.placeholder.com/500x250" ,
                    "contenu" => "Lorem ipsum 3, dolor sit amet consectetur adipisicing elit. Dolores, rerum, quod neque officiis velit nemo nesciunt est facilis dignissimos doloremque explicabo totam sed quam culpa recusandae dolorum iure molestias commodi?"
                ]
            ]
        ];
        
        return $this->render("page/exo7.html.twig",$data);
    }

}