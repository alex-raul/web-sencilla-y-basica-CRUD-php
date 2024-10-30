<?php
include 'db.php'; 
include './create.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['ap_paterno'];  
    $apellido_materno = $_POST['ap_materno'];  
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $celular = $_POST['celular'];
    $contrasena = password_hash($_POST['password'], PASSWORD_BCRYPT);  // Encript


    $sql = "INSERT INTO usuarios (dni, nombre, apellido_paterno, apellido_materno, correo, edad, celular, contrasena) 
            VALUES ('$dni', '$nombre', '$apellido_paterno', '$apellido_materno', '$correo', '$edad', '$celular', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

