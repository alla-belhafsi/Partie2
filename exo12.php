<h1>Exercice 12</h1>    
<p>La fonction var_dump($variable) permet d'afficher les informations d'une variable.<br><br>
Soit le tableau suivant :<br>
$tableauValeurs = array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l'aide d'une boucle, afficher les inforamations des variables contenues dans le tableau.</p>

<?php

$tableauValeurs = array(true,"texte",10,25.369,array("valeur1","valeur2"));
var_dump($tableauValeurs);