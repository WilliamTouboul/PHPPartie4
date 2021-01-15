<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
//Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.

    function exo5(string $var1, int $var2)
    {
        var_dump($var1);
        var_dump($var2);
        
        echo $var1 . ', ' . $var2;
    }

    $testvarstring = 'String';
    $testvarint = 14;

    exo5($testvarstring,$testvarint);
    ?>

</body>

</html>