<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM ordenes WHERE NumMesa>0" ;


$resultado = $conexion->prepare($consulta);
$resultado->execute();
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
    <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
</head>

<body>


    <div class="row">
        <div class="sidebar">
            <h1>Martino</h1>
            <ul>
                <li> <a href="Home.html" id="Top"> <img src="Img/Home.png" height="20"> Home</a></li>
                <li> <a href="Tablero_Mesero.php"> <img src="Img/Mesero.png" height="20"> Tablero de Meseros</a></li>
                <li> <a href="Tablero_Cocinero.php"> <img src="Img/Chef.png" height="20"> Tablero de Cocineros</a></li>
                <li> <a href="ControlP.html"> <img src="Img/Control.png" height="20"> Control</a></li>
            </ul>
        </div>
    </div>


    <div class="col-md-12">
        <div class="Contenido">
            <div class="row">
                <div class="col-md-1">
                    <img src="Img/menu - copia.png" height="40" class="Menu-Bot">
                </div>
                <div class="col-md-11">
                    <h1 id="Mio">Tablero de Meseros</h1>
                </div>
            </div>
        </div>

        <!-- Card de Meseros-->

        <div class="row">

            <?php
                            foreach ($usuarios as $usuario) {
                                ?>
            <div class="col-md-3">
                <div class="card" style="width: 14rem;">
                    <img src="Img/MartinoLogo.png" class="card-img-top" height="250">



                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Clave"
                                    id="Confirma"> Confirmar </button>
                            </div>

                            <div class="col-md-6">
                                <button type="" class="" data-toggle="modal" data-target="#mesa1"><img
                                        src="Img/3 point.png" height="20"></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!--Boton de Confirmar-->

            <div class="modal fade" id="Clave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingrese su clave para aprovar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="Contraseña" placeholder="Clave">
                                </div>
                                <div class="col-sm-2">
                                    <img src="Img/eye - copia.png" height="20" id="No" class="Po">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                       }
                        ?>

            <!--Menu de los tres puntitos-->
            
            <div class="modal fade" id="mesa1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                
                <div class="modal-dialog modal-dialog-centered">
               
                    <div class="modal-content">
                   
                        <div class="modal-header">
                        
                            <h5 class="modal-title" id="exampleModalLabel">Orden</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php
                            foreach ($usuarios as $usuario) {
                                ?>
                        <div class="modal-body">
                      
                            <h3> MESA <?php echo "".$usuario['NumMesa']?></h3>

                            <p><?php echo $usuario['PlaEntrada'] ?>

                                <p><?php echo $usuario['PlaPrincipal'] ?>

                                    <p><?php echo $usuario['Postre'] ?>

                                        <p><?php echo $usuario['Bebida'] ?>

                                            <p><?php echo $usuario['Aditamientos'] ?>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>

                                                </div>
                                                
                        </div>
                        <?php
                        }
                        ?>
                        </div>
                        
                </div>  
                
            </div>
         
        </div>
       
       


    </div>
   

    </div>



</body>











<script src="JS/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="JS/bootstrap.min.js"></script>
<script src="JS/abrir.js"></script>
<script src="JS/T_Mesero.js"></script>

</html>