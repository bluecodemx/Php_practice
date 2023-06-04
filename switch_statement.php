<?php
// exercise If Expression
// $nilai = "D";
// if ($nilai=="A" || $nilai =="B"){
//     echo "Anda Lulus Dengan Nilai Yang Sempurna";
// }
// elseif ($nilai== "C+" || $nilai== "C"){
//     echo "Anda Lulus";
// }
// else {
//     echo "Anda Tidak Lulus";
// }

// switch Statemen Practice
// switch ($nilai){
//     case "A": 
//         echo "Anda Lulus Dengan Nilai Yang Baik";
//     break;
//     case "B":
//         case "C": 
//             echo "Anda Lulus";
//         break;
//         default :
//         echo "Anda Belum Lulus";

// }
// practice Switch
$nilai = "C";
switch ($nilai) {
    case "A": {
        echo "Anda Lulus Dengan Nilai Yang Terbaik";
    }
    break;
    case "B": {
        echo "Anda Lulus";
    }
    break;
    default: {
        echo "Anda Belum Lulus";
    }
    break;
}