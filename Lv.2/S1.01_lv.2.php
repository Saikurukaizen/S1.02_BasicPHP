<?php
declare(strict_types=1);

//EJ.1
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

//EJ.2

function calcularSubtotal($dulces, $cantidad): float{
    $productos = [
        'chocolate' => 1,
        'chicles' => 0.50,
        'caramelos' => 1.50
    ];
    return $productos[$dulces] * $cantidad;   
}

$subTotalChocolate = CalcularSubtotal('chocolate', 2);
$subTotalChicles = CalcularSubtotal('chicles', 1);
$subTotalCaramelos = CalcularSubtotal('caramelos', 1);

$total = $subTotalChocolate + $subTotalChicles + $subTotalCaramelos;
echo 'El total de la compra es: '.$total.'€';



?>