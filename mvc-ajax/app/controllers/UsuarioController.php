<?php
require_once __DIR__ . "/../models/Usuario.php";

class UsuarioController
{
    //1) Acción Web: Devolver la vista (HTML)
    public function vistaAjaxListar()
    {
        require __DIR__ . "/../views/usuarios/ajax_listar.php";
    }

    //2)Acción API/AJAX: devuelve JSON
    public function apiListar()
    {
        $usuarios = Usuario::obtenerTodos();

        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($usuarios);
        exit;
    }
}
