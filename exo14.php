<?php

class Personne {
    
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_adresse;
    private string $_codePostal;
    private string $_ville;
    
    public function __construct(string $nom,string $prenom, string $dateNaissance, string $adresse, string $codePostal, string $ville) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_adresse = $adresse;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
    }
    
    public function getNom() {
        return $this->_nom;
    }
    
    public function setNom(string $nom) {
        $this->_nom = $nom;
    }
    
    public function getPrenom() {
        return $this->_prenom;
    }
    
    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    } 
    
    public function getDateNaissance() {
        return $this->_dateNaissance;
    }
    
    public function setDateNaissance(string $dateNaissance) {
        $this->_dateNaissance = new DateTime($dateNaissance);
    }
    
    public function getAge() {
        $now = new DateTime();
        $interval = date_diff($this->_dateNaissance, $now);
        return $interval->format("%Y ans");
    }

    public function getAdresse() {
        return $this->_adresse;
    }
    
    public function setAdresse(string $adresse) {
        $this->_adresse = $adresse;
    }

    public function getcodePostal() {
        return $this->_codePostal;
    }
    
    public function setcodePostal(string $codePostal) {
        $this->_codePostal = $codePostal;
    }

    public function getVille() {
        return $this->_Ville;
    }
    
    public function setVille(string $ville) {
        $this->_ville = $ville;
    }
    
    public function getAdresseComplete() {
        return $this->_adresse." ".$this->_codePostal." ".$this->_ville." <br>"; 
        
    }

    public function __tostring() {
        return $this->_nom." ".$this->_prenom." a ".$this->getAge()." et habite ".$this->getAdresseComplete()." <br>";
    }
    
    
    
    
}
$p1 = new Personne("DUPONT","Michel","1980-02-19","202 avenue de colmar","67100","Strasbourg");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17","101 Route de la gare","67100","Strasbourg");


echo $p1;
echo $p2;


