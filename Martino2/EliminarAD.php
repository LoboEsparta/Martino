<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "restaurante1"; 

$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }

 $variable0=($_GET['variable0']);


$query ="DELETE FROM auxiliar WHERE Ide=$variable0";

if (mysqli_query($conex, $query)) {
 
       header('location: Administrar Personal.php');
   }
   else{
    echo "Error: ".mysqli_error($conex);
   }
   
   


?>