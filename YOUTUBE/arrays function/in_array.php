<?php

/* 
in_array( mixed $needle , array $haystack [, bool $strict = FALSE ] )

*/

$array_indexed=['amine','amine','amine','amine','fatima','ahmed','ismail','adam','amine'];

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

echo '<pre>';
print_r(array_column($array_multidimentionnel,'nom'));
echo '</pre>';
// var_dump(in_array("a",$array_indexed));
// if(in_array("aya",$array_indexed)){
//     echo "amine is connected";
// }else{
//     echo "please try again";
// }

var_dump(in_array("med",array_column($array_multidimentionnel,'nom')));


if(in_array("amine",array_column($array_multidimentionnel,'nom'))){
    echo 'med is admin';
}


// var_dump(in_array("amine",$array_associative));

// if(in_array('samir',$array_associative)){
//     echo "amine is connected";
// }else{
//     echo 'please try again';
// }



?>