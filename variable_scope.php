<?php
// GLOBAL SCOPE
$firstName= "Muhammad";
function sayhello (){
    global $firstName;
    echo  "Hello $firstName"; //error
}
sayhello();