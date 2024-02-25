<?php

/*

The explode() function breaks a string into an array.

explode(separator,string,limit)
*/

$string="hello friend my name is omar.
hello friend my name is omar.
hello friend my name is omar.
hello friend my name is omar.
hello friend my name is omar.";
echo $string;
echo "<pre>";
print_r(explode(".",$string,3));
echo "</pre>";


?>