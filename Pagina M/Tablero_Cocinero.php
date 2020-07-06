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
    <link rel="stylesheet" href="CSS/T_Cocinero.css">
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
                    <h1 id="Mio">Tablero de Cocineros</h1>
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="row">
            <?php
                            foreach ($usuarios as $usuario) {
                                ?>
                <div class="col-md-4">
                    <div class="card border-primary mb-3" style="width: 18rem;" id="Eliminar">
                        <div class="card-body">
                            <h5 class="card-title"><img src="Img/MartinoLogo.png" height="80"></h5>
                            <p class="card-text">

                                <form method="post">
                                   
                                    <h3> MESA <?php echo "".$usuario['NumMesa']?></h3>

                                        <p><?php echo "Platillo De Entrada: ".$usuario['PlaEntrada'] ?>

                                            <p><?php echo "Platillo Principal: ".$usuario['PlaPrincipal'] ?>

                                                <p><?php echo "Postre: ".$usuario['Postre'] ?>

                                                    <p><?php echo "Bebida: ".$usuario['Bebida'] ?>

                                                        <p><?php echo "Aditamientos: ".$usuario['Aditamientos'] ?>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="#" id="Top"
                                                                    class="btn btn-primary">Confirmar</a>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <input type="submit" name="boton1" id="Top" value="Finalizado" class="btn btn-primary" id="Final">
                                                                    
                                                            </div>
                                                        </div>
                                </form>
                             

                        </div>
                    </div>
                </div>
                <?php
                        }
                        ?>
                                <?php
                                     $boton1="";
                                     if(isset($_POST['boton1'])){

                                        echo "Presionaste el boton 1";
                                         $codigo=$usuario['NumMesa'];
                                         $codigo14=$usuario['PlaEntrada'];
                                         $consultaBorrar ="DELETE FROM ordenes WHERE NumMesa=$codigo";
                                     
                                     
                                         $resultadoBorrar = $conexion->prepare($consultaBorrar);
                                         $resultadoBorrar->execute();
                                         $usuarios = $resultadoBorrar->fetchAll(PDO::FETCH_ASSOC);
                                     
                                     header('location: Tablero_Cocinero.php');
                                     
                                     }
                                     ?>

            </div>

        </div>






    </div>





    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/T_Mesero.js"></script>
    <script src="JS/abrir.js"></script>
</body>

</html>