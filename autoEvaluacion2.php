<?php

//arrays

$arrayVacio = [];
$arrayNumeros = [0,1,2,3,4,5,6,7,8,9];
$arrayNumerosPares = [0,2,4,6,8];
$arrayBidimensional = [[0, 1, 2], ['a', 'b', 'c']];
$arrayNumerosNeg = [0,-1,-2,-3,-4,-5,-6,-7,-8,-9];

$usuario = [
    "nombre" => "Daniel",
    "apellido" => "Borja",
    "edad" => 23,
];

$loGuardoTodo = ['hola', 'que', 23, 42.33,'tal'];
$arrayDeArrays = [[756, 'nombre'], [225, 'apellido'], [298, 'direccion']];

// funciones 

function suma($num1,$num2){
    $resultado = $num1 + $num2;
    echo $resultado . "<br>";
}

suma(2,2);

function potenciacion($num1,$num2){
    $resultado = $num1 ** $num2;
    echo $resultado . "<br>";
}

potenciacion(3,2);

// function separarPalabras()
// {
//     $resultado = $num1 ** $num2;
//     echo $resultado . "<br>";
// }

// separarPalabras(3,2);

function  repetirString($string="", $numero){
    for ($i = 0; $i < $numero; $i++) { 
        echo $string . "<br>";
    }
    
}

repetirString("hola",6);

function esPrimo($numPrimo){
    if ($numPrimo % $numPrimo == 0) {
        return true;
       }else{
        return false;
       }
}

?>