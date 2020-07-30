

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

//Asignamos una accion al boton1
if(isset($_POST['boton1'])){
    
   //Creamos una conexion con la BD
    $host="localhost";
$usuario="root";
$clave="";
$bd="restaurante";

$conexion=mysqli_connect($host,$usuario,$clave,$bd);


if($conexion){
//echo "conectado";
    //header("location: home.php");
}else{
echo "No se pudo conectar";
}
//Utilizamos la opcion de iniciar sesion 
    
    //Asignamos los valores del formulario a las variables usuario y clave
    $usuario=$_POST['usuario'];
    $clave=$_POST['pass'];
    
    //realizamos una consulta para buscar un campo que coincida con los datos ingresados
    $q="SELECT COUNT(*) as contar from auxiliar where nombre='$usuario' AND clave='$clave'";
    
    //Realizamos la consulta
    $consulta=mysqli_query($conexion,$q);
    $array=mysqli_fetch_array($consulta);
    
    if($array['contar']>0){
        //Iniciamos sesion con el nombre del usuario ingresado
        session_start();
        $_SESSION['usuarioing']=$usuario;
        //Nos redireccionamos a la pagina Home
    header("location: Home.php");
    }else{
   // En caso contrario mostramos una alerta de que los datos estan mal
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