<?php
/*
Conexión a la base de datos
La conexión se centraliza en un solo archivo
para no repetir código.
*/
class Conexion
{
    public static function conectar()
    {
        $host = "localhost";
        $bd = "web_app67";
        $usuario = "root";
        $clave = "";

        $conn = new mysqli($host, $usuario, $clave, $bd);

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        return $conn;
    }
}
