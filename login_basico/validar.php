<?php
//(Recibe POST, valida y crea sesión)
/*
POST → servidor: PHP recibe con $_POST.
Si está bien: crea estado guardando $_SESSION["usuario"].
Luego redirige a dashboard.php.
*/
session_start();

//1) Recibir datos por POST
$usuario = $_POST["usuario"] ?? "";
$clave = $_POST["clave"] ?? "";

//2) Credenciales "quemadas" (solo para motivo didactico)
$usuario_correcto = "admin";
$clave_correcta = "1234";

//3)Validación básica
if ($usuario === $usuario_correcto && $clave === $clave_correcta) {

    //4)Guardar estado (sesión)
    $_SESSION["usuario"] = $usuario;

    //5)Redirigir a la página protegida
    header("Location: dashboard.php");
    exit;
}
//Si falla, volver al login con un mensaje
header("Location: login.php?msg=" . urlencode("Usuario o contraseña incorrectos"));
exit;
