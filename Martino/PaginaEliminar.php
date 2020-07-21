<?php
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM auxiliar";


$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="es">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <title></title>
    <style>
    table.dataTable thead {
        background: linear-gradient(to right, #0575E6, #00F260);
        color: white;
    }
    </style>
   
   
     <link rel="stylesheet" href="CSS/bootstrap.min.css">
     
     <link rel="stylesheet" href="CSS/Principal.css">
     <link rel="stylesheet" href="CSS/Eliminar.css">
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
                        <img src="Img/menu.png" height="40" class="Menu-Bot">
                            </div>
                            <div class="col-md-11">
                        <h1 id="Mio">Eliminar Empleados</h1>
                            </div>
                </div>
            </div>
   

    <h3 class="text-center"></h3>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                    <thead class="text-center">
                        <th>Nombre Del Usuario</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Telefono</th>
                        <th>Contraseña</th>
                        <th>Eliminar</th>
                        

                    </thead>
                    <tbody>
                        <?php
                            foreach ($usuarios as $usuario) {
                                ?>
                        <tr>
                            <form method="post">
                                <td><?php echo $usuario['Nombre'] ?></td>
                                <td><?php echo $usuario['Apellido_P'] ?></td>
                                <td><?php echo $usuario['Apellido_M'] ?></td>
                                <td><?php echo $usuario['Telefono'] ?></td>
                                <td><?php echo $usuario['Contraseña'] ?></td> 

                                <td> <input type="submit" value="Eliminar" class="btn btn-danger" name="boton1">
                           
                                </td>
                             
                            </form>
                        
                        </tr>
                   

                        <?php
                        }
                        ?>
                        <?php

                    
                            $boton1="";
if(isset($_POST['boton1'])){
    $codigo=$usuario['Telefono'];
    $consultaBorrar ="DELETE FROM personas WHERE Telefono=$codigo";


    $resultadoBorrar = $conexion->prepare($consultaBorrar);
    $resultadoBorrar->execute();
    $usuarios = $resultadoBorrar->fetchAll(PDO::FETCH_ASSOC);


echo "El registro se ha eliminado";
}
?>
                    </tbody>
                </table>



            </div>
        </div>
    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>


    <!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>


    <script>
    $(document).ready(function() {
        $('#tablaUsuarios').DataTable();
    });
    </script>


  
    <script src="JS/abrir.js"></script>
</body>
</html>