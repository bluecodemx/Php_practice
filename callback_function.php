<?php
function sayhello (string $name, callable $filter){
    $finalname= call_user_func($filter, $name);{
        echo "hello $finalname".PHP_EOL;
    } 
} 

sayhello ("Yusuf", "strtoupper");


// Product Detail
function productDetail (string $productName, string $filter){
    $detailProduct= call_user_func($filter,$productName);
    echo $detailProduct;
}
productDetail("masako", "strtoupper");

