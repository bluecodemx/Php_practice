<?php
//first Anonymous Function
$sayHello = function (string $name){
    echo "Hello $name" .PHP_EOL;
} ;
$sayHello ("yusuf");
$sayHello ("ABDUL");

// ANONYMUS ARGUMENT FUNCTION
function sayGoodbye (string $name, $filter){
   $finalName = $filter ($name);
   echo "Good Bye $finalName"; 
};

sayGoodbye("Eko", function (string $name){
    return strtoupper ($name). PHP_EOL;
});

// VARIABLE OUT ACCESS
$firstname = "Muhammad";
$lastname = "Yusuf";
$finalname = function () use ($firstname,$lastname){
    echo "Hello $firstname $lastname".PHP_EOL;
};
$finalname();