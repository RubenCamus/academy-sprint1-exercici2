<?php

class CribaErastotenes {
    public int $primerNumero = 2;
    public int $numeroIntroducido;
    public array $listOfNumbers = [];
    public array $listOfNonPrime = [];
    public array $listOfPrimes = [];
    public function __construct(int $num)
    {
        $this->numeroIntroducido = ($num);
    }

    function cribaErastotenes() {
        // Validar input es un numero
        if (gettype($this->numeroIntroducido) != "integer" && !$this->numeroIntroducido > 0 ) {
            echo "not a valid number";
            return;
        }
        // Crear lista de numeros entre $primerNumero y $numeroIntroducido
        $this->listOfNumbers = $this->createList($this->numeroIntroducido, $this->primerNumero);
        $this->cribar();
        // Mostrar numeros primos
        $this->listOfPrimes = array_diff($this->listOfNumbers, $this->listOfNonPrime);
        var_dump($this->listOfPrimes);
    }
    function cribar() {
        // Crear lista de multiples hasta el numero introducido;
        $listOfMultiples = $this->createMultipleList($this->numeroIntroducido, $this->primerNumero, $this->listOfNumbers);
        for ($i = 0; $i < count($listOfMultiples); $i++) {
            array_push($this->listOfNonPrime, $listOfMultiples[$i]);
        }
        $this->checkNextNumber();
    }
    function checkNextNumber() {
        $this->primerNumero++;
        // Si el cuadrado de  $primerNumero + 1 es mayor a $numeroIntroducido algoritmo acaba. Y todos los numeros entre $primerNumero y $numeroIntroducido no en lista son primos
        if($this->primerNumero * $this->primerNumero < $this->numeroIntroducido) {
            $this->cribar();
        } else {
            // Terminar algoritmo
            echo "Algorithm finished." . PHP_EOL;
        }
    }
    function createList(int $numeroIntroducido, int $primerNumero) {
        $listOfNumbers = [];
        for ($i = 0; $i < $numeroIntroducido -1; $i++) {
            array_push($listOfNumbers, $primerNumero + $i);
        }
        return $listOfNumbers;
    }
    function createMultipleList(int $numeroIntroducido, int $primerNumero, array $listOfNumbers) {
        $listOfMultiples = [];
            for($i = 0; $i < $numeroIntroducido -1; $i++) {
                // Encontrar multiplo de $numeroIntroducido
                $numMultiple = $primerNumero * $listOfNumbers[$i];
                if ($numMultiple > $numeroIntroducido) {
                    break 1;
                }
                array_push($listOfMultiples, $numMultiple);
            }
        return $listOfMultiples;
    }
}

$test1 = new CribaErastotenes(20);
$test2 = new CribaErastotenes(99);
$test3 = new CribaErastotenes(120);
$test1->cribaErastotenes();
$test2->cribaErastotenes();
$test3->cribaErastotenes();
?>
