<?php
// start Declaration Head Script Matkul
define ("kampus", "STMIK Muhammadiyah Jakarta");
$Semester= ["1","2","3","4","5"];
$matkul=[ "Filsafat","Pancasila","Matematika" ];
$line ="-----------------------------------";
// finish Declaration Head Script Matkul
// start Daftar Nilai Matkul
// finish Daftar Nilai Kampus
// echo Head Script Matkul
    echo kampus,"\n";
    echo "Mata Kuliah: ";
    echo ($matkul[0]),PHP_EOL;
    echo $line, PHP_EOL;
    echo "Semester: ";
    echo ($Semester[0]),PHP_EOL;
    echo $line,PHP_EOL;
// finish Script Head 
// start Script Nilai
    $nilai_Absen = 80; //nilai Absen
    $nilai_Ujian = 90; //nilai Ujian
    $nilai_Praktek = 80; //nilai Prakter
            $total_Absen = $nilai_Absen  ; //total Absen
            $total_Ujian = $nilai_Ujian ; //total Nilai Ujian
            $total_Praktek = $nilai_Praktek; //total Nilai Praktek
                            $TOTAL = ($total_Absen + $total_Ujian + $total_Praktek) /(3); //total Keseluruhan


// if Statement TOTAL NILAI MATA KULIAH
if ($TOTAL >= 80){
    echo "Hasil: ". "Selamat Anda Lulus Dengan Nilai Sempurna";
}
elseif ($TOTAL >= 60){
    echo "Selamat Anda Lulus";
}
elseif ($TOTAL >=50) {
    echo "Mohon Maaf Anda Belum Lulus";
}
