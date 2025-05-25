<?php
declare(strict_types=1);

//LA CRIBA D'ERATOSTENES
define("NUM_MIN", 1);
define("NUM_MAX", 100);

function esPrimo(int $n): bool{
    $con = 0;
    for($i = 1; $i <= $n; $i++){
        if($n % $i == 0){
            $con++;
        }
    }
    return($con == 2) ? true : false;
}

for($i = NUM_MIN; $i < NUM_MAX; $i++){
    if(esPrimo($i)){
        echo 'El número '.$i. 'es primo<br>';
    }
    else{
        echo 'El número '.$i. ' no es primo<br>';
    }
}

?>