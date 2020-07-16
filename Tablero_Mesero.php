<?php

//Realizamos la conexion con la bd mediante un metodo
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//Realizamos una consulta para mostrar todos las ordenes
$consulta = "SELECT * FROM ordenes WHERE NumMesa>0" ;

//Ejecutamos la consulta
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
    <link rel="stylesheet" href="CSS/Principal.css">
    <link rel="stylesheet" href="CSS/T_Mesero.css">
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
                <a href="Home.html" id="Top" class="list-group-item list-group-item-action"> <img src="Img/Home.png"
                        height="20" id="none"><img src="Img/Home.png" height="26" id="grande"> <span id="Negro"><img
                            src="Img/Home2.png" height="35"></span> <span>Home</span></a>
                <a href="Tablero_Mesero.php" class="list-group-item list-group-item-action"> <img src="Img/Mesero.png"
                        height="20" id="none"><img src="Img/Mesero.png" height="26" id="grande"> <span id="Negro"><img
                            src="Img/Mesero2.png" height="35"></span><span>Tablero de Meseros</span></a>
                <a href="Tablero_Cocinero.php" class="list-group-item list-group-item-action"> <img src="Img/Chef.png"
                        height="20" id="none"><img src="Img/Chef.png" height="26" id="grande"> <span id="Negro"><img
                            src="Img/Chef2.png" height="35"></span><span>Tablero de Cocineros</span></a>
                <a href="ControlP.html" class="list-group-item list-group-item-action" id="linea"> <img
                        src="Img/Control.png" height="20" id="none"><img src="Img/Control.png" height="26" id="grande">
                    <span id="Negro"><img src="Img/Control2.png" height="35"></span> <span>Control</span></a>
            </div>

        </div>
        <div id="page-container" class="w-100">

            <!--Encabezado de la Pagina-->

            <nav class="navbar navbar-expand-lg navbar-light">

                <img src="Img/menu - copia.png" height="25" class="Menu-Bot">
                <h2>Tablero de Meseros</h2>
            </nav>

            <div id="content" class="p-3">

                <!-- Card de Meseros-->

                <div class="row">
                    <?php
                    /*Utilizamos un forreach con la variable "usuarios" que asignamos anteriormente y la asignamos a una nueva 
                     variable llamada "usuario", esto sirve para generar la cantidad de cards para la cantidad de registros obtenidos en la consulta*/
                            foreach ($usuarios as $usuario) {
                                ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><img src="Img/MartinoLogo.png" height="180"></h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#Clave" id="Confirma">
                                            Confirmar </button>
                                    </div>

                                    <div class="col-md-6">
                                        <button type="" class="" data-toggle="modal"
                                            data-target="#mesa<?php echo "".$usuario['NumMesa']?>"><img
                                                src="Img/3 point.png" height="20"></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <?php
                       }
                        ?>






                </div>





                <!--Menu de los tres puntitos-->

                <?php

                //nuevamente utilizamos un forreach, pero esta vez para mostrar el contenido de las ordenes
                           foreach ($usuarios as $usuario) {
                                ?>

                <div class="modal fade" id="mesa<?php echo "".$usuario['NumMesa']?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Orden<?php echo " ".$usuario['NumMesa']?>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                      <!--- Mostramos el contenido de las ordenes en forma de lista -->
                                <li><?php echo $usuario['PlaEntrada'] ?></li>

                                <li><?php echo $usuario['PlaPrincipal'] ?></li>

                                <li><?php echo $usuario['Postre'] ?></li>

                                <li><?php echo $usuario['Bebida'] ?></li>

                                <li><?php echo $usuario['Aditamientos'] ?></li>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>

                        </div>


                    </div>

                </div>
                <?php
                       }
                        ?>



                <!--Boton de Confirmar-->

                <div class="modal fade" id="Clave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form method="post">
                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLabel">Ingrese su clave para aprovar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="Contraseña" name="clave"
                                                placeholder="Clave">
                                        </div>
                                        <div class="col-sm-2">
                                            <img src="Img/eye - copia.png" height="20" id="No" class="Po">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <input type="submit" class="btn btn-secondary" value="Confirmar" name="botonconfir">
                            </form>
                            <?php 
                            //Asignamos una accion cuando el mesero ingrese su clave
$botonconfir="";
if(isset($_POST['botonconfir'])){
    //Conectamos con la BD
    require "conexionmeseros.php";
  
  //Asignamos el valor que el mesero asigno en la variable "clave"
    $clave=$_POST['clave'];
    
    //Realizamos una consulta para validar si la clave que ingreso el mesero es correcta
    $q="SELECT COUNT(*) as contar from mesero where Clave='$clave'";
    
    $consulta=mysqli_query($conexion, $q);
    $array=mysqli_fetch_array($consulta);
    
    if($array['contar']>0){
        //Si la clave que ingreso el mesero es correcta, la pagina mostrara el tablero de cocineros
    header("location: Tablero_Cocinero.php");
   // echo '<p class="alert alert-success agileits" role="alert">Clave correcta!';

    }else{
   // en caso de que la clave este incorrecta, mostrara un mensaje diciendo que la clave esta incorrecta
   echo "<br>";
    echo '<p class="alert alert-danger agileits" role="alert">Clave incorrecta!';

    }

}

?>

                        </div>
                    </div>
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
    <script src="JS/T_Mesero.js"></script>
</body>

</html>