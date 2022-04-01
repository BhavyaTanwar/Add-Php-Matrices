<?php
    $rows = $_GET["rows"];
    $columns = $_GET["columns"];
    $matrix1 = array();
    $matrix2 = array();
    if(isset($_GET['submitMatrix'])){
        // storing values entered by user in 2 matrices
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$columns;$j++){
                $m = $i+1;
                $n = $j+1;
                $k = $m.$n;
                $matrix1[$i][$j] = $_GET['matrix'.$k];
                $matrix2[$i][$j] = $_GET['matrixx'.$k];
            }
        }
        $sum = array();
        // adding the 2 matrices
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$columns;$j++){
                $sum[$i][$j] = $matrix1[$i][$j]+$matrix2[$i][$j];
            }
        }
        // displaying the added matrix
        echo "The Added ".$rows."*"."$columns"." Matrix is:<br><br>" ;
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$columns;$j++){
                echo $sum[$i][$j]." ";
            }
            echo "<br>";
        }
    }
?>