<?php 

$file = 'filetest.txt';
if($handle = fopen($file, 'w+')) {
	fwrite($handle, "123\n456\n789");

	$pos = ftell($handle); //ftell returns the current position of cursor or pointer in the file after typing 789 in the file.

	fseek($handle, $pos-6); // fseek seeks the new location for us. move back 6 characters.
	fwrite($handle,"abcdef");

	rewind($handle); //back to the beginning of the file.
	fwrite($handle, "xyz");

	fclose($handle);
}

// Beware, it will OVERTYPE!!!
// NOTE: a and a+ modes will not let you move the pointer

?>