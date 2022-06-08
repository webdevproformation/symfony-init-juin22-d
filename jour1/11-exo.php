<?php

use Exo\B;
use Exo\C;

// php -S localhost:1234
// http://localhost:1234/11-exo.php

spl_autoload_register(function($className){
    $className = str_replace("Exo\\", "src/", $className);
    require $className . ".php";
});


$b = new B();
$c = new C(); 

var_dump($c, $b); 

// composer =>utiliser avec tous les éléments vues namespace / autochargement 
// symfony 