<?php 
    $rows = $_POST["row"];
    $columns = $_POST["column"];
    echo "<form action= 'result.php' method='POST'>";
        // Values for first matrix 
        echo "Enter The Values for 1st ".$rows."*"."$columns"." Matrix<br><br>";
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$columns;$j++){
                $m = $i+1;
                $n = $j+1;
                $k = $m.$n;
                echo "&nbsp &nbsp &nbsp &nbsp Enter ($m,$n) element:<input type='number' name='matrix$k' required/><br><br>";
            }
        }
        // To store the values for rows and columns
        echo "<input type='hidden' name='rows' value='$rows' />";
        echo "<input type='hidden' name='columns' value='$columns' />";
        // Values for second matrix
        echo "Enter The Values for 2nd ".$rows."*"."$columns"." Matrix<br><br>" ;
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$columns;$j++){
                $m = $i+1;
                $n = $j+1;
                $k = $m.$n;
                echo "&nbsp &nbsp &nbsp &nbsp Enter ($m,$n) element:<input type='number' name='matrixx$k' required/><br><br>";
            }
        }
        echo "<input type='submit' name='submitMatrix' value='Submit'/>";
    echo "</form>";   
 ?>