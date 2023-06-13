<?php
function sayhello (string $name, callable $filter){
    $finalname= call_user_func($filter, $name);{
        echo "hello $finalname".PHP_EOL;
    } 
} 

sayhello ("Yusuf", "strtoupper");

// PRODUK DETAIL
function productDetail (string $productName, callable $filter){
    $productDetail = call_user_func($filter,$productName);          //function Product Detail
    echo "Barang $productDetail sedang habis".PHP_EOL;              //echo Function
}
productDetail ("Biskuit Roma","strtoupper");

