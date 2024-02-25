<?php
/* 

[artc]
[^artc]
[a-z]
[^a-z]
[^A-Z]
[A-Z]
[a-zA-Z]
[^a-zA-Z]
[0-9]
[^0-9]
[a-zA-Z0-9]
[^a-zA-Z0-9]
*/

$var='..àç_àçè-è-(';
$p="/[^a-zA-Z0-9]/";
echo preg_match($p,$var);
if(preg_match($p,$var)==1){
    echo "<br>var is accepted";
}else{
    echo 'the var is not accepted';
}
?>