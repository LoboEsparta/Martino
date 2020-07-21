<?php
//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
$consulta = "SELECT * FROM auxiliar WHERE Ide>0" ;
$resultado = $conexion->prepare($consulta);
$resultado->execute();

//Asignamos el valor de la consulta en una variable llamada "usuarios"
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);


$consulta2 = "SELECT * FROM mesero WHERE Ide>0" ;
$resultado2 = $conexion->prepare($consulta2);
$resultado2->execute();
$usuarios2 = $resultado2->fetchAll(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width-device,user-scalable=no,
     initial-scale=1.0,maximum-scale01, minimum-scale=1">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Principal.css">
    <link rel="stylesheet" href="CSS/Admin_Perso.css">
    <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
</head>

<body>
    <div class="col-md-12" id="scroll">
        <div class="Contenido">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="Mio">Administrar Personal</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" id="Naranja">
                            <div class="card-title">
                                <h2>Administradores</h2>
                            </div>
                        </div>

                        <form method="post">
                            <?php
                    //Utilizamos un forreach para hacer la cantidad de cards que vamos a ocupar, y de misma forma mostrar el contenido de los pedidos
                            foreach ($usuarios as $usuario) {
                                ?>
                            <?php

$variable1=$usuario['Nombre'];
$variable2=$usuario['Apellido_P'];
$variable3=$usuario['Apellido_M'];
$variable4=$usuario['Telefono'];
$variable5=$usuario['Contraseña'];
?>
                            <div class="card border-dark mb-3 ">
                                <h6> <?php echo "".$usuario['Nombre']." ".$usuario['Apellido_P']." ".$usuario['Apellido_M'];?>
                                </h6>
                                <h5><a
                                        href="AD_Ver.php?variable1=<?php echo $variable1 ?>&variable2=<?php echo $variable2 ?>&variable3=<?php echo $variable3 ?>&variable4=<?php echo $variable4 ?>&variable5=<?php echo $variable5 ?>"><img
                                            src="Img/eye - copia.png" height="18" data-toggle="tooltip"
                                            data-placement="right" title="Ver"></a>
                                    <a href="AD_Editar.php"><img src="Img/edit.png" height="18" data-toggle="tooltip"
                                            data-placement="right" title="Editar"></a>
                                    <a href="EliminarAD.php"><img src="Img/trash.png" height="18" data-placement="right"
                                            title="Eliminar"></a>
                                </h5>

                            </div>
                            <?php
                        }
                        ?>
                            <a href="AD_Agregar.php"><button type="button"
                                    class="btn btn-success">Registrar</button></a>




                        </form>


                    </div>

                    <!--Meseros-->

                    <div class="col-md-6">
                        <div class="card" id="Naranja">
                            <div class="card-title">
                                <h2>Meseros</h2>
                            </div>
                        </div>

                        <form method="post">
                            <?php
                    //Utilizamos un forreach para hacer la cantidad de cards que vamos a ocupar, y de misma forma mostrar el contenido de los pedidos
                            foreach ($usuarios2 as $usuario2) {
                                ?>

                            <?php
                                $variable6=$usuario2['Nombre'];
$variable7=$usuario2['Apellido_P'];
$variable8=$usuario2['Apellido_M'];
$variable9=$usuario2['Clave'];
?>
                            <div class="card border-dark mb-3">
                                <h6><?php echo "".$usuario2['Nombre']." ".$usuario2['Apellido_P']." ".$usuario2['Apellido_M'];?>
                                </h6>
                                <h5><a
                                        href="MS_Ver.php?variable6=<?php echo $variable6 ?>&variable7=<?php echo $variable7 ?>&variable8=<?php echo $variable8 ?>&variable9=<?php echo $variable9 ?>"><img
                                            src="Img/eye - copia.png" height="18" data-toggle="tooltip"
                                            data-placement="right" title="Ver"></a>
                                    <a href="MS_Editar.php"><img src="Img/edit.png" height="18" data-toggle="tooltip"
                                            data-placement="right" title="Editar"></a>
                                    <button data-toggle="modal" data-target="#eliminar"><img src="Img/trash.png"
                                            height="18" data-toggle="tooltip" data-placement="right"
                                            title="Eliminar"></button>
                                </h5>

                            </div>
                            <?php
                        }
                        ?>
                            <a href="MS_Agregar.php"><button type="button"
                                    class="btn btn-success">Registrar</button></a>

                    </div>
                </div>

                <a href="Control.html" id="Con">Atras</a>
            </div>

            <div class="col-md-1"></div>

        </div>








        <!--Modal Eliminar-->

        <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Seguro que desea Eliminar?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" id="Eli">Eliminar</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>










    </div>



    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/abrir.js"></script>
    <script>
    /*
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    })*/
    </script>
</body>

</html>