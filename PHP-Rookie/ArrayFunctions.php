<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Functions</title>
</head>
<body>

<!-- 	<?php $myArray = ['1' => 12,['name' => 'Mainul'],3,34,6]; ?>
	<?php //php automatically convert a string into integer value like in this php will convert '12' into integer number ?>
	<pre>
		<?php print_r($myArray); ?>
	</pre>
	<?php echo $myArray[2]['name']; ?> -->

<?php $numbers = [1,3,4,5,45,2,345]; ?>

Count: 	   <?php echo count($numbers); ?><br/>
Max value: <?php echo max($numbers); ?><br/>
Min value: <?php echo min($numbers); ?><br/>

<br/>

<pre>
Sort: 			<?php sort($numbers);  print_r($numbers); //Sort()-->Sort the array in ascending order?><br/>
Reverse sort: 	<?php rsort($numbers); print_r($numbers); //Rsort()-->Sort the array in descending order?><br/>
</pre>
<br/>

</body>
</html>