

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



        <H1>Registrate</H1>
    <spam>Ó si ya tienes cuenta: <a href="IniciarSesion.php">Inicia Sesión</a></spam>

    <Form action="Registro.php" method="post">
        <H3>Ingresa tu Usuario:</H3>
        <input type="text" name="usuario" placeholder="Usuario">
        <H3> Ingresa tu Contraseña:</h3>
        <input type="password" name="contraseña" placeholder="Contraseña">
        <H3> Confirma tu Contraseña:</h3>
        <input type="password" name="Re_Password" placeholder="Confirma Tu Contraseña" >

        <br>
        <br>
        <br>
        <INPUT type="submit" Value="Aceptar">


        </INPUT> 
    </BODY>
</form>
</HTML>