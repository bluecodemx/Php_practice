<?php
// function sayhello($name)
// {
//     echo "Hello $name".PHP_EOL;
// };
// sayhello ("budi");
// sayhello ("eko").PHP_EOL;

// // function Argument
// function data ($name="Masukan Nama Anda"){
//     echo "Nama = $name".PHP_EOL;
// }

// data().PHP_EOL;

// // type Declaration integer
// function sum (int $first, int $last){    //function  integer
//     $total= $first + $last;
//     echo "$first + $last = $total".PHP_EOL;
// }

// sum(10,10);
// sum (20,20);
// sum ("100","100");
// sum (true,false);

// variable Leght Argument List
function sumall (...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value; 
    }
    echo "Total ". implode(",", $values)." = $total" .PHP_EOL; 
}

sumall(1,2,3,4,5);