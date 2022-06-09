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
}