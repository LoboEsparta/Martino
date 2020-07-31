<?php
//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
$consulta = "SELECT * FROM auxiliar WHERE id>0" ;
$resultado = $conexion->prepare($consulta);
$resultado->execute();

//Asignamos el valor de la consulta en una variable llamada "usuarios"
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);


/* En estas lineas asignamos el valor de las variables 1,2,3,4,5,0 estas variables nos nos pasadas a traves del buscador
 esto con la finalidad de ser mostradas en el formulario  */
$variable1=($_GET['variable1']);

$variable2=($_GET['variable2']);

$variable3=($_GET['variable3']);

$variable4=($_GET['variable4']);

$variable5=($_GET['variable5']);

$variable0=($_GET['variable0']);
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
                        <h5 class="card-title">Información del Administrador</h5>
                        <form method="post" action="">
                        <!-- Estas lineas sirven para el formulario y la informacion mostrada en el es la que se nos paso en las variables 1,2,3,4,5 y 0 -->
                            <input type="text" placeholder="Id A Modificar" name="codigoNUEVO" value=" Id: <?php echo "$variable0"; ?>">
                            <h6>Nombre</h6>
                            <input type="text" placeholder="Nombre" name="renombre" value="<?php echo "$variable1"; ?>">
                            <h6>Apellido Paterno</h6>
                            <input type="text" placeholder="Apellido Paterno" name="reapellido" value="<?php echo "$variable2"; ?>">
                            <h6>Apellido Materno</h6>
                            <input type="text" placeholder="Apellido Materno" name="reapellidom" value="<?php echo "$variable3"; ?>">
                            <h6>Numero Telefonico</h6>
                            <input type="number" placeholder="Numero Telefonico" name="renumero" value="<?php echo "$variable4"; ?>">
                            <br>
                            <div class="row">
                          <div class="col-md-10">
                      <input type="password" placeholder="Ingrese su Contraseña" name="recontraseña" id="Ancho" value="<?php echo "$variable5"; ?>">
                          </div>
                          <div class="col-sm-2">
                       <img src="Img/eye.png" height="18" id="No">
                          </div>
                      </div>
                        
                            <input type="Submit" value="Actualizar" name="guardar" class="btn btn-primary">
                        </form>

                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>


      <?php

$guardar="";


// Esta linea sirve para asignarle una accion al boton guardar
if(isset($_POST['guardar'])){

 //Asignamos el valor a las variables con el valor del formulario 
$titulo1=$_POST['renombre'];
$categoria1=$_POST['reapellido'];
$categoria2=$_POST['reapellidom'];
$categoria3=$_POST['renumero'];
$categoria4=$_POST['recontraseña'];


   
    //Estas lineas sirven para validar que el campo del formulario no esten vacios, si lo estan se mostrara un mensaje 
   
if (empty($_POST['renombre'])) {
  // Alerta para que ingresen el nombre
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Nombre';

    $corr1="0";
   
   }else{
    $corr1="1";
   }
   if (empty($_POST['reapellido'])) {
     // Alerta para que ingresen el apellido Paterno
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Apellido Paterno';
  
   $corr2="0";
   }else{
    $corr2="1";
   }
   if (empty($_POST['reapellidom'])) {
     // Alerta para que ingresen el apellido Materno
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Apellido Materno';
       
          $corr3="0";
   }else{
    $corr3="1";
   }
   if (empty($_POST['renumero'])) {
     // Alerta para que ingresen el Numero Telefonico
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Numero';
         
          $corr4="0";
          }else{
           $corr4="1";

          }
  if (empty($_POST['recontraseña'])) {
    // Alerta para que ingresen la contraseña
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar la contraseña';
    echo "<br>";
      
         $corr5="0";
          }else{
          $corr5="1";
        
          }
//Realizamos una validacion, si todos los campos fueron ingresados  entonces realizara la consulta
if (($corr1=="1")&&($corr2=="1")&&($corr3=="1")&&($corr4=="1")&&($corr5=="1")){
//Esta consulta sirve para actualziar el registro con el mismo id que obtuvimos en la variable0 en la barra del buscador
$consultaActualizar ="UPDATE auxiliar SET nombre='$titulo1', apellidoP='$categoria1', apellidoM='$categoria2', telefono='$categoria3', clave='$categoria4' WHERE id=$variable0";

//Realizamos la consulta
$resultadoA = $conexion->prepare($consultaActualizar);
$resultadoA->execute();
$usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);

//Nos redirigimos a la pagina Administrar Personal

header("location:Administrar Personal.php");

}}

?>


<br>

        <a href="Administrar Personal.php" id="Con">Atras</a>




    </div>



    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/T_Mesero.js"></script>
    <script src="JS/script.js"></script>
    <script src="JS/abrir.js"></script>
</body>

</html>