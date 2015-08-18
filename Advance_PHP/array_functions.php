<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Functions</title>
</head>
<body>
	<?php 
		$numbers = array(1,2,3,4,5,6);
		echo "<pre>";
		print_r($numbers);
		echo "</pre>";
		echo "<br /><br />";

		// shifts first element out of an array
		// and returns it.
		$a = array_shift($numbers);
		echo "a:".$a."<br />";
		echo "<pre>";
		print_r($numbers);
		echo "</pre>";
		echo "<br /><br />";

		// prepends an element to an array,
		// returns the element count.
		$b = array_unshift($numbers, 'first');
		echo "b:".$b."<br />";
		print_r($numbers);
		echo "<br /><br />";

		//pops last element out of an array
		//and returns it.
		$a = array_pop($numbers);
		echo "a:".$a."<br />";
		print_r($numbers);
		echo "<br /><br />";

		//pushes an element onto the end of an array,
		//returns the element count.
		$b = array_push($numbers, 'last');
		echo "b:".$b."<br />";
		print_r($numbers);
		echo "<br /><br />";
	 ?>
</body>
</html>