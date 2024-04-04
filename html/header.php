<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Gestión de Cursos</title>
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <a href="#">Sistema de Gestión de Cursos</a>
      </div>
      <div class="menu-container">
        <ul class="menu">
          <li><a href="#">Inicio</a></li>
          <li class="dropdown">
            <a href="#">Alumnos</a>
            <ul class="dropdown-menu">
              <li><a href="./formAlumno.php">Registrar Alumno</a></li>
              <li><a href="./listarAlumnos.php">Listar Alumnos</a></li>
              <li><a href="#">Asignar responsable</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#">Responsables</a>
            <ul class="dropdown-menu">
              <li><a href="./formResponsable.php">Registrar Responsable</a></li>
              <li><a href="#">Listar Responsables</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#">Cursos</a>
            <ul class="dropdown-menu">
              <li><a href="./formCurso.php">Registrar Curso</a></li>
              <li><a href="#">Listar Cursos</a></li>
              <li><a href="#">Estado de Cursos</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <script src="script.js"></script>
</body>
</html>