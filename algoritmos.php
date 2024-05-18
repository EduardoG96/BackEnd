<?php
// Que es un algoritmo?
// Una instrucción o varios instrucciones
// Una serie de pasos lógicos para resolver un problema
// NO tienen que ser ambiguos y tienen que ser finitos


// BubbleSort
// Comparaciones de 2 en 2 

function bubbleSort($arr){
    $length = count($arr);

    if($length <= 1) return "Que gracioso sos"; 

    for($i = 0; $i < $length; $i++){
        for ($j = 0; $j < $length-1; $j++){
            if($arr[$j] > $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}
print_r(bubbleSort([8,10,5,7,21,1,15]));


// Insertion Sort



?>