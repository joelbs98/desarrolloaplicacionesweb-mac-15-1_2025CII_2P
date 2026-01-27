<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>

<body>
    <h1>Editar usuario</h1>

    <?php if (!$usuario): ?>
        <p>No existe el usuario</p>
        <p><a href="index.php?url=usuarios/listar">Volver</a></p>
    <?php else: ?>

        <form method="POST" action="index.php?url=usuarios/actualizar">
            <input type="hidden" name="id" value="<?= htmlspecialchars($usuario["id"]) ?>">

            <label>Usuario:</label><br>
            <input name="usuario" value="<?= htmlspecialchars($usuario["usuario"]) ?>" required><br><br>

            <label>Correo:</label><br>
            <input name="correo" value="<?= htmlspecialchars($usuario["correo"]) ?>" required><br><br>

            <button type="submit">Actualizar</button>
        </form>

        <p><a href="index.php?url=usuarios/listar">Volver</a></p>
    <?php endif; ?>
</body>

</html>