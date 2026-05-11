<?php
//print_r($_GET);
$error = $_GET['error'] ?? '';
echo $error;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Acceso</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center min-vh-100 align-items-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-bottom">
                        <div class="text-center">

                            <?php if ($error == 1): ?>
                                <div class="alert alert-warning" role="alert">
                                    Usuario o contraseña incorrectos
                                </div>
                            <?php endif; ?>

                            <h3 class="mt-2">Sistema de Acceso</h3>
                            <p class="text-muted mb-0">Ingresa tus credenciales</p>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        <!-- Alert para mensajes -->
                        <div id="alertMessage" class="alert alert-danger d-none" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <span id="alertText"></span>
                        </div>

                        <form id="loginForm" action="procesar_login.php" method="POST">
                            <!-- Campo de usuario/email -->
                            <div class="mb-3">
                                <label for="username" class="form-label">
                                    <i class="bi bi-person-fill me-1"></i>Usuario o Email
                                </label>
                                <input type="text" class="form-control" id="username" name="usuario"
                                    placeholder="usuario@ejemplo.com" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa tu usuario o email
                                </div>
                            </div>

                            <!-- Campo de contraseña -->
                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    <i class="bi bi-key-fill me-1"></i>Contraseña
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="clave"
                                        required>
                                    </button>
                                </div>
                                <div class="invalid-feedback">
                                    Por favor ingresa tu contraseña
                                </div>
                            </div>

                            <!-- Opciones adicionales -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Botón de login -->
                                <button type="submit" class="btn btn-primary w-100 mb-3">
                                    <i class="bi bi-box-arrow-in-right me-2"></i>Iniciar Sesión
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>