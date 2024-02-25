<?php
/* 

!          print_r () Prints human-readable information about a variable

!           echo  Output  strings
*/


$a=15;
$b="HELLO";
$arr=["nom"=>"Naciri","prénom"=>"HAmid"];

// echo $arr;
// echo '<pre>';
// print_r($arr);
// echo '</pre>';

foreach($arr as $r){
    echo $r.'<br>';
}

?>