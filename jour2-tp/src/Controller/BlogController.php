<?php 
namespace App\Controller ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class BlogController extends AbstractController{
    #[Route("/blog")]
    public function index() : Response {
        $data = [
            "menu" => ["brand" => "Blog"],
            "articles" => [
                [
                    "titre" => "Article 1",
                    "img" => "https://via.placeholder.com/600x300",
                    "contenu" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veniam necessitatibus qui, voluptatibus quis dolorum sint tenetur, possimus, iusto corrupti asperiores incidunt quo quasi! Dolorem aliquid alias vitae sunt facere!"
                ],
                ["titre" => "Article 2","img" => "https://via.placeholder.com/400x200"],
                ["titre" => "Article 3","img" => "https://via.placeholder.com/400x200"],
                [ "titre" => "Article 4","img" => "https://via.placeholder.com/400x200"]
            ]
        ];
        return $this->render("blog/index.html.twig" , $data);
    }
}

