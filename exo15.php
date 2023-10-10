<h1>Exercice 15</h1>
<p>En utilisant les ressource de la page <b>http://php.net/manual/fr/book.filter.php,</b> vérifier si une<br>
adresse e-mail a le bon format.<br><br>
L'adresse <b>contact@elan</b> est une adresse e-mail invalide</p>

<?php

$email = 'elan@elan-formation.fr';

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("L'adresse $email est une adresse e-mail valide");
} else {
    echo("L'adresse $email est une adresse e-mail invalide");
}
