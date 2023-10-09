<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser <br>
dans le tableau associatif si la case est cochée ou non.</p>

<!-- <form action="checkbox">
<fieldset>
        <div>
        <input type="checkbox" name="Choix 1" >
        <label for="Choix 1">Choix 1</label></div>
        <div>
        <input type="checkbox" name="Choix 2" checked>
        <label for="Choix 2">Choix 2</label></div>
        <div>
        <input type="checkbox" name="Choix 3" >
        <label for="Choix 3">Choix 3</label></div>
</fieldset>
</form> -->

<?php

$elements = [
    "Choix 1",
    "Choix 2",
    "Choix 3"
];

echo genererCheckbox($elements);

function genererCheckbox($elements) {
    $result = "<form action='checkbox'>
               <fieldset>";
               foreach($elements as $choices => $choice) {
                $result .= "<div>
                          <input type='checkbox' name='Choix'>
                          <label for='Choix'>$choice</label></div>";
               };
               $result .= "</fieldset></form>";
               return $result;
};
