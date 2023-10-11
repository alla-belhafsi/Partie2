<h1>Exercice 14</h1>
<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu'une classe VoitureElec<br>
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br><br>
Instancier une voiture "classique" et une voiture "éléctrique" ayant les caractéristiques<br>
suivantes:
<li><b>Peugeot 408 :</b> $v1 = new Voiture ("Peugeot","408");</li>
<li><b>BMW i3 150 :</b> $v2 = new VoitureElec ("BMW","I3",150);</li><br>

Votre Programme de test devra afficher les informations des 2 voitures de la façon suivante : <br><br>
echo $v1->getInfos();<br/>
echo $ve1->getInfos();</p>

<?php

// classe = abstrait = un modèle, un template, un moule.
// objet = concret = une instance de classe (on s'est servi de la classe (du modèle) et on en a fait un objet réel, avec des attributs initialisés qui ont des valeurs précises)
class Voiture {
    // attributs/propriétés (attributes/properties) [de quoi est composé cette classe ? qu'est-ce qui définit cette classe ?]
    private string $_marque;
    private string $_modele;
   

    // constructeur (constructor) [initialise les attributs et crée une instance de la classe]
    public function __construct(string $marque, string $modele) {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    // méthodes (methods) [comportements, actions possibles sur un objet de cette classe]
    
    public function getInfos() {
        return $this->_marque." ".$this->_modele." ";
    }

    // accesseurs/mutateurs (getters/setters) [récupérer / mettre à jour la valeur de l'attribut]

    public function getMarque() {
        return $this->_marque;
    }

    public function setMarque(string $marque) {
        $this->_marque = $marque;
    }

    public function getModele() {
        return $this->_modele;
    }
    
    public function setModele(string $_modele) {
        $this->_modele = $_modele;
    }
}



class VoitureElec extends Voiture {
    
    private int $_autonomie;

    public function __construct(string $marque, string $modele, int $autonomie) {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }
    
    public function getAutonomie(){
        return $this->_autonomie;
    }

    public function setAutonomie($autonomie){
        $this->_autonomie = $autonomie;
    }

    public function getInfos() {
        return parent::getInfos() . " (" . $this->_autonomie . " km)";
    }
    
}    

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 150);

// $v1->setModèle("405");

echo "Infos sur la voiture v1 : " . $v1->getInfos()."<br>";
echo "Infos sur la voiture ve1 : " . $ve1->getInfos()."<br>";