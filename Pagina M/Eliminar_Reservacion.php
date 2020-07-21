<?php   
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
$consulta = "SELECT * FROM reservacion WHERE Ide>0" ;
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$variable1=($_GET['variable1']);
//header("location: AgendaR_Admin.php"); 
                                     $consultaBorrar ="DELETE FROM reservacion WHERE Ide=$variable1";
                                 
                                 
                                     $resultadoBorrar = $conexion->prepare($consultaBorrar);
                                     $resultadoBorrar->execute();
                                     $usuarios = $resultadoBorrar->fetchAll(PDO::FETCH_ASSOC);
                                     echo '<script language="javascript">';
                                     echo 'alert("La reservación: '.$variable1.' se ha eliminado")';
                                     echo '</script>';
                                header("location: agendaR_Admin.php");
                                     exit;
                                 ?>
