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