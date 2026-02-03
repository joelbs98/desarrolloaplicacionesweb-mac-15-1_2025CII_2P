<?php
require_once __DIR__ . "/../../config/conexion.php";

class Usuario
{
    public static function obtenerTodos()
    {

        $conn = Conexion::conectar();

        $sql = "SELECT id, usuario, correo FROM usuarios ORDER BY id DESC";
        $res = $conn->query($sql);

        $usuarios = [];
        if ($res && $res->num_rows > 0) {
            while ($fila = $res->fetch_assoc()) {
                $usuarios[] = $fila;
            }
        }
        return $usuarios;
    }
}
