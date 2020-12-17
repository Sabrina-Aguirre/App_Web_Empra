<?php
//LOCALHOST
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "registro";
//HOSTING***************
//$host = "localhost";
//$user = "aryuyyhk_admin";
//$pass = "qsBX88wq{_=m";
//$dbname = “aryuyyhk_registro”;
//qsBX88wq{_=m

try {
    $conexion = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
     /*echo "conectado";*/
}
catch (PDOException $e) {
    echo "Error: " . $e -> getMessage();
}
?>