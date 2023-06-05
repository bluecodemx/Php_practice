<?php
// switch Exercise
// $gender = "Girl";
// switch ($gender){
//     case "Boy":{
//         echo "Hello Bro";
//     }
//     break;
//     case "Girl":{
//         echo "Hey Girl";
//     }
//     break;
// }

//ternary Operator Practice 1
$gender ="Perempuan";
$hi =$gender== "Pria" ? "HiBro":"Hi Girl";

echo ($hi), PHP_EOL;


// ternary Operator Exercise 2
$Nilai = 7;
$Hasil = $Nilai =="8" ? "Anda Lulus Dengan Nilai Terbaik" : "Anda Lulus" ;
echo ($Hasil), PHP_EOL;

// ternary Operator Practice
$total_Donasi = 1000;
$total = $total_Donasi == 4000 ? "Terimakasih banget" : "Terimakasih" ;
echo ($total);
