<?php 

// php en ligne de commande
// composer => outil en ligne de commande utilisable via un terminal
// https://getcomposer.org
// télécharger de librairies depuis le site internet packagist.org 
// https://packagist.org/ (dépot) de librairies en PHP 

// lancer un terminal dans visual Studio code 
// ATTENTION il faut être positionné dans le dossier jour2 !!!!!!!!!!!!!!!!!!!!! 

// pour l'instant ne pas lancer une commande 
// php -S localhost:1234 => stopper Ctrl + C 

// https://packagist.org/packages/symfony/yaml

// php.net 
// https://symfony.com/doc/current/components/yaml.html

// composer require symfony/yaml

/**
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 2 installs, 0 updates, 0 removals
  - Downloading symfony/polyfill-ctype (v1.26.0)
  - Downloading symfony/yaml (v6.1.0)
  - Installing symfony/polyfill-ctype (v1.26.0): Extracting archive
  - Installing symfony/yaml (v6.1.0): Extracting archive
1 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating autoload files
2 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

// composer.json => fichier décrire notre projet 
// au format json 
// avec la propriété require dépendance de notre projet 
// les librairies qui doivent être obligatoirement installé (sinon le projet ne fonctionne pas)
// "symfony/yaml": "^6.1"
// nom de la librairie "auteur/nom lib" : numéro de version symbole 
//                                         de compatibilité >= ^ < ^5.4|^6.0
{
    "require": {
        "symfony/yaml": "^6.1"
    }
}

// composer.lock
// créer un dossier vendor >

composer.lock => fichier décrit en détail OU les librairies ont été téléchargée sur internet 
fichier technique pour composer (que l'on ne touche pas)

vendor => contient autoload.php appeler (require) pour charger toutes les librairies que l'on aurait téléchargé grâce à composer 
plusieurs dossiers la librairie et ses dépendances 
 */

require "vendor/autoload.php"; 
// pouvoir utiliser la librairie installés => symfony/yaml 

// https://symfony.com/doc/current/components/yaml.html

use Symfony\Component\Yaml\Yaml ; 

$data = Yaml::parseFile("db/etudiant.yaml");

// echo "<pre>";

var_dump($data); 




