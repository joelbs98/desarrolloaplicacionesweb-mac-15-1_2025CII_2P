<?php
/*
👉 Este archivo LEE la sesión
SERVIDOR → crea sesión → ID
NAVEGADOR → guarda ID → cookie
NAVEGADOR → envía ID → SERVIDOR
📌 PHP busca los datos en el servidor, no en el navegador.
*/
?>

<?php
session_start();
$usuario = $_SESSION["usuario"] ?? "No hay sesión";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver sesión</title>
</head>

<body>

    <h1>LECTURA DE SESIÓN</h1>
    <p>Usuario guardado en sesión: <strong><?= $usuario ?></strong></p>

    <a href="cerrar_session.php">Cerrar sesión</a>

</body>

</html>