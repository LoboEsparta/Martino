<?php   

//Realizamos la conexion con la BD
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla pedido
$consulta = "SELECT * FROM comida WHERE id>0" ;
$resultado = $conexion->prepare($consulta);
$resultado->execute();
//Asignamos el valor a la variable 1 con el valor que nos da el buscador
$variable1=($_GET['variable1']);

                                      /* Realizamos la consulta para actualizar el estado del pedido y de esa manera 
                                      deje de mostrarse en el tablero de cocineros */
                                      $consultaActualizar ="DELETE from comida WHERE nombre='$variable1'";

//Realizamos la consulta
                                      $resultadoA = $conexion->prepare($consultaActualizar);
                                      $resultadoA->execute();
                                      $usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);
                                       
//Nos redirigimos al tablero de cocineros
                                    header("location: Menu.php");
                                         ?>
                                     