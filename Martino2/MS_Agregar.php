<?php 
//realizamos una conexion a la BD
$server = "localhost";
$user = "root";
$pass = "";
$bd = "restaurante"; 

$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }

//Asignamos el valor de las variables que el usuario ingrese en el formulario
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

//Asignamos una accion al presionar el boton1
if(isset($_POST["boton1"])){
     //Validamos que el nombre no este vacio
      if (empty($nombre)) {
        echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Nombre';
             $corr1="0";
         
            }else{
            
             $corr1="1";
            }  //Validamos que el apellido no este vacio
            if (empty($_POST['apellido'])) {
                echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Apellido Paterno';
       
            $corr2="0";
            }else{
             $corr2="1";

            }  //Validamos que el apellido materno no este vacio
            if (empty($_POST['apellidom'])) {
                echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Apellido Materno';
                   
                   $corr3="0";

            }else{
    
             $corr3="1";

            }  //Validamos que el campo contraseña no este vacio
            if (empty($_POST['contraseña'])) {
                echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar la contraseña';
                   
                    $corr5="0";
 
             }else{
              
              $corr5="1";
 
             }
//Realizamos una condicion para que ningun campo este vacio
if (($corr1=="1")&&($corr2=="1")&&($corr3=="1")&&($corr5=="1")){

//Realizamos la consulta para ingresar los nuevos datos en el campo meseros
        $query = "INSERT INTO mesero (id,nombre,apellidoP,apellidoM,clave,id_turno) values('','".$nombre."','".$apellido."','".$apellidom."','".$contraseña."',2)";

        //Si la consulta se realizo satisfactoriamente, se nos redireccionara a la pagina Administrar Personal
if (mysqli_query($conex, $query)) {
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