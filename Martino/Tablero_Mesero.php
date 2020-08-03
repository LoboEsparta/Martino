<?php

session_start();

if(!isset($_SESSION['usuarioing'])) {
	header("Location: index.php");
}



//Realizamos la conexion con la bd mediante un metodo
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//Realizamos una consulta para mostrar todos las ordenes de la tabla Pedido
$consulta = "SELECT * FROM pedido WHERE Estado='Activo'" ;

//Ejecutamos la consulta
$resultado = $conexion->prepare($consulta);
$resultado->execute();

//Asignamos el valor de la consulta en una variable llamada "usuarios"
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);




$consulta14 = "Select comida_pedido.id_comida, comida_pedido.id_pedido, comida_pedido.cantidad, comida.nombre from comida_pedido inner join comida on comida_pedido.id_comida=comida.id;" ;
$resultado14 = $conexion->prepare($consulta14);
$resultado14->execute();
$usuarios14 = $resultado14->fetchAll(PDO::FETCH_ASSOC);


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
    <link rel="stylesheet" href="CSS/Carga.css">
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
                <a href="Home.php" id="Top" class="list-group-item list-group-item-action"> <img src="Img/Home.png"
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
                <h2>Tablero de Meseros</h2>
            </nav>

            <div id="content" class="p-3">

                <!-- Card de Meseros-->

                <div class="row">
                    <?php
                    /*Utilizamos un forreach con la variable "usuarios" que asignamos anteriormente y la asignamos a una nueva 
                     variable llamada "usuario", esto sirve para generar la cantidad de cards para la cantidad de registros 
                     obtenidos en la consulta*/
                            foreach ($usuarios as $usuario14) {
                              
                                ?>
                                
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><img src="Img/MartinoLogo.png" height="180">
                                <?php echo "<br>"?>
                                <?php echo "Mesa ".$usuario14['id_cliente']?>
                                <?php echo "<br>"?>
                                <?php echo "Fecha: ".$usuario14['fecha']?>
                                <?php echo "<BR>"?>
                                <?php echo "Hora: ".$usuario14['hora']?>
                                
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                       <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#Clave<?php echo "".$usuario14['id']?>" id="Confirma">
                                            Confirmar </button>
                                    </div>

                                    <div class="col-md-6">
                                      <button type="" class="" data-toggle="modal"
                                            data-target="#mesa<?php echo "".$usuario14['id']?>"><img
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
                           foreach ($usuarios as $usuario14) {
                           
                                ?>

                <div class="modal fade" id="mesa<?php echo "".$usuario14['id']?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Orden<?php echo " ".$usuario14['id']?>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <?php
                            $noc=$usuario14['id'];
                            $consulta14 = "SELECT comida_pedido.id_comida, comida_pedido.id_pedido, comida_pedido.cantidad, comida.nombre from comida_pedido inner join comida on comida_pedido.id_comida=comida.id WHERE id_pedido='$noc'" ;
                            $resultado14 = $conexion->prepare($consulta14);
                            $resultado14->execute();
                            $usuarios14 = $resultado14->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($usuarios14 as $usuario12) {
                                ?>
                                <!--- Mostramos el contenido de las ordenes en forma de lista -->
                                <li> <?php echo $usuario12['cantidad']; ?>       <?php echo $usuario12['nombre'] ?></li>
<?php
                            }
?>
                              
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


                
                    <?php

                //nuevamente utilizamos un forreach, pero esta vez para mostrar el contenido de las ordenes
                           foreach ($usuarios as $usuario) {
                            $variable1=$usuario['id'];
                        
                                ?>

                  
                    <!--Boton de Confirmar-->
                    <form method="post">
                    <div class="modal fade" id="Clave<?php echo "".$usuario['id']?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLabel">Ingrese su clave para aprovar pedido:
                                        <?php echo " ".$usuario['id'];?>

                                       </h5>
                                        
                                

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="Clave" name="clave"
                                                placeholder="Clave">
                                               
                                              
                                        </div>
                                        <div class="col-sm-2">
                                            <img src="Img/eye - copia.png" height="20" id="No" class="Po">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                   <button type="submit" class="btn btn-secondary" value="" name="botonconfir"><a href="ActualizarOrden.php?variable1=<?php echo $variable1 ?>&variable2=4758<?php //echo $variable2?>">Confirmar</a></button>



                                </div>
                            </div>
                        </div>


                    </div>
</form>

                    <?php
                       }
                        ?>
          
         <?php                  
$botonconfir="";
//Asignamos una accion al boton "botonconfir" al ser presionado
if(isset($_POST['botonconfir'])){
    
    //Mandamos a llamar la conexion
    require "conexionmeseros.php";
  
  //Asignamos el valor que el mesero asigno en la variable "clave"
    $clave=$_POST['clave'];


    //Realizamos una consulta para validar si la clave que ingreso el mesero es correcta
    $q="SELECT COUNT(*) as contar from mesero where clave='$clave'";
    
    //Realizamos la consulta
    $consulta=mysqli_query($conexion, $q);
    $array=mysqli_fetch_array($consulta);
    
    //Si las claves coinciden se muestra un mensaje
    if($array['contar']>0){
    
        echo "<br>";
        echo '<p class="alert alert-danger agileits" role="alert">Clave correcta';
       
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






    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/abrir.js"></script>
    <script src="JS/script.js"></script>
    <script src="JS/T_Mesero.js"></script>
</body>

</html>