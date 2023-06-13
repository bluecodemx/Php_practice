<?php
// factorial loop
function factorialLoop (int $value):int {
    $total =1; 
    for ($i=1;$i<=$value;$i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(6));

// factorial Recursive
function factorialRecursive (int $value):int {
    if ($value==1){
        return 1;
    }
    else {
        return $value * factorialRecursive($value-1);
    }
}
var_dump(factorialRecursive(4));

// factorial Recursive practice
function productName (int $value){
    if ($value==0){
        echo "selesai".PHP_EOL;
    }
    else {
        echo "loop-$value".PHP_EOL;
        productName($value -1);
    }
}

productName(10);