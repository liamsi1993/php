<?php

// $name="Mouad";


// function showData(&$n){
//     $n="YaSSINNNNNNNNNe";
//     echo "my name is ".$n;
// }

// showData($name);
// echo '<br>'.$name;

$data=[
    ['name'=>"Said",'gender'=>'male','state'=>'accepted'],
    ['name'=>"Samir",'gender'=>'male','state'=>'accepted'],
    ['name'=>"Khadija",'gender'=>'female','state'=>'accepted'],
    ['name'=>"Med",'gender'=>'male','state'=>'accepted'],
];


foreach($data as &$d){
    if($d['gender']=="female"){
        $d['state']="NOTACCEPTED";
    }

    echo $d['name'].' '.$d['gender'].'  '.$d['state'].'<br>';
   

}

echo '<pre>';
print_r($data);
echo '</pre>';
?>