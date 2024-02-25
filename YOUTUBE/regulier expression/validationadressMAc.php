<?php

// $adressMAC="00:1B:44:11:3A:D5";
$adressMAC="ismail";
$pattern="/^([0-9A-Z][0-9A-Z]:[0-9A-Z][0-9A-Z]:[0-9A-Z][0-9A-Z]:[0-9A-Z][0-9A-Z]:[0-9A-Z][0-9A-Z]:[0-9A-Z][0-9A-Z])$/";

if(preg_match($pattern,$adressMAC)==1){
    echo "c'est une adresse MAC <pre>".$adressMAC."</pre>";
}else{
    echo "entrer une adresse MAC <br><pre>".$adressMAC."</pre>";
}

?>