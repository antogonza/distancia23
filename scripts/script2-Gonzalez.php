<?php
/**
 * Este script contiene una clase llamada Calculadora con dos métodos para realizar operaciones matemáticas.
 * Autor: Antonio González
 * Versión: 1.0
 */

/**
 * Clase Calculadora para realizar operaciones matemáticas.
 *
 * @since 1.0
 */
class Calculadora
{
    /**
     * Suma dos números.
     *
     * @param float $num1 El primer número a sumar.
     * @param float $num2 El segundo número a sumar.
     * @return float La suma de los dos números.
     * @since 1.0
     * @version 2.0
     */
    public function sumar($num1, $num2)
    {
        return $num1 + $num2;
    }

    /**
     * Resta dos números.
     *
     * @param float $num1 El primer número.
     * @param float $num2 El segundo número a restar.
     * @return float La resta de los dos números.
     * @todo Añadir un nuevo parámetro para que funcione con tres números
     * @since 1.0
     */
    public function restar($num1, $num2)
    {
        return $num1 - $num2;
    }

    // Indica que los métodos de la clase son para uso interno
    /**
     * @internal
     */
}
