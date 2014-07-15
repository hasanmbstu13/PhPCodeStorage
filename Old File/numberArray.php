<?php

/* 
A program will print the value of a number array 
written by Mainul Hasan
 */

$numberArray = array(100,1100,200,400,900);

$count = 0;
$sum = 0;

while($count <= 4)
{
    if($sum > 1500)
    {
        break;
    }
   
    $sum = $sum + $numberArray[$count];
    $count++;
}

echo $sum;

?>


