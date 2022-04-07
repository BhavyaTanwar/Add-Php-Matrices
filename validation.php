<?php
    $value = $_GET['query'];
    $formfield = $_GET['field'];
    // Check Valid or Invalid row 
    if ($formfield == "row") {
        if ($value < 1) {
            echo "<p>Dimension must be greater than 0</p>";
        }else if($value > 5){
            echo "<p>Dimension must be less than 6</p>";
        } else {
            echo "<span>Valid</span>";
        }
    }
    // Check Valid or Invalid column
    if ($formfield == "column") {
        if ($value < 1) {
            echo "<p>Dimension must be greater than 0</p>";
        }else if($value > 5){
            echo "<p>Dimension must be less than 6</p>";
        } else {
            echo "<span>Valid</span>";
        }
    }
?>
