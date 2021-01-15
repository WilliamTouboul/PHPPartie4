<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P4E10</title>
</head>

<body>

    <?php

    function factor($number)
    {
        if ($number === 0) // condition d'arret, quand le chiffre atteint 0.
            return 1;
        else {
            return $number * factor($number - 1); // La fonction est recurssive car elle s'appelle elle-même.
            // On multiplie le nombre par ce nombre-1. Quand il atteint 0 on arrete.
        }
    }

    echo factor(7); // Pas plus de 256. PHP aime pas.
    ?>



</body>

</html>