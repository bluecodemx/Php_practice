<?php

//sTaRT heAd ScRipt
/**
 * Company pROFILE AND oPerational cOmpany nUMBER
 * tHe OpERatIONAL company number Expired in 27 August 2025 
 */

define("cOmpany","Astra_TBK");
define ( "nUmber","001-67/sk/0997");
$lIne = "----------------------------------------------";


//ViEW head
echo (cOmpany),("\n");
echo (nUmber),("\n");
echo $lIne ,("\n");
//Finish head Script

//Variable Start Script Bio data cashier
$bio_cashier =[
    "no_account" => 2270,
    "cashier" => [
        "pgw_01" => [
            "id" => 224,
            "Name" => "Michael",
             "born" => "Jakarta",
        ],
        "pgw_02" => [
            "id" => 225,
            "Name" => "Kurniawan",
             "born" => "Ciputat",
        ],
        "pgw_04" => [
            "id" => 226,
            "Name" => "Syahrul",
             "born" => "Ciputat",
        ]
      

    ]
    
    
];
//Variable finish script bio cashier
//Operation Start Bio_cashier
echo "\t","No_Account: " ;
echo ($bio_cashier["no_account"]) , "\n";
echo $lIne , "\n" ;
