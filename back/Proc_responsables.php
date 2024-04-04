<?php
header('Content-Type: text/html; charset=UTF-8');
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumnosdb";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

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