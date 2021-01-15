<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p4e7</title>
</head>

<body>
<!-- Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
Homme
Femme  
-La fonction doit renvoyer en fonction des paramètres :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineure -->
    <?php
    function WhoAreYou(bool $gender, $age)
    {
        if ($gender) {
            if ($age >= 18) {
                echo 'Vous êtes un homme et vous êtes majeur';
            } else {
                echo 'Vous êtes un homme et vous êtes mineur';
            }
        } else {
            if ($age >= 18) {
                echo 'Vous êtes une femme et vous êtes majeure';
            } else {
                echo 'Vous êtes une femme et vous êtes mineure';
            }
        }
    }

    // true = homme
    $mygender = true;
    $myage = 29;
    WhoAreYou($mygender,$myage);


    ?>

</body>

</html>