<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "restaurante1"; 

$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }

 $variable10=($_GET['variable10']);


$query ="DELETE FROM mesero WHERE Ide=$variable10";

if (mysqli_query($conex, $query)) {
 
       header('location: Administrar Personal.php');
   }
   else{
    echo "Error: ".mysqli_error($conex);
   }
   
   


?>