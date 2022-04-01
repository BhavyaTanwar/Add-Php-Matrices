<?php if(isset($_GET['submit'])){ 
    echo "<form action= 'result.php' method='GET'>";
        $rows = $_GET["row"];
        $columns = $_GET["col"];
        // Values for first matrix 
        echo "Enter The Values for 1st ".$rows."*"."$columns"." Matrix<br><br>";
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$columns;$j++){
                $m = $i+1;
                $n = $j+1;
                $k = $m.$n;
                echo "&nbsp &nbsp &nbsp &nbsp Enter ($m,$n) element:<input type='number' name='matrix$k' /><br><br>";
                echo "<input type='hidden' name='rows' value='$rows' />";
                echo "<input type='hidden' name='columns' value='$columns' />";
            }
        }
        // Values for second matrix
        echo "Enter The Values for 2nd ".$rows."*"."$columns"." Matrix<br><br>" ;
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$columns;$j++){
                $m = $i+1;
                $n = $j+1;
                $k = $m.$n;
                echo "&nbsp &nbsp &nbsp &nbsp Enter ($m,$n) element:<input type='number' name='matrixx$k' /><br><br>";
            }
        }
        echo "<input type='submit' name='submitMatrix' value='Submit'/>";
    echo "</form>";   
 } ?>