<h1>Exercice 13</h1>

<?php

class Voiture {
    
    // attributs
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private float $_vitesseActuelle;
    private bool $_isDemarree;
     
    // constructeur
    public function __construct(string $marque, string $modele, int $nbPortes, float $vitesseActuelle = 0, $isDemarree = false) {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;

        $this->_vitesseActuelle = $vitesseActuelle;
        $this->_isDemarree = $isDemarree;
    }

    // une affectation (qui est une instruction), c'est le fait de mettre une valeur (pour les types primitifs, sinon c'est mettre une référence d'objet) dans une variable (ou attribut, ...)
    // =, +=, -=, *=, /=, %=, .=

    // un opérateur de comparaison, ça sert à comparer 2 valeurs/objets entre eux
    // il existe plusieurs familles d'opérateurs de comparaison :
    //      - opérateurs d'égalité/inégalité : ==, ===, !=, !==
    //      - de comparaison (de nombres, de dates, ...) : <, <=, >, >=
    //      - ...

    // opérateurs logiques (sur les booléens)
    // ! (NON), && (ET), || (OU)
    
    // méthodes
    public function demarrer() {
        if($this->_isDemarree) {
            // la voiture est déjà démarrée, on ne va pas la redémarrer
            echo "Le véhicule ".$this->_marque." ".$this->_modele." est déjà démarré.";
        } else {
            // la voiture est stoppée, on accepte donc de la démarrer (et on le fait)
            echo "<br>Le véhicule ".$this->_marque." ".$this->_modele." est actuellement stoppé.<br>";
            $this->_isDemarree = true;
            echo "<br>Le véhicule ".$this->_marque." ".$this->_modele." démarre.<br>";
        }
    }

    public function accelerer($accel) {
        // if($this->_isDemarree && $this->_vitesseActuelle + $accel <= 130) {
        if(!$this->_isDemarree) {
            echo "Le véhicule ".$this->_marque." ".$this->_modele."veut accélérer de ".$accel."<br>Pour accélerer il faut démarrer le véhicule ".$this->_marque." ".$this->_modele." !<br>";
        }
        else {
            $this->_vitesseActuelle += $accel; // a += b   <=>   a = a + b
            echo "<br>Le véhicule ".$this->_marque." ".$this->_modele." accélère de ".$accel." Km/h<br>";
        }
    }


    public function stopper() {
        if(!$this->_isDemarree) {
            echo "<br>Le véhicule ".$this->_marque." ".$this->_modele." est déjà stoppé.<br>";
        }
        else{
            echo "<br>Le véhicule ".$this->_marque." ".$this->_modele." est actuellement démarré.";
            $this->_isDemarree = false;
            echo "<br>Le véhicule ".$this->_marque." ".$this->_modele." est stoppé.<br>";
        }
    }

    // opérateur ternaire :
    // condition ? siVrai : sinon

    public function info() {
        echo "<br>Nom et modèle du véhicule : ".$this->_marque." ".$this->_modele."<br>Nombre de portes : ".$this->_nbPortes." <br>".($this->_isDemarree ? "Le véhicule ".$this->_marque." est démarrée" : "Le vehicule ".$this->_marque." est à l'arrêt")." <br>Sa vitesse actuelle est de :".$this->_vitesseActuelle." Km/h<br>";
    }

    // méthode __toString() : permet de définir comment doit être représenté l'objet sous forme de string
    // ! doit obligatoirement retourner un string
    // est une méthode magique (magic method)

    public function __toString() {
        return $this->_marque." ".$this->_modele." ".$this->_nbPortes." ".$this->_vitesseActuelle." ".($this->_isDemarree ? "démarrée" : "stoppée")." <br>";
    }

    // getters/setters

    public function getMarque() {
        return $this->_marque;
    }
    
    public function setMarque(string $marque) {
        $this->_marque = $marque;
    }

    public function getModele() {
        return $this->_modele;
    }

    public function setModele(string $modele) {
        $this->_modele = $modele;
    }

    public function getNbPortes() {
        return $this->_nbPortes;
    }

    public function setNbPortes(int $nbPortes) {
        $this->_nbPortes = $nbPortes;
    }
    
    public function getVitesseActuelle() {
        echo "Sa vitesse actuelle est de :".$this->_vitesseActuelle." Km/h<br>";
        return $this->_vitesseActuelle;
    }

}



$v1 = new Voiture("Peugeot", "408", 5, 0, true);
$v2 = new Voiture("Citroën", "C4", 3, 0, true);


// appel implicite de la méthode magique __toString()
//echo "<p>Voiture v1 : $v1</p>";
//echo "<p>Voiture v1 : $v2</p>";

// démarrer v1
$v1->demarrer();
// accélérer v2
$v1->accelerer(50);
// démarrer v2
$v2->demarrer();
// stopper v2
$v2->stopper();
// accélérer v2
$v2->accelerer(20);
// Vitesse Actuelle v1
$v1->getVitesseActuelle();
// Vitesse Actuelle v2
$v2->getVitesseActuelle();

echo "<h3>Infos véhicule 1</h3>";
$v1->info();
echo "<h3>Infos véhicule 2</h3>";
$v2->info();
