<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 2</title>
</head>
<body>

<!-- ISTRUZIONI:
PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<h1>Log in to access </h1>

<p>Usa il metodo _GET per accedere. </p>

<p><b>name= | Il nome deve avere più di tre caratteri</b></p>
<p><b>email=| L'email deve esere inserita nel formato corretto (example@email.org)</b></p>
<p><b>age=| L'età deve contenere solo numeri </b></p>




<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];


if ( strlen ($name) >= 3 || filter_var($email, FILTER_VALIDATE_EMAIL) || is_numeric($age) == TRUE  ) {
  echo 'Accesso Riuscito'."<br>";
} else {
    echo 'Accesso Negato'."<br>";
};

        


?>
</body>
</html>