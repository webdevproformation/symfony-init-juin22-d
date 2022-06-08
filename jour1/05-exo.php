<?php 

$jours = ["lundi" , "mardi" , "mercredi" , "jeudi"] ;

var_dump($jours); 

// exécuter 
// 1 soit le serveur localhost de PHP est déjà démarré
// pas besoin de relancer la commande php -S localhost:1234
// http://localhost:1234/05-exo.php
// attention bien respecter dans l'adresse le nom du fichier que vous avez créé
// une fois que j'appelle  http://localhost:1234/05-exo.php
/**
retour visual au niveau du terminal => log journal 
réponse 
[Tue Jun  7 14:37:34 2022] [::1]:50591 Accepted
[Tue Jun  7 14:37:34 2022] [::1]:50591 [200]: GET /05-exo.php
[Tue Jun  7 14:37:34 2022] [::1]:50591 Closing
 */
// http://localhost:1234/05exo.php
/**
retour du log :
[Tue Jun  7 14:39:57 2022] [::1]:50604 Accepted
[Tue Jun  7 14:39:57 2022] [::1]:50604 [404]: GET /05exo.php - No such file or directory
[Tue Jun  7 14:39:57 2022] [::1]:50604 Closing

erreur 404 => appeler une page (fichier) qui n'est pas 
 */

// http://localhost:1234/05-exo.php

// 2 stopper votre serveur pour le redémmarer 
// cliquer sur la corbeille => arrêter le terminal et le serveur local php 
// cliquer sur le terminal Ctrl + C => close le terminal 

// php -S localhost:1234