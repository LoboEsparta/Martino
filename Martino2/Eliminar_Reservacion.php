<?php   
//Realizamos la conexion con la BD
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
$consulta = "SELECT * FROM reservacion WHERE id>0" ;
$resultado = $conexion->prepare($consulta);
$resultado->execute();
//Asignamos el valor a la variable 1 con el valor que nos da el buscador
$variable1=($_GET['variable1']);

/* Realizamos la consulta para eliminar la reservacion con el id igual a la variable que obtuvimos por el buscador*/
                                     $consultaBorrar ="DELETE FROM reservacion WHERE id=$variable1";
                                 
                                 //Realizamos la consulta
                                     $resultadoBorrar = $conexion->prepare($consultaBorrar);
                                     $resultadoBorrar->execute();
                                     $usuarios = $resultadoBorrar->fetchAll(PDO::FETCH_ASSOC);

                                     //Mostramos un mensaje de que la reservacion se elimino
                                     echo '<script language="javascript">';
                                     echo 'alert("La reservación: '.$variable1.' se ha eliminado")';
                                     echo '</script>';
                                     
//Nos redirigimos al modulo Agendar Admin
                                header("location: agendaR_Admin.php");
                                     exit;
                                 ?>
