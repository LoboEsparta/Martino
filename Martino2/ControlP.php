

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width-device,user-scalable=no,
     initial-scale=1.0,maximum-scale01, minimum-scale=1">
     <link rel="stylesheet" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" href="CSS/Principal.css">
     <link rel="stylesheet" href="CSS/Login.css">
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
      <h2>Control</h2>
      </nav>

      <!--Contenido de la pagina-->

      <div id="content" class="p-3">
          <div class="row">
              <div class="col-md-12">
            <div class="login-box">
                <img src="img/118.jpg" class="avatar" alt="Avatar Image">
                <h2>Inicia Sesión</h2>
                <form method="post">
                  <!--Parte del usuario -->
                  <!-- Parte de contraseña -->
                  <label for="password">Contraseña</label>
                  <div class="Icon">
                  <input type="password" id="Contraseña" placeholder="Introduce Contraseña" name="pass">
                  <img src="Img/eye.png" height="24" id="No">
                  </div>
                  <input type="submit" value="Iniciar Sesión" id="Nuevo" name="boton1">
                </form>
              </div>

        </div>
          </div>
          <?php   
$boton1="";

//Asignamos una accion al boton1
if(isset($_POST['boton1'])){
    
  //Realizamos una conexion a la base de datos del restaurante
  $host="localhost";
  $usuario="root";
  $clave="";
  $bd="restaurante";
  $conexion=mysqli_connect($host,$usuario,$clave,$bd);
  if($conexion){
  
  }else{
  echo "No se pudo conectar";
  }  
    //Asignamos el valor del formulario a una variable
    $clavesita=$_POST['pass'];
    //Comparamos si en la tabla gerente hay un campo en el cual la contraseña coincida con el dato ingresado
    $q="SELECT COUNT(*) as contar from gerente where password='$clavesita'";
    //Realizamos la consulta
    $consulta=mysqli_query($conexion,$q);
    $array=mysqli_fetch_array($consulta);
    
    if($array['contar']>0){
      //Si hay una coincidencia entoncces nos redirecciona al Control
    header("location: Control.php?usuario=$clavesita");
    }else{
   // En caso de estar mal la contraseña se muestra un mensaje que dice "Datos incorrectos";
    echo '<p class="alert alert-danger agileits" role="alert">Datos incorrectos!';

    }

}

?>


            
            
       
    
    </div>

        </div>
    </div>


    <script src="JS/bootstrap.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/Login.js"></script>
    <script src="JS/abrir.js"></script>
</body>
</html>