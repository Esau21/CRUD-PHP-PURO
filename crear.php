<?php

include "./db.php";

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

/* aqui hacemos el insert into */

$query = "INSERT INTO users (nombre, email, password) VALUES ('$nombre', '$email', '$hashed_password')";
$resultados = mysqli_query($conexion, $query);


if ($resultados) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
