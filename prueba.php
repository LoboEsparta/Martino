<?php
/*
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM ordenes WHERE NumMesa=1";


$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);


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

                                <a href="<?php echo $_SERVER['MartinoFuncion'] . '/Tablero_Mesero.php?eliminar='. echo $usuario['id'] ?> " class="btn" onlick=""></a>
                                </td>

                            </form>

                        </tr>


                        <?php
                        }
                        ?>

                    </tbody>
                    </table>

</html>
<?php
*/
?>

