<?php
declare(strict_types = 1);

$numero = 10;
$numeroDecimal = 3.1415;
$nom = "Pep";
$veritat = true;
$USER_NOM = "Ruben Camus";
$holaMundo = "Hello, World!";

// echo $numero;
// echo PHP_EOL;
// echo $numeroDecimal;
// echo PHP_EOL;
// echo $nom;
// echo PHP_EOL;
// echo $veritat;
// echo PHP_EOL;
// echo $USER_NOM;
// echo PHP_EOL;

echo $holaMundo;
$holaMundoUpper = strtoupper($holaMundo);
echo PHP_EOL;
echo $holaMundoUpper, "\n";
echo strlen($holaMundoUpper), "\n";
echo strrev($holaMundoUpper), "\n";
$cursString = "Aquest es el curs de PHP";
echo "$holaMundoUpper $cursString";
?>
