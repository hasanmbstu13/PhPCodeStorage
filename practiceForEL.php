<?php

/* 
 *Write an array which contain some value using for each loop and then print the value
 * Written by Mainul Hasan
 */

$stringArray = array("Mainul","Mehedi","Mahmudul","Jahid");
$numberArray = array(1,2,3,4);

foreach($stringArray as $newStringArray)
{
    echo $newStringArray."<br />";
}

foreach ($numberArray as $key => $newNumberArray)
{
    echo $key.":".$newNumberArray."<br />";
}

echo $newNumberArray;

?>

