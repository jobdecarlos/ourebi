<?php
require_once 'Ordinateur.php'; 

class Participant {
    private string $nom;
    private string $prenom;
    private string $telephone;
    private Ordinateur $ordinateur;

    public function getNom(){
        return $this->nom;
    }
    public function setNom(string $_nom){
        $this->nom = $_nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom(string $_prenom){
        $this->prenom = $_prenom;
    }

    public function getTelephone(){
        return $this->telephone;
    }
    public function setTelephone(string $_telephone){
        $this->telephone = $_telephone;
    }

    public function getOrdinateur(){
        return $this->ordinateur;
    }
    public function setOridnateur(Ordinateur $_ordinateur){
        $this->ordinateur = $_ordinateur;
    }
}