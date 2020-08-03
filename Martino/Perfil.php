<?php

session_start();

if(!isset($_SESSION['usuarioing2'])) {
	header("Location: controlP.php");
}


$variable1=$_SESSION['usuarioing2'];
//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
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
    <link rel="stylesheet" href="css/Estilos.css">
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
          <h2>Perfil</h2>
          </nav>
          <a href="Control.php" id="Con"><img src="Img/back.png" height="33px"></a>
          <!--Contenido de la pagina-->
    
          <div id="content" class="p-3">








    <div class="col-md-12">
        <div class="row" id="down">
            <div class="col"></div>
            <div class="col-md-5">
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Tu Información Personal</h5>
                        
                        <?php

//nuevamente utilizamos un forreach, pero esta vez para mostrar el contenido de las ordenes
           foreach ($usuarios as $usuario) {
           
        
                ?>
                        <form method="post">

                      <input type="text" placeholder="Nombre Completo" value="Nombre Completo: <?php echo $usuario['nombre'] ?>" disabled>
                      <input type="text" placeholder="Apellido Paterno" value="Apellido Paterno: <?php echo $usuario['apellidoP'] ?>" disabled>
                      <input type="text" placeholder="Apellido Materno" value="Apellido Materno: <?php echo $usuario['apellidoM'] ?>" disabled>
                      <input type="text" placeholder="Numero Telefonico" value="<?php echo "Numero Telefonico: ".$usuario['telefono'] ?>" disabled>
                      <input type="text" placeholder="Contraseña" value="Contraseña: <?php echo $usuario['password'] ?>" disabled>
                      

                        <a href="Edit-Perfil.php?variable1=<?php echo $variable1 ?>" id="Editar">Editar</a>
                        </form>

                        <?php
           }
           ?>
                    </div>
                  </div>


            </div>
            <div class="col"></div>
        </div>











        




    </div>

          </div>
        </div>
    </div>
    


    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/T_Mesero.js"></script>
    <script src="JS/script.js"></script>
    <script src="JS/abrir.js"></script>
</body>

</html>