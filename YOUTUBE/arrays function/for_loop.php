<?php


// for($x=0;$x<=10;$x++){
//     if($x==6){continue;}
//     echo $x.'<br>';
// }


$arr=['amine','Amraoui',"isAdmin",12,"men"];

// echo '<pre>';
// print_r($arr);
// echo '</pre>';


// // echo count($arr);


for($i=0;$i<count($arr);$i++){
    if($arr[$i]==='isAdmin'){break;}
    echo $arr[$i]." ";
}
?>