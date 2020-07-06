<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM ordenes WHERE NumMesa=1";


$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);


$consulta2 = "SELECT * FROM ordenes WHERE NumMesa=12";


$resultado2 = $conexion->prepare($consulta2);
$resultado2->execute();
$usuarios2 = $resultado2->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<table>
<tbody>
                        <?php
                            foreach ($usuarios as $usuario) {
                                ?>
                        <tr>
                            <form method="post">

                            
                                <td><?php echo $usuario['NumMesa'] ?></td>
                               
                                <td><?php echo $usuario['Nombre'] ?></td>
                                
                                <td><?php echo $usuario['PlaEntrada'] ?></td>
                               
                                <td><?php echo $usuario['PlaPrincipal'] ?></td>
                                
                                <td><?php echo $usuario['Postre'] ?></td>
                                
                                <td><?php echo $usuario['Bebida'] ?></td>
                            
                                <td><?php echo $usuario['Aditamientos'] ?></td>


                                </td>

                            </form>

                        </tr>


                        <?php
                        }
                        ?>

                    </tbody>
                    </table>

                    <table>
<tbody>
                        <?php
                            foreach ($usuarios2 as $usuario) {
                                ?>
                        <tr>
                            <form method="post">

                            
                                <td><?php echo $usuario['NumMesa'] ?></td>
                               
                                <td><?php echo $usuario['Nombre'] ?></td>
                                
                                <td><?php echo $usuario['PlaEntrada'] ?></td>
                               
                                <td><?php echo $usuario['PlaPrincipal'] ?></td>
                                
                                <td><?php echo $usuario['Postre'] ?></td>
                                
                                <td><?php echo $usuario['Bebida'] ?></td>
                            
                                <td><?php echo $usuario['Aditamientos'] ?></td>


                                </td>

                            </form>

                        </tr>


                        <?php
                        }
                        ?>

                    </tbody>
                    </table>

</html>