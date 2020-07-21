
<?php
/*
$server='localhost';
$username='root';
$password='';
$database='php_login';

try{
$conn=new PDO("mysql:host=$server;dbname=$database;",$username,$password);
} catch(PDOException $e){
}
*/


$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="php_login";


$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
die("No hay conexión:".mysqli_connect_error());
}

$nombre=filter_input(INPUT_POST, "usuario");
$pass=filter_input(INPUT_POST, "contraseña");

$query=mysqli_query($conn,"SELECT * FROM user WHERE usuario='".$nombre."' and contraseña='".$pass."'");
$nr=mysqli_num_rows($query);

if($nr==1){
//header("Location:index.html")
echo "Bienvenido:".$nombre;
}
else if($nr==0)
{
echo "No conexion";
}


mysqli_close($conn);
?>
