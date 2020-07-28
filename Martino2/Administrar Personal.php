<?php
//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla auxiliar
$consulta = "SELECT * FROM auxiliar WHERE id>0" ;
$resultado = $conexion->prepare($consulta);
$resultado->execute();

//Asignamos el valor de la consulta en una variable llamada "usuarios"
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);


//Realizamos la misma accion para mostrar la tabla de meseros
$consulta2 = "SELECT * FROM mesero WHERE id>0" ;
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
    <link rel="stylesheet" href="CSS/Estilos.css">
    <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
</head>

<body>

<div id="content-wraper" class="d-flex">
    <div id="sidebar-container" class="border-right">
        <div class="logo">
          <img src="Img/MartinoLogo.png" height="65">
          <h1>Martino</h1>
        </div>
        <div class="menu list-group-flush">
          <a href="Home.html" id="Top" class="list-group-item list-group-item-action"> <img src="Img/Home.png" height="20" id="none"><img src="Img/Home.png" height="26" id="grande"> <span id="Negro"><img src="Img/Home2.png" height="35"></span> <span>Home</span></a>
          <a href="Tablero_Mesero.php" class="list-group-item list-group-item-action"> <img src="Img/Mesero.png" height="20" id="none"><img src="Img/Mesero.png" height="26" id="grande"> <span id="Negro"><img src="Img/Mesero2.png" height="35"></span><span>Tablero de Meseros</span></a>
          <a href="Tablero_Cocinero.php" class="list-group-item list-group-item-action"> <img src="Img/Chef.png" height="20" id="none"><img src="Img/Chef.png" height="26" id="grande"> <span id="Negro"><img src="Img/Chef2.png" height="35"></span><span>Tablero de Cocineros</span></a>
          <a href="ControlP.php" class="list-group-item list-group-item-action" id="linea"> <img src="Img/Control.png" height="20" id="none"><img src="Img/Control.png" height="26" id="grande"> <span id="Negro"><img src="Img/Control2.png" height="35"></span> <span>Control</span></a>
        </div>

    </div>
    <div id="page-container" class="w-100">

      <!--Encabezado de la Pagina-->

      <nav class="navbar navbar-expand-lg navbar-light">
        
        <img src="Img/menu - copia.png" height="25" class="Menu-Bot">
      <h2>Administrar Personal</h2>
      </nav>

      <!--Contenido de la pagina-->

      <div id="content" class="p-3">







                <div class="row">
                    <div class="col-md-6">
                        <div class="card" id="Naranja">
                            <div class="card-title">
                                <h2 id="naran">Administradores</h2>
                            </div>
                        </div>

                    
                            <?php
                    /* Utilizamos un forreach para hacer la cantidad de cards que vamos a ocupar, 
                    y de misma forma mostrar el contenido de las tablas */
                            foreach ($usuarios as $usuario) {
                                ?>
                            <?php

                            //Asignamos el valor de las variables1,2,3,4,5 y 0, para poder ocuparlas en la siguiente pagina
                                    $variable1=$usuario['nombre'];
                                    $variable2=$usuario['apellidoP'];
                                    $variable3=$usuario['apellidoM'];
                                    $variable4=$usuario['telefono'];
                                    $variable5=$usuario['clave'];
                                    $variable0=$usuario['id'];
?>
                            <div class="card border-dark mb-3 ">
                                <h6> <?php echo "".$usuario['nombre']." ".$usuario['apellidoP']." ".$usuario['apellidoM'];?>
                                </h6>
                                <h5><a href="AD_Ver.php?variable1=<?php echo $variable1 ?>&variable2=<?php echo $variable2 ?>&variable3=<?php echo $variable3 ?>&variable4=<?php echo $variable4 ?>&variable5=<?php echo $variable5 ?>"><img
                                            src="Img/eye - copia.png" height="18" data-toggle="tooltip"
                                            data-placement="right" title="Ver"></a>
                                    <a href="AD_Editar.php?variable1=<?php echo $variable1 ?>&variable2=<?php echo $variable2 ?>&variable3=<?php echo $variable3 ?>&variable4=<?php echo $variable4 ?>&variable5=<?php echo $variable5 ?>&variable0=<?php echo $variable0 ?>"><img
                                            src="Img/edit.png" height="18" data-toggle="tooltip" data-placement="right"
                                            title="Editar"></a>
                                            <button data-toggle="modal" data-target="#eliminar<?php echo "".$usuario['nombre'];?>"><img src="Img/trash.png"
                                            height="18" data-toggle="tooltip" data-placement="right"
                                            title="Eliminar"></button>
                                </h5>

                            </div>
                               <!--Modal Eliminar-->

        <div class="modal fade" id="eliminar<?php echo "".$usuario['nombre'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Seguro que desea Eliminar a <?php echo "".$usuario['nombre'];?> ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <a href="EliminarAD.php?variable0=<?php echo $variable0 ?>"> <button type="button" id="Eli">Eliminar</button></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
                            <?php
                        }
                        ?>
                         
                            <a href="AD_Agregar.php"><button type="button"
                                    class="btn ">Registrar</button></a>




                     


                    </div>

                    <!--Meseros-->

                    <div class="col-md-6">
                        <div class="card" id="Naranja">
                            <div class="card-title">
                                <h2 id="naran">Meseros</h2>
                            </div>
                        </div>


                        <?php
                    /* Utilizamos un forreach para hacer la cantidad de cards que vamos a ocupar, 
                    y de misma forma mostrar el contenido de las tablas */
                    foreach ($usuarios2 as $usuario2) {
                                ?>
                      
                            <?php
                            //Asignamos el valor de las variables7,8,9, y 10, para poder ocuparlas en la siguiente pagina

                                      $variable6=$usuario2['nombre'];
                                        $variable7=$usuario2['apellidoP'];
                                        $variable8=$usuario2['apellidoM'];
                                        $variable9=$usuario2['clave'];
                                        $variable10=$usuario2['id'];
                                        ?>
                            <div class="card border-dark mb-3">
                                <h6><?php echo "".$usuario2['nombre']." ".$usuario2['apellidoP']." ".$usuario2['apellidoM'];?>
                                </h6>
                                <h5><a
                                        href="MS_Ver.php?variable6=<?php echo $variable6 ?>&variable7=<?php echo $variable7 ?>&variable8=<?php echo $variable8 ?>&variable9=<?php echo $variable9 ?>&variable10=<?php echo $variable10 ?>"><img
                                            src="Img/eye - copia.png" height="18" data-toggle="tooltip"
                                            data-placement="right" title="Ver"></a>
                                    <a href="MS_Editar.php?variable6=<?php echo $variable6 ?>&variable7=<?php echo $variable7 ?>&variable8=<?php echo $variable8 ?>&variable9=<?php echo $variable9 ?>&variable10=<?php echo $variable10 ?>"><img src="Img/edit.png"
                                            height="18" data-toggle="tooltip" data-placement="right" title="Editar"></a>
                                            <button data-toggle="modal" data-target="#eliminar<?php echo "".$usuario2['id'];?>"><img src="Img/trash.png"
                                            height="18" data-toggle="tooltip" data-placement="right"
                                            title="Eliminar"></button>
                                </h5>

                            </div>
                     <!--Modal Eliminar-->

        <div class="modal fade" id="eliminar<?php echo "".$usuario2['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Seguro que desea Eliminar a <?php echo "".$usuario2['nombre'];?> ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <a href="EliminarMS.php?variable10=<?php echo $variable10 ?>"> <button type="button" id="Eli">Eliminar</button></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
                        <?php
                        }
                        ?>

                        <a href="MS_Agregar.php"><button type="button" class="btn">Registrar</button></a>

                    </div>
                </div>

                <a href="Control.html" id="Con">Atras</a>




            </div>

            

        </div>







       








    </div>



    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/abrir.js"></script>
   
</body>

</html>