<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

$var1 = 10;
echo $var1;

echo "<br/>";

$var1 = 20;
echo $var1;

echo "<br/>";

//Use the backslash "\" to "escape" special characters 
$stringValue = 'This is a string, isn\'t?';
echo $stringValue;

echo "<br/>";

$greeting = "Hello";
$target = "World";
$phrase = $greeting. " " . $target;
echo "{$phrase}Again";

 ?>
</body>
</html>