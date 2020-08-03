<?php 

//Realizamos la consulta conectarnos a la base de datos a traves de un metodo llamado "Conectar"
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'restaurante');
        define('usuario', 'root');
        define('password', '');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            //En caso de no poder conectarnos a la BD se nos mostrara un error
            die("El error de Conexión es: ". $e->getMessage());
        }
    }


   
}


$host="localhost";
$user="root";
$clave="";
$bd="restaurante";

$conectar=mysqli_connect($host,$user,$clave,$bd);
?>

     
    