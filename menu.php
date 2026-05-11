<?php
// Tu código PHP aquí
?>
<html>

<head>
    <title>PHP Test</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <!-- ========================================== -->
    <!-- INICIO DEL MENÚ LATERAL (CON COLLAPSE)      -->
    <!-- ========================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-light vh-100 p-0">
                <div class="p-3">
                    <h5 class="text-center">Menú</h5>
                    <hr>
                </div>

                <!-- Alumnos con collapse -->
                <div class="px-3">
                    <a class="btn w-100 text-start fw-bold" data-bs-toggle="collapse" href="#collapseAlumnos" role="button" aria-expanded="false" aria-controls="collapseAlumnos">
                        📚 Alumnos ▼
                    </a>
                    <div class="collapse" id="collapseAlumnos">
                        <a href="alumnos.php" class="btn w-100 text-start ps-4">Registrar Alumno</a>
                        <a href="#" class="btn w-100 text-start ps-4">Listado de Alumnos</a>
                        <a href="#" class="btn w-100 text-start ps-4">Buscar Alumno</a>
                    </div>
                </div>

                <!-- Carreras con collapse -->
                <div class="px-3 mt-2">
                    <a class="btn w-100 text-start fw-bold" data-bs-toggle="collapse" href="#collapseCarreras" role="button" aria-expanded="false" aria-controls="collapseCarreras">
                        🎓 Carreras ▼
                    </a>
                    <div class="collapse" id="collapseCarreras">
                        <a href="#" class="btn w-100 text-start ps-4">Gestionar Carreras</a>
                        <a href="#" class="btn w-100 text-start ps-4">Consultar Alumnos por Carrera</a>
                    </div>
                </div>

                <!-- Notas con collapse -->
                <div class="px-3 mt-2">
                    <a class="btn w-100 text-start fw-bold" data-bs-toggle="collapse" href="#collapseNotas" role="button" aria-expanded="false" aria-controls="collapseNotas">
                        📝 Notas ▼
                    </a>
                    <div class="collapse" id="collapseNotas">
                        <a href="#" class="btn w-100 text-start ps-4">Registrar Notas</a>
                        <a href="#" class="btn w-100 text-start ps-4">Modificar Notas</a>
                        <a href="#" class="btn w-100 text-start ps-4">Consultar Notas</a>
                    </div>
                </div>
                <div class="px-3 mt-4">
                    <a href="login.php" class="btn btn-danger">← Salir</a>
                </div>
            </div>

            <!-- ========================================== -->
            <!-- FIN DEL MENÚ LATERAL                        -->
            <!-- ========================================== -->

            <!-- Contenido principal -->
            <div class="col-md-10">

                <!-- ========================================== -->
                <!-- INICIO DEL MENÚ SUPERIOR (NAVBAR)          -->
                <!-- ========================================== -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Sistema de Control de Estudios</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <!-- Alumnos -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Alumnos</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="alumnos.php">Registrar Alumno</a></li>
                                        <li><a class="dropdown-item" href="#">Listado de Alumnos</a></li>
                                        <li><a class="dropdown-item" href="#">Buscar Alumno</a></li>
                                    </ul>
                                </li>

                                <!-- Carreras -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Carreras</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Gestionar Carreras</a></li>
                                        <li><a class="dropdown-item" href="#">Consultar Alumnos por Carrera</a></li>
                                    </ul>
                                </li>

                                <!-- Notas -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Notas</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Registrar Notas</a></li>
                                        <li><a class="dropdown-item" href="#">Modificar Notas</a></li>
                                        <li><a class="dropdown-item" href="#">Consultar Notas</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="login.php" class="btn btn-danger">← Salir</a>
                </nav>
                <!-- ========================================== -->
                <!-- FIN DEL MENÚ SUPERIOR                      -->
                <!-- ========================================== -->

                <!-- Aquí va tu contenido -->
                <div class="container mt-5">
                    <h2>Bienvenido al Sistema</h2>
                    <p>Selecciona una opción del menú</p>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>