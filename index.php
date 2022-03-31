<?php
    $matrix1 = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
    $matrix2 = array(
        array(1, 4, 7),
        array(2, 5, 8),
        array(3, 6, 9)
    );
    $sum = array();
    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix1[$i]); $j++) {
            $sum[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    echo "Addition of two matrices: "."<br>";
    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix1[$i]); $j++) {
            echo $sum[$i][$j] . " ";
        }
        echo "<br>";
    }
?>