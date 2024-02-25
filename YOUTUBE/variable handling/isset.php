<?php
/* 
!isset — Determine if a variable is declared and is different than null


*/

include_once('inc/head.php');

$a=null;
$n="123";
if(isset($n)){
    echo '<span class="display-3 text-center text-warning"> a is declared or not null</span>';
}else{
    echo '<span class="display-3 text-center text-danger"> a is not declared or is null</span>';
}

?>

