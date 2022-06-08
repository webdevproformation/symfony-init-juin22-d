<?php 

// php -S localhost:1234
// http://localhost:1234/08-index.php

require "08-lib.php";
require "08-lib2.php"; // ne pas oublier le require 
require "06-lib1.php"; // ne pas oublier le require 

use Doranco\Formation\DAM\Etudiant as EtudiantDAM; // renommer vos class via as
use Jour1\Decouverte\Espace\Nom\Travail ;  // use qui permet d'utiliser directement la class sans avoir à préciser son namespace avant à chaque fois
use Lib\Etudiant;

$travail = new Travail(); // utiliser la class Travail de manière classique 

var_dump($travail->getDuree()); 

$travail2 = new Travail(); // obligatoire 

$travail3 = new Travail(); // obligatoire 

$etudiant = new EtudiantDAM(); // Extension NameResolver 

var_dump($etudiant->getNom()); 

$etudiant2 = new Etudiant(); 
var_dump($etudiant2->getName());

// créer un premier fichier 09-lib1.php
// class Article dans le namespace MySQL\DB

// créer un autre fichier 09-lib2.php
// class Article dans le namespce SQLITE\DB

// créer un dernier fichier 09-exo.php 
// importer les deux class créées dans les deux autres fichiers 
// créer une instance de chaque de ces deux class dans ce fichier 09-exo.php
