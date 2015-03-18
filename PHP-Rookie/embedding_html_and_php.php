<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Embedding HTML and PHP</title>
</head>
<body>

<!-- 	<?php 
	echo '<b><u>This is a test</u></b>';
	echo '<br/>';
	echo '<a href = "www.google.com">google</a>';
 ?> Embedding html inside php code-->


<!-- <?php 	
	
	$names = array('Mainul', 'Mehedi', 'Mahmudul');

	foreach ($names as $person) {
?>

<b><font color = "red">The name of the person is <?php echo $person; ?></font></b> <br/>

<?php
	}
 ?> Embedding PHP inside HTML-->

<!-- <?php 
 	$color = $_GET['color'];
?>

<b><font color = "<?php echo $color ; ?>">Welcome to the website</font></b> Embedding php into html attribute.-->



</body>
</html>