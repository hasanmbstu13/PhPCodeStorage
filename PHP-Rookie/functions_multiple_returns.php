<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions: Multiple Returns</title>
</head>
<body>
	<?php 

		function add_subt($val1, $val2)
		{
			$add = $val1 + $val2;
			$subt = $val1 - $val2;
			$multiply = $val1 * $val2;
			return array($add,$subt,$multiply);
		}

		$result_array = add_subt(10,5);

		echo "Add: " . $result_array[0] . "<br />";
		echo "Subt: " .$result_array[1]  . "<br/>";
		echo "Multiply: " .$result_array[2]  . "<br/>";

		list($add_result, $subt_result,$multiply) = add_subt(20,7);//list is the powerful tool to pack a variable and immediately unpack the variable.
		
		echo "Add: " . $add_result . "<br />";
		echo "Subt: " . $subt_result . "<br />";
		echo "Multiply: " . $multiply . "<br />";
	 ?>

<!-- 	 <pre>
	<?php 
		print_r($result_array);
	 ?>
</pre> -->
</body>
</html>