<h1>Exercice 4</h1>


<?php 

$capitales = [
    "France" => "Paris" ,
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "rome" ,
    "Espagne" => "Madrid"
];

$lienCapitales = [
    "Berlin" => '<a href="https://fr.wikipedia.org/wiki/Berlin" target="_blank">Lien</a>' ,
    "Madrid" => '<a href="https://fr.wikipedia.org/wiki/Madrid" target="_blank">Lien</a>' ,
    "Paris" => '<a href="https://fr.wikipedia.org/wiki/Paris" target="_blank">Lien</a>' ,
    "Rome" => '<a href="https://fr.wikipedia.org/wiki/Rome" target="_blank">Lien</a>' ,
    "Washington" => '<a href="https://fr.wikipedia.org/wiki/Washington" target="_blank">Lien</a>'
];


echo afficherTableHTML($capitales);

function afficherTableHTML($capitales) {
    ksort($capitales);  // Par ordre alphabétique (pour le contraire krsort($capitales) pour les villes asort(capitales))
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th> Lien wiki</th>
                    </tr>
                </thead>
            <tbody>";
    foreach($capitales as $pays => $capitale) {
        $result .="<tr>
                      <td>".mb_strtoupper($pays)."</td>
                      <td>".ucfirst($capitale)."</td>
                      <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</a></td>
                   </tr>";
                       
    }
                   
     
    $result .= "</tbody></table>";     
    return $result; 
}