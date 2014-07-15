<?php

/* 
 * Program will print the value of a multidimensional array 
 * Written by Mainul Hasan
 */

$arr3D = array("mohammad" =>  array
    ("physics"=>23,
     "maths"=>45,
     "chemistry"=>48
    ),
    "qadir" => array
   (
    "physics"=>30,
    "maths"=>45,
    "chemistry"=>26
    ),
 );

/* Accessing multi-dimensional array values */
echo "Marks for mohammad in physics:";
echo $arr3D['mohammad']['physics']."<br />";
echo "Marks for qadir in Maths:";
echo $arr3D['qadir']['maths']."<br />";

