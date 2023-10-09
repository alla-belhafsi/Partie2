<h1>Exercice 5</h1>



<p>

Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en<br> 
précisant le nom des champs associés.

</p>

</form>


<!-- <p> Nom <br> <input type="text" name="Nom" /></p>

<p> Prénom <br> <input type="text" name="Prénom" /></p>

<p> Ville <br> <input type="text" name="Ville" /></p> -->

<?php 

$nomsInput = [
    "Nom",
    "Prénom",
    "Ville"
];

echo afficherInput($nomsInput);

function afficherInput($nomsInput) {
              $result = "<form method='post'><action='cible.php'>";
        foreach($nomsInput as $noms => $nom) {
                 $result .= "<p> $nom <br> <input type='text' name='$nom'/></p>";
    };
     return $result; 
}
