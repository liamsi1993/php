<?php

$array = [
    'phone'  => 'Samsang',
    'laptop' => 'Carbon X1',
    'car'    => 'Tesla',
];

echo '<pre>';
print_r(array_values($array));
echo '</pre>';

echo array_values($array)[0];

?>