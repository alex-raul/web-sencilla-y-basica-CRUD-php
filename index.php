<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD PHP - Gestión de Usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="estilosindex.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Registrar Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="read.php">Ver Usuarios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Bienvenido a la Gestión de Usuarios</h1>
            <p class="lead">Aquí puedes registrar, ver, actualizar y eliminar usuarios</p>
            <a href="./inicio.php" class="btn btn-success btn-lg mt-4">Volver al inicio</a>
        </div>
    </header>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Acciones Rápidas</h2>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="create.php" class="text-dark">Registrar Usuario</a>
                    </li>
                    <li class="list-group-item">
                        <a href="read.php" class="text-dark">Ver Usuarios</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 text-center">
                <img src="./alex1.png" alt="Gestión de Usuarios" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Derechos Reservados - CRUD PHP</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

