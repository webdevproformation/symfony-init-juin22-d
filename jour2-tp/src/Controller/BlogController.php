<?php 
namespace App\Controller ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class BlogController extends AbstractController{
    /**
     * page d'accueil du blog
     *
     * @return Response
     */
    #[Route("/blog" , name:"blog_home")]
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

    /**
     * Page mention légale du blog
     *
     * @return Response
     */
    #[Route("/mention-legale" , name:"blog_mention_legale")]
    public function mentionLegale() :Response{
        $data = [
            "menu" => ["brand" => "blog"] ,
            "titre" => "mention légale",
            "contenu" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam distinctio officia deleniti laboriosam? A, asperiores. Consequuntur ex accusamus, unde consectetur, dicta repudiandae molestiae id quaerat quo eius atque cum quidem.
            Sed animi sequi, vero quisquam iusto beatae incidunt optio eius, hic, repellat recusandae eum natus non voluptatum? Repudiandae ab sed amet voluptatem eos itaque vel, culpa, hic tenetur, odio soluta.
            Porro quidem ipsam veniam, enim numquam quia maxime inventore neque ipsa cupiditate fuga laudantium quas placeat aspernatur amet architecto voluptatum! Cumque tempore autem odio corporis maiores animi molestiae molestias ea.
            Animi magni, debitis delectus illum sit quasi laudantium id libero quidem ipsum, aspernatur necessitatibus culpa? Minus nesciunt aliquid tempore consequuntur quas, quam accusantium officiis, officia doloremque magni repellendus cumque. Ullam?"
        ];

       return $this->render("blog/mention-legale.html.twig" , $data); 
    }


    #[Route("/presentation" , name:"blog_presentation")]
    public function presentation() : Response{

        $data = [
            "menu" => ["brand" => "blog"] ,
            "img" => "https://source.unsplash.com/random/1400x300",
            "contenu" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione deserunt nesciunt corporis laborum, magni libero excepturi sunt ab cupiditate amet hic ipsum sint incidunt quas optio accusantium? Tenetur beatae aliquam corrupti quaerat perferendis asperiores quisquam minus blanditiis ut, fugiat vitae quos? Illo fugit, eligendi quibusdam dolore ducimus maiores culpa dignissimos.
            Eius inventore id odio corrupti adipisci totam impedit, fuga veritatis! Modi voluptate velit saepe sequi? Deserunt perspiciatis tenetur minus quas porro reiciendis assumenda, vero excepturi numquam, nihil modi ea eius dicta repudiandae labore obcaecati dolorum odio mollitia consectetur recusandae cum incidunt! Atque illo explicabo sapiente accusamus corporis, debitis provident fugiat.
            Unde non totam ea aut temporibus veritatis ut alias consequatur reiciendis ducimus, iure aspernatur ullam repellat ipsum cum officiis enim cumque quasi aliquid molestias neque placeat sit debitis? Architecto, nisi. Quisquam modi nobis, eaque dicta corporis illo velit explicabo, repellat odio aut adipisci similique magnam inventore quo tempora magni cumque.",
            "competences" => [
                "PHP" => 20 ,
                "Javascript" => 50 , 
                "HTML" => 100
            ]
        ];

        return $this->render("blog/presentation.html.twig", $data);
    }
}


