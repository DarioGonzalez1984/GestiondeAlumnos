<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Cursos</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php $base_url = '/gestiondealumnos'; 
include '../header.php'; ?>
      <main>
        <h1>Listado de Cursos</h1>
        <?php include '../controllers/Listar_cursos.php'; ?>
    </main>
</body>
</html>