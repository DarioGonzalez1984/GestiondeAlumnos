<?php
include '../db/database.php';

// Consulta SQL para obtener los datos de la tabla alumnos
$sql = "SELECT * FROM responsables";
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo '<table>';
    echo '<tr><th>Cédula</th><th>Nombre</th><th>Apellido</th><th>Teléfono</th><th>Correo</th><th>Opciones</th></tr>';

    // Recorrer los resultados y mostrar los datos en filas de la tabla
    while ($fila = $resultado->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $fila['cedula'] . '</td>';
        echo '<td>' . $fila['nombre'] . '</td>';
        echo '<td>' . $fila['apellido'] . '</td>';
        echo '<td>' . $fila['telefono'] . '</td>';
        echo '<td>' . $fila['email'] . '</td>';
        echo '<td><a href="#" class="btn-editar">Editar</a> <a href="#" class="btn-eliminar">Eliminar</a></td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No se encontraron responsables registrados.";
}

// Cerrar la conexión
$conn->close();
?>