<?php
//Realizamos la conexion a la bd
include_once 'conexion4.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla ordenes
$consulta = "SELECT * FROM reservacion WHERE Ide>0" ;
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
    <link rel="stylesheet" href="CSS/Reservacion_Admin.css">

    <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <h1 id="Mio">Agenda de Reservacion Comensales</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row">

            <?php
                    //Utilizamos un forreach para hacer la cantidad de cards que vamos a ocupar, y de misma forma mostrar el contenido de los pedidos
                            foreach ($usuarios as $usuario) {
                                ?>

                <div class="col-md-5">


                <div class="card" style="width: 18rem;">
                        <div class="card-body"> <img src="Img/bell.png" height="20" data-toggle="modal"
                                data-target="#exampleModal<?php echo "".$usuario['Ide'];?>">
                            <h5 class="card-title">Reservacion: <?php echo "".$usuario['Ide'];?></h5>
                            <p class="card-text">Estado: Ocupada</p>
                        </div>
                    </div>
                </div>




<?php
                            }
                            ?>

            </div>
            <br>
            <br>
            <a href="Control.html" id="Atras">Atras</a>
        </div>
        <div class="col-md-1"></div>
    </div>





    <form method="post" action="">

    <?php
                    //Utilizamos un forreach para hacer la cantidad de cards que vamos a ocupar, y de misma forma mostrar el contenido de los pedidos
                            foreach ($usuarios as $usuario) {
                                $variable1=$usuario['Ide'];
                                ?>

    <!--Boton bell-->

    <div class="modal fade" id="exampleModal<?php echo "".$usuario['Ide'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reservación <?php echo "".$usuario['Ide'];?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="card-title">Reservación</h5>
                 
                                
                    
                        <h7><input type="text" value="ID de Cliente: <?php echo "".$usuario['Id_Clientes'];?>" disabled ></h7>
                       <h5></h5>
                        <input type="text" value=" Fecha de Reservacion:  <?php echo "".$usuario['Fecha'];?>" disabled >
                        <h5> </h5>
                        <input type="text" value="Id De Pedido: <?php echo "".$usuario['Id_Pedidos'];?>" disabled >
                        <h5></h5>
                        <input type="text" value="Numero De Personas: <?php echo "".$usuario['Numero_Personas'];?>" disabled >
                        <h5></h5>
                        <input type="text" value="Hora de Reservacion: <?php echo "".$usuario['Hora'];?>" disabled >

                  


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn">Aceptar</button>
                    <button type="submit" class="btn" id="Eliminar" value="" name="boton1"><a href="Eliminar_Reservacion.php?variable1=<?php echo $variable1 ?>">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

<?php
                            }
                            ?>
  </form>
  <?php
/*
//Asignamos una accion al boton 1 en este caso es para eliminar el registro
                                 $boton1="";
                                 if(isset($_POST['boton1'])){
                                    //Cuando el usuario de click en el boton "Finalizado" el pedido se borrara
                                   
                                  $codigo=$usuario['Ide']; 
                                   
                                 //  echo ($codigo);
                                  //Realizamos la consulta para eliminar en donde el registro que se borrara es el que presiono el usuario
                                    /* $consultaBorrar ="DELETE FROM ordenes WHERE NumMesa=$codigo";
                                 
                                 
                                     $resultadoBorrar = $conexion->prepare($consultaBorrar);
                                     $resultadoBorrar->execute();
                                     $usuarios = $resultadoBorrar->fetchAll(PDO::FETCH_ASSOC);
                                     echo '<script language="javascript">';
                                     echo 'alert("La reservación: '.$codigo.' se ha eliminado")';
                                     echo '</script>';
                                
                                 }*/
                                 ?>






    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="JS/bootstrap.min.js"></script>

</body>

</html>