<?php
include '../db/database.php';

// Consulta SQL para obtener los datos de la tabla alumnos
$sql = "SELECT * FROM cursos";
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo '<table>';
    echo '<tr><th>Nombre</th><th>Descripción</th><th>Opciones</th></tr>';

    // Recorrer los resultados y mostrar los datos en filas de la tabla
    while ($fila = $resultado->fetch_assoc()) {
        echo '<td>' . $fila['nombre'] . '</td>';
        echo '<td>' . $fila['descripcion'] . '</td>';
        echo '<td><a href="#" class="btn-editar">Editar</a> <a href="#" class="btn-eliminar">Eliminar</a></td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No se encontraron cursos registrados.";
}

// Cerrar la conexión
$conn->close();
?>