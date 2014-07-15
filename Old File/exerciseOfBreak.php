<?php

/* 
 * Break execution
 * Written by Mainul Hasan
 */

$number = 75;

for($count = 1; $count <= 10; $count++)
{
    if($number > 300)
    {
        break;
    }
    
    echo $number. "<br />";
    $number+= 75;
}

?>

