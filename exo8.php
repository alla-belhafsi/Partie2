<h1>Exercice 8</h1>

<p>Soit l'URL suivante : <b>http://my.mobirise.com/data/userpic/764.jpg</b><br>
Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran</p>

<!-- <p> <img src="http://my.mobirise.com/data/userpic/764.jpg" width="133" height="133" style="float:left" />
    <img src="http://my.mobirise.com/data/userpic/764.jpg" width="133" height="133" style="float:left" />
    <img src="http://my.mobirise.com/data/userpic/764.jpg" width="133" height="133" style="float:left" />
    <img src="http://my.mobirise.com/data/userpic/764.jpg" width="133" height="133" style="float:left" /></p>
 -->

<?php

$URL = "http://my.mobirise.com/data/userpic/764.jpg";
$imagemax = 4;
$image = 0;
while ($image<$imagemax) {
    echo "<img src='$URL' width='133' height='133' style='float:left' />";
    $image++;
 }