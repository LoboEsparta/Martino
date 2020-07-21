<?php
//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
$consulta = "SELECT * FROM auxiliar WHERE Ide>0" ;
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
                    <h1 id="Mio">Editar Administrador</h1>
                </div>
            </div>
        </div>

        <div class="row" id="down">
            <div class="col"></div>
            <div class="col-md-5">
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Información del Administrador</h5>
                        <form method="post" action="">
                            <input type="text" placeholder="Id A Modificar" name="codigoNUEVO">
                            <input type="text" placeholder="Nombre" name="renombre">
                            <input type="text" placeholder="Apellido Paterno" name="reapellido">
                            <input type="text" placeholder="Apellido Materno" name="reapellidom">
                            <input type="number" placeholder="Numero Telefonico" name="renumero">
                            <br>
                            <div class="row">
                          <div class="col-md-10">
                      <input type="password" placeholder="Ingrese su Contraseña" name="recontraseña" id="Ancho">
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
if(isset($_POST['guardar'])){

 
$titulo1=$_POST['renombre'];
$categoria1=$_POST['reapellido'];
$categoria2=$_POST['reapellidom'];
$categoria3=$_POST['renumero'];
$categoria4=$_POST['recontraseña'];

$codigoNUEVO=$_POST['codigoNUEVO'];


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

$consultaActualizar ="UPDATE auxiliar SET Nombre='$titulo1', Apellido_P='$categoria1', Apellido_M='$categoria2', Telefono='$categoria3', Contraseña='$categoria4' WHERE Ide=$codigoNUEVO";


$resultadoA = $conexion->prepare($consultaActualizar);
$resultadoA->execute();
$usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);

header("location:Administrar Personal.php");

}}

?>


<br>

        <a href="Administrar Personal.php" id="Con">Atras</a>




    </div>



    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/T_Mesero.js"></script>
</body>

</html>