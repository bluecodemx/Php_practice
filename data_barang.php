<?php
// START FUNCTION STOCK BARANG
function stockNumber (int $noBarang){
      for ($nobarang=1; $nobarang<=10; $nobarang++):
            echo "$nobarang.". PHP_EOL;
      endfor;

}

stockNumber(4);