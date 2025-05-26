<?php
declare(strict_types=1);

//EJ.1

const FULL_NAME = "Marc Sanchez";

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
while($nums){
    echo $x * 2 . PHP_EOL;
    echo $y * 2 . PHP_EOL;
    echo $n * 2 . PHP_EOL;
    echo $m * 2 . PHP_EOL;
    break;
}

function calculadora($n1, $n2, $op){
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

Calculadora(7, 14, '*') . PHP_EOL;

//EJ.4

function contar($in, $fn, $con = 1){
    for($i = $in; $i <= $fn; $i += $con){
        echo $i . " ";
    }
}

Contar(5,1) . PHP_EOL;
Contar(10,1) . PHP_EOL;
Contar(20,2) . PHP_EOL;
Contar(20, 5, 3) . PHP_EOL;

function Results($nota){
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

Results(0.60) . PHP_EOL;
Results(0.45) . PHP_EOL;
Results(0.33) . PHP_EOL;
Results(0.15) . PHP_EOL;

function isBitten(){
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