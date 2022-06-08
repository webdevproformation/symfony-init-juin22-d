<?php 

namespace Lib ;  // namespace => PHP 5.3
// permet de encapsuler votre code php => class dans espace de nom 
// protéger votre code 
// éviter les collisions avec d'autres class 

class Etudiant{
    public function getName() :string {
        return "je suis un étudiant" ;
    }
}