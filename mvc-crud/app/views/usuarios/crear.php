<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
</head>

<body>
    <h1>Crear usuario</h1>

    <form method="POST" action="index.php?url=usuarios/crear">

        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Correo:</label><br>
        <input type="email" name="correo" required><br><br>

        <label>Clave:</label><br>
        <input type="password" name="clave" required><br><br>

        <button type="submit">Guardar</button>

    </form>

    <p><a href="index.php?url=usuarios/listar">Volver</a></p>

</body>

</html>