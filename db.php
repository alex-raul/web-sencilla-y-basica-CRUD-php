<?php
$servername = "127.0.0.1:3307";
$username = "root"; 
$password = "";    
$dbname = "crud_db";


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar 
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
