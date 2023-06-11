<?php
// variable Function sesi 1
function foo (){
    echo "Foo" . PHP_EOL;
}

function ood (){
    echo "Ood".PHP_EOL;
}

$callFunction = "ood";
$callFunction ();

// variable Function
function sayhello (string $name, $filter){
    $finalname = $filter($name);
    echo "Hello $finalname". PHP_EOL;
}

function sampleFunction (string $name):string{
    return "Bapak $name";
}
sayhello ("yusuf", "samplefunction");
sayhello("yusuf", "strtoupper");


