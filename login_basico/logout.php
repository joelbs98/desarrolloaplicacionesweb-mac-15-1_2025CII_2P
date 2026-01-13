<?php
/*
“Cerrar sesión” = borrar el estado del servidor.
Vuelve al login.
*/
session_start();

//Borrar todo lo guardado en la sesión
session_destroy();

//Volver al login con un mensaje
header("Location: login.php?msg=" . urlencode("Sesión cerrada exitosamente"));
exit;
