<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui afiche une date en français (en toutes lettres) à partir d'une <br>
chaîne de caractère représentant une date.</p>



<?php

$date = new \DateTime("2018-02-23");

$formaterDateFr = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL , IntlDateFormatter::NONE);

echo $formaterDateFr->format($date);