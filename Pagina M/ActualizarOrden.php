<?php
 require "conexionmeseros.php";

 include_once 'conexion.php';
$objeto = new Conexion();
$conexion2 = $objeto->Conectar();
/*
//Realizamos una consulta para mostrar todos las ordenes
$consulta2 = "SELECT * FROM ordenes WHERE stat='0'" ;

//Ejecutamos la consulta
$resultado2 = $conexion2->prepare($consulta2);
$resultado2->execute();*/

  
 //Asignamos el valor que el mesero asigno en la variable "clave"
   $stat="1";
   $variable1=($_GET['variable1']);
   $variable2=($_GET['variable2']);

   //Realizamos una consulta para validar si la clave que ingreso el mesero es correcta
   $q="SELECT COUNT(*) as contar from mesero where Clave='$variable2'";
   
   $consulta=mysqli_query($conexion, $q);
   $array=mysqli_fetch_array($consulta);
   
   if($array['contar']>0){
   
     $consultaActualizar ="UPDATE ordenes SET stat='1' WHERE NumMesa='$variable1'";


       $resultadoA = $conexion2->prepare($consultaActualizar);
       $resultadoA->execute();
       $usuarios = $resultadoA->fetchAll(PDO::FETCH_ASSOC);
      
   
       echo "<script>
                alert('Registro Aprobado');
                window.location= 'Tablero_Mesero.php'
    </script>";
  echo '<p class="alert alert-success agileits" role="alert">Registro Aprobado';
          echo ($variable1);
          header("location: Tablero_Mesero.php");
   }else{
       /*
  echo "<script>
                alert('Clave incorrecta!');
                window.location= 'Tablero_Mesero.php'
    </script>";*/
   echo '<p class="alert alert-danger agileits" role="alert">Clave incorrecta!';

   }

    ?>