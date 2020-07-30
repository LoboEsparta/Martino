
<?php


/* En estas lineas asignamos el valor de las variables 1,2,3,4,5,0 estas variables nos nos pasadas a traves del buscador
 esto con la finalidad de ser mostradas en el formulario  */
 $variable1=($_GET['variable14']);

//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
$consulta = "SELECT * FROM comida where id='$variable1'";
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
        <link rel="stylesheet" href="CSS/Agregar_Pro.css">
        <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
    </head>
    <body>
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card border-dark mb-3" >
                <div class="card-body">
                    <h5 class="card-title">Editar Producto</h5>

                    <form action="" method="post">
                    <?php
                    
                            foreach ($usuarios as $usuario) {
                            
                                ?>
                        <input type="text" placeholder="Nombre del Producto que se edite visible" name="renombre" value="<?php echo $usuario['nombre']?>">
                        <input type="number" placeholder="Precio de su Producto que se edite visible" name="reprecio" value="<?php echo $usuario['precio']?>">
                        <textarea name="des" id="" cols="30" rows="8" placeholder="<?php echo $usuario['descripcion']?>" value="<?php echo $usuario['descripcion']?>" ></textarea>
                        <button name="guardar" type="submit">Editar</button>
<?php
                            }
                            ?>
                    </form>
                  
                    <?php

$guardar="";


// Esta linea sirve para asignarle una accion al boton guardar
if(isset($_POST['guardar'])){

 //Asignamos el valor a las variables con el valor del formulario 
 $nombre=filter_input(INPUT_POST, "renombre");
 $num=filter_input(INPUT_POST, "reprecio");
 $desc=filter_input(INPUT_POST, "des");


   
    //Estas lineas sirven para validar que el campo del formulario no esten vacios, si lo estan se mostrara un mensaje 
   
if (empty($nombre)) {
  // Alerta para que ingresen el nombre
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Nombre';

    $corr1="0";
   
   }else{
    $corr1="1";
   }
   if (empty($num)) {
     // Alerta para que ingresen el apellido Paterno
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el precio';
  
   $corr2="0";
   }else{
    $corr2="1";
   }
   if (empty($desc)) {
     // Alerta para que ingresen el apellido Materno
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar la descripcion';
       
          $corr3="0";
   }else{
    $corr3="1";
   }
//Realizamos una validacion, si todos los campos fueron ingresados  entonces realizara la consulta
if (($corr1=="1")&&($corr2=="1")&&($corr3=="1")){
//Esta consulta sirve para actualziar el registro con el mismo id que obtuvimos en la variable0 en la barra del buscador
$consultaActualizar ="UPDATE comida SET nombre='$nombre', precio='$num', descripcion='$desc' WHERE id=$variable1";

//Realizamos la consulta
$resultadoA = $conexion->prepare($consultaActualizar);
$resultadoA->execute();
$usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);

//Nos redirigimos a la pagina Administrar Personal

header("location:Menu.php");

}}

?>

                </div>
              </div>
            
            <a href="Menu.php" id="Atras">Atras</a>

        </div>
        <div class="col-md-2"></div>
        </div>


    </body>
</html>
