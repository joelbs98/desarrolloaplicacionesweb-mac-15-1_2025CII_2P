<?php

/*
El Modelo NO sabe si los datos se mostrarán en una tabla,
en un formulario o en un JSON.
Solo entrega datos.

*/

require_once __DIR__ . "/../../config/conexion.php";

class Usuario
//📌 Representa la entidad Usuario de la base de datos.
{

    //Obtener todos los usuarios
    public static function obtenerTodos()
    {
        //📌 Es una función que: consulta la base de datos
        // devuelve todos los usuarios, no imprime nada
        $conn = Conexion::conectar();

        $sql = "SELECT id, usuario, correo FROM usuarios";
        $resultado = $conn->query($sql);

        $usuarios = [];

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $usuarios[] = $fila;
            }
        }

        return $usuarios;
        /*
            [
                ["id"=>1, "usuario"=>"admin", "correo"=>"admin@email.com"],
                ["id"=>2, "usuario"=>"juan", "correo"=>"juan@email.com"]
            ]
        */
    }
}
