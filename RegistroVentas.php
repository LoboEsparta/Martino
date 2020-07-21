<?php
//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
$consulta = "SELECT * FROM factura WHERE Ide>0" ;
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Clave</th>
                        <th scope="col">Fecha</th>
                       
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <?php
                         foreach ($usuarios as $usuario) {
                                ?>
                <tbody>
                    <tr>
                  
                        <th scope="row" id="Black"><?php echo "".$usuario['Nombre_Cliente'];?></th>
                        <td><?php echo "".$usuario['Ide'];?></td>
                        <td><?php echo "".$usuario['Fecha'];?></td>
                       
                        <td><?php echo "".$usuario['Total'];?></td>
                        
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
            <a href="Control.html">Atras</a>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <button>Total al dia</button>
        </div>
        <div class="col-md-4">
            <button>Total al mes</button>
        </div>
        <div class="col-md-4">
           <a href="alaño.php"> <button>Total al año</button></a>
        </div>
    </div>



</body>

</html>