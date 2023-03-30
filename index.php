<?php

require('./db.php');

$query = "SELECT * FROM users";

$resultados = mysqli_query($conexion, $query);

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
    <?php include "./assets/nav.php" ?>

    <div class="row">
        <div class="col-4 mt-4">
            <div class="card">
                <div class="card-header bg-dark">
                    <h6 class="text-uppercase text-white text-center">Formulario de creacion</h6>
                </div>
                <div class="card-body">
                    <form action="crear.php" method="POST">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Ingresa el email">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Ingresa la clave">
                        <button type="submit" class="btn btn-primary btn-sm mt-3" value="Enviar">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-8 mt-4">
            <div class="card">
                <div class="card-header bg-dark">
                    <h6 class="text-uppercase text-white text-center">Datos de usuarios</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($resultados as $users): ?>
                                    <tr>
                                        <td><?php echo $users['id']; ?></td>
                                        <td><?php echo $users['nombre']; ?></td>
                                        <td><?php echo $users['email']; ?></td>
                                        <td><?php echo $users['password']; ?></td>
                                        <td>
                                            <a href="editar.php?id=<?php echo $users['id'] ?>" class="btn btn-sm btn-primary">Editar</a>
                                            <a href="delete.php?id=<?php echo $users['id'] ?>" class="btn btn-sm btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./assets/footer.php" ?>
</body>

</html>