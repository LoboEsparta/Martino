<?php
//Realizamos la conexion a la BD
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//Realizamos la consulta para seleccionar el contenido de la tabla meseros
$consulta2 = "SELECT * FROM mesero WHERE id>0" ;
//Ejecutamos la consulta
$resultado2 = $conexion->prepare($consulta2);
$resultado2->execute();
$usuarios2 = $resultado2->fetchAll(PDO::FETCH_ASSOC);


//Obtenemos las variables que nos pasan a traves del buscador
$variable6=($_GET['variable6']);

$variable7=($_GET['variable7']);

$variable8=($_GET['variable8']);

$variable9=($_GET['variable9']);

$variable10=($_GET['variable10']);
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
          <a href="Home.html" id="Top" class="list-group-item list-group-item-action"> <img src="Img/Home.png" height="20" id="none"><img src="Img/Home.png" height="26" id="grande"> <span id="Negro"><img src="Img/Home2.png" height="35"></span> <span>Home</span></a>
          <a href="Tablero_Mesero.php" class="list-group-item list-group-item-action"> <img src="Img/Mesero.png" height="20" id="none"><img src="Img/Mesero.png" height="26" id="grande"> <span id="Negro"><img src="Img/Mesero2.png" height="35"></span><span>Tablero de Meseros</span></a>
          <a href="Tablero_Cocinero.php" class="list-group-item list-group-item-action"> <img src="Img/Chef.png" height="20" id="none"><img src="Img/Chef.png" height="26" id="grande"> <span id="Negro"><img src="Img/Chef2.png" height="35"></span><span>Tablero de Cocineros</span></a>
          <a href="ControlP.php" class="list-group-item list-group-item-action" id="linea"> <img src="Img/Control.png" height="20" id="none"><img src="Img/Control.png" height="26" id="grande"> <span id="Negro"><img src="Img/Control2.png" height="35"></span> <span>Control</span></a>
        </div>

    </div>
    <div id="page-container" class="w-100">

      <!--Encabezado de la Pagina-->

      <nav class="navbar navbar-expand-lg navbar-light">
        
        <img src="Img/menu - copia.png" height="25" class="Menu-Bot">
      <h2>Editar Información</h2>
      </nav>

      <!--Contenido de la pagina-->

      <div id="content" class="p-3">







    <div class="col-md-12">
        <div class="row" id="down">
            <div class="col"></div>
            <div class="col-md-5">
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Editar Mesero</h5>
                        <!-- Mostramos las variables obtenidas en un formulario-->
                        <form method="post" action="">
                            <input type="text" placeholder="Numero De Empleado" name="codigoNUEVO" value=" Id: <?php echo "$variable10"; ?>">
                            <h6>Nombre</h6>
                            <input type="text" placeholder="Nombre" name="renombre" value="<?php echo "$variable6"; ?>">
                            <h6>Apellido Paterno</h6>
                            <input type="text" placeholder="Apellido Paterno" name="reapellido" value="<?php echo "$variable7"; ?>">
                            <h6>Apellido Materno</h6>
                            <input type="text" placeholder="Apellido Materno" name="reapellidom" value="<?php echo "$variable8"; ?>">
                            <h6>Contraseña</h6>
                            <input type="text" placeholder="Contraseña Visible" name="recontraseña" value="<?php echo "$variable9"; ?>">
                            <br>
                            <input type="Submit" value="Actualizar" name="guardar" class="btn btn-primary">
                        </form>

                       

                    </div>
                  </div>


            </div>
            <div class="col"></div>
        </div>




        <?php

$guardar="";
//Asignamos una accion al boton "Guardar" al ser presionado
if(isset($_POST['guardar'])){

 //Asiganmos los valores del formulario dentro de unas variables
$titulo1=$_POST['renombre'];
$categoria1=$_POST['reapellido'];
$categoria2=$_POST['reapellidom'];
$categoria4=$_POST['recontraseña'];


//Validamos que el campo no este vacio
if (empty($_POST['renombre'])) {
  //Mostramos una alerta para que el usuario registre el nombre
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Nombre';

    $corr1="0";
   }else{
    $corr1="1";
   }//Validamos que el campo no este vacio
   if (empty($_POST['reapellido'])) {
      //Mostramos una alerta para que el usuario registre el apellido Paterno
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Apellido Paterno';
 
   $corr2="0";
   }else{
    $corr2="1";
   }//Validamos que el campo no este vacio
   if (empty($_POST['reapellidom'])) {
      //Mostramos una alerta para que el usuario registre el Apellido Materno
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Apellido Materno';
        
          $corr3="0";
   }else{
    $corr3="1";
   }//Validamos que el campo no este vacio
  if (empty($_POST['recontraseña'])) {
     //Mostramos una alerta para que el usuario registre la contraseña
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar la contraseña';
    
         $corr5="0";
          }else{
          $corr5="1";
        
          }
//Realizamos una condicion para que ningun campo este vacio
if (($corr1=="1")&&($corr2=="1")&&($corr3=="1")&&($corr5=="1")){
//Realizamos la consulta para actualizar los nuevos datos en la tabla de meseros
$consultaActualizar ="UPDATE mesero SET nombre='$titulo1', apellidoP='$categoria1', apellidoM='$categoria2', clave='$categoria4' WHERE id=$variable10";

//Realizamos la consulta
$resultadoA = $conexion->prepare($consultaActualizar);
$resultadoA->execute();
$usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);
//Redireccionamos a Administrar Personal
header ("location: Administrar Personal.php");
}}

?>





        <a href="Administrar Personal.php" id="Con">Atras</a>







    </div>

      </div>
    </div>
</div>




    <script src="JS/AD_Agregar.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/script.js"></script>
    <script src="JS/abrir.js"></script>
</body>

</html>