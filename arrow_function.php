<?php
$firstname = "yusuf";
$lastname = "farizan";
$arrowFunction = function () use ($firstname){
    echo "Hello $firstname".PHP_EOL;
};

$arrowFunction();