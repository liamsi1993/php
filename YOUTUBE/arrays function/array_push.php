<?php

$arr=["tableau",'crayon'];

array_push($arr,'stylo');

$arr1=["username"=>'ismailo',"password"=>"123"];

$arr2=array_merge($arr1,["isAdmin"=>1]);
echo '<pre>';
print_r($arr2);
echo '</pre>';

?>