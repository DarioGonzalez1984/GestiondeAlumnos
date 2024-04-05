<?php
header('Content-Type: text/html; charset=UTF-8');
include '../db/database.php';

// Recibir los datos del formulario
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$email = $_POST['correo'];

// Preparar la consulta SQL
$sql = "INSERT INTO alumnos (cedula, nombre, apellido, fecha_nacimiento, sexo, telefono, direccion, email)
VALUES ('$cedula', '$nombre', '$apellido', '$fecha_nacimiento', '$sexo', '$telefono', '$direccion', '$email')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Nuevo alumno registrado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>