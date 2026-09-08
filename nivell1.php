<?php
declare(strict_types = 1);

$numero = 10;
$numeroDecimal = 3.1415;
$nom = "Pep";
$veritat = true;
$USER_NOM = "Ruben Camus";
$holaMundo = "Hello, World!";

echo $numero;
echo PHP_EOL;
echo $numeroDecimal;
echo PHP_EOL;
echo $nom;
echo PHP_EOL;
echo $veritat;
echo PHP_EOL;
echo $USER_NOM;
echo PHP_EOL;

echo $holaMundo;
$holaMundoUpper = strtoupper($holaMundo);
echo PHP_EOL;
echo $holaMundoUpper, "\n";
echo strlen($holaMundoUpper), "\n";
echo strrev($holaMundoUpper), "\n";
$cursString = "Aquest es el curs de PHP";
echo "$holaMundoUpper $cursString";

$x = 10;
$y = 90;
$n = 140.12;
$m = 3.6666;

echo "x is $x y is $y";
echo PHP_EOL;
echo "sum is ", $x + $y;
echo PHP_EOL;
echo "minus is ", $x - $y;
echo PHP_EOL;
echo "product is ", $x * $y;
echo PHP_EOL;
echo "modul is ", $x / $y;
echo PHP_EOL;
echo PHP_EOL;
echo "n is $n m is $m";
echo PHP_EOL;
echo "sum is ", $n + $m;
echo PHP_EOL;
echo "minus is ", $n - $m;
echo PHP_EOL;
echo "product is ", $n * $m;
echo PHP_EOL;
echo "modul is ", $n / $m;

function calculator(float $firstParam, float $secondParam, string $calcParam) {
    if ($calcParam != "+" && $calcParam != "-" && $calcParam != "*" && $calcParam != "/") {
        return "Mathematical operator is not valid";
    }
    if (gettype($firstParam) != "double" or gettype($secondParam) != "double") {
        return "Not a valid number";
    }
    if ($calcParam == "+") {
        return $firstParam + $secondParam;
    }
    if ($calcParam == "-") {
            return $firstParam - $secondParam;
    }
    if ($calcParam == "*") {
            return $firstParam * $secondParam;
    }
    if ($calcParam == "/") {
            return $firstParam / $secondParam;
    }
}
echo calculator(10.333, 400, "*");
echo PHP_EOL;
echo calculator(0, -111, "/");
echo PHP_EOL;
echo calculator(11, 400, "-");

function counter(float $multiplier, float $toCount = 10,) {
    $counter = 0;
    for ($i = 0; $counter < $toCount; $i++) {
        $counter = $counter + $multiplier;
        if ($counter > $toCount) {$counter = $toCount;}
        echo $counter, "\n";
    }
}
counter(4, 42);

function gradeCalculator(int $grade) {
    $grau = "grau";
    if ($grade >= 60) {
        echo "$grau es Primera Divisio";
        echo PHP_EOL;
    } else if ($grade >= 45 and $grade <= 59 ) {
        echo "$grau es Segona Divisio";
        echo PHP_EOL;
    } else if ($grade >= 33 and $grade <= 44 ) {
        echo "$grau es Tercera Divisio";
        echo PHP_EOL;
    } else {
        echo "L'estudiant reprova";
        echo PHP_EOL;
    }
}
gradeCalculator(33);
gradeCalculator(100);
gradeCalculator(2);


function isBitten() {
    $bites = rand(0, 1);
    if ($bites >= 0.5) {
        echo "Charlie bites you";
        echo PHP_EOL;
    } else {echo "Charlie does not bite you"; echo PHP_EOL;}
}
isBitten();
isBitten();
?>
