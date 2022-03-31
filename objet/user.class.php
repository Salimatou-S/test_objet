<?php

class User {
    //propriétés
    private $pseudo;
    private $email;
    private $signature;
    private $actif;

    //methodes
    public function __construct($pseudo,$email,$signature){//le constructeur peut faire un set multiple
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->signature = $signature;
        $this->actif = true;
    }
    public function __destruct(){
        echo "destruct de" .$this->pseudo. "!";
    }
    public function getPseudo(){
        return $this->pseudo;
    }
    public function setPseudo($newPseudo){
        if (!empty($newPseudo) and strlen($newPseudo) < 10) {
            $this->pseudo = $newPseudo;
        }
        else{
            echo"<p>pseudo vide ou trop long</p>";
        }
    }

    public function setEmail($newEmail)
    {
        if(!empty($newEmail) and strlen($newEmail) < 100) {
            $this->email = $newEmail;
        } else{
            echo '<p>Email vide ou trop long!</p>';
        }  
    }

    public function envoyerEmail($titre,$message){
       return mail($this->email,$titre,$message);
    }

    public function bloquer(){
        $this->actif = false;
        $this->envoyerEmail("Alerte user !","vous êtes bloqué!");
    }
}

