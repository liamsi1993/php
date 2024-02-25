<?php

// $numberPhone="+966 761578320";


/* +966
espace 
(7|6)
(4556)
espace 
(4556) */


$phoneNumber="0661578313";
$pattern="/^(\+\d{1,3}(\s|-)(6|7)(\d{4})(\s|-)(\d{4}))$/";

if(preg_match($pattern,$phoneNumber)==1){
    echo "ce num".$phoneNumber."est acceptée";
}else{
    echo "ce num".$phoneNumber." n'est pas acceptée";

}

?>