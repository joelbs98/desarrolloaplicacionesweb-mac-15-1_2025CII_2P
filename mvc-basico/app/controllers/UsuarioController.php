<?php

/*
📌 Es el Controlador de la entidad Usuario.
📌 Maneja las acciones relacionadas con usuarios.
📌 El Controlador:
        NO hace SQL
        NO se conecta a MySQL
        NO sabe cómo se obtienen los datos
        👉 Solo le pide al Modelo.

*/

require_once __DIR__ . "/../models/Usuario.php";

class UsuarioController
{

    //Acción: listar usuarios
    public function listar()
    {
        //1)Pedir los datos al modelo
        $usuarios = Usuario::obtenerTodos();

        //2)Devolver los datos(por ahora)
        return $usuarios;
    }
}
