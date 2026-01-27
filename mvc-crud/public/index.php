<?php
require_once __DIR__ . "/../app/controllers/UsuarioController.php";

$url = $_GET["url"] ?? "usuarios/listar";

$controller = new UsuarioController();

switch ($url) {
    case "usuarios/listar":
        $controller->listar();
        break;

    case "usuarios/crearForm":
        $controller->crearForm();
        break;

    case "usuarios/crear":
        $controller->crear();
        break;

    case "usuarios/editarForm":
        $controller->editarForm();
        break;

    case "usuarios/actualizar":
        $controller->actualizar();
        break;

    case "usuarios/eliminar":
        $controller->eliminar();
        break;

    default:
        http_response_code(404);
        echo "404 - Ruta no encontrada";
}
