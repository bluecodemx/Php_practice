<?php
// IF Else Practice
$nilai=75;
$absen=80;
if ($nilai>=80 && $absen >=100){
    echo "Anda Lulus Dengan Nilai Sempurna" .PHP_EOL;
}
elseif($nilai>=70 && $absen >=70 ) {
    echo "Anda Lulus".PHP_EOL;
}
else {
    echo "Maaf Anda Belum Lulus ";
}