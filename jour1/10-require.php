<?php 

// php -S localhost:1234
// http://localhost:1234/10-require.php

// permet de faire l'importe d'une class 
// automatique dès que l'on fait un new 
spl_autoload_register(function($className){
    //var_dump($className); // App\A
    // die(); 
    $className = str_replace("App\\" , "src/" , $className); 
    require $className . ".php"; 
    // organiser les class que l'on va appeler dans un dossier à part 
}); 
use App\A ; 

$a = new A(); 


// Si je me mets mes class dans le dossier src 
// ET que toutes ces class sont dans le namespace App\....
// la fonction de chargement est définie une fois pour toutes 
// je peux charger toutes mes class en utilisant App\ comme namespace  ===> sont stockées dans le dossier src/

// créer le fichier 11-exo.php 
// contenir la fonction de chargement automatique ci dessus 

// dans la dossier src créer deux class B et C 
// les deux class sont dans le namespace Exo

// instanciez ces deux class dans le fichier 11-exo.php 

