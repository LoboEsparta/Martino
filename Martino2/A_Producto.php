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
          <h2>Agregar Producto</h2>
          </nav>
    
          <!--Contenido de la pagina-->
    
          <div id="content" class="p-3">



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




        <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/script.js"></script>
    <script src="JS/abrir.js"></script>
    </body>
</html>
