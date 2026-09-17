<?php
$preuEstandarTrucada = 10;
function calculadorTrucada(int $minutsTrucada) {
    global $preuEstandarTrucada;
    if ($minutsTrucada < 3) {
        echo "Ha de pagar 10 centims";
        echo PHP_EOL;
        return $preuEstandarTrucada;
    } else if ($minutsTrucada > 3) {
        $preuComptador = 5;
        $comptador = 0;
        for($i = 0; $i < $minutsTrucada; $i++) {
            $comptador = $comptador + $preuComptador;
        }
        $comptador += $preuEstandarTrucada;
        echo "Ha de pagar $comptador centims per un total de $minutsTrucada minuts de trucada.";
        echo PHP_EOL;
    }
}

calculadorTrucada(10);
calculadorTrucada(2);
calculadorTrucada(90);


?>
