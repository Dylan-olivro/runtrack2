<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $hauteur = 5;

    for ($i = 0; $i < $hauteur; $i++) {
        echo str_repeat('&nbsp;', ($hauteur - $i));
        for ($x = 0; $x <= $i; $x++) {
            echo "*";
        }
        echo "<br />";
    }
    ?>
</body>

</html>