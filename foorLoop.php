<?php

/* A simple program which print sum of a series of numbers.
   Written by Mainul Hasan */

$start = 0;
$end   = 100;

$sum =  0;

for($start; $start<=$end; $start++)
{
    $sum = $sum + $start; 
}

echo 'The result of summation is:'.$sum."<br />";

?>

