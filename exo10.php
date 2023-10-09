<h1>Exercice 10</h1>

<p>En utlisiant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire<br>
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-<br>
mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :<br>
<b>Développeur Logiciel</b>, <b>Designer web</b>, <b>Intégrateur</b> ou <b>Chef de projet</b>.<br><br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement<br>
de validation (submit).<br><br></p>

<?php

$nomsInput = [
    "Nom",
    "Prénom",
    "Adresse e-mail",
    "Ville",
    "Sexe",
];
$formInput = [
    "Développeur Logiciel",
    "Designer web",
    "Intégrateur",
    "Chef de projet"
];

echo afficherFormulaire($nomsInput, $formInput);

function afficherInput($nomsInput) {
              $result = "<form method='post'><action='cible.php'>";
        foreach($nomsInput as $noms => $nom) {
                 $result .= "<p> $nom <br> <input type='text' name='$nom'/></p>";
    };
     return $result; 
}
function genererCheckbox($formInput) {
    $result = "<form action='checkbox'>
               <fieldset>";
               foreach($formInput as $choices => $choice) {
                $result .= "<div>
                          <input type='checkbox' name='Choix'>
                          <label for='Choix'>$choice</label></div>";
               };
               $result .= "</fieldset></form>";
               return $result;
};

function afficherFormulaire($nomsInput, $formInput) {
    $result = "";
    $result .= afficherInput($nomsInput);
    $result .= genererCheckbox($formInput);
    $result .= "<br><input type='submit' value='Envoyer le formulaire' />";
    return $result;

}


