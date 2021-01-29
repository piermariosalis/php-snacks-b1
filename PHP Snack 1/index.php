<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>
<body>

<!-- ISTRUZIONI:
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60
-->

 <h1>List of Team's Points</h1>
    <?php

   

        $BasketMatches = array (
            array (
                "Olimpia Milano - Cantù |" ,55,60
            ),
            array (
                "Dinamo Sassari - Brooklyn Nets |" ,89,88
            ),
            array (
                "Chicago Bulls - Los Angeles Lakers |",100,90
            )
            );

            echo $BasketMatches[0][0]." ".$BasketMatches[0][1]." - ".$BasketMatches[0][2]."<br> <hr>";
            echo $BasketMatches[1][0]." ".$BasketMatches[1][1]." - ".$BasketMatches[1][2]."<br> <hr>";
            echo $BasketMatches[2][0]." ".$BasketMatches[2][1]." - ".$BasketMatches[2][2]."<br> <hr>";
    ?>
</body>
</html>