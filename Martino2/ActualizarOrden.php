<?php

//En esta linea llamamos a la conexion a la BD para poder acceder a la Tabla "Meseros"
 require 'conexionmeseros.php';

 //Mandamos a llamar a la Base de datos
 include_once 'conexion.php';

 //En estas lineas creamos un objeto para poner crear una conexion con el metodo "Conexion"
$objeto = new Conexion();
$conexion2 = $objeto->Conectar();

  
 /*  Asignamos el valor que el mesero asigno en la variable "variable1" y "varibale2", estas variables 
  son enviadas desde el Tablero de meseros a traves de la barra del buscador  */
  


  //Variable1 Es el id del pedido que se va a modificar
   $variable1=($_GET['variable1']);

   //Variable2 es la clave que el mesero ingreso
   $variable2=($_GET['variable2']);

   //Realizamos una consulta para validar si la clave que ingreso el mesero es correcta
   $q="SELECT COUNT(*) as contar from mesero where clave='$variable2'";
   


   // Estas lineas funcionan para realizar la consulta, mandando los parametros "Conexion" y "q" de Query (Consulta)
   $consulta=mysqli_query($conexion, $q);
   $array=mysqli_fetch_array($consulta);
   

   //Aqui validamos que si hay mas de un campo que coincida con el valor que ingresamos va a realizar una acción
   if($array['contar']>0){
   

    /* La accion que se realiza cuando el pedido es validado es Actualizar el "Estado" Del pedido
    de esta forma, el pedido dejara de mostrarse el tablero de Meseros y pasara al tablero de cocineros. 
    */
     $consultaActualizar ="UPDATE pedido SET Estado='Confirmar' WHERE id='$variable1'";


//Aqui realizamos la consulta para actualizar
       $resultadoA = $conexion2->prepare($consultaActualizar);
       $resultadoA->execute();
       $usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);
      
   //Este echo sirve para mostrar una alerta en el Tablero de meseros de que el registro fue aprobado
       echo "<script>
                alert('Registro Aprobado');
                window.location= 'Tablero_Mesero.php'
    </script>";
  echo '<p class="alert alert-success agileits" role="alert">Registro Aprobado';
    
  //Esta linea sirve para redirigirnos al tablero de meseros
          header("location: Tablero_Mesero.php");
   }else{
       
    //O en caso contrario, nos mostrara la alerta de que la clave ingresada fue incorrecta
   echo '<p class="alert alert-danger agileits" role="alert">Clave incorrecta!';

   }

    ?>