<?php

/* 
*The switch statement is used to perform different actions based on different conditions.

*L'instruction switch est utilisée pour effectuer différentes actions en fonction de différentes conditions.
*/

$stateUser="INTERN";

switch($stateUser){
    default        :echo " state not found"."<br>";break;
    case "ADMIN"   :echo "(admin)I can CREATE and READ and UPDATE and DELETE and DROP"."<br>";break;
    case "USER"    :echo "(user)I can READ and CREATE and UPDATE"."<br>";break;
    case "INTERN"  :echo "(intern) I can CREATE and READ"."<br>";
    case "CLIENT"  :echo "(client) i can READ"."<br>";
}


?>