<?php
// EXERCICI 3a
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
// EXERCICI 3B
function calculate(float $firstParam, float $secondParam, string $calcParam) {
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
echo calculate(10.333, 400, "*");
echo PHP_EOL;
echo calculate(0, -111, "/");
echo PHP_EOL;
echo calculate(11, 400, "-");



?>
