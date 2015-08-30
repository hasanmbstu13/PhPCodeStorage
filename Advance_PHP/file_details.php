<?php  

$filename = 'filetest.txt';

echo filesize($filename) . "<br />"; // in bytes

// filemtime: last modified (changed content)
// filectime: last changed (changed content or metadata)
// fileatime: last accessed (any read/change)

echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br />";
echo strftime('%m/%d/%Y %H:%M', filectime($filename)) . "<br />";
echo strftime('%m/%d/%Y %H:%M', fileatime($filename)) . "<br />";

// touch($filename); // touch — Sets access and modification time of file

echo strftime('%m/%d/%Y %H:%M', filemtime($filename)) . "<br />";
echo strftime('%m/%d/%Y %H:%M', filectime($filename)) . "<br />";
echo strftime('%m/%d/%Y %H:%M', fileatime($filename)) . "<br />";

$path_parts = pathinfo(__FILE__);
echo $path_parts['dirname'] . "<br />";  // " D:\xampp\htdocs\PhPCodeStorage\Advance_PHP"
echo $path_parts['basename'] . "<br />"; // "file_details.php"
echo $path_parts['filename'] . "<br />"; // "file_details"
echo $path_parts['extension'] . "<br />";// "php"

?>