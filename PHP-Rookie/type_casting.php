<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Type Juggling and Type Casting</title>
</head>
<body>
	Type Juggling<br/>
	<?php $count = "2 peoples"; ?>
	Type: <?php echo gettype($count); ?><br/>

	<?php $count += 3; //data type automatically changes from string to integer?>
	Type: <?php echo gettype($count); ?><br>

	<?php $cats = "I have" . $count . "cats.";////data type automatically changes from integer to string ?>
	Cats: <?php echo gettype($cats); ?><br>
	<br>

	<?php //Its not a best practice to depend on type juggling ?>
	
	Type Casting <br>
	<?php settype($count, "integer") ?>
	Count: <?php echo gettype($count); ?>

</body>
</html>