<?php
//initialize 2 variables

$a= '10';
$b= '34';
//print the variables 

echo 'a = '.$a.' '.'b= '.$b; // a= 10 b= 34
//operate bitwise xor operataion between the varables

$a ^= $b;
$b ^= $a;
$a ^= $b;

echo '</br>';
//now print the variables again and notice that the values are cuccessfully swapped
echo 'a = '.$a.' '.'b= '.$b; // a= 34 b = 10 
?>
