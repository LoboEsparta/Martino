<?php
//Creamos una conexion con la BD
$server = "localhost";
$user = "root";
$pass = "";
$bd = "restaurante"; 

$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }

 //Asignamos el valor a la variable 0 con el valor que nos da el buscador
 $variable0=($_GET['variable0']);


/* Realizamos la consulta para eliminar el registro de la tabla "Auxiliar"
 con el id igual a la variable que obtuvimos por el buscador*/
$query ="DELETE FROM auxiliar WHERE id=$variable0";

if (mysqli_query($conex, $query)) {
 //Si la consulta se realiza correctamente se nos redirecciona al modulo de Administrar Personal.
       header('location: Administrar Personal.php');
   }
   else{
       //En caso contrario, nos mostrara un error
    echo "Error: ".mysqli_error($conex);
   }
   
   


?>