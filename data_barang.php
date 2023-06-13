<?php
// START FUNCTION STOCK BARANG
function productIdentity (string $noBarang){

// NO BARANG
      for ($nobarang=1; $nobarang<=10; $nobarang++):
            $namaBarang = $noBarang;
            $namaBarang = ["sabun", "Shampo"];
      for ($namaBarang=1; $nobarang <=10; $noBarang ++)
      
     echo "$nobarang". PHP_EOL;
      endfor;

// NAMA BARANG
      $namaBarang = $noBarang;
      $namaBarang = [
            "Kecap Manis", "Kecap Asin", "Sambel Terasi"
      ];
// CODE EXECUTION
 return $namaBarang;
}
productIdentity(1);
