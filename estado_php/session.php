<?php
/*
👉 Este archivo INICIA una sesión
“Aquí el servidor guarda la información del usuario
en memoria del servidor.”
📌 El navegador NO guarda el nombre
📌 Solo guarda un ID de sesión
*/
?>

<?php
session_start();
//Guardar datos en la sesión
$_SESSION["usuario"] = "Joel";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear sesión</title>
</head>

<body>

    <h1>SESIÓN INICIADA</h1>
    <p>Se ha guardado el usuario en la sesión</p>

    <a href="ver_session.php">Ver sesión</a>

</body>

</html>