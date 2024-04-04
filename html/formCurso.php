<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Cursos</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include './html/header.php'; ?>
      <main>
        <h1>Registro de Cursos</h1>
        <form method="post" action="../back/Proc_cursos.php">
          <div class="form-group">
            <label for="nombre_curso">Nombre del Curso</label>
            <input type="text" id="nombre_curso" name="nombre_curso" required>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
          </div>
          <!-- <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" required>
          </div>
          <div class="form-group">
            <label for="fecha_fin">Fecha de Fin</label>
            <input type="date" id="fecha_fin" name="fecha_fin" required>
          </div> -->
          <button type="submit">Registrar Curso</button>
        </form>
      </main>
</body>
</html>