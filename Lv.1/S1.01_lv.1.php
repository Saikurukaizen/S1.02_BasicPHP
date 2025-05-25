<?php
declare(strict_types=1);

//EJ.1

const FULL_NAME = "Marc Sanchez";

echo FULL_NAME;

//EJ.2

$numero = 6;
echo $numero;
$nDouble = 8.5;
echo $nDouble;
$float = 3.57;
echo $float;
$boolean = true;
echo $boolean;

$holaMundo = "Hola Mundo";
$helloMaj = strtoupper($holaMundo);
echo $helloMaj;

$lengthString = strlen($holaMundo);
echo $lengthString;
echo mb_strlen($holaMundo, 'UTF-8');

echo strrev($holaMundo);

$php = "Bienvenido al curso de Fullstack PHP";
echo $holaMundo . " " . $php;

//EJ.3

$x = 1;
$y = 2;

$n= 1.3;
$m =2.5;

$suma = $x + $y;
echo $suma;
$suma2 = $n + $m;
echo $suma2;

$resta = $x - $y;
echo $resta;
$resta2 = $n - $m;
echo $resta2;

$multi = $x * $y;
echo $multi;
$multi2 = $n * $m;
echo $multi2;

$div = $x / $y;
echo $div;
$div2 = $n / $m;
echo $div2;

$sumaTotal = $x + $y + $n + $m;
echo $sumaTotal;

$nums = [$x, $y, $n, $m];
while($nums){
    echo $x * 2;
    echo $y * 2;
    echo $n * 2;
    echo $m * 2;
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

//EJ.4

function contar($in, $fn, $con = 1){
    for($i = $in; $i <= $fn; $i += $con){
        echo $i . " ";
    }
}

Contar(5,1);
Contar(10,1); 
Contar(20,2);
Contar(20, 5, 3);

function Results($nota){
    if($nota >= 0.60){
        echo "Ets primera Divisió";
    } 
    elseif($nota >= 0.45){
        echo "Ets segona Divisio";
    }
    elseif($nota >= 0.33){
        echo "Ets Tercera Divisió";
    } 
    elseif($nota < 0.33){
        echo "Per reprovar";
    }
    else {
        echo "No es pot calcular la nota";
    }
}

Results(0.60);
Results(0.45);
Results(0.33);
Results(0.15);

function isBitten(){
    $finger = rand(0,1);
    if($finger == 1){
        echo "Charlie m'ha mossegat el dit!";
    }
    else{
        echo "Charlie no m'ha mossegat!";
    }
}

?>