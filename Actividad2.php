<?php
//Ejercicio #1: Problema de la serie Fibonacci:

    function generarFibonacci($num) {
    // Set it to the number of elements you want in the Fibonacci Series
        $nextNumber = 1;
        $previousNumber = 0;
     
            print("Fibonacci Series of ".$num." numbers: ");
                for ($i = 1; $i <= $num; $i++)
        {
            print($previousNumber . ", ");
            // On each iteration, we are assigning second number
            // to the first number and assigning the sum of last two
            // numbers to the second number
      
            $sum = $previousNumber + $nextNumber;
            $previousNumber = $nextNumber;
            $nextNumber = $sum;
        }
}

generarFibonacci(10);


// Ejercicio #2: Revisa si un numero entero es primo o no.
$numero = 25;

if(esPrimo($numero)){
    echo 'Es primo';
}else{
    echo 'No es primo';
}

function esPrimo($numero)
{
    if(!is_numeric($numero))
        //Comprobamos si es un número valido, ya que sino nos dara un error 500. 
        return false;
    
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            
            // No es primo
            return false;

        }
    }
    // Es primo 
    return true;
}

//Ejercio #3, Problema de Palíndromos:
//Implementa una función llamada esPalindromo que determine si una cadena de texto dada es un palíndromo. 
//- Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones.

function esPalindromo($cadena) {
    // Convertimos la cadena a minúsculas y eliminamos los espacios en blanco y los signos de puntuación
    $cadena = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $cadena));
    
    // Obtenemos la longitud de la cadena
    $longitud = strlen($cadena);
    
    // Iteramos sobre la mitad de la cadena para comparar caracteres desde ambos extremos
    for ($i = 0; $i < $longitud / 2; $i++) {
        // Si los caracteres en posiciones opuestas no coinciden, no es un palíndromo
        if ($cadena[$i] != $cadena[$longitud - $i - 1]) {
            return false;
        }
    }
    
    // Si el bucle termina sin retornar falso, la cadena es un palíndromo
    return true;
}

// Ejemplo de uso
$cadena1 = '"Anita lava la tina"';

if (esPalindromo($cadena1)) {
    echo "$cadena1 es un palíndromo";
} else {
    echo "$cadena1 no es un palíndromo";
}

?>