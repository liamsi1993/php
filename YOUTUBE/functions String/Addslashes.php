<?php 
/* 
*String/concatenation
*The addslashes() function returns a string with backslashes in front of predefined characters:
    
    ? single quote (')
    ? double quote (")
    ? backslash (\)
    ? NULL

!we used always to prepare a string for storage in a database and database queries.

*/

$name='Samir';
$data="what's your name :"."Saida";
$data2=addslashes($data);
echo $data2;
$data3=stripslashes($data2);
echo $data3;
?>