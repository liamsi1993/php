<?php
/* 
An array is a data structure that stores one or more similar type of values in a single value

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays

*/


// $ar=array("amine",0,true,12);
// $ar=["amine",0,true,12];
// $ar[]="Agadir";
// array_push($ar,"Rabat");
// $ar[1]="Said";

// $ar=["firstName"=>"ismail","lastName"=>"mouaoui","age"=>1];
// $ar["isAdmin"]=0;
// $ar["firstName"]="SAIDOOOOO";



$ar=[
    ["firstName"=>"ismail","lastName"=>"mouaoui","age"=>12],
    ["firstName"=>"amine","lastName"=>"amraoui","age"=>10],
    ["firstName"=>"yassine","lastName"=>"benjaloune","age"=>31],
    ["firstName"=>"souad","lastName"=>"naciri","age"=>80]
];
$ar[1]["firstName"]="INCONU";

$ar[]=["firstName"=>"NEWWWWWWWWW","lastName"=>"mouaoui","age"=>12];
echo '<pre>';
print_r($ar);
echo '</pre>';


?>