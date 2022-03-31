<?php
include_once ("user.class.php");

class Admin extends User {
    //propriétés
    private $droits;
    public function supprimerUser($user){
        echo "<P> L'administrateur " . $this->pseudo . " supprime l'utilisateur " .$user->pseudo. "</p>"; 
    }
}