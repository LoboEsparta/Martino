<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width-device,user-scalable=no,
     initial-scale=1.0,maximum-scale01, minimum-scale=1">
     <link rel="stylesheet" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" href="CSS/Principal.css">
     <link rel="stylesheet" href="CSS/L-Principal.css">
    <title>Martino</title>
    <link rel="Icon" href="Img/martino.ico">
</head>
<body>
        <div class="col-md-12">
            <div class="login-box">
                <img src="img/118.jpg" class="avatar" alt="Avatar Image">
                <h2>Inicia Sesión</h2>
                <form method="post">
                  <!--Parte del usuario -->
                  <label for="username">Usuario</label>
                  <input type="text" placeholder="Introduce Usuario" name="usuario">
                  <!-- Parte de contraseña -->
                  <label for="password">Contraseña</label>
                  <div class="Icon">
                  <input type="password" id="Contraseña" placeholder="Introduce Contraseña" name="pass">
                  <img src="Img/eye.png" height="24" id="No">
                  </div>
                  <input type="submit" value="Iniciar Sesión" name="boton1">
                </form>
              </div>
            
              <?php

                    
$boton1="";
if(isset($_POST['boton1'])){
    
    require "conexion3.php";
    session_start();
    
    $usuario=$_POST['usuario'];
    $clave=$_POST['pass'];
    
    $q="SELECT COUNT(*) as contar from usuarios where user='$usuario' AND password='$clave'";
    
    $consulta=mysqli_query($conexion,$q);
    $array=mysqli_fetch_array($consulta);
    
    if($array['contar']>0){
        $_SESSION['Carlos Gonzalez']=$usuario;
    header("location: Home.html");
    }else{
   // echo "Datos incorrectos";
    echo '<p class="alert alert-danger agileits" role="alert">Datos incorrectos!';

    }

}

?>






        </div>
    
    


        <script src="JS/bootstrap.js"></script>
     <script src="JS/jquery-3.5.1.min.js"></script>

    <script src="JS/Login.js"></script>
</body>
</html>