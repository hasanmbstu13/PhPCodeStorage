<?php 

$file = 'filetest.txt';
if($handle = fopen($file,'r')) { // read
	$content = fread($handle,6); // each character is 1 byte usually true for typical english
	fclose($handle); 
}

echo $content;
echo "<br />";
echo nl2br($content);
echo "<hr />";

//use filesize() to read the whole file
$file = 'filetest.txt';
if($handle = fopen($file, 'r')) {
	$content = fread($handle, filesize($file));
	fclose($handle);
}

echo nl2br($content);
echo "<hr />";

// file_get_contents(): shortcut for fopen/fread/fcloe
// companion to shortcut file_put_contents()
$content = file_get_contents($file);
echo $content;
echo "<hr />";

// incremental reading
$file = 'filetest.txt';
$content = "";
if($handle = fopen($file, 'r')) { // read
	while(!feof($handle)) { // feof() end of file
		$content .= fgets($handle); // fgets() read one line from the file
	}
fclose($handle);
}
echo $content;
echo "<hr />";

?>