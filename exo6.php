<h1>Exercice 6</h1>


<p>Créer une fonction personanalisée permettant de remplir une liste déroulante à partir d'un tableau<br> 
de valeurs.</p>
<!-- <select>
    <nom>Sexe</nom>
    <option valeur='M'>Monsieur</option>
    <option valeur='Mme'>Madame</option>
    <option valeur='Mlle'>Mademoiselle</option>
</select> -->

<?php


$elements = [
    "M" => "Monsieur", 
    "Mme" => "Madame",
    "Mlle" => "Mademoiselle"
];

echo afficherListeDeroulante($elements);

function afficherListeDeroulante($elements) {
        $result = "<select>
                   <nom>Sexe</nom>";
    foreach($elements as $sexeDiff => $sexe) {
                  $result .= "<option>$sexe</option>";
                               
                }
    $result .= "</select>"; 
    return $result;          
};
                   