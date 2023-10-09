<h1>Exercice 13</h1>

<?php

class Voiture {
    
    private string $_marque;
    private string $_modèle;
    private string $_nbPortes;
    private string $_demarrer;
    private string $_accelerer;
    private string $_stopper;
    
    public function __construct(string $marque,string $modèle, string $nbPortes, string $vitesseActuelle, string $demarrer,string $accelerer, string $stopper) {
        $this->_marque = $marque;
        $this->_modèle = $modèle;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = $vitesseActuelle;
        $this->_demarrer = $demarrer;
        $this->_accelerer = $accelerer;
        $this->_stopper = $stopper;
    }
    
    public function getMarque() {
        return $this->_marque;
    }
    
    public function setNom(string $marque) {
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

    public function getDemarrer() {
        return $this->_demarrer;
    }

    public function setDemarrer(string $demarrer) {
        $this->_demarrer = $demarrer;
    }

    public function getAccelerer() {
        return $this->_accelerer;
    }

    public function setAccelerer(string $accelerer) {
        $this->_accelerer = $accelerer;
    }

    public function getStopper() {
        return $this->_stopper;
    }

    public function setStopper(string $stopper) {
        $this->_stopper = $stopper;
    }

    public function getVitesseActuelle() {
        return $this->_demarrer." ".$this->_accelerer." ".$this->_stopper." <br>";
    }

    public function __tostring() {
        return $this->_marque." ".$this->_modèle." ".$this->_nbPortes." <br>";
    }
}    

$v1 = new Voiture("Peugeot","408","5");