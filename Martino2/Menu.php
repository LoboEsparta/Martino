<?php
//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
$consulta = "SELECT * FROM categoria WHERE Ide>0" ;
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
    <link rel="stylesheet" href="CSS/Menu.css">
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

        <ul class="navbar-nav mr-auto">

            <h2>Menu</h2>

            </ul>

            <div class="btn-group" role="group" id="Margen">
                            <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Agregar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#agregar">Categoria<img src="Img/anadir.png" height="24"></a>
                            </div>
                        </div>
      </nav>

      <!--Contenido de la pagina-->

      <div id="content" class="p-3">


<div class="row">
        <div class="col-md-12" id="Centro">
            <?php
                         foreach ($usuarios as $usuario) {


                          $variable1=$usuario['Ide'];
                                ?>
            <div class="card border-primary mb-3" style="width: 18rem;">
                <a href="Men_Dentro.html">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "".$usuario['Nombre'];?></h5>
                        <h6>Categoria</h6>
                        <a href="ChangeName.html" class="btn btn-primary"<?php echo "".$usuario['Ide'];?>" id="Tamaño">Cambiar nombre</a>
                    </div>
            </div>

            </a>




            <!-- Aqui estaba el modal we -->





           

            <?php
                         }
                         ?>
                          <?php                  
$boton2="";
if(isset($_POST['boton2'])){
   /*
  $Nuevoide=$usuario['Ide'];
    $Nuevacat=$_POST['NuevoNom'];
    
        $consultaActualizar ="UPDATE categoria SET Nombre='$Nuevacat' Where Ide=$Nuevoide";


        $resultadoActualizar = $conexion->prepare($consultaActualizar);
        $resultadoActualizar->execute();
        $usuarios = $resultadoActualizar->fetchAll(PDO::FETCH_ASSOC);
       
        echo "<br>";
   echo '<p class="alert alert-success agileits" role="alert">Nombre cambiado '.$Nuevacat;
          
    */
}
?>


            <!--Modal Categoria-->

            <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <form method="post">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nombre de su Nueva Categoria</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="text" placeholder="Nombre de su Categoria" name="categoria">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <input type="submit" name="boton1" class="btn btn-primary" value="Añadir Categoria">

                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <?php                  
$boton1="";
if(isset($_POST['boton1'])){
   
    $cat=$_POST['categoria'];
    
        $consultaAg ="INSERT INTO categoria ( Nombre) VALUES ('".$cat."')";


        $resultadoA = $conexion->prepare($consultaAg);
        $resultadoA->execute();
        $usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);
       
        echo "<br>";
   echo '<p class="alert alert-success agileits" role="alert">Menú Agregado '.$cat;
          
    
}
?>





<a href="Control.html" id="Bot">Atras </a>
        </div>
    </div>

    
    </div>


    </div>

</div>

    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/abrir.js"></script>

</body>

</html>