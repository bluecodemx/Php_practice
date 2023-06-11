<?php
// function Return Value
function sum (int $first, int $second){
    return $first + $second;
}

$result = sum (20,20);
echo $result. PHP_EOL;


// if else function
function getSemesterValue (int $value): string
{
 if ($value>=80){
    return "A";  }
 
 if ($value>=70){
    return "B";
 }
 else{
    return "E";
 }
}

$finalResult= getSemesterValue (75);
echo $finalResult . PHP_EOL;

