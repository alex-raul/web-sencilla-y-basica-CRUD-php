<?php
include 'db.php';  

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
$counter = 1; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="estilosread.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Inicio</a>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center mb-4">Usuarios Registrados</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th> 
                    <th>DNI</th>
                    <th>Nombre Completo</th>
                    <th>Correo Electrónico</th>
                    <th>Edad</th>
                    <th>Celular</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $counter++?></td> 
                    <td><?php echo $row['dni']; ?></td>
                    <td><?php echo $row['nombre'] . ' ' . $row['apellido_paterno'] . ' ' . $row['apellido_materno']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['edad']; ?></td>
                    <td><?php echo $row['celular']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Editar</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-outline-primary">Ir al Inicio</a>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Derechos Reservados - CRUD PHP</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
