<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Labas</h1>

    <?php
    function multiply($a, $b)
    {
        echo $a * $b;
    }

    multiply(2, 5);

    echo "<hr>";

    echo "Funkcijos ND 2";
    echo "<br>";

    function Vardas($vard)
    {
        echo "Labas, $vard";
    }

    vardas('Linai');

    ?>


</body>

</html>