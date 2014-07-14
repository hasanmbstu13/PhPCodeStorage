<?php

/*
 * progrm will sort the string value
 * Written by Mainul Hasan
 */


$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "<br />";
}
?>
