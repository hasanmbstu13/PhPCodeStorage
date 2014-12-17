<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Debugging and TroubleShooting</title>
</head>
<body>
	<?php 
		$number = 99;
		$string = "Bug?";
		$array = array(1=> "Homepage", 2=> "About Us", 3=>"Services");
		//var_dump($array);
		//var_dump($number); //var_dump return variable type and value
		//var_dump($string);

	 ?>

	 <pre>
	 	<?php 
	 		var_dump($array);
	 	 ?>
	 </pre>

	 <br>
<pre>
	<?php 
		print_r(get_defined_vars());//return the array of defined variables.
	 ?>
</pre>  
	
<!-- 	<?php 
 	print_r(get_defined_vars());
 ?> -->

</body>
</html>