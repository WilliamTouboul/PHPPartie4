<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
//Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.

    function returnString($string)
    {
        echo $string;
        return $string; // Stop la fonction

    }

    returnString('JeSaisPas');
    ?>

</body>

</html>