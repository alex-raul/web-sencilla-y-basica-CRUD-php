<?php
include 'db.php';  

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
</head>
<body>
    <h2>Actualizar Usuario</h2>
    <form action="update_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label for="dni">DNI:</label><br>
        <input type="text" id="dni" name="dni" value="<?php echo $row['dni']; ?>" required><br><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required><br><br>

        <label for="ap_paterno">Apellido Paterno:</label><br>
        <input type="text" id="apellido_paterno" name="apellido_paterno" value="<?php echo $row['apellido_paterno']; ?>" required><br><br>

        <label for="ap_materno">Apellido Materno:</label><br>
        <input type="text" id="apellido_materno" name="apellido_materno" value="<?php echo $row['apellido_materno']; ?>" required><br><br>

        <label for="correo">Correo Electrónico:</label><br>
        <input type="email" id="correo" name="correo" value="<?php echo $row['correo']; ?>" required><br><br>

        <label for="edad">Edad:</label><br>
        <input type="number" id="edad" name="edad" value="<?php echo $row['edad']; ?>" required><br><br>

        <label for="celular">Celular:</label><br>
        <input type="tel" id="celular" name="celular" value="<?php echo $row['celular']; ?>" required><br><br>

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
