<?php
// 5.1 Recuperación y validación de los datos
require_once 'tarifas.php';
require_once 'funciones.php';

$nombre = $_POST['nombre'];
$sesiones = $_POST['sesiones'];
$taller = $_POST['taller'];


// Trim elimina los espacios del principio y del final del texto.
$nombre = trim($nombre);

// Comprobamos si el nombre está vacío.
if ($nombre == ''){
    echo "Error: debes introducir un nombre.";
}


// Comprueba que las sesiones sean un número entero y que estén entre 1 y 10.
if ($sesiones != (int) $sesiones || $sesiones < 1 || $sesiones > 10) {
    echo "El número de sesiones debe ser un entero entre 1 y 10.";
}


// Suponemos que el taller no existe
$tallerExiste = false;

// Recorremos el array de tarifas.
foreach ($tarifas as $nombreTaller => $precio){

    // Comparamos el taller recibido con cada clave del array.
    if ($taller === $nombreTaller) {
        $tallerExiste = true;
    }
}

// Después de recorrer el array sigue siendo falso, significa que el taller no existe.
if (!$tallerExiste) {
    echo "El taller seleccionado no existe.";
}

// 5.2 Acumulación y visualización de errores

$errores = [];



?>