<?php
declare(strict_types=1);

//EJ.1

define('FULL_NAME', "Marc Sanchez");

echo FULL_NAME;

//EJ.2

$numero = 6;
echo $numero . PHP_EOL;
$nDouble = 8.5;
echo $nDouble . PHP_EOL;
$float = 3.57;
echo $float . PHP_EOL;
$boolean = true;
echo $boolean . PHP_EOL;

$holaMundo = "Hola Mundo";
$helloMaj = strtoupper($holaMundo);
echo $helloMaj . PHP_EOL;

$lengthString = strlen($holaMundo);
echo $lengthString . PHP_EOL;
echo mb_strlen($holaMundo, 'UTF-8') . PHP_EOL;

echo strrev($holaMundo) . PHP_EOL;

$php = "Bienvenido al curso de Fullstack PHP";
echo $holaMundo . " " . $php . PHP_EOL;

//EJ.3

$x = 1;
$y = 2;

$n= 1.3;
$m =2.5;

$suma = $x + $y;
echo $suma . PHP_EOL;
$suma2 = $n + $m;
echo $suma2 . PHP_EOL;

$resta = $x - $y;
echo $resta . PHP_EOL;
$resta2 = $n - $m;
echo $resta2 . PHP_EOL;

$multi = $x * $y;
echo $multi . PHP_EOL;
$multi2 = $n * $m;
echo $multi2 . PHP_EOL;

$div = $x / $y;
echo $div . PHP_EOL;
$div2 = $n / $m;
echo $div2 . PHP_EOL;

$sumaTotal = $x + $y + $n + $m;
echo $sumaTotal . PHP_EOL;

$nums = [$x, $y, $n, $m];
foreach($nums as $num){
    echo $num * 2 . PHP_EOL;
}

function calculadora($n1, $n2, $op): string|float{
    switch($op){
        case '+':
            return $n1 + $n2;
        case '-':
            return $n1 - $n2;
        case '*':
            return $n1 * $n2;
        case '/':
            return $n1 / $n2;
        case $n2 == 0:
            return "No se puede dividir entre 0";
        default:
            return "Operación no válida";
    }
}

calculadora(7, 14, '*') . PHP_EOL;

//EJ.4

function contar($in = 1, $fn = 10): void{
    for($i = 1; $i <= $fn; $i += $in){
        echo $i . " " . PHP_EOL;
    }
}

contar(5,1);
contar(10,1);
contar(20,2);
contar(20, 5, 3);

function calificar($nota): void{
    if($nota >= 0.60){
        echo "Ets primera Divisió" . PHP_EOL;
    } 
    elseif($nota >= 0.45){
        echo "Ets segona Divisio" . PHP_EOL;
    }
    elseif($nota >= 0.33){
        echo "Ets Tercera Divisió" . PHP_EOL;
    } 
    elseif($nota < 0.33){
        echo "Per reprovar" . PHP_EOL;
    }
    else {
        echo "No es pot calcular la nota" . PHP_EOL;
    }
}

calificar(0.60) . PHP_EOL;
calificar(0.45) . PHP_EOL;
calificar(0.33) . PHP_EOL;
calificar(0.15) . PHP_EOL;

function isBitten(): void{
    $finger = rand(0,1);
    if($finger == 1){
        echo "Charlie m'ha mossegat el dit!" . PHP_EOL;
    }
    else{
        echo "Charlie no m'ha mossegat!" . PHP_EOL;
    }
}

isBitten() . PHP_EOL;

?>