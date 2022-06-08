<?php

use Symfony\Component\Yaml\Yaml;

require "vendor/autoload.php";

$page = Yaml::parseFile("db/accueil.yaml");
extract($page);  // fonction php qui permet de prendre un tableau associatif => transformer en variables 

// var_dump($menu, $body) ;
// http://localhost:1234/04-exo.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-warning">
        <nav class="navbar navbar-expand navbar-light container px-3">
            <a href="#" class="navbar-brand"><?= $menu["titre"] ?></a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link"><?= $menu["liens"][0] ?></a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#" class="nav-link"><?= $menu["liens"][1] ?></a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <h1><?= $body["titre"] ?></h1>
        <section class="row">
            <?php foreach ($body["articles"] as $article) : ?>
                <article class="col-4 mb-3">
                    <div class="card">
                        <h2 class="card-header"><?= $article["titre"] ?></h2>
                        <img src="<?= $article["img"] ?>" alt="">
                        <p class="card-body"><?= $article["synopsis"] ?></p>
                        <footer class="card-footer">
                            <button class="btn btn-primary">lire la suite ...</button>
                        </footer>
                    </div>
                </article>
            <?php endforeach ?>
        </section>
    </main>
</body>
</html>