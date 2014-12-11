<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Constants</title>
</head>
<body>
	
	<?php 
		$max_width = 980;

		define("MAX_WIDTH", 980);
		echo MAX_WIDTH;
	 ?>

	 <br>

	 <?php //can't change the value
	 	// MAX_WIDTH = MAX_WIDTH + 1;
	 	// echo MAX_WIDTH;
	 ?>

	 <br>

	 <?php //can't even redefine it
	 define("MAX_WIDTH", 981);
	 echo MAX_WIDTH;
	  ?>
</body>
</html>