<?php 

$server = "localhost";
$user = "root";
$pass = "";
$bd = "restaurante"; 

$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }


 $nombre=filter_input(INPUT_POST, 'nombre');

$apellido=filter_input(INPUT_POST, 'apellido');

$apellidom=filter_input(INPUT_POST, 'apellidom');

$contraseña=filter_input(INPUT_POST, 'contraseña');
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width-device,user-scalable=no,
              initial-scale=1.0,maximum-scale01, minimum-scale=1">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <link rel="stylesheet" href="CSS/Principal.css">
    <link rel="stylesheet" href="CSS/Ad-Eliminar.css">
    <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
</head>

<body>
    <div class="col-md-12">
        <div class="Contenido">
            <div class="row">
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-11">
                    <h1 id="Mio">Registro Mesero</h1>
                </div>
            </div>
        </div>

        <div class="row" id="down">
            <div class="col"></div>
            <div class="col-md-5">
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Formulario de Registro Mesero</h5>
                        <form method="post" action="">
                      <input type="text" placeholder="Ingrese su Nombre Completo" name="nombre">
                      <input type="text" placeholder="Ingrese su Apellido Paterno" name="apellido">
                      <input type="text" placeholder="Ingrese su Apellido Materno" name="apellidom">
                      <div class="row">
                        <div class="col-md-10">
                            <input type="password" placeholder="Ingrese su Calve" id="Ancho" name="contraseña"> 
                        </div>
                        <div class="col-sm-2">
                     <img src="Img/eye.png" height="18" id="No">
                        </div>
                    </div>
                     

                        <input type="submit" class="btn btn-primary" value="Registrar" name="boton1">
                        </form>
                    </div>
                  </div>


            </div>
            <div class="col"></div>
        </div>




        <?php

$boton1="";


if(isset($_POST["boton1"])){
     
      if (empty($nombre)) {
             echo "Debes ingresar el nombre\n";
             $corr1="0";
            //return false;
            }else{
             echo $_POST['nombre'];
             $corr1="1";
            }
            if (empty($_POST['apellido'])) {
            echo "Debes ingresar el apellido";
            //return false;
            $corr2="0";
            }else{
             echo $_POST['apellido'];
             $corr2="1";

            }
            if (empty($_POST['apellidom'])) {
                   echo "Debes ingresar el apellido Materno";
                   //return false;
                   $corr3="0";

            }else{
             echo $_POST['apellidom'];
             $corr3="1";

            }
            if (empty($_POST['contraseña'])) {
                    echo "Debes ingresar la contraseña";
                    //return false;
                    $corr5="0";
 
             }else{
              echo $_POST['contraseña'];
              $corr5="1";
 
             }

if (($corr1=="1")&&($corr2=="1")&&($corr3=="1")&&($corr5=="1")){


        $query = "INSERT INTO mesero (ide,Nombre,Apellido_P,Apellido_M,Clave) values('','".$nombre."','".$apellido."','".$apellidom."','".$contraseña."')";

if (mysqli_query($conex, $query)) {
 echo "Correcto";
    header('location: Administrar Personal.php');
}
else{
 echo "Error: ".mysqli_error($conex);
}

}
}

?>




        <a href="Administrar Personal.php" id="Con">Atras</a>







    </div>



    <script src="JS/AD_Agregar.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
</body>

</html>