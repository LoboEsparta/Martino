<?php
//Realizamos la conexion a la bd
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//Realizamos la consulta para tomar el contenido de la tabla pedido
$consulta = "SELECT * FROM pedido WHERE Estado='Inactivo'" ;
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
    <link rel="stylesheet" href="CSS/T_Cocinero.css">
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
                <a href="Home.html" id="Top" class="list-group-item list-group-item-action"> <img src="Img/Home.png"
                        height="20" id="none"><img src="Img/Home.png" height="26" id="grande"> <span id="Negro"><img
                            src="Img/Home2.png" height="35"></span> <span>Home</span></a>
                <a href="Tablero_Mesero.php" class="list-group-item list-group-item-action"> <img src="Img/Mesero.png"
                        height="20" id="none"><img src="Img/Mesero.png" height="26" id="grande"> <span id="Negro"><img
                            src="Img/Mesero2.png" height="35"></span><span>Tablero de Meseros</span></a>
                <a href="Tablero_Cocinero.php" class="list-group-item list-group-item-action"> <img src="Img/Chef.png"
                        height="20" id="none"><img src="Img/Chef.png" height="26" id="grande"> <span id="Negro"><img
                            src="Img/Chef2.png" height="35"></span><span>Tablero de Cocineros</span></a>
                <a href="ControlP.php" class="list-group-item list-group-item-action" id="linea"> <img
                        src="Img/Control.png" height="20" id="none"><img src="Img/Control.png" height="26" id="grande">
                    <span id="Negro"><img src="Img/Control2.png" height="35"></span> <span>Control</span></a>
            </div>

        </div>
        <div id="page-container" class="w-100">

            <!--Encabezado de la Pagina-->

            <nav class="navbar navbar-expand-lg navbar-light">

                <img src="Img/menu - copia.png" height="25" class="Menu-Bot">
                <h2>Tablero de Cocineros</h2>
            </nav>

            <!--Contenido de la pagina-->

            <div id="content" class="p-3">

                <div class="row">
                    <?php
                    /* Utilizamos un forreach para hacer la cantidad de cards que vamos a ocupar, 
                    y de misma forma mostrar el contenido de los pedidos */
                            foreach ($usuarios as $usuario) {
                                $variable1=$usuario['id'];
                                ?>
                    <div class="col-md-6">
                        <div class="card border-primary mb-3" id="mesa<?php echo "".$usuario['id']?>">
                            <div class="card-body">
                                <h5 class="card-title"><img src="Img/MartinoLogo.png" height="80"></h5>
                                <form method="get">
                                    <p class="card-text">
                                        <!-- Aqui se muestra el contenido de los pedidos -->
                                        <h3> MESA <?php echo "".$usuario['id']?></h3>

                                        <li><?php echo "Orden: ".$usuario['descripcion'] ?></li> 

                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <!-- Estas lineas sirven para cambiar el texto dentro del botón -->
                                            <button type="submit" id="otroid" class="btn btn-primary" onclick='document.getElementById("otroid").innerHTML =texto;' >Confirmar</button>
                                          
                                            <script>
                                            var texto="En preparación";
                                        </script>
                                        </div>
                                        <div class="col-md-6">
                                        <!-- Aqui pasamos la variable a la pagina Eliminar el pedido-->
                                            <button type="submit" name="boton1" class="btn btn-primary"
                                                id="Final" value=""><a
                                                    href="Eliminar_pedido.php?variable1=<?php echo $variable1 ?>">Finalizado</a>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        ?>



                </div>







            </div>

        </div>
    </div>

    <?php
         ?>



    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/T_Mesero.js"></script>
    <script src="JS/abrir.js"></script>
</body>

</html>