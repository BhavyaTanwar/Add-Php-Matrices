<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <script src="script.js"></script>
</head>
<body>
<?php
    if(isset($_POST['submitMatrix'])){
        $rows = $_POST["rows"];
        $columns = $_POST["columns"];
        $matrix1 = array();
        $matrix2 = array();
        // storing values entered by user in 2 matrices
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$columns;$j++){
                $m = $i+1;
                $n = $j+1;
                $k = $m.$n;
                $matrix1[$i][$j] = $_POST['matrix'.$k];
                $matrix2[$i][$j] = $_POST['matrixx'.$k];
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
    }else{
        header('location : test.php');
    }
?>
</body>
</html>