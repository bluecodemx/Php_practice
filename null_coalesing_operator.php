<?php
// // practice Null
// $data = [];
// $action =$data ["action"] ?? "nothing";
// echo ($action);


// exercise Null Coalesing
$alamat = [
    "alamat" => "jl.cidurian"
];
$Action = $alamat ["alamat"] ?? "Isi Alamat Anda";
echo $Action;
