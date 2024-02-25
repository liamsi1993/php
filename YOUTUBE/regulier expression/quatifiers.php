<?php

/* 
a{2}               exactly 2 of a
a{2,}               2 a or more
a{1,10}             between 1 and 10 of a
a?                  zero or one
a+                  one or more
a*                  zero or more of a


*/


$string="+212765625412";
$pattern="/^(\+\d{1,3})((\s?|-))(\d{9})$/";

echo preg_match($pattern,$string);

?>