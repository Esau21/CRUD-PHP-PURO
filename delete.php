<?php 

include "./db.php";

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id='$id'";

$resultado = mysqli_query($conexion, $query);

if($resultado) {
    header("Location: index.php");
}

?>