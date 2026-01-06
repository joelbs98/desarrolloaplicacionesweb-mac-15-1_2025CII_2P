
<?php
echo "<h1>Hola desde PHP</h1>";
echo "<p>Esto lo genera el servidor</p>";

//Variables en PHP
//Todas las variables empiezan con $
$nombre = "Joel";
$edad = 27;
$activo = true;

//Mostrar variables
echo $nombre;
echo "<br>"; //Salto de línea
echo $edad;

//Tipos de datos básicos
$texto = "Hola"; //string
$numero = 10; //int
$decimal = 3.14; // float
$estado = true; //boolean
$nulo = null; //null
echo "<br>";
var_dump($texto);
echo "<br>";
var_dump($numero);
echo "<br>";
//Concatenación de strings
echo "Hola " . $nombre;
//En PHP se concatena con punto (.)

//Comentarios de una línea
# Comentario de una línea

/*
Comentario
multilínea
estudiantes
*/

//Operadores aritmeticos
$suma = 5 + 3;
$resta = 5 - 3;
$multiplicacion = 5 * 3;
$div = 5 / 3;

//Operadores de comparación
$a = 10;
$b = 8;
$a == $b; //Igual valor
$a === $b; //Igual valor y tipo
$a != $b; //diferente de 
$a > $b;
$a < $b;
echo "<br>";
//Estructuras condicionales (if/else)
$edadUsuario = 25;
if ($edadUsuario >= 18) {
    echo "Mayor de edad";
} else {
    echo "Menor de edad";
}
echo "<br>";
//if / elseif / else
$nota = 10;
if ($nota >= 9) {
    echo "Excelente";
} elseif ($nota >= 7) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}
echo "<br>";
//Estructuras repetitivas (bucles)
# while
$i = 0;
while ($i < 5) {
    echo $i . "<br>";
    $i++;
}

#for
for ($i = 0; $i < 5; $i++) {
    echo "Número: $i <br>";
}


//Arreglos (arrays)
#Array indexado
$colores = ["rojo", "verde", "azul"];
echo $colores[0];
echo "<br>";
#Recorrer array
foreach ($colores as $color) {
    echo $color . "<br>";
}
#Array asociativo (clave - valor)
$persona = [
    "nombre" => "Angie",
    "edad" => 27,
    "ciudad" => "Guayaquil"
];

echo $persona["nombre"];
