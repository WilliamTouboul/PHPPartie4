<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function compareNumber($n1, $n2)
    {
        if ($n1 > $n2) {
            echo 'Le premier nombre est plus grand ';
        } else if ($n1 < $n2) {
            echo 'Le premier nombre est plus petit';
        } else {
            echo $n1 . ' = ' . $n2;
        }
    }

    $numb1 = rand(0,15);
    $numb2 = rand(0,15);
    compareNumber($numb1,$numb2);
    ?>
</body>

</html>