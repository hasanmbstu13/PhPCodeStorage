<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays</title>
</head>
<body>
	<?php $mixed = array(6,"fox","dog",array("x","y","z")); ?>
	<?php echo $mixed[2]; ?><br/>
	<?php //echo $mixed[3]; ?><br/>
	<?php //echo $mixed; ?><br/>
	
	<pre>
		<?php print_r($mixed);//print_r is a nice way for debugging ?>
	</pre>
	<?php echo $mixed[3][1]; ?><br/>
</body>
</html>