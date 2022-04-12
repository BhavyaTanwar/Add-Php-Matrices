<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input values</title>
    <script src="script.js"></script>
</head>
<body>
<?php 
    if(isset($_POST['submit'])){
        ?>
        <form action= 'result.php' method='POST' onsubmit='return testValidate()'>
        <?php
            $rows = $_POST["row"];
            $columns = $_POST["column"];
            $submit = $_POST["submit"];
            // Values for first matrix 
            echo "Enter The Values for 1st ".$rows."*"."$columns"." Matrix<br><br>";
            for($i=0;$i<$rows;$i++){
                for($j=0;$j<$columns;$j++){
                    $m = $i+1;
                    $n = $j+1;
                    $k = $m.$n;
                    echo "&nbsp &nbsp &nbsp &nbsp Enter ($m,$n) element:<input type='number' name='matrix$k' id='matrix$k' /><br><br>";
                }
            }
            
            //To store the values for rows and columns
            echo "<input type='hidden' id='row1' name='rows' value='$rows' />";
            echo "<input type='hidden' id='column1' name='columns' value='$columns' />";
            echo "<input type='hidden' id='submit' name='submit' value='$columns' />";
            
            // Values for second matrix
            echo "Enter The Values for 2nd ".$rows."*"."$columns"." Matrix<br><br>" ;
            for($i=0;$i<$rows;$i++){
                for($j=0;$j<$columns;$j++){
                    $m = $i+1;
                    $n = $j+1;
                    $k = $m.$n;
                    echo "&nbsp &nbsp &nbsp &nbsp Enter ($m,$n) element:<input type='number' name='matrixx$k' id='matrixx$k' /><br><br>";
                }
            }
            ?>
            <input type='submit' name='submitMatrix' value='Submit'/>
        </form>
        <?php 
    }else{
        header('location: index.php');
    }
 ?>
</body>
</html>