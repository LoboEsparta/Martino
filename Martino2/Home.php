
<?php
session_start();

if(!isset($_SESSION['usuarioing'])) {
	header("Location: index.php");
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
     <link rel="stylesheet" href="CSS/Home.css">
     <link rel="stylesheet" href="CSS/Estilos.css">
     <title>Bienvenido <?php echo $_SESSION['usuarioing'] ?></title>
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
      <h2>Home</h2>
      </nav>

      <!--Contenido de la pagina-->

      <div id="content" class="p-3">
    
    <div class="card border-primary mb-3">
        <div class="card-body">
          <p class="card-text">Han pasado 130 años desde que aquella bebida novedosa se sirviera por primera vez en una fuente
            de sodas en Atlanta, Georgia. Hoy en día, el tomar una Coca-Cola implica no sólo tener entre 
            las manos al refresco favorito del mundo, sino toda una historia de esfuerzo y dedicación, un
            presente lleno de entusiasmo, trabajo y energía, y un porvenir sólido impulsado por el 
            compromiso de miles de empleados que constituyen el sistema Coca-Cola en cada país del orbe.</p>
        </div>
      </div>
    


      <div class="row">
          <div class="col-md-6">
        <div class="card border-info mb-3" id="Ancho">
            <h5 class="card-header">Misión</h5>
            <div class="card-body">
              <p class="card-text">Refrescar al mundo en cuerpo, mente y espíritu.
                Inspirar momentos de optimismo a través de nuestras marcas y acciones, para crear valor y 
                dejar nuestra huella en cada uno de los lugares en los que operamos.</p>
            </div>
          </div>

          </div>
          <div class="col-md-6">
          <div class="card border-info mb-3" id="Ancho">
            <h5 class="card-header">Visión</h5>
            <div class="card-body">
              <p class="card-text">Maximizar el retorno a los accionistas, sin perder de vista la totalidad 
                de nuestras responsabilidades.</p>
            </div>
          </div>

          </div>
      </div>

      <div class="row">
          <div class="col-md-6">
          <div class="card border-info mb-3" id="Ancho">
            <h5 class="card-header">Gente</h5>
            <div class="card-body">
              <p class="card-text">Ser un excelente lugar para trabajar, en donde nuestro personal se inspire para dar lo 
                mejor de sí.</p>
            </div>
          </div>
          </div>


          <div class="col-md-6">
          <div class="card border-info mb-3" id="Ancho">
            <h5 class="card-header">Portafolio de Productos</h5>
            <div class="card-body">
              <p class="card-text">Ofrecer al mundo una cartera de marcas de bebidas que se anticipan y
                satisfacen los deseos y las necesidades de las personas.</p>
            </div>
          </div>
          </div>
      </div>

      <div class="row">
          <div class="col-md-6">           
          <div class="card border-info mb-3" id="Ancho">
            <h5 class="card-header">Socios</h5>
            <div class="card-body">
              <p class="card-text">Formar una red de socios exitosa y crear lealtad mutua.</p>
            </div>
          </div>
          </div>


          <div class="col-md-6">
          <div class="card border-info mb-3" id="Ancho">
            <h5 class="card-header">Planeta</h5>
            <div class="card-body">
              <p class="card-text">Ser un ciudadano global, responsable, que hace su aporte para un mundo mejor.</p>
            </div>
          </div>
          </div> 
      </div>
      


      





    </div>

    

</div>


  </div>










       

    <script src="JS/bootstrap.js"></script>
     <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/abrir.js"></script>
</body>
</html>