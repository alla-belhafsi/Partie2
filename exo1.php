<h1>Exercice 1</h1>
<p>Créer une fonction permettant de convertir en majuscule et en rouge un texte passé en arguement</p>

<h2>Résultat</h2>

<style>
    .red {
        color: red;
    }
</style>

<?php

$texte = "Mon texte en paramètres";

// afficher le résultat de la fonction convertirmajrouge
echo convertirMajRouge($texte);
echo convertirMajRouge2($texte);

echo convertirMajColor($texte , '#B027C8');                // Code couleur HEX
echo convertirMajColor($texte , 'orange');                 // Couleur en anglais (basic)

function convertirMajRouge($texte) {
    $result = mb_strtoupper($texte);                       // convertir en majuscule
    $result = "<p class='red'>$result</p>";                // convertir en rouge
    return $result;
}

function convertirMajRouge2($texte) {
    return "<p class='red'>".mb_strtoupper($texte)."</p>"; //convertir en Majuscule et en Rouge

}

function convertirMajColor($texte , $color) {
    return "<p style='color:$color'>".mb_strtoupper($texte)."</p>"; // modify color constantly
}