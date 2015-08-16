<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>References as Function Return Values</title>
</head>
<body>
	<?php 
		function &ref_return(){
			global $a;
			$a = $a * 2;
			return $a;	
		}
		$a = 10;
		$b =& ref_return(); //for returning value from a function & use both in before function declaration and also in function calling

		echo "a: {$a} / b: {$b}<br />";
		$b = 30;
		echo "a: {$a} / b: {$b}<br />";

		function &increment(){
			static $var = 0;
			$var++;
			return $var;
		}
		$a =& increment(); // var increments
		increment();	   // var increments
		$a++;			  //  var increments
		increment();      //  var increments
		echo "a: {$a}<br />"; //4 ($a incremented with $var)

	 ?>
</body>
</html>