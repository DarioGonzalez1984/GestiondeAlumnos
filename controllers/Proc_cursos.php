<?php
header('Content-Type: text/html; charset=UTF-8');
include '../db/database.php';

// Recibir los datos del formulario
$nombre = $_POST['nombre_curso'];
$desc = $_POST['descripcion'];


// Preparar la consulta SQL
$sql = "INSERT INTO cursos (nombre, descripcion)
VALUES ('$nombre', '$desc')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Nuevo curso registrado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>