<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "restaurante"; 

$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }

?>

<html>
<head>  <title>Eliminar Mesero</title></head>
<form method="post">
    <input type="text" placeholder="Ingresa el Numero de Empleadao a Eliminar" name="nombre">
    <input type="submit" Value="Eliminar" name="boton1">
</form>

</html>




<?php

                    
$boton1="";
if(isset($_POST['boton1'])){
$codigo=$_POST['nombre'];
$query ="DELETE FROM mesero WHERE Ide=$codigo";

if (mysqli_query($conex, $query)) {
 
       header('location: Administrar Personal.php');
   }
   else{
    echo "Error: ".mysqli_error($conex);
   }
   
}
   


?>