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

$consulta = "select * from pago where fecha=(select curdate())";
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
              <a href="Home.php" id="Top" class="list-group-item list-group-item-action"> <img src="Img/Home.png" height="20" id="none"><img src="Img/Home.png" height="26" id="grande"> <span id="Negro"><img src="Img/Home2.png" height="35"></span> <span>Home</span></a>
              <a href="Tablero_Mesero.php" class="list-group-item list-group-item-action"> <img src="Img/Mesero.png" height="20" id="none"><img src="Img/Mesero.png" height="26" id="grande"> <span id="Negro"><img src="Img/Mesero2.png" height="35"></span><span>Tablero de Meseros</span></a>
              <a href="Tablero_Cocinero.php" class="list-group-item list-group-item-action"> <img src="Img/Chef.png" height="20" id="none"><img src="Img/Chef.png" height="26" id="grande"> <span id="Negro"><img src="Img/Chef2.png" height="35"></span><span>Tablero de Cocineros</span></a>
              <a href="ControlP.php" class="list-group-item list-group-item-action" id="linea"> <img src="Img/Control.png" height="20" id="none"><img src="Img/Control.png" height="26" id="grande"> <span id="Negro"><img src="Img/Control2.png" height="35"></span> <span>Control</span></a>
            </div>
    
        </div>
        <div id="page-container" class="w-100">
    
          <!--Encabezado de la Pagina-->
    
          <nav class="navbar navbar-expand-lg navbar-light">
            
            <img src="Img/menu - copia.png" height="25" class="Menu-Bot">
          <h2>Registro de Ventas</h2>
          </nav>
    
          <a href="Control.php" id="Con"><img src="Img/back.png" height="33px"></a>
          <!--Contenido de la pagina-->
    
          <div id="content" class="p-3">



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






    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/script.js"></script>
    <script src="JS/abrir.js"></script>
</body>

</html>