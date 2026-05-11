<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $clave = $_POST['clave'] ?? '';

    if ($usuario == 'prueba' && $clave == '12345') {
        $_SESSION['usuario'] = $usuario;
        header('Location: menu.php');  // Redirige directamente
        exit();
    } else {
        // Si falla, vuelve al login con error
        header('Location: login.php?error=1');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}
