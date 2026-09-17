<?php
function isScoreValid(int $score) {
    if ($score > 9999) {
        echo "score cant be higher than 9999";
        return false;
    }
    if ($score < 0) {
        echo "score cant be less than 0";
        return false;
    }
    return true;
}
function calcScore(array $scores) {
    for($i = 0; $i < count($scores); $i++) {
        if (!isScoreValid($scores[$i])) {
            echo "score is not valid";
            echo PHP_EOL;
            return;
        }
    }
    $sumOfScores = 0;
    for($i = 0; $i < count($scores); $i++) {
        $sumOfScores = $sumOfScores + $scores[$i];

    }
    echo "Sum of all scores is: $sumOfScores";
    echo PHP_EOL;
    $medianOfScores = $sumOfScores / count($scores);
    echo "Median of all scores is: $medianOfScores";
    echo PHP_EOL;
    if ($medianOfScores < 4000) {
        echo "Classification is beginner";
        echo PHP_EOL;
    } else if ($medianOfScores < 8000) {
        echo "Classification is intermediate";
        echo PHP_EOL;
    } else {
        echo "Classification is advanced";
        echo PHP_EOL;
    }
}
$arr1 = [2000, 90000, 5600];
$arr2 = [1200, -333, 999];
$arr3 = ["2000", 9000, 5600];
calcScore($arr1);
calcScore($arr2);
calcScore($arr3);

?>
