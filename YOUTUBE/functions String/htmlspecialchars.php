<?php
/* 
*htmlspecialchars() function converts some predefined characters to HTML entities
*htmlspecialchars_decode()

!we used when we need to store HTML data in a database .
*/


$link='<a href="http://www.facebook.com">www.facebook.com</a>';

echo var_dump($link)."<br>";
echo var_dump(htmlspecialchars($link));
echo var_dump(htmlspecialchars_decode(htmlspecialchars($link)));

?>