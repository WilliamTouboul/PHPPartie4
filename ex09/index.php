<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Faire une fonction qui prend deux paramètres : nombre 1 et nombre 2. Elle doit renvoyer le plus grand des deux.


    // On créé une fonction qui va mettre dans un Array les nombres qu'on lui donne, puis les trier dans un orde decroissant. 
    // Elle retourne ensuite le plus grand.
    function sortNumb($number1, $number2)
    {
        $numbers = array($number1, $number2);
        rsort($numbers);
        return $numbers[0];
    }

    $numbToSort1 = 174;
    $numbToSort2 = 14;
    echo sortNumb($numbToSort1, $numbToSort2);
    ?>
</body>

</html>