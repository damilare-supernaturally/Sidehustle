<?php

include 'newfile.php';

function number($num1,$num2,$num3=5){
    $answer = $num1*$num2*$num3;
    return "$answer";
 }
    
echo number(2,3);
?>