<?php


/* 

*/

$array_indexed=['amine','amine','amine','amine','fatima','ahmed','ismail','adam','amine'];
$array_associative=["nom"=>"amine","age"=>12,"lastname"=>"mooooo","nom"=>"amine","nom"=>"amine"];


// echo "<pre>";
// print_r($array_indexed);
// echo "</pre>";
// echo array_search('adam444',$array_indexed);
// var_dump((bool)(array_search('ad',$array_indexed)));


echo "<pre>";
print_r($array_associative);
echo "</pre>";

// echo array_search("amine",$array_associative);

// var_dump((bool)array_search("amine",$array_associative));

if(!!array_search("amine",$array_associative)){
    echo "amine is logging";
}





?>