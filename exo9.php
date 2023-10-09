<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de<br> 
valeurs en paramétre ("Monsieur","Madame","Mademoiselle").</p>
<!-- <form>
<fieldset>
        <div>
        <input type="radio" name="Monsieur" >
        <label for="Monsieur">Monsieur</label></div>
        <div>
        <input type="radio" name="Madame" checked>
        <label for="Madame">Madame</label></div>
        <div>
        <input type="radio" name="Mademoiselle" >
        <label for="Mademoiselle">Autre</label></div>
</fieldset>
</form> -->

<?php

$nomsRadio = [
    "Monsieur" => "Masculin" ,
    "Madame" => "Féminin"  ,
    "Mademoiselle" => "Autre" 
];

echo afficherRadio($nomsRadio);

function afficherRadio($nomsRadio) {
    $result ="<form action='Radio'>
              <fieldset>";
              foreach ($nomsRadio as $noms => $nom) {
                $result .="<div>
                           <input type='radio' name='$nom'>
                           <label for='$nom'>$nom</label></div>";
              };
              $result .= "</fieldset></form>";
               return $result;
};