<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function concatenation($s1,$s2) {
    echo $s1.' '.$s2;
    return ($s1.$s2);
}

$string1 = 'Premiere chaine de caractére';
$string2 = 'Seconde chaine de caractere';
concatenation($string1,$string2);

?>
    
</body>
</html>