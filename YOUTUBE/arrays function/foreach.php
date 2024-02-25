<?php
$ar=['amine','said','khalid','moha','momo'];

$ar2=['nom'=>"Said","prénom"=>"elBouazaoui","age"=>15,"genre"=>"femme","isAdmin"=>1];

foreach($ar2 as $key=>&$v){
    if($key==="genre"){$v="homme";}
    echo $v." ";
}
// foreach($ar2 as $key=>$v){
//     if($key==='isAdmin'){continue;}
//     echo $key.":".$v.'<br>';
// }



// foreach($ar as $k=>$v){
//     if($v=='said'){break;}
//     echo ($k+1).":".$v."<br>";
// }

echo '<pre>';
print_r($ar2);
echo '</pre>';


?>