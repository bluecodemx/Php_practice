<?php
$names =["Muhamamad","Yusuf"];
foreach ($names as $name=> $values){
    echo "Hello $name".PHP_EOL;
}

// for each dengan key
$person= [
    "No_id"=> "1",
    "Nama_Lengkap" => "Muhammad Yusuf Farizan", 
];

foreach ($person as $key => $value){
    echo "$key : $value".PHP_EOL;
}

// latihan for reach

$data_karyawan = [
    "No_Karyawan1" => "2234",
    "Nama Karyawan1" => "Askar Kauni",
    "Posisi1" => "Staff", 

    "No_Karyawan2" => "2234",
    "Nama Karyawan2" => "Askar Kauni",
    "Posisi2" => "Staff", 
];

foreach ($data_karyawan as $key => $value ){
    echo" $key : $value".PHP_EOL;
};
