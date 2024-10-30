<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="estiloscreate.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Inicio</a>
        </div>
    </nav>

    <!-- formulario -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Registro de Usuario</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="procesar_registro.php" method="POST" class="bg-white p-4 shadow-sm rounded">

                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI:</label>
                        <input type="text" id="dni" name="dni" pattern="\d{8}" maxlength="8" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="ap_paterno" class="form-label">Apellido Paterno:</label>
                        <input type="text" id="ap_paterno" name="ap_paterno" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="ap_materno" class="form-label">Apellido Materno:</label>
                        <input type="text" id="ap_materno" name="ap_materno" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad:</label>
                        <input type="number" id="edad" name="edad" min="18" max="100" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="celular" class="form-label">Celular:</label>
                        <input type="tel" id="celular" name="celular" pattern="\d{9}" maxlength="9" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Registrar</button>
                </form>

                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-outline-primary">Ir al Inicio</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Derechos Reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

