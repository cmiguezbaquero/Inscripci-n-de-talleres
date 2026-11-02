<?php
const DESCUENTO = 0.10;
/**
 * Calcula el importe inicial de la inscripción.
 * @param float $precio Precio por sesión.
 * @param int $sesiones Número de sesiones contratadas.
 * @return float|int Importe del descuento.
 */
function calcularImporte(float $precio, int $sesiones): float{
    return $precio * $sesiones;
}

/**
 * Calcula el descuento según el número de sesiones contratadas.
 * @param float $importe Importe inicial.
 * @param int $sesiones Número de sesiones contratadas.
 * @return float|int Importe del descuento.
 */
function calcularDescuento(float $importe, int $sesiones): float{
    if($sesiones >= 5){
        return $importe * DESCUENTO;
    }else{
            return 0;
    }
}

/**
 * Calcula el importe final restando el descuento.
 * @param float $importe Importe inicial.
 * @param float $descuento Importe del descuento.
 * @return float Importe total.
 */
function calcularTotal (float $importe, float $descuento) : float {
    return $importe - $descuento;
}
?>