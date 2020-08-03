<?php
session_start();

if(!isset($_SESSION['usuarioing2'])) {
	header("Location: controlP.php");
}


$variable1=($_GET['variable1']);
//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla gerente donde la contraseña sea igual a la variable del buscador
$consulta = "SELECT * FROM gerente WHERE password='$variable1'" ;
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
    <link rel="stylesheet" href="CSS/Ad-Eliminar.css">
    <link rel="stylesheet" href="CSS/Estilos.css">
    <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
</head>

<body>

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
          <h2>Perfil</h2>
          </nav>
    
          <!--Contenido de la pagina-->
    
          <div id="content" class="p-3">



    <div class="col-md-12">
        <div class="row" id="down">
            <div class="col"></div>
            <div class="col-md-5">
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Tu Información Personal</h5>
                        <form method="post">
                            <?php
//Utilizamos un forreach para mostrar los datps del perfil 
           foreach ($usuarios as $usuario) {
           
        
                ?>

                            <input name="renombre" type="text" placeholder="Nombre Completo" value="<?php echo $usuario['nombre'] ?>">
                          
                            <input name="reapellido" type="text" placeholder="Apellido Paterno"
                                value="<?php echo $usuario['apellidoP'] ?>">
                     
                            <input name="reapellidoM" type="text" placeholder="Apellido Materno"
                                value="<?php echo $usuario['apellidoM'] ?>">
                           
                            <input name="renumero" type="text" placeholder="Numero Telefonico"
                                value="<?php echo "".$usuario['telefono'] ?>">
                           
                            <input name="recontraseña" type="text" placeholder="Contraseña Visible"
                                value="<?php echo $usuario['password'] ?>">

                            <?php
           }
           ?>

                            <button class="btn btn-primary" name="boton1">Editar</button>
                        </form>


                    </div>
                </div>


            </div>
            <div class="col"></div>
        </div>






        <?php

$guardar="";
if(isset($_POST['guardar'])){

 
$titulo1=$_POST['renombre'];
$categoria1=$_POST['reapellido'];
$categoria2=$_POST['reapellidoM'];
$categoria3=$_POST['renumero'];
$categoria4=$_POST['recontraseña'];
 


if (empty($_POST['renombre'])) {
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Nombre';

    $corr1="0";
   //return false;
   }else{
    $corr1="1";
   }
   if (empty($_POST['reapellido'])) {
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Apellido Paterno';
   //return false;
   $corr2="0";
   }else{
    $corr2="1";
   }
   if (empty($_POST['reapellidom'])) {
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Apellido Materno';
          //return false;
          $corr3="0";
   }else{
    $corr3="1";
   }
   if (empty($_POST['renumero'])) {
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Numero';
          //return false;
          $corr4="0";
          }else{
           $corr4="1";

          }
  if (empty($_POST['recontraseña'])) {
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar la contraseña';
    echo "<br>";
       //return false;
         $corr5="0";
          }else{
          $corr5="1";
        
          }

if (($corr1=="1")&&($corr2=="1")&&($corr3=="1")&&($corr4=="1")&&($corr5=="1")){

$consultaActualizar ="UPDATE gerente SET nombre='$titulo1', apellidoP='$categoria1', apellidoM='$categoria2', telefono='$categoria3', Password='$categoria4' WHERE id=$variable1";


$resultadoA = $conexion->prepare($consultaActualizar);
$resultadoA->execute();
$usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);

header("location:Control.php");

}}

?>






        <a href="Perfil.php" id="Con">Atras</a>




    </div>



    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/T_Mesero.js"></script>
    <script src="JS/abrir.js"></script>
</body>

</html>