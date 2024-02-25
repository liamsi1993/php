<?php
/* 
!Check whether a variable is empty. Also check whether the variable is set/declared:

?               0
?               0.0
?               "0"
?               ""
?               NULL
?               FALSE
?               array()


*/
include_once('inc/head.php');
$v=[];

if(empty($v)){
    var_dump(empty($v));
    echo '<span class="display-4 text-info"> v is empty</span>';
}else{
    echo '<span class="display-4 text-warning"> v is not empty</span>';

}

?>