<?php

/* 

function();
function(param);
output=function()
echo output;

myfun="function";
echo myfun();

return
array_foreach


*/

// $name="ANASS";
// function showMessage($param1=""){
//     echo "<h1>Hello i am ".$param1."</h1>";
// }


// showMessage($name);
// showMessage('Aya');
// $output=showMessage($name);

// echo $output;

// $string="showMessage";

// echo $string("MED");

$ar=["Adam","Naciri",40,"isAdmin"];
$ar2=["nom"=>'Ghita','prénom'=>'Boulmal',"age"=>40,'isAdmin'=>1];


// function showTable($param=[]){
// if($param!==null && is_array($param) && count($param)>0){
//     foreach($param as $p){
//         echo $p."<br>";
//     }
// }else if(is_string($param) || is_numeric($param)){
//     echo $param;
// }else{
//     echo "<h1>please check the parametre</h1>";
// }
// }



// showTable("Amine");




$ar3=[
    ["nom"=>'Ghita','prénom'=>'Boulmal',"age"=>40,'isAdmin'=>1],
    ["nom"=>'Aya','prénom'=>'Boulmal',"age"=>15,'isAdmin'=>0],
    ["nom"=>'Hicham','prénom'=>'Boulmal',"age"=>40,'isAdmin'=>0],
    ["nom"=>'Samir','prénom'=>'Boulmal',"age"=>40,'isAdmin'=>0],
    ["nom"=>'FAtima','prénom'=>'Boulmal',"age"=>40,'isAdmin'=>0],
    ["nom"=>'Omar','prénom'=>'Boulmal',"age"=>40,'isAdmin'=>0],
];





function showArr($ar=[]){
    if(is_array($ar)){
        foreach($ar as $r){
            echo $r['nom'].'<br>';
            echo $r['prénom'].'<br>';
            echo $r['age'].'<br><br><br>';
        }
    }
}




showArr($ar3);



?>