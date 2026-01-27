<?php

require_once __DIR__ . "/../models/Usuario.php";

class UsuarioController
{

    public function listar()
    {
        $usuarios = Usuario::obtenerTodos();
        require __DIR__ . "/../views/usuarios/listar.php";
    }
    public function crearForm()
    {
        require __DIR__ . "/../views/usuarios/crear.php";
    }
    public function crear()
    {
        $u = $_POST["usuario"] ?? "";
        $c = $_POST["correo"] ?? "";
        $k = $_POST["clave"] ?? "";

        Usuario::crear($u, $c, $k);

        header("Location: index.php?url=usuarios/listar");
        exit;
    }
    public function editarForm()
    {
        $id = $_GET["id"] ?? 0;
        $usuario = Usuario::obtenerPorId($id);
        require __DIR__ . "/../views/usuarios/editar.php";
    }
    public function actualizar()
    {
        $id = $_POST["id"] ?? 0;
        $u = $_POST["usuario"] ?? "";
        $c = $_POST["correo"] ?? "";

        Usuario::actualizar($id, $u, $c);
        header("Location: index.php?url=usuarios/listar");
        exit;
    }
    public function eliminar()
    {
        $id = $_GET["id"] ?? 0;
        Usuario::eliminar($id);

        header("Location: index.php?url=usuarios/listar");
        exit;
    }
}
