<?php
	include ('conexion.php');
	$NumMesa= $_POST ["NumMesa"];
	$Nombre=$_POST ["Nombre"];
	$PlaEntrada=$_POST["PlaEntrada"];
	$PlaPrincipal=$_POST["PlaPrincipal"];
	$Postre=$_POST["Postre"];
	$Bebida=$_POST["Bebida"];
	$Aditamientos=$_POST["Aditamientos"];

	$insertar="INSERT INTO ordenes (NumMesa, Nombre,PlaEntrada, PlaPrincipal, Postre, Bebida, Aditamientos) VALUES ('$NumMesa','$Nombre','$PlaEntrada','$PlaPrincipal','$Postre','$Bebida','$Aditamientos')";

	$query=mysqli_query($conexion,$insertar);
	if($query){
	echo "correcto";
	}else{
	echo "incorrecto";
	}
	
?>