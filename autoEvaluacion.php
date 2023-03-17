<?php

//ejercicio 1

//variables y constantes 

$nombre = "";
$booleano1 = 0;
$booleano2 = 1;
const pi = 3.1416;
$tau = pi*2;
const miNombre = "Daniel";
const miNumeroFav = 7;

//booleanos

$variable = $booleano1 and $booleano2;
$variableNegada = !$booleano1;
$variable2 = ($booleano1 or $booleano2) and ($booleano1 or (!$booleano1 and !$booleano2));
$variableOr = $booleano1 or $booleano2;
$variableNumerica = 3;
$variable3 = $booleano1 and ($tau/2 == pi) or ($variableNumerica >= miNumeroFav);
$variable4 =  6 !== 9;
$variable5 = ($variableNumerica > 0) or ($variableNumerica < miNumeroFav * $tau);

//operadores

$dos = 2;
$dos + 5;
$resta = miNumeroFav - $variableNumerica;
$suma = miNumeroFav + $variableNumerica;
$multiplicacion = miNumeroFav * $variableNumerica;
$division  = miNumeroFav / $variableNumerica;
$restoDivision = miNumeroFav % $variableNumerica;
$restoDivision2 = 143 % 140;
$restoDivision3 = 25 % 5;

//bucles

$contarHasta10_2 = 0;

for ($contarHasta10_2 = 0; $contarHasta10_2 < 20; $contarHasta10_2++) { 
    if ($contarHasta10_2 >= 10) {
         break;
    }
} //he puesto 20 para que se vea que el break funciona

echo $contarHasta10_2 . "<br>";

$postI = 0;
$postJ = 0;

for ($postJ = 0; $postJ <= 11; $postJ++) { 
    $postI2 = $postI + $postJ;
}

echo $postI2 . "<br>";

$sumaPares = 0;

for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 0) {
    $sumaPares = $i + $sumaPares;
   }
}

echo $sumaPares . "<br>";

$contarHasta10 = 0;

while ($contarHasta10 <= 9):
    $contarHasta10++;
endwhile;

echo $contarHasta10 . "<br>";

// $preI = 0; 
// $preJ = 0;

// ejercicio se repite

$sumaImpares = 0;

for ($j = 0; $j <= 10; $j++) {
    if ($j % 2 != 0) {
    $sumaImpares = $j + $sumaImpares;
   }
}

echo $sumaImpares . "<br>";

?>