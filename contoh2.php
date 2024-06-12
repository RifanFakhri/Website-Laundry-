<?php

// function perkenalan(){
//     echo "assalamualaikum, ";
//     echo "Perkenalkan nama saya ardianta <br/>";
//     echo "senang berkenalan dengan anda <br/>";
// }

// perkenalan();

// echo "<hr>";

// perkenalan();

//---------------------------------------------//

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan nama saya ".$nama." <br/>";
    echo "senang berkenalan dengan anda <br/>";
}

perkenalan("muhardian", "hi");

echo "<hr>";

$saya = "indry";
$ucapanSalam = "selamat pagi";

perkenalan($saya);

?>