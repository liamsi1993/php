<?php
// $url="https://www.facebook.com";

$patern="/^((((https?):\/\/)|(www\.))([a-z]+(\.(com|ma|fr|org))))$/";
// $url="https://google.com";
$url="www.google.eu";

if(preg_match($patern,$url)==1){
    echo "votre site est acceptée<br>".$url;
}else{
    echo "votre site n'est pas acceptée <br>".$url;
}

?>