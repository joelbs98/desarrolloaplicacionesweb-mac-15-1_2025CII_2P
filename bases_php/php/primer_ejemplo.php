<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo PHP</title>
</head>

<body>

    <h1>Página web</h1>
    <?php
    $nombre = "Angie";
    echo "<p>Hola " . $nombre . "</p>";
    ?>
    <p> Este es HTML normal</p>
    <?php echo $nombre; ?>
    <!-- Forma abreviada de echo -->
    <?= $nombre ?>

    <?php
    $usuario = "JBARBA";
    ?>

    <h2> Bienvenido <?= $usuario ?></h2>

</body>

</html>