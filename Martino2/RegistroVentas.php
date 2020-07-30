<?php

session_start();

if(!isset($_SESSION['usuarioing2'])) {
	header("Location: controlP.php");
}

//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla pago

$consulta = "SELECT * from pago WHERE fecha=('2020-07-30')";
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
    <link rel="stylesheet" href="CSS/RegistroVentas.css">
    <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <h1 id="Mio">Registro de Ventas</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
              
                <thead class="thead-dark">
               
                    <tr>
                        <th scope="col">fecha</th>
                        <th scope="col">subtotal</th>
                        <th scope="col">IVA</th>
                        <th scope="col">propina</th>
                        <th scope="col">Cliente</th>
                  
                     
                       
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <?php

                /* Utilizamos un forreach para mostrar todos los registros de la tabla pago" */
                         foreach ($usuarios as $usuario) {
                                ?>
                <tbody>
                    <tr>
                  
                        <!-- Mostramos los registros en forma de tabla -->
                        <td><?php echo "".$usuario['fecha'];?></td>
                        <td><?php echo "".$usuario['subtotal'];?></td>
                        <td><?php echo "".$usuario['IVA'];?></td>
                        <td><?php echo "".$usuario['propina'];?></td>
                        <td><?php echo "".$usuario['id_cliente'];?></td>
                        <th scope="row" id="Black"><?php echo "".$usuario['propina']+$usuario['IVA']+$usuario['subtotal'];?></th>
                    </tr>
                  
                </tbody>
                <?php
                        }
                        ?>
            </table>






        </div>
    </div>

    <div class="row">
        <div class="col-md-12" id="alinear">
            <a href="Control.php">Atras</a>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
          <a href="RegistroVentas.php"> <button>Total al dia</button></a>
        </div>
        <div class="col-md-4">
        <a href="almes.php"> <button>Total al mes</button></a>
        </div>
        <div class="col-md-4">
           <a href="alaño.php"> <button>Total al año</button></a>
        </div>
    </div>



</body>

</html>