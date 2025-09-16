<?php
// ==========================================
// 1. Problema de la serie Fibonacci
// ==========================================

// Función que genera los primeros n términos de la serie Fibonacci
function generarFibonacci($n) {
    $serie = [];

    // Primeros dos términos de la serie
    $a = 0;
    $b = 1;

    for ($i = 0; $i < $n; $i++) {
        // Agregar el número actual a la serie
        $serie[] = $a;

        // Calcular el siguiente número como la suma de los dos anteriores
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

    return $serie;
}

// Ejemplo: Generar los primeros 10 números Fibonacci
echo "Serie Fibonacci (10 términos):\n";
print_r(generarFibonacci(10));


// ==========================================
// 2. Problema de números primos
// ==========================================

// Función que determina si un número es primo
function esPrimo($num) {
    // Los números menores o iguales a 1 no son primos
    if ($num <= 1) {
        return false;
    }

    // Verificar divisibilidad desde 2 hasta la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // Si es divisible por otro número, no es primo
        }
    }

    return true; // Si no tuvo divisores, es primo
}

// Ejemplo: Verificar si 7 es primo
echo "\n¿7 es primo? " . (esPrimo(7) ? "Sí" : "No") . "\n";
echo "¿10 es primo? " . (esPrimo(10) ? "Sí" : "No") . "\n";


// ==========================================
// 3. Problema de Palíndromos
// ==========================================

// Función que determina si una cadena es palíndromo
function esPalindromo($texto) {
    // Convertir a minúsculas y eliminar espacios
    $texto = strtolower(str_replace(' ', '', $texto));

    // Comparar el texto original con su versión invertida
    return $texto === strrev($texto);
}

// Ejemplo: Verificar palíndromos
echo "\n¿'radar' es palíndromo? " . (esPalindromo("radar") ? "Sí" : "No") . "\n";
echo "¿'Hola' es palíndromo? " . (esPalindromo("Hola") ? "Sí" : "No") . "\n";
?>
