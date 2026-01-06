<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer proyecto PHP</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <h1> Mi primer proyecto en PHP</h1>

    <?php
    $nombre = "Joel";
    echo "Hola, " . $nombre;
    ?>

    <p>Esto viene desde HTML</p>

    <button onclick="saludar()"> Saludar</button>

    <script src="js/script.js"></script>

</body>

</html>