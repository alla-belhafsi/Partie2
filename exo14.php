<h1>Exercice 14</h1>
<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu'une classe VoitureElec<br>
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br><br>
Instancier une voiture "classique" et une voiture "éléctrique" ayant les caractéristiques<br>
suivantes:
<li><b>Peugeot 408 :</b> $v1 = new Voiture ("Peugeot","408");</li>
<li><b>BMW i3 150 :</b> $v2 = new VoitureElec ("BMW","I3","150");</li><br>

Votre Programme de test devra afficher les informations des 2 voitures de la façon suivante : <br><br>
echo $v1->getInfos();<br/>
echo $ve1->getInfos();</p>

<?php

class Voiture {
    private string $_marque;
    private string $_modèle;
    private string $_getInfos;
   


    public function __construct(string $marque, string $modèle) {
        $this->_marque = $marque;
        $this->_modèle = $modèle;
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
    public function setModèle(string $_modèle) {
        $this->_modèle = $_modèle;
    }
    public function getInfos() {
        return $this->_marque." ".$this->_modèle." ".$this->_autonomie."<br>";
    }
}
class VoitureElec extends Voiture {
    private string $_autonomie;

    
}    

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3","100");

echo $v1->getInfos()."<br>";
echo $ve1->getInfos()."<br>";