<?php
//initialize 2 variables

$a= 'hello';
$b= 'okay!';
//print 2 variables 
echo 'a = '.$a.' '.'b= '.$b; // a= 10 b= 34
//operate bitwise xor operataion between the 2 varables

$a ^= $b;
$b ^= $a;
$a ^= $b;

echo '</br>';
//now print the variables again and ntice that the values are cuccessfully swapped
echo 'a = '.$a.' '.'b= '.$b; // a= 34 b = 10 
?>
