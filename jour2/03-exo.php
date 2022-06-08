<?php 

// récupérer le contenu du fichier page.yaml et le transformer en tableau php
// symfony/yaml via composer
// cd jour2
// composer require symfony/yaml
use Symfony\Component\Yaml\Yaml;
require "vendor/autoload.php"; // charger tous les lib présentes dans vendor 
$page = Yaml::parseFile("db/page.yaml");
//var_dump($page); 
// php -S localhost:1234
// http://localhost:1234/03-exo.php 
// bon appétit !!!! ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4"><?= $page["titre"] ?></h1>
        <section class="row">
            <?php foreach($page["articles"] as $article ) : ?>
                <article class="col-4 text-center">
                    <h2> <?= strtoupper($article["titre"]) ?> </h2>
                    <img src="<?= $article["img"] ?>" alt="" class="img-fluid">
                    <p><?= $article["text"] ?></p>
                </article>
            <?php endforeach ?>
        </section>
    </div>
</body>
</html>
