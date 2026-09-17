<?php

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


?>
