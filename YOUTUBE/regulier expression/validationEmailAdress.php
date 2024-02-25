


<?php

/* 
gmail|yahoo|outlook|aol
com|net|ru|org|ma

$email="med125@gmailp.com";

*/


$email="med1599@.fr";
$pattern="/^(\w+@(gmail|outlook|aol|yahoo)\.(com|net|ru|org|ma))$/";

if(preg_match($pattern,$email)==1){
    echo "votre adress ".$email." est acceptée";
}else{
    echo "votre adress ".$email."  n'est pas acceptée";
}



?>