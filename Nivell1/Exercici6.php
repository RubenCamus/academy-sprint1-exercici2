<?php
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
