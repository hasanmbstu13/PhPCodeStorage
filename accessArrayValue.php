<?php

/* 
 * Program will show how to access array value with index
 * Written by Mainul Hasan
 */

$stringArray = array("item-1","item-2","item-3");

echo "First Value = ".$stringArray[0];
echo "Second Value = ".$stringArray[1];

$counter =0;
$arrayCounter = array();

foreach($stringArray as $array)
{
   echo "<br />"."Array value=".$array;
   $arrayCounter[$counter] = $array;
   $counter++;
    ////echo "<br /"."Second Value = ".$anotherStringArray[1];
}

for($i=0;$i<$counter;$i++)
{
    echo "<br />"."Array value:".$arrayCounter[$i];
    if($arrayCounter[$i]=="item-1")
    {
        echo "<br />"."The desired value is:".$arrayCounter[$i];
        break;
    }
}
 

?>

