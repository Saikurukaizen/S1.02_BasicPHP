<?php
declare(strict_types=1);

define("COSTE_BASE", 10);
define("COSTE_ADICIONAL", 5);

function llamada(int $duracion): int{
    if($duracion <=3){
        return COSTE_BASE;
    }
    else{
        $minAdicional = $duracion -3;
        return COSTE_BASE + (COSTE_ADICIONAL * $minAdicional);
    }
}

echo llamada(2) . PHP_EOL;
echo llamada(5) . PHP_EOL;
echo llamada(10) . PHP_EOL;

function calcularSubtotal($dulces, $cantidad): float{
    $productos = [
        'chocolate' => 1,
        'chicles' => 0.50,
        'caramelos' => 1.50
    ];
    return $productos[$dulces] * $cantidad;   
}

$subTotalChocolate = calcularSubtotal('chocolate', 2);
$subTotalChicles = calcularSubtotal('chicles', 1);
$subTotalCaramelos = calcularSubtotal('caramelos', 1);

$total = $subTotalChocolate + $subTotalChicles + $subTotalCaramelos;
echo 'El total de la compra es: '.$total.'€' . PHP_EOL;



?>