<?php

// $string="www.youtube.com;www.google.com";
// $pattern="/youtube/";

// // echo preg_match_all($pattern,$string);

// if(preg_match($pattern,$string)==1){
// echo preg_replace($pattern,"facebook",$string);
// }
// echo preg_match_all($pattern,$string);

// if(preg_match_all($pattern,$string,$arr)){
//     // echo $arr[0];
//     echo "<pre>";
//     print_r($arr);
//     echo "</pre>";
// }
// echo preg_match($pattern,$string);

// if(preg_match($pattern,$string,$arr)==1){
//     // echo $arr[0];
//     echo "<pre>";
//     print_r($arr);
//     echo "</pre>";
// }


$name="ISMAIL";
$pattern="/ismail/";


if(preg_match($pattern,$name)==1){
    echo $name;
}


?>