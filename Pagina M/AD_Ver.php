<?php

//Obterner las variable

$variable1=($_GET['variable1']);

$variable2=($_GET['variable2']);

$variable3=($_GET['variable3']);

$variable4=($_GET['variable4']);

$variable5=($_GET['variable5']);

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
                        <h5 class="card-title">Información del Administrador</h5>
                        <form action="">
                      <input type="text" value="<?php echo "$variable1"; ?>">
                      <input type="text" value="<?php echo "$variable2"; ?>">
                      <input type="text" value="<?php echo "$variable3"; ?>">
                      <input type="number" value="<?php echo "$variable4"; ?>">
                      <input type="text" value="<?php echo "$variable5"; ?>">
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