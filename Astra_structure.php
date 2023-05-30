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

//Start Script Bio data cashier
$bio_cashier =[
    "no_account" => 2270,
    "cashier" => [
        "pgw_01" => [
            "id" => 224,
            "Name" => "Michael",
             "Shift_Time" => "Night",
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
//start bio cashier Script array echo
$id=$bio_cashier["cashier"]["pgw_01"]["id"];
$pgw_01 =$bio_cashier["cashier"]["pgw_01"]["Name"];
$Shift_Time =$bio_cashier["cashier"]["pgw_01"]["Shift_Time"];
echo $id, "\t";
echo $pgw_01, "\t","\t";
echo $Shift_Time, "\n", "\n";

//List Item Buyer
//Start Script list item client
$list_item = [
    "frst_item" => ["Knalpot",2,"type2204"],
    "scnd_item" => ["Oli Yamaha",3,"type44056"]
];
// Memanggil elemen-elemen array
$firstItem = $list_item["frst_item"];
$secondItem = $list_item["scnd_item"];

// Memanggil nilai dari elemen-elemen array
$nameFirstItem = $list_item["frst_item"][0];
$quantityFirstItem = $list_item["frst_item"][1];


// Menampilkan nilai dari elemen-elemen array
echo $nameFirstItem,"\t"; // Output: Knalpot
echo $quantityFirstItem,"\t","\t";//output quntity frst_item



