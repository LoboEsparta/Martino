<?php
//Recuperamos la variable obtenida por el buscador
$variable1=($_GET['variable1']);
//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
$consulta = "SELECT * FROM comida WHERE id_categoria='$variable1'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

//Asignamos el valor de la consulta en una variable llamada "usuarios"
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width-device,user-scalable=no,
              initial-scale=1.0,maximum-scale01, minimum-scale=1">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="css/Principal.css">
    <link rel="stylesheet" href="CSS/Menu.css">
    <link rel="stylesheet" href="css/Estilos.css">
    <link rel="stylesheet" href="css/Carga.css">
    <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
</head>

<body>



    <div class="contenedor_loader">
        <div class="loader"></div>
    </div>


    <div id="content-wraper" class="d-flex">
        <div id="sidebar-container" class="border-right">
            <div class="logo">
                <img src="Img/MartinoLogo.png" height="65">
                <h1>Martino</h1>
            </div>
            <div class="menu list-group-flush">
                <a href="Home.html" id="Top" class="list-group-item list-group-item-action"> <img src="Img/Home.png"
                        height="20" id="none"><img src="Img/Home.png" height="26" id="grande"> <span id="Negro"><img
                            src="Img/Home2.png" height="35"></span> <span>Home</span></a>
                <a href="Tablero_Mesero.php" class="list-group-item list-group-item-action"> <img src="Img/Mesero.png"
                        height="20" id="none"><img src="Img/Mesero.png" height="26" id="grande"> <span id="Negro"><img
                            src="Img/Mesero2.png" height="35"></span><span>Tablero de Meseros</span></a>
                <a href="Tablero_Cocinero.php" class="list-group-item list-group-item-action"> <img src="Img/Chef.png"
                        height="20" id="none"><img src="Img/Chef.png" height="26" id="grande"> <span id="Negro"><img
                            src="Img/Chef2.png" height="35"></span><span>Tablero de Cocineros</span></a>
                <a href="ControlP.php" class="list-group-item list-group-item-action" id="linea"> <img
                        src="Img/Control.png" height="20" id="none"><img src="Img/Control.png" height="26" id="grande">
                    <span id="Negro"><img src="Img/Control2.png" height="35"></span> <span>Control</span></a>
            </div>

        </div>
        <div id="page-container" class="w-100">

            <!--Encabezado de la Pagina-->

            <nav class="navbar navbar-expand-lg navbar-light">

                <img src="Img/menu - copia.png" height="25" class="Menu-Bot">

                <ul class="navbar-nav mr-auto">

                    <h2>Menu</h2>

                </ul>

                <div class="btn-group" role="group" id="Margen">
                    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Agregar
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="A_Producto.php?variable1=<?php echo $variable1 ?>">Producto<img src="Img/anadir.png"
                                height="24"></a>
                    </div>
                </div>
            </nav>

            <!--Contenido de la pagina-->

            <div id="content" class="p-3">


                <div class="row">
                    <div class="col-md-12" id="Centro">

                        <?php
                        //Utilizamos un forreach para mostrar el contenido de la tabla
                         foreach ($usuarios as $usuario) {

                          ?>
                          <?php
//Asiganmos el valor a la variable11 para pasarla a la siguiente pagina
$variable11=$usuario['id'];
                           $variable14=$usuario['id'];

                                ?>
                        <div class="card border-primary mb-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "".$usuario['nombre'];?></h5>
                                <h6 class="card-title"><?php echo "Precio : $".$usuario['precio'];?></h6>
                                <br>
                                <h6 class="card-title"><?php echo "".$usuario['descripcion'];?></h6>
                                <p>

                                </p>
                                <a href="A_Pro-Editar.php?variable14=<?php echo $variable14 ?>" class="btn btn-primary" id="Tamaño">Editar</a>
                                <a href="#" class="btn btn-danger" data-toggle="modal"
                                    data-target="#eliminar<?php echo $usuario['id'];?>">Eliminar</a>
                            </div>
                        </div>
                        <?php
                        }

                                ?>






                        <?php
                        //Utilizamos un forreach para crear los modales del boton "Eliminar"
                         foreach ($usuarios as $usuario) {
                            $variable11=$usuario['nombre'];
                            $variable14=$usuario['nombre'];
                                ?>
                        <!--Modal Eliminar-->

                        <div class="modal fade" id="eliminar<?php echo $usuario['id'];?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Seguro que desea Eliminar <?php echo "".$usuario['nombre'];?>?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <a href="Eliminarplato.php?variable1=<?php echo $variable11 ?>"> <button type="button" id="Eli">Eliminar</button></a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        }

                                ?>

                        <a href="Menu.php" id="Bot">Atras </a>

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
    <script src="JS/script.js"></script>

</body>

</html>