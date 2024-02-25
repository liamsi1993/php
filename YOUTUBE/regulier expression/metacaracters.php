<?php

/* 


|
.
^
$
\s
\S
\w
\W
\d
\D

\b
\B

*/

// $s="bonjour cv yassin";
$s="125";
$p="/\D/";

echo preg_match($p,$s);
?>