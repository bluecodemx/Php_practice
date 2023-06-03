<?php
// start Declaration Head Script Matkul
define ("kampus", "STMIK Muhammadiyah Jakarta");
$Semester= ["1","2","3","4","5"];
$matkul=[ "Filsafat","Pancasila","Matematika" ];
$line ="-----------------------------------";
// finish Declaration Head Script Matkul
// start Daftar Nilai Matkul

$total=0;
$daily_Point = 100;
$absensi_Point = 70;
$Total= $daily_Point+$absensi_Point;
$result=$Total /(2) ;

// finish Daftar Nilai Kampus
// echo Head Script Matkul
echo kampus,"\n";
echo "Mata Kuliah: ";
echo ($matkul[0]),"\n";
echo $line, "\n";
echo "Semester: ";
echo ($Semester[0]),"\n";
echo $line,"\n";
// 

