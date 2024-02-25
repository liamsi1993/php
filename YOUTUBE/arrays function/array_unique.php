<?php


/* 
Remove duplicate values from an array:
*/

$array_indexed=['amine','amine','amine','amine','fatima','ahmed','ismail','adam','amine'];
$array_associative=["nom"=>"amine","age"=>12,"age"=>12,"lastname"=>"mooooo","nom"=>"amine","nom"=>"amine","age"=>12];


echo '<pre>';
// print_r(array_unique($array_indexed));
print_r(array_unique($array_associative));
echo '</pre>';


?>