<h1>Exercice 13</h1>

<p><b>Créer une classe Voiture possédant les propriétes suivantes:</b> marque, modèle, nbPortes et<br>
vitesseActuelle <b>ainsi que les méthodes</b> demarrer( ), accelerer( ) <b>et</b> stopper( ) <b>en plus<br>
des accesseurs (</b>get<b>) et mutateurs (</b>set<b>) traditionnels. La vitesse initiale de chaque véhicule <br>
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un <br>
véhicule.</b> <br><br>
<b>v1-> "</b>Peugeot<b>","</b>408<b>" ,</b> 5<br>
<b>v2-> "</b>Citroën<b>","</b>C4<b>" ,</b> 3<br><br>
<b>Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de <br>
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments <br>
suivants :</b> </p>

<?php

class Voiture {
    private string $_marque;
    private string $_modèle;
    private string $_nbPortes;
    private string $_vitesseActuelle;
    private string $_demarrer;
    private string $_accelerer;
    private string $_stopper;

    public function __construct(string $marque, string $modèle, string $nbPortes) {
        $this->_marque = $marque;
        $this->_modèle = $modèle;
        $this->_nbPortes = $nbPortes; 
    }

    public function getMarque() {
        return $this->_marque; 
    }

    public function setMarque() {
        $this ->_marque = $marque;
    }
    
    public function getModèle() {
        return $this->_modèle; 
    }

    public function setModèle() {
        $this ->_modèle = $modèle;
    }

    public function getNbPortes() {
        return $this->_nbPortes; 
    }

    public function setNbPortes() {
        $this ->_nbPortes = $nbPortes;

    
    private string $_marque;
    private string $_modèle;
    private string $_nbPortes;
    private bool $_statutD = false;
    private bool $_statutS = true;
    private int $_accelerer;
    private string $_vitesseActuelle;
    private string $_infov1;
    private string $_infov2;
    
    public function vitesseActuelle() {
        $this->_vitesseActuelle;
        echo "La vitesse du véhicule ".$this->_marque." ".$this->_modèle." actuelle est de :".$this->_vitesseActuelle." Km/h<br><br>";
    }

    public function demarrer() {
        $this->_statutD = true;
        echo "<br>Le véhicule ".$this->_marque." est démarré.<br>";
    }
    
    public function accelerer() {
        $this->_accelerer;
        echo "<br>Le véhicule ".$this->_marque." ".$this->_modèle." accélère de<br>";
    }

    public function stopper() {
        $this->_statutS = false;
        echo "<br>Le véhicule ".$this->_marque." ".$this->_modèle." est stoppé.<br>";
    }

    public function infov1() {
        $this->_marque." ".$this->_modèle." ".$this->_nbPortes." <br>";
        echo "<br>Nom et modèle du véhicule : ".$this->_marque." ".$this->_modèle."<br>Nombre de portes : ".$this->_nbPortes." ";
    }

    public function infov2() {
        $this->_marque." ".$this->_modèle." ".$this->_nbPortes." <br>";
        echo "Nom et modèle du véhicule : ".$this->_marque." ".$this->_modèle."<br>Nombre de portes : ".$this->_nbPortes." ";
    }
     
    public function __construct(string $marque,string $modèle, string $nbPortes, string $vitesseActuelle ) {
        $this->_marque = $marque;
        $this->_modèle = $modèle;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = $vitesseActuelle;
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

$v1 = new Voiture("Peugeot","408","5");
$v2 = new voiture("Citroën","C4","3");

echo $v1;
echo $v2;

    

$v1 = new Voiture("Peugeot","408","5","50");
$v2 = new Voiture("Citroën","C4","3","0");

echo $v1;
echo $v2;


// $v1->accelerer();
// $v1->stopper();

// $v2->demarrer();
// $v2->accelerer();

echo "<br>Infos véhicule 1 <br>";
$v1->infov1();
$v1->demarrer();
$v1->vitesseActuelle();
echo "<br>Infos véhicule 2 <br><br>";
$v2->infov2();
$v2->stopper();
$v2->vitesseActuelle();

