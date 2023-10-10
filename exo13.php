<h1>Exercice 13</h1>

<?php

class Voiture {
    
    private string $_marque;
    private string $_modèle;
    private string $_nbPortes;
    private bool $_statutD = FALSE;
    private string $_vitesseActuelle;
    
    public function vitesseActuelle() {
        $this->_vitesseActuelle;
        echo "Sa vitesse actuelle est de :".$this->_vitesseActuelle." Km/h<br><br>";
    }

    public function demarrer() {
        if($this->_statutD = TRUE) {
            echo "<br>Le véhicule ".$this->_marque." est démarré.<br>";
        }else{
            echo "<br>Le véhicule ".$this->_marque." est stoppé.<br>";
        
        }
    }

    public function accelerer(int $accel) {
        if($this->_statutD = FALSE) {
            echo "Le véhicule ".$this->_marque." doit être allumé pour accélérer";
        }
        else{
        echo "<br>Le véhicule ".$this->_marque." ".$this->_modèle." accélère de ".$this->_vitesseActuelle+=$accel." <br>";
        }
    }


    public function stopper() {
        $this->_statutD = false;
        $this->_vitesseActuelle = 0;
        echo "<br>Le véhicule ".$this->_marque." ".$this->_modèle." est stoppé.<br>";
    }

    public function info() {
        $this->_marque." ".$this->_modèle." ".$this->_nbPortes." <br>";
        echo "<br>Nom et modèle du véhicule : ".$this->_marque." "
        .$this->_modèle."<br>Nombre de portes : ".$this->_nbPortes." "
        .$this->demarrer().$this->vitesseActuelle();
    }
     
    public function __construct(string $marque,string $modèle, string $nbPortes, string $vitesseActuelle, int $accel) {
        $this->_marque = $marque;
        $this->_modèle = $modèle;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = $vitesseActuelle;
        $this->_accel = $accel;
    }

    public function getMarque() {
        return $this->_marque;
    }
    
    public function setMarque(string $marque) {
        $this->_marque = $marque;
    }

    public function getModèle() {
        return $this->_modèle;
    }

    public function setModèle(string $modèle) {
        $this->_modèle = $modèle;
    }

    public function getNbPortes() {
        return $this->_nbPortes;
    }

    public function setNbPortes(string $nbPortes) {
        $this->_nbPortes = $nbPortes;
    }

    public function __tostring() {
        return $this->_marque." ".$this->_modèle." ".$this->_nbPortes." <br>";
    }

}    

$v1 = new Voiture("Peugeot","408","5","50","20");
$v2 = new Voiture("Citroën","C4","3","0","0");






$v1->info();
//$v2->info();
