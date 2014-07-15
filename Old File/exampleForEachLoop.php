<?php

/* 
 * program example of for each loop
 * written by Mainul Hasan
 */
/* foreach example 1: value only */

$initialArray = array(1, 2, 3, 17);

foreach ($initialArray as $currentArray) {
    echo "Current value of \$initialArray: $currentArray.\n";
}

/* foreach example 2: value (with its manual access notation printed for illustration) */

$initialArray1 = array(1, 2, 3, 17);

$count = 0; /* for illustrative purposes only */

foreach ($initialArray1 as $currentArray) {
    echo "<br />"."\$a[$count] => $currentArray.\n";
    $count++;
}

?>

