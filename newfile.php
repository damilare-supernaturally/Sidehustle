<?php


$connect = mysqli_connect("localhost","root","","sidehustle");

if ($connect) {
echo "Connected";
} else {
echo"Not Connected";
}

echo'<br>';
echo'<br>';

$insert = mysqli_query( $connect,"INSERT INTO details(name,gender,age) 
VALUES('Damilare Abisola','Female','23')");

if($insert){
echo"Successful";
}


echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';




?>