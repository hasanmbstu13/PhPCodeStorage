<?php 

// Like fopen/fread/fclose:
// opendir()
// readdir()
// closedir()

$dir = "."; // current directory
if(is_dir($dir)) {
	if($dir_handle = opendir($dir)) {
		while($filename = readdir($dir_handle)) {
			echo "filename: {$filename}<br />";
		}
		// use rewinddir($dir_handle) to start over // List once again files in images directory
		closedir($dir_handle);
	}
}

echo "<hr />";

//scamdir(): reads all filenmaes into an array
if(is_dir($dir)) {
	$dir_array = scandir($dir);
	foreach ($dir_array as $file) {
		if(stripos($file, '.') > 0) { // stripos - Find the position of the first occurrence of "." inside the string
			echo "filename: {$file}<br />";
		}
	}
}
// not much shorter, but maybe less complicated
// makes things like reverse order much easier
?>