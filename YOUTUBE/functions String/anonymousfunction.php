<?php

// $output=function(){return 5+6;};

// echo $output();

function add($v){
    return $v+1;
}

$ar=[0,2,3,15,80,100];

$step=100;

echo '<pre>';
print_r($ar);
// print_r(array_map('addOne',$ar));
print_r(array_map(function($v) use($step){return $v*$v;},$ar));
echo '</pre>';



?>