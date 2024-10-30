<?php
include 'db.php';  // Conectar a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $celular = $_POST['celular'];

    $sql = "UPDATE usuarios SET dni='$dni', nombre='$nombre', apellido_paterno='$apellido_paterno', 
            apellido_materno='$apellido_materno', correo='$correo', edad='$edad', celular='$celular' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario actualizado exitosamente";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
