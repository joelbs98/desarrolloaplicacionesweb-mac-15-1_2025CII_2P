<?php

require_once __DIR__ . "/../app/controllers/UsuarioController.php";

$url = $_GET["url"] ?? "usuarios/ajax";

$controller = new UsuarioController();

switch ($url) {
    //Vista HTML
    case "usuarios/ajax":
        $controller->vistaAjaxListar();
        break;
    //Endpoint AJAX (json)
    case "api/usuarios":
        $controller->apiListar();
        break;

    default:
        http_response_code(404);
        echo "404 - Ruta no encontrada";
}
