<?php
/*
👉 Este archivo LEE la cookie
Flujo real:
SERVIDOR → crea cookie → NAVEGADOR
NAVEGADOR → envía cookie → SERVIDOR
📌 El navegador envía la cookie automáticamente
📌 PHP la recibe con $_COOKIE
*/
?>

<?php
$usuario = $_COOKIE["usuario"] ?? "No hay cookie";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Cookie</title>
</head>

<body>
    <h1>LECTURA DE COOKIE</h1>
    <p>Usuario guardado en cookie: <strong><?= $usuario ?></strong></p>

    <a href="index.php">Volver</a>

</body>

</html>