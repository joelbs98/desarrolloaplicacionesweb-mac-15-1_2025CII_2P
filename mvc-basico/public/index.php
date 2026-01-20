<?php
/*
index.php es la “puerta” del proyecto
Decide qué controlador y qué vista cargar
Se usa GET (?url=...) solo para enrutar (navegación)
*/
require_once __DIR__ . "/../app/controllers/UsuarioController.php";

//Router simple por GET: ?url=usuarios/listar
$url = $_GET["url"] ?? "usuarios/listar";

switch ($url) {
    case "usuarios/listar":
        $controller = new UsuarioController();
        $usuarios = $controller->listar(); //datos desde el modelo

        //Cargar la vista(La vista usa $usuarios)
        require __DIR__ . "/../app/views/usuarios/listar.php";
        break;

    default:
        http_response_code(404);
        echo "404 - Página no encontrada";
}
