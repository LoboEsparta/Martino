<?php   
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
$consulta = "SELECT * FROM ordenes WHERE stat='1'" ;
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$variable1=($_GET['variable1']);

                                      //Realizamos la consulta para eliminar en donde el registro que se borrara es el que presiono el usuario
                                      $consultaActualizar ="UPDATE ordenes SET stat='0' WHERE NumMesa='$variable1'";


                                      $resultadoA = $conexion->prepare($consultaActualizar);
                                      $resultadoA->execute();
                                      $usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);
                                         

                                        header("location: Tablero_Cocinero.php");
                                         ?>
                                     