<?php

$host="localhost";
$usuario="root";
$clave="";
$bd="restaurante";

$conexion=mysqli_connect($host,$usuario,$clave,$bd);


if($conexion){
//echo "conectado";
    //header("location: home.php");
}else{
echo "No se pudo conectar";
}

?>
