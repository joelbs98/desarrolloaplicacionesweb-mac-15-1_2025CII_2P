<?php
/*
👉 Este archivo CREA una cookie
Aqui el servidor le pide al navegador que guarde un dato llamado
usuario
📌 La cookie:
se guarda en el navegador
tiene duración (60 segundos)
NO se guarda en PHP
*/
?>


<?php
//Crear una cookie llamada "usuario"
setcookie("usuario", "Angie", time() + 60); //dura 60 segundos
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cookie</title>
</head>

<body>
    <h1>COOKIE CREADA</h1>
    <p>Se ha guardado una cookie con el nombre del usuario.</p>

    <a href="ver_cookie.php">Ver cookie</a>
</body>

</html>