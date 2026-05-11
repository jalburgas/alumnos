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
    <div class="container mt-5">
        <form method="post">
            <div class="alert alert-primary" role="alert">
                <div class="d-flex justify-content-between align-items-center">
                    Gestionar Alumnos
                    <a href="menu.php" class="btn btn-secondary">← Regresar al Menú</a>
                </div>
            </div>
            
            <div class="mb-3">
                <div class="card" style="width: 18rem;">
                    <p class="card-header">
                        Ingrese los datos del alumno
                    </p>
                    <div class="card-body">
                        <input type="text" name="cedula" class="form-control" placeholder="Cedula" required>
                        <br>                
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                        <br>
                        <input type="number" name="edad" class="form-control" placeholder="Edad" required>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>