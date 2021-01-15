<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P4E5</title>
</head>

<body>

    <?php
    //     Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
    // Tous les paramètres doivent avoir une valeur par défaut.
    // Bonus : Faire une fonction qui prend un nombre variable de paramètres et qui renvoie la somme des valeurs passées en arguments.



    // Fonction pour addtionnier 3 nombres avec des valeurs par défaut :
    function SumNumbers($numb1 = 5, $numb2 = 11, $numb3 = 6)
    {
        return $numb1 + $numb2 + $numb3;
    }
    echo 'la somme des nombres par défaut est : ' . SumNumbers();

    // FOnction pour addtionner un nombre variable de nombrs :
    function SumVariableNumbers(...$numbers)
    {
        $tempNumb = 0;
        foreach ($numbers as $toAdd) {
            $tempNumb += $toAdd;
        }
        return $tempNumb;
    }
    echo 'La somme des nombres variables est : ' . SumVariableNumbers(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    ?>

</body>

</html>