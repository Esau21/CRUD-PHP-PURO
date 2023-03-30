<?php 

$server = "localhost";
$username = "root";
$password = "";
$db = "user";


/* aqui creamos la conexion */

$conexion = mysqli_connect($server, $username, $password, $db);

if(!$conexion) 
{
    die("La conexion con la base de datos salio mal: " . mysqli_connect_error());
}


?>