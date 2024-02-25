<?php

/* 
? The strlen() function returns the length of a string.
? str_word_count() function counts the number of words in a string.

*/
$string="A b c";
// echo "<h1>".strlen($string)."</h1>";
// echo str_word_count($string);
echo "<pre>";
print_r(str_word_count($string,2));
echo "</pre>";
?>