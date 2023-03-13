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

    // Parašykite funkciją kuri sugeneruotų 3 random skaičius nuo 0 iki 5 ir atvaizduotų naršyklėje vienoje eilutėje atskirtus kableliais. Po paskutinio skaičiaus kablelio neturi būti.

    function skaiciai()
    {
        $numbers = array();
        for ($i = 0; $i < 3; $i++) {
            $numbers[] = rand(0, 5);
        }
        echo implode(",", $numbers);
    }

    skaiciai();

    echo "<hr>";
    echo "Funkcijos ND 7";
    echo "<br>";

    // Parašykite funkciją kuri sugeneruotų 10 p tagų su skaičiais juose nuo 1 iki 10 ir atvaizduotų naršylkėje. Rezultate HTML’e turi matytis 10 p tagų su skaičiais. 

    function pTagai()
    {
        $result = "";
        for ($i = 1; $i <= 10; $i++) {
            $result .= '<p>' . $i . '</p>';
        }
        echo $result;
    }

    pTagai();

    echo "<hr>";
    echo "Funkcijos ND 8";
    echo "<br>";

    // Sukurkite funkciją kuri priimtų 3 kintamuosius $min, $max ir $length, sugeneruotų random masyvą $length ilgio, užpildytų random skaičiais $min $max intervale.

    function kintamieji($min, $max, $length)
    {
        $arr = [];
        for ($i = 0; $i < $length; $i++) {
            $arr[] = rand($min, $max);
        }
        return $arr;
    }

    print_r(kintamieji(2, 15, 5));

    echo "<hr>";
    echo "Funkcijos ND 9";
    echo "<br>";

    // Parašykite funkciją kuri priimtų tekstą kintamąjį ir į gražintų “apsuktą” pvz paduodate Naglis, gaunate silgaN.

    function apsuktiTeksta($tekstas)
    {
        return strrev($tekstas);
    }

    print_r(apsuktiTeksta("Arnas"));


    echo "<hr>";
    echo "Funkcijos ND 2-1";
    echo "<br>";

    // Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

    function argumentas($text)
    {
        return "<h1>" . $text . "</h1>";
    }

    print_r(argumentas("Kaip laikotės?"));

    echo "<hr>";
    echo "Funkcijos ND 2-2";
    echo "<br>";

    // Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

    function argument($text, $numeris)
    {
        return "<h" . $numeris . ">" . $text . "</h1" . $numeris . ">";
    }

    print_r(argument("Kas geresnio?", 1));

    echo "<hr>";
    echo "Funkcijos ND 2-4";
    echo "<br>";

    // Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;

    function dalikliai_be_liekanos($skaicius)
    {
        $dalikliai = 0;
        for ($i = 2; $i < $skaicius; $i++) {
            if ($skaicius % $i == 0) {
                $dalikliai++;
            }
        }
        return $dalikliai;
    }

    echo dalikliai_be_liekanos(15);


    echo "<hr>";
    echo "Funkcijos ND 2-5";
    echo "<br>";

    // Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.



    ?>


</body>

</html>