
<?php
//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla categoria
$consulta = "SELECT * FROM categoria WHERE id>0" ;
$resultado = $conexion->prepare($consulta);
$resultado->execute();

//Asignamos el valor de la consulta en una variable llamada "usuarios"
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);

//Obtenermos los valores que se mandaron a traves del buscador
$variable1=($_GET['variable1']);
$variable2=($_GET['variable2']);
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width-device,user-scalable=no,
              initial-scale=1.0,maximum-scale01, minimum-scale=1">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Principal.css">
    <link rel="stylesheet" href="CSS/Menu.css">
    <link rel="stylesheet" href="CSS/Estilos.css">
    <link rel="stylesheet" href="css/NewName.css">
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

        <ul class="navbar-nav mr-auto">

            <h2>Menu</h2>

            </ul>

            
      </nav>

      <a href="Menu.php" id="Con"><img src="Img/back.png" height="33px"></a>
      <!--Contenido de la pagina-->

      <div id="content" class="p-3">



        <div class="row">
            <div class="col-md-12">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title">Nuevo Nombre</h5>
                  <form action="" method="post">
                    <input type="text" name="nuevonombre" placeholder="Escriba el nuevo nombre de su Categoria" value="<?php echo "".$variable2;?>">
        
        
                    <button type="submit" name="guardar">Cambiar Nombre</button>
                </form>
              </div>
            </div>
            <?php

$guardar="";
//Asignamos una accion al boton  "Guardar"
if(isset($_POST['guardar'])){

 //Asignamos el valor del formulario a una variable
$titulo1=$_POST['nuevonombre'];

//Validamos que el formulario no este vacio
if (empty($_POST['nuevonombre'])) {
  //En caso de estar vacio se muestra una alerta para ingresar el nombre
    echo '<p class="alert alert-danger agileits" role="alert">Debes ingresar el Nombre';

    $corr1="0";
   
   }else{
    $corr1="1";
   }
//Validamos que si el usuario ingreso el nombre se realice una consulta
if (($corr1=="1")){
//Esta consulta nos actualiza el campo con el id igual a la variable que obtuvimos del buscador
$consultaActualizar ="UPDATE categoria SET nombre='$titulo1' WHERE id=$variable1";

//Realizamos la consulta
$resultadoA = $conexion->prepare($consultaActualizar);
$resultadoA->execute();
$usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);
//Nos redireccionamos al Menu
header("location:Menu.php");

}}

?>


            
            </div>
        </div>

        

        
      </div>
    </div>
</div>


<script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/script.js"></script>
    <script src="JS/abrir.js"></script>
</body>
</html>
