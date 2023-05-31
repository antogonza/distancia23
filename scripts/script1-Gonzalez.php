<?php

/**
 * Este script contiene dos funciones para realizar operaciones matemáticas simples.
 * Autor: Antonio González
 * Versión: 1.0
 */

/**
 * Calcula el área de un triángulo.
 *
 * @param float $base La base del triángulo.
 * @param float $altura La altura del triángulo.
 * @return float El área del triángulo.
 * @since 1.0
 */
function calcularAreaTriangulo($base, $altura)
{
    return ($base * $altura) / 2;
}

/**
 * Calcula el perímetro de un rectángulo.
 *
 * @param float $lado1 El primer lado del rectángulo.
 * @param float $lado2 El segundo lado del rectángulo.
 * @return float El perímetro del rectángulo.
 * @since 1.0
 */
function calcularPerimetroRectangulo($lado1, $lado2)
{
    return 2 * ($lado1 + $lado2);
}

// Indica la categoría del script
/**
 * @category Matemáticas
 */

// Indica que la función calcularPerimetroRectangulo estará obsoleta en futuras versiones
/**
 * @deprecated A partir de la versión 2.0, utilizar la función calcularPerimetroCuadrado en su lugar.
 */
