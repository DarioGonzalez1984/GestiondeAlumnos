<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumnosdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de la tabla alumnos
$sql = "SELECT * FROM alumnos";
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo '<table>';
    echo '<tr><th>Cédula</th><th>Nombre</th><th>Apellido</th><th>Fecha Nacimiento</th><th>Sexo</th><th>Teléfono</th><th>Dirección</th><th>Correo</th><th>Opciones</th></tr>';

    // Recorrer los resultados y mostrar los datos en filas de la tabla
    while ($fila = $resultado->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $fila['cedula'] . '</td>';
        echo '<td>' . $fila['nombre'] . '</td>';
        echo '<td>' . $fila['apellido'] . '</td>';
        echo '<td>' . $fila['fecha_nacimiento'] . '</td>';
        echo '<td>' . $fila['sexo'] . '</td>';
        echo '<td>' . $fila['telefono'] . '</td>';
        echo '<td>' . $fila['direccion'] . '</td>';
        echo '<td>' . $fila['email'] . '</td>';
        echo '<td><a href="#" class="btn-editar">Editar</a> <a href="#" class="btn-eliminar">Eliminar</a></td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No se encontraron alumnos registrados.";
}

// Cerrar la conexión
$conn->close();
?>