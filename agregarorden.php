<?php
	include ('conexion.php');
	$NumMesa=filter_input(INPUT_POST,"NumMesa");
	$Nombre=filter_input(INPUT_POST,"Nombre");
  $PlaEntrada=filter_input(INPUT_POST,"PlaEntrada");
	$PlaPrincipal=filter_input(INPUT_POST,"PlaPrincipal");
	$Postre=filter_input(INPUT_POST,"Postre");
	$Bebida=filter_input(INPUT_POST,"Bebida");
	$Aditamientos=filter_input(INPUT_POST,"Aditamientos");

	$insertar="INSERT INTO ordenes (NumMesa, Nombre,PlaEntrada, PlaPrincipal, Postre, Bebida, Aditamientos) VALUES ('$NumMesa','$Nombre','$PlaEntrada','$PlaPrincipal','$Postre','$Bebida','$Aditamientos')";
	$query=mysqli_query($conectar,$insertar);
	

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width-device,user-scalable=no,
     initial-scale=1.0,maximum-scale01, minimum-scale=1">
     <link rel="stylesheet" href="CSS/bootstrap.min.css">
     
     <link rel="stylesheet" href="CSS/Principal.css">
     <link rel="stylesheet" href="CSS/T_Mesero.css">
     <title>Martino</title>
     <link rel="Icon" href="Img/martino.ico">
     
</head>
<body>

    
    <div class="row">
            <div class="sidebar">
                <h1>Martino</h1>
                <ul>
                    <li> <a href="Home.html" id="Top"> <img src="Img/Home.png" height="20"> Home</a></li>
                    <li> <a href="Tablero_Mesero.php"> <img src="Img/Mesero.png" height="20"> Tablero de Meseros</a></li>
                    <li> <a href="Tablero_Cocinero.php"> <img src="Img/Chef.png" height="20"> Tablero de Cocineros</a></li>
                    <li> <a href="ControlP.html"> <img src="Img/Control.png" height="20"> Control</a></li>
                </ul>
            </div>
        </div>





        <div class="col-md-12">
            <div class="Contenido">
                <div class="row">
                    <div class="col-md-1">
                <img src="Img/menu.png" height="40" class="Menu-Bot">
                    </div>
                    <div class="col-md-11">
                <h1 id="Mio">Tablero de Meseros</h1>
                    </div>
                </div>
            </div>


              <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">Nueva Orden</h5>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6" id="Borde">
                                    <br>
                                    <form method="post" name="detalles">
	<input type="text" id="NumMesa" name="NumMesa" placeholder="Numero de mesa"  required>
	<br><br>
	<input type="text" id="Nombre" name="Nombre" placeholder="Nombre"  required>
	<br><br>
	<input type="text" id="PlaEntrada" name="PlaEntrada" placeholder="Platillo  de entrada"  required>
	<br><br>
	<input type="text" id="PlaPrincipal" name="PlaPrincipal" placeholder="Platillo principal"  required >
	<br><br>
	<input type="text" id="Postre" name="Postre" placeholder="Postre"  required>
	<br><br>
	<input type="text" id="Bebida" name="Bebida" placeholder="Bebida"  required>
	<br><br>
	<input type="text" id="Aditamientos" name="Aditamientos" placeholder="Aditamentos"  required>
	<br>
	<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#Clave" id="Confirma" > Confirmar </button>
	<br><br>
	
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detalles del pedido</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body" >
           
            <input type="text" id="Mesa" name="Mesa">
            <input type="text" id="Name" name="Name">
            <input type="text" id="PrE" name="PrE">
            <input type="text" id="PaP" name="PaP">
            <input type="text" id="Pe" name="Pe">
            <input type="text" id="Bi" name="Bi">
            <input type="text" id="Al" name="Al">
     
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
	
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
 
                                <div class="col-md-3">
                                    <button type="" class="" data-toggle="modal" data-target="#exampleModal" onclick="detalles()"><img src="Img/3 point.png" height="20"></button>
                                </div>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>




        <div class="modal fade" id="Clave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ingrese su clave para aprovar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="Contraseña" placeholder="Clave">
                        </div>
                        <div class="col-sm-2">
                            <img src="Img/eye - copia.png" height="20" id="No">
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-secondary">Confirmar</button>
                </div>
              </div>
            </div>
	</div>



        
        
        
	    <script src="JS/detalles.js"></script>
        <script src="JS/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="JS/bootstrap.min.js"></script>
    <script src="JS/abrir.js"></script>
    <script src="JS/T_Mesero.js"></script>
</body>
</html>