<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P4E5</title>
</head>

<body>
<?php
// Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :  
//     Bonjour + nom + prénom + , tu as + age + ans.

function introduction($firstname,$lastname,$age) {
    echo 'Bonjour, '.$firstname.' '.$lastname.', tu as '.$age.' ans.';
}

$myFirstname = 'William';
$myLastname = 'Touboul';
$myAge = 29;

introduction($myFirstname,$myLastname,$myAge);


?>
    
</body>
</html>