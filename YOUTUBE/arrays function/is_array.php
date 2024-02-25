<?php


/* 
Check whether a variable is an array or not
vérifier si un variable est un tableau ou non
*/

$array_indexed=['amine','amine','amine','amine','fatima','ahmed','ismail','adam','amine'];
$array_indexed=[];
$array_associative=["nom"=>"amine","age"=>12,"lastname"=>"mooooo","nom"=>"amine","nom"=>"amine"];

$array_multidimentionnel=[
    ["nom"=>"saida","age"=>18,"lastname"=>"mooooo"],
    ["nom"=>"yassine","age"=>31,"lastname"=>"mooooo"],
    ["nom"=>"med","age"=>20,"lastname"=>"mooooo"],
    ["nom"=>"med","age"=>20,"lastname"=>"mooooo"],
    ["nom"=>"yahya","age"=>12,"lastname"=>"mooooo"],
    ["nom"=>"yahya","age"=>12,"lastname"=>"mooooo"],
    ["nom"=>"fatima","age"=>40,"lastname"=>"mooooo"],
    ["nom"=>"saida","age"=>18,"lastname"=>"mooooo"]
];


var_dump(is_array(12));

if(is_array($array_indexed) and count($array_indexed)>0 and $array_indexed!=null){
    echo "we have array";
}else{
    echo "array is null";
}


?>