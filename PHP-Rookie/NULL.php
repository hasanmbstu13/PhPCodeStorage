<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NULL</title>
</head>
<body>
	<?php 
	   $var1 = null;
	   $var2 = "";
	 ?>
	 var1 null? <?php echo is_null($var1); ?><br/>
	 var2 null? <?php echo is_null($var2); ?><br/>
	 var3 null? <?php echo is_null($var3); ?><br/>
	 <br/>
	 var1 is set? <?php echo isset($var1); ?><br/>
	 var2 is set? <?php echo isset($var2); ?><br/>
	 var3 is set? <?php echo isset($var3); ?><br/>
</body>
</html>