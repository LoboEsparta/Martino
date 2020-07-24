<?php
require 'conexion3.php';


$nombre=filter_input(INPUT_POST, 'nombre');

$apellido=filter_input(INPUT_POST,'apellido');

$email=filter_input(INPUT_POST,'email');

$telefono=filter_input(INPUT_POST,'telefono');


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width-device,user-scalable=no,
     initial-scale=1.0,maximum-scale01, minimum-scale=1">
     <link rel="stylesheet" href="CSS/bootstrap.min.css">
     
     <link rel="stylesheet" href="CSS/Principal.css">
     <link rel="stylesheet" href="CSS/Registrar.css">
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
                    <li> <a href="Control.html"> <img src="Img/Control.png" height="20"> Control</a></li>
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
                        <h1 id="Mio">Registrar</h1>
                            </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <form method="post" >
                    <div class="row">
                    
                    <div class="col-md-5">
                      
                        <h3>Nombres</h3>
                        <input type="text" placeholder="Introducir Nombres" name="nombre" id="ancho">
                        <h3>Apellido Materno</h3>
                        <input type="text" placeholder="Apellido Materno" name="apellido" id="ancho">
                       
                    </div>
                    <div class="col-md-5">
                      
                        <h3>Apellido Paterno</h3>
                        <input type="text" placeholder="Apellido Materno" name="email" id="ancho">
                        <h3>Numero Telefonico</h3>
                        <input type="number" placeholder="Numero telefonico" name="telefono" id="ancho">

                        <INPUT type="submit" name="boton1" Value="Registrar Empleado" id="Mar">
                    

                       
                    </div>
                    </div>
                    
                   
                    </form>
                    <?php

$boton1="";


$nombrecito=filter_input(INPUT_POST, 'nombre');


if(isset($_POST["boton1"])){
     
      if (empty($nombrecito)) {
             echo "Debes ingresar el nombre"."<br/>";
             $corr1="0";
            //return false;
            }else{
            // echo $_POST['nombre'];
             $corr1="1";
            }
            if (empty($_POST['apellido'])) {
            echo "Debes ingresar el apellido paterno"."<br/>";
            //return false;
            $corr2="0";
            }else{
             //echo $_POST['apellido'];
             $corr2="1";

            }
            if (empty($_POST['email'])) {
                   echo "Debes ingresar el apellido materno"."<br/>";
                   //return false;
                   $corr3="0";

            }else{
            // echo $_POST['email'];
             $corr3="1";

            }
            if (empty($_POST['telefono'])) {
                   echo "Debes ingresar el telefono"."<br/>";
                   //return false;
                   $corr4="0";
                   }else{
                   // echo $_POST['telefono'];
                    $corr4="1";

                   }


if (($corr1=="1")&&($corr2=="1")&&($corr3=="1")&&($corr4=="1")){
             $insertar="INSERT INTO personas VALUES ('$nombre','$apellido','$email','$telefono')";

$query=mysqli_query($conectar,$insertar);
if($query){
echo "Empleado Registrado Correctamente";
}else{
echo "incorrecto";
}
      }
}

?>
                    <a href="registrar.php" id="None"> Atras   </a>

                </div>
                <div class="col-md-1"></div>
            </div>
                                   
                </div>
                </div>  
        </div>
       



    <script src="JS/bootstrap.js"></script>
     <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/T_Mesero.js"></script>
    <script src="JS/abrir.js"></script>
</body>
</html>