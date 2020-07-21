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
    <link rel="stylesheet" href="CSS/Menu.css">
    <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <h1 id="Mio">Menu</h1>
            <div class="Contenido">
                <div class="row">
                    <div class="col-md-12" id="Agregar">


                        <div class="btn-group" role="group" id="Margen">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Agregar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#agregar">Categoria<img src="Img/anadir.png" height="24"></a>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" id="Centro">
            <?php
                         foreach ($usuarios as $usuario) {


                          $variable1=$usuario['Ide'];
                                ?>
            <div class="card" style="width: 18rem;">
                <a href="Men_Dentro.html">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "".$usuario['Nombre'];?></h5>
                        <h6>Categoria</h6>
                        <a href="#" class="btn btn-primary" data-toggle="modal"
                            data-target="#cambiar<?php echo "".$usuario['Ide'];?>" id="Tamaño">Cambiar nombre</a>
                    </div>
            </div>

            </a>

            <!--Modal Cambiar Nombre-->

            <div class="modal fade" id="cambiar<?php echo "".$usuario['Ide'];?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <form method="post">
                        <div class="modal-content">

                            <div class="modal-header">

                                <h5 class="modal-title" id="exampleModalLabel">Nombre de Categoria
                                    <?php echo "".$usuario['Ide'];?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="text" placeholder="Nombre de su Categoria" name="NuevoNom">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="boton2">Cambiar nombre</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

           


            <?php
                         }
                         ?>
                          <?php                  
$boton2="";
if(isset($_POST['boton2'])){
   
  $Nuevoide=$usuario['Ide'];
    $Nuevacat=$_POST['NuevoNom'];
    
        $consultaActualizar ="UPDATE categoria SET Nombre='$Nuevacat' Where Ide=$Nuevoide";


        $resultadoActualizar = $conexion->prepare($consultaActualizar);
        $resultadoActualizar->execute();
        $usuarios = $resultadoActualizar->fetchAll(PDO::FETCH_ASSOC);
       
        echo "<br>";
   echo '<p class="alert alert-success agileits" role="alert">Nombre cambiado '.$Nuevacat;
          
    
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







        </div>


    </div>


    <a href="Control.html" id="Bot">Atras </a>



    </div>





    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="JS/bootstrap.min.js"></script>

</body>

</html>