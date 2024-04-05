<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Cursos</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php  $base_url = '/gestiondealumnos';
include '../header.php'; ?>
      <main>
        <h1>Registro de Responsables</h1>
        <form method="post" action="../controllers/Proc_responsables.php">
            <div class="form-group">
                <input type="hidden" id="id" name="id" required>
              </div>
            <div class="form-group">
                <label for="cedula">Cédula</label>
                <input type="text" id="cedula" name="cedula" required>
              </div>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
          </div>
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" required>
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" required>
          </div>
          <div class="form-group">
            <label for="correo">Correo Electrónico</label>
            <input type="email" id="correo" name="correo" >
          </div>
          <button type="submit">Registrar Responsable</button>
        </form>
      </main>
</body>
</html>