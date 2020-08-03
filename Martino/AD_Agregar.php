<?php 

//Estas lineas sirven para crear una conexion con la BD para poder agregar un Administrador nuevo
$server = "localhost";
$user = "root";
$pass = "";
$bd = "restaurante"; 

$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }

 /* En estas lineas asignamos el valor de las variables "Nombre", "Apellido", "Apellidom", "telefono" y "contraseña
y el valor que tienen estas variables es el valor que el usuario ingresa en el formulario   */
$nombre=filter_input(INPUT_POST, 'nombre');

$apellido=filter_input(INPUT_POST, 'apellido');

$apellidom=filter_input(INPUT_POST,'apellidom');

$telefono=filter_input(INPUT_POST, 'telefono');

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
          <h2>Registro Administrador</h2>
          </nav>
    

          <a href="Administrar Personal.php" id="Con"><img src="Img/back.png" height="33px"></a>
          <!--Contenido de la pagina-->
    
          <div id="content" class="p-3">




    <div class="col-md-12">
        <div class="row" id="down">
            <div class="col"></div>
            <div class="col-md-5">
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Formulario de Registro Administrador</h5>
                        <form method="post" action="">
                            <input type="text" placeholder="Ingrese su Nombre" name="nombre">
                            <input type="text" placeholder="Ingrese su Apellido Paterno" name="apellido">
                            <input type="text" placeholder="Ingrese su Apellido Materno" name="apellidom">
                            <input type="number" placeholder="Ingrese su Numero Telefonico" name="telefono">
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="password" placeholder="Ingrese su Contraseña" id="Ancho"
                                        name="contraseña">
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

// Esta linea sirve para asignarle una accion al boton1 
if(isset($_POST["boton1"])){
     
    //Estas lineas sirven para validar que el campo del formulario no esten vacios, si lo estan se mostrara un mensaje 
   
      if (empty($nombre)) {
           // Alerta para que ingresen el nombre
        echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el nombre!';
             $corr1="0";
            
            }else{
             //Si el campo esta ingresado la carriable corr1 obtiene valor 1.
             $corr1="1";
            }
            if (empty($_POST['apellido'])) {
                // Alerta para que ingresen el apellido Paterno
                echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el apellido Paterno!';
            //return false;
            $corr2="0";
            }else{
         
             $corr2="1";

            }
            if (empty($_POST['apellidom'])) {
                // Alerta para que ingresen el apellido Materno
                echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el apellido Materno';
               
                   $corr3="0";

            }else{
             
             $corr3="1";

            }
            if (empty($_POST['telefono'])) {
                // Alerta para que ingresen el telefono
                echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Telefono';
                 
                   $corr4="0";
                   }else{
                    
                    $corr4="1";

                   }
            if (empty($_POST['contraseña'])) {
                // Alerta para que ingresen la contraseña
                echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar la contraseña';
                  
                    $corr5="0";
 
             }else{
            
              $corr5="1";
 
             }
//Realizamos una validacion, si todos los campos fueron ingresados  entonces realizara la consulta
if (($corr1=="1")&&($corr2=="1")&&($corr3=="1")&&($corr4=="1")&&($corr5=="1")){

//Esta consulta sirve para agregar un nuevo registro en la tabla auxiliar
        $query = "INSERT INTO auxiliar (id,nombre,apellidoP,apellidoM,telefono,clave) values('','".$nombre."','".$apellido."','".$apellidom."','".$telefono."','".$contraseña."')";

          //Si la consulta fue realizada correctamente se nos redireccionara a la pagina "Administrar Personal"
if (mysqli_query($conex, $query)) {
    echo '<script type="text/javascript">
    window.location.assign("Administrar Personal.php");
    </script>';
}
else{
      //Si la consulta no se logro completar, se nos mostrara un mensaje de error
 echo "Error: ".mysqli_error($conex);
}

}
}

?>



    </div>



    
    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/AD_Agregar.js"></script>
    <script src="JS/script.js"></script>
    <script src="JS/abrir.js"></script>
</body>

</html>