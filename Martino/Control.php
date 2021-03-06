<?php

session_start();

if(!isset($_SESSION['usuarioing2'])) {
	header("Location: controlP.php");
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
    <link rel="stylesheet" href="CSS/Control.css">
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
      <h2>Control</h2>
      </nav>

      <!--Contenido de la pagina-->

      <div id="content" class="p-3">



                    
                    <div class="btn-group" role="group" id="Left">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Perfil <img src="Img/user.png" height="15" id="Margen">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                          <a class="dropdown-item" href="Perfil.php">Ver Perfil <img src="Img/user - copia.png" height="15" id="User"> </a>
                          <a class="dropdown-item" href="cerrarsesion.php">Cerrar Sesión <img src="Img/exit.png" height="15" id="Exit"></a>
                        </div>
                      </div>


            
        


        <div class="row">
            <div class="col-md-6">
            <div class="card" id="Especial">
                    <div class="card-body" id="Pad">

                        <a href="Administrar Personal.php">
                            <h5 class="card-title">Administrar Personal</h5>
                        
                        
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <div class="card" id="Especial">
                    <div class="card-body" id="Pad">

                        <a href="Menu.php">
                            <h5 class="card-title">Menú de restaurante</h5>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="card" id="Especial">
                    <div class="card-body" id="Pad">
                        <section class="adminpers">

                            <a href="AgendaR_Admin.php">
                                <h5 class="card-title">Agenda De Reservación</h5>
                                
                            </a>
                        </section>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
            <div class="card" id="Especial">
                    <div class="card-body" id="Pad">
                        <section class="adminpers">

                            <a href="RegistroVentas.php">
                                <h5>Registro De Ventas</h5>
                            </a>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        








    </div>
    </div>
    </div>



    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>
    <script src="JS/abrir.js"></script>
</body>

</html>