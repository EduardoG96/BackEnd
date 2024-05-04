<?php
/*  Ejercicio #1:   Problema de Lista Invertida:
Escribe un programa que tome un array de números y devuelva una nueva lista que contenga los mismos elementos en orden inverso. */

function ListaInvertida($arrayNum){

// Revertir el orden del array
$miArrayRevertido = array_reverse($arrayNum);
 
// Mostrar el array original, el array ordenado y el array revertido
echo "Array original: ";
print_r($arrayNum);

echo "Array revertido: ";
print_r($miArrayRevertido);
}

 ListaInvertida([10, 9, 8, 7, 6, 5]); 

 /* Ejercicio #2:   Problema de Suma de Números Pares:
Crea un script que sume todos los números pares en un array de números enteros. */

function Sumatoria($array){ 

$suma =0;
foreach ($array as $i) {
    if ($i % 2 == 0){
        $suma += $i; 
    }
}

print "La suma es: $suma \n";
}
Sumatoria([10, 4, 5, 6]);


/* Ejercicio #3: Problema de Frecuencia de Caracteres:
Implementa una función que tome una cadena de texto y devuelva un array asociativo
que muestre la frecuencia de cada carácter en la cadena. */

function frecuenciaCaracteres($cadena) {
    $frecuencia = array();
    $longitud = strlen($cadena);

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $cadena[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia;  
}

$resultado = frecuenciaCaracteres($cadena);

echo "Cadena: " . $cadena . "\n";
echo "Frecuencia de caracteres: \n";
foreach ($resultado as $caracter => $frecuencia) {
    echo "'" . $caracter . "' => " . $frecuencia . "\n";
}

/* Ejercicio #4:   Problema de Bucle Anidado:
Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide. */


function buclesanidados($altura){

for ($i = 0; $i < $altura; $i++) { 
    // Bucle para iterar sobre cada fila de la pirámide
    
    for ($j = 0; $j < $altura - $i - 1; $j++) { // Imprimir espacios en blanco para alinear los asteriscos
        echo " ";
    }
    // Imprimir asteriscos
    for ($j = 0; $j < 2 * $i + 1; $j++) {
        echo "*";
    }
    // Salto de línea para pasar a la siguiente fila
    echo "\n";
    }
}
    buclesanidados(10);
?>
