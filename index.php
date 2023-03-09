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
        echo "Labas, $vard!";
    }

    vardas("Linai");

    echo "<hr>";
    echo "Funkcijos ND 3";
    echo "<br>";

    function ZodzioIlgis($ilgis)
    {
        echo strlen($ilgis);
    }

    ZodzioIlgis("Naktis");

    echo "<hr>";
    echo "Funkcijos ND 4";
    echo "<br>";

    function Inicialai($vardas, $pavarde)
    {
        $initials = strtoupper(substr($vardas, 0, 1)) . strtoupper(substr($pavarde, 0, 1));
        return $initials;
    }

    $name = "Arnas";
    $surname = "Daugela";
    $initials = Inicialai($name, $surname);
    echo $initials;

    echo "<hr>";
    echo "Funkcijos ND 5";
    echo "<br>";

    ?>


</body>

</html>