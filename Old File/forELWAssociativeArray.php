<?php

/* 
 A program will print position of array with value
 Written by Mainul Hasan
 */
$associativeArray = array("1st" => "My House", "2nd" => "My Car", "3rd" => "My Lab");

foreach ($associativeArray as $key => $someVar)
{
    echo $key.":".$someVar."<br />";
}
?>

