<?php

include "./db.php";

$id = $_GET['id'];

$query = "SELECT * FROM users WHERE id='$id'";

$resultados = mysqli_query($conexion, $query);

$users = mysqli_fetch_array($resultados);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>CRUD | PHP PURO</title>
</head>

<body>
    <?php include "./assets/nav.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header bg-dark">
                        <h6 class="text-uppercase text-info text-center">Actualizar Usuario</h6>
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $users['id'] ?>">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre" value="<?php echo $users['nombre'] ?>">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Ingresa el email" value="<?php echo $users['email'] ?>">
                            <label>Password:</label>
                            <input type="password" class="form-control" name="password" placeholder="Ingresa la clave" value="<?php echo $users['password'] ?>">
                            <button type="submit" class="btn btn-primary btn-sm mt-3" value="Enviar">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "./assets/footer.php"; ?>
</body>

</html>