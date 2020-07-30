<?php

$variable1=($_GET['variable1']);
$server = "localhost";
$user = "root";
$pass = "";
$bd = "restaurante"; 

$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }

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
                    <h5 class="card-title">Nuevo Producto</h5>

                    <form action="" method="post">
                        <input type="text" placeholder="Nombre del Producto" name="renombre">
                        <input type="number" placeholder="Precio de su Producto" name="reprecio">
                        <textarea name="des" id="" cols="30" rows="8" placeholder="Escriba la descripcion de su Producto"></textarea>
                        <button type="submit" name="boton1">Publicar</button>

                    </form>
                  


                    <?php

$boton1="";
$nombre=filter_input(INPUT_POST, "renombre");
$num=filter_input(INPUT_POST, "reprecio");
$desc=filter_input(INPUT_POST, "des");


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
            if (empty($num)) {
                // Alerta para que ingresen el apellido Paterno
                echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el precio!';
            //return false;
            $corr2="0";
            }else{
         
             $corr2="1";

            }
            if (empty($desc)) {
                // Alerta para que ingresen el apellido Paterno
                echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar la descripcion!';
            //return false;
            $corr3="0";
            }else{
         
             $corr3="1";

            }
//Realizamos una validacion, si todos los campos fueron ingresados  entonces realizara la consulta
if (($corr1=="1")&&($corr2=="1")&&($corr3=="1")){

//Esta consulta sirve para agregar un nuevo registro en la tabla auxiliar
        $query = "INSERT INTO comida (id,nombre,precio,descripcion,id_categoria) values('','".$nombre."','".$num."','".$desc."','".$variable1."')";

          //Si la consulta fue realizada correctamente se nos redireccionara a la pagina "Administrar Personal"
if (mysqli_query($conex, $query)) {
    header('location: Menu.php');
}
else{
      //Si la consulta no se logro completar, se nos mostrara un mensaje de error
 echo "Error: ".mysqli_error($conex);
}

}
}

?>


                </div>
              </div>
            
            <a href="Menu.php" id="Atras">Atras</a>

        </div>
        <div class="col-md-2"></div>
        </div>


    </body>
</html>
