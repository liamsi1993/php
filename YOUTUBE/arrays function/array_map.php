<?php


// function add($n){
//     return $n**$n;
// }

// // echo add(5);

// $a=[1,2,10,20,50];

// array_map("add",$a);

// echo '<pre>';
// print_r($a);
// print_r(array_map("add",$a));
// echo '</pre>';


function toUpper($s){
    return ucfirst($s);
}

// echo toUpper('ahmed');

$arr=["amine","khaoula","souad","laila","mohammed"];

echo '<pre>';
print_r($arr);
print_r(array_map("toUpper",$arr));
echo '</pre>';




?>