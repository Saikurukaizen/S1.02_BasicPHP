<?php
declare(strict_types=1);

//LA CRIBA D'ERATOSTENES
define("NUM_MIN", 1);
define("NUM_MAX", 100);

function esPrimo(int $n): bool{
    if($n < 2) return false;
    if($n === 2) return true;
    if($n % 2 === 0) return false;
    for($i = 3; $i <= sqrt($n); $i += 2){
        if($n % $i == 0) return false
    }
    return true;
}

for($i = NUM_MIN; $i <= NUM_MAX; $i++){
    if(esPrimo($i)){
        echo 'El número '.$i.' es primo' . PHP_EOL;
    }
    else{
        echo 'El número '.$i.' no es primo' . PHP_EOL;
    }
}

?>
