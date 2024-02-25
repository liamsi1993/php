<?php

$var='MOROCCO';
// $var=["kk"];
// unset($var);



function returnVar($var){
    if(gettype($var)==="array"){
        foreach($var as $v){
            return $v.'<br>';
        }
    }else{
        return $var ?? "NOT DEFINED";
    }
}

$reslt=returnVar($var1) ?? "NOT DEFINED";

echo returnVar($var);
// returnVar(["kkk"]);

?>