<?php

/* 
Logical Operators

and	Called Logical AND operator. If both the operands are true then condition becomes true.	
or	Called Logical OR Operator. If any of the two operands are non zero then condition becomes true.
and	Called Logical AND operator. If both the operands are non zero then condition becomes true.	
||	Called Logical OR Operator. If any of the two operands are non zero then condition becomes true.	
!	Called Logical NOT Operator. Use to reverses the logical state of its operand. If a condition is true then Logical NOT operator will make false.	

*/

// echo var_dump(1==1);
// echo var_dump(2==3);

// if( (1==1) && (2==3)){
//     echo "trueee";
// }
// echo var_dump(true Xor true); /* true */
// echo var_dump(true Xor false); /* false */
// echo var_dump(false Xor true); /* false */
// echo var_dump(false Xor false); /* false */


// echo var_dump(!!("opps"));
// echo var_dump((bool)(""));



$a=null;
$b=null;


if(($a!=null) || ($b!=null)){
    echo "a and b  are not null";
    echo var_dump(($a!=null) || ($b!=null));
}
echo var_dump(($a!=null) || ($b!=null));


$ab=["amine","amine","amine","amine","amine","amine","amine","amine"];
$ab[0]="ismail";
$ab[1]="amino";
$ab[3]="aymen";
array_push($ab,"pushhhhh");
array_push($ab,"pushhhhh");
echo var_dump($ab);








?>