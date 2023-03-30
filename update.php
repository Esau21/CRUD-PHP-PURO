<?php 

include "./db.php";


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "UPDATE users SET nombre='$nombre', email='$email', password='$password' WHERE id='$id'";

$resultados = mysqli_query($conexion, $query);

if($resultados){
    header("Location: index.php");
}

?>