<h1>Exercice 2</h1>
<p>Soit le tableau suivant : <code>$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];</code><br>
Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom des pays) grâce à une fonction personalisée.</p>

<h2>Résultat</h2>

<table border=1>
    <!--Entête du tableau -->
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
    <!-- Corps du tableau -->
    <tbody>
        <tr>
           <td>France</td>
           <td>Paris</td> 
        </tr>
         <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
         <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
         <tr>
            <td>Italie</td>
            <td>rome</td>
        </tr>
    </tbody>

<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "rome"
];
foreach($capitales as $pays => $capitale) {
    echo "$pays a pour capitale : $capitale<br>";
}

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales) {
    ksort($capitales);  // Par ordre alphabétique (pour le contraire krsort($capitales) pour les villes asort(capitales))
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>
                </thead>
            <tbody>";
    foreach($capitales as $pays => $capitale) {
        $result .="<tr>
                      <td>".mb_strtoupper($pays)."</td>
                      <td>".ucfirst($capitale)."</td>
                   </tr>"; 
    }  
    $result .= "</tbody></table>";     
    return $result; 
}