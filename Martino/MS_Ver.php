<?php

//Obterner las variable

$variable6=($_GET['variable6']);

$variable7=($_GET['variable7']);

$variable8=($_GET['variable8']);

$variable9=($_GET['variable9']);


// Mostar las variables


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
    <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
</head>

<body>
    <div class="col-md-12">
        <div class="Contenido">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                    <h1 id="Mio">Información</h1>
                </div>
            </div>
        </div>

        <div class="row" id="down">
            <div class="col"></div>
            <div class="col-md-5">
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Información del Mesero</h5>
                        <form action="">
                      <input type="text" value="<?php echo "$variable6"; ?>" disabled>
                      <input type="text" value="<?php echo "$variable7"; ?>" disabled>
                      <input type="text" value="<?php echo "$variable8"; ?>" disabled>
                      <input type="text" value="<?php echo "$variable9"; ?>" disabled>
                        </form>

                    </div>
                  </div>


            </div>
            <div class="col"></div>
        </div>











        <a href="Administrar Personal.php" id="Con">Atras</a>




    </div>



    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/T_Mesero.js"></script>
</body>

</html>