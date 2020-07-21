
<?php
require 'conexion.php';
?>

<HTML>
    <HEAD>
        <META Charset="utf-8">
        <TITLE>Login</TITLE>
    </HEAD>
     <link rel="stylesheet" href="css/estilo.css">
         <header>
        <section class="contacto">
 <div class="container quitarmargen">
         <div class="row">
             <div class="col-12">

	
       <a title="Martino" href="index.php"><img src="images/logoMartino.jpg" alt="Martino" height=70 /></a>
       <a title="Martino" href="index.php"><img src="images/LogoMartino1.jpg" alt="Martino" height=70 /></a>
</div>
</div>
</div>
</section>
    </header>
    <BODY>
        <H1>Inicio de sesión</H1>
        <BR>
    <spam>Sí no tienes cuenta:<a href="Registro.php">Registrate</a></spam>
        <BR>
        <Form action="IniciarSesion.php" method="post">
        <H3>Ingresa tu Usuario:</H3>
        <input type="text" name="Usuario" placeholder="Usuario" >
        <H3> Ingresa tu Contraseña:</h3>
         <input type="password" name="Password" placeholder="Contraseña" >
         <br>
         <br>
         <br>
         <INPUT type="submit" Value="Aceptar">
    </Form>
    
    </BODY>

