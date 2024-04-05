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