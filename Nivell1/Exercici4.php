<?php

function counter(float $multiplier, float $toCount = 10,) {
    $counter = 0;
    for ($i = 0; $counter < $toCount; $i++) {
        $counter = $counter + $multiplier;
        if ($counter > $toCount) {$counter = $toCount;}
        echo $counter, "\n";
    }
}
counter(4, 42);
counter(1, 93);
counter(2, 81);

?>
