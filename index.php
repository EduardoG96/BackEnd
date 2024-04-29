<?php

//sintaxis PHP
//Imprimir un dato

print("Hola FSJ21")."\n";
print("Llegamos a PHP")."\n";
echo "Hola FSJ21 con ECHO";

//Variables
//$(Inicializar)NOMBREVARIABLE = VALOR

$saludo = "Hola";

$notaNumerica = 85;
$nota = $notaNumerica >= 90 ? "A" : ($notaNumerica >= 80 ? "B" : ($notaNumerica >= 70 ? "C" : ($notaNumerica >= 60 ? "D" : "F")));
echo "La nota correspondiente a: $notaNumerica es: $nota";


//Funciones
//Funcion void
function HelloWorld(){
    echo ("Print");
}

//Devuelve valor
function Sumar ($numero1, $numero2){
    return $numero1 + $numero2;
}
//HelloWorld();
Sumar(3,5);

//Funcion flecha
$funcioncita = fn($nombre) => $nombre;
$funcioncita ("Jairo");

//Estructuras Repetitivas
//For

for($i = 1; $i <= 5; $i++)
    echo $i;

//While
$o = 0;

while ($o < 5){
    echo $o++;
}

$o = 0;
do{
    echo $o++;
}
while($o >0 && $o < 5);

//Foreach

//Arrays
//Declaracion corta de arrays
$arraycito = [1,2,3];

//Foreach
//Retornar la suma de todos los valores del array 
// Imprimir los valores de un array
//Ejemplo1
$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as $numero) {
    echo $numero;
}

//Ejemplo2

$suma = 0;

foreach($arraycito as $i){
    $suma += $numero;
}
echo "la suma es: ".$suma;

//Declaracion a travez de constructore de array
$arrayzote = array(1,2,3);

for ($i = 0; $i < count($arrayzote); $i++){
    $arrayzote[$i];
}

//Tomar el largo de un array 
count($arrayzote);

//Metodos de arrays

//Ingresar datos en un array prexistente
//JS array.push(1)
array_push($arrayzote, 4,5,6);
//Imprimir arrays
print_r($arrayzote);

//Extraer el ultimo dato (eliminar)
$datoEliminado = array_pop($arrayzote);
print_r($arrayzote);
print($datoEliminado);

//Reto 1: Ordenar un array numerico y revertirlo
$arrayNum = [9,1575,40,-512,24];

// Ordenar el array en orden ascendente
sort($arrayNum);

// Revertir el orden del array
$miArrayRevertido = array_reverse($arrayNum);

// Mostrar el array original, el array ordenado y el array revertido
echo "Array original: ";
print_r($arrayNum);

echo "Array revertido: ";
print_r($miArrayRevertido);

/*Reto #2 
Crear una funcion que dado un array de números enteros y una función de comparación personalizada (par o impar), 
// cuenta cuántos elementos del array cumplen la condición definida por la función.
*/

// Función para contar elementos que cumplen con una condición


function contarElementos($array, $funcionComparacion) {
    $contador = 0;
    foreach ($array as $elemento) {
        if ($funcionComparacion($elemento)) {
            $contador++;
        }
    }
    return $contador;
}

// Función de comparación para números pares
function esPar($numero) {
    return $numero % 2 == 0;
}

// Función de comparación para números impares
function esImpar($numero) {
    return $numero % 2 != 0;
}

// Array de números
$numeros = array(-9, 1, 3, 5, 7, 9, 8);

// Contar números pares
echo "Cantidad de números pares: " . contarElementos($numeros, 'esPar') . "\n";

// Cont ar números impares
echo "Cantidad de números impares: " . contarElementos($numeros, 'esImpar') . "\n";


/*
Enunciado 1:
 Escribe una función llamada paresSumaObjetivo que reciba dos argumentos: un array de
 números enteros $nums y un número objetivo $target. La función debe devolver un array de
 arrays, donde cada subarray representa un par de números en $nums cuya suma es igual a
 $target

  Input:
 Un array de números enteros $nums.
 Un número entero $target.

 Output:
 Un array de arrays, donde cada subarray representa un par de números en $nums cuya
 suma es igual a $target
 */

  
    /*
    Output esperado:
    [
    [2, 5],
    [3, 4]
    ]
    */
     







?>

