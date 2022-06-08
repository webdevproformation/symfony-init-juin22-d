<?php 
// php -S localhost:1234
// http://localhost:1234/06-namespace.php

// créer un projet en php importer via la fonction require des fichiers .php
// externe 

// créer un deuxième fichier 06-lib1.php

require "06-lib1.php" ; 

//$etudiant1 = new Etudiant();  // Etudiant" not found


$etudiant2 = new \Lib\Etudiant(); // FQCN (Fully Qualified Class Name) 
var_dump($etudiant2);  

// cas pratique : créer un fichier 07-exo-lib.php
// contient une class Exo qui contient 2 methodes de votre choix retournant du texte
// cette class est protégée par la namespace Exo

// créer le fichier 07-exo.php
// inclu le fichier 07-exo-lib.php
// exécuter les deux méthodes de la class Exo dans ce fichier et afficher le résultat dans votre navigateur