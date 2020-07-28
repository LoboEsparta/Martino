<?php

//Obtener las variables a traves de la barra de busqueda

$variable1=($_GET['variable1']);

$variable2=($_GET['variable2']);

$variable3=($_GET['variable3']);

$variable4=($_GET['variable4']);

$variable5=($_GET['variable5']);


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
      <h2>Información</h2>
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
                        <form action="">
                        <!-- En estas lineas mostramos los valores que se mandaron a traves del buscador -->
                            <h6>Nombre</h6>
                      <input type="text" value="<?php echo "$variable1"; ?>" disabled >
                      <h6>Apellido Paterno</h6>
                      <input type="text" value="<?php echo "$variable2"; ?>" disabled>
                      <h6>Apellido Materno</h6>
                      <input type="text" value="<?php echo "$variable3"; ?>" disabled>
                      <h6>Numero Telefonico</h6>
                      <input type="number" value="<?php echo "$variable4"; ?>" disabled>
                      <h6>Contraseña</h6>
                      <input type="text" value="<?php echo "$variable5"; ?>" disabled>
                        </form>

                    </div>
                  </div>


            </div>
            <div class="col"></div>
        </div>











        <a href="Administrar Personal.php" id="Con">Atras</a>




    </div>

      </div>
    </div>
</div>



    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/T_Mesero.js"></script>
    <script src="JS/abrir.js"></script>
</body>

</html>