<?php
header('Content-Type: text/html; charset=UTF-8');
include '../db/database.php';

// Recibir los datos del formulario
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['correo'];

// Preparar la consulta SQL
$sql = "INSERT INTO responsables (cedula, nombre, apellido, telefono, email)
VALUES ('$cedula', '$nombre', '$apellido', '$telefono', '$email')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Nuevo responsable registrado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>