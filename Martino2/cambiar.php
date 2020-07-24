<?php

//Realizamos la conexion con la bd mediante un metodo
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//Realizamos una consulta para mostrar todos las ordenes
$consulta = "SELECT * FROM ordenes WHERE stat='0'" ;

//Ejecutamos la consulta
$resultado = $conexion->prepare($consulta);
$resultado->execute();

//Asignamos el valor de la consulta en una variable llamada "usuarios"
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>


<HTML>
<form method="post">
<input type="text" name="cambiar">
<input type="submit" name="boton1">
</form>
</HTML>

<?php

$boton1="";


if(isset($_POST['boton1'])){
    $codigoNUEVO=$_POST['cambiar'];

$consultaActualizar ="UPDATE ordenes SET stat='1' WHERE NumMesa='$codigoNUEVO'";


$resultadoA = $conexion->prepare($consultaActualizar);
$resultadoA->execute();
$usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);
}
?>