<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Floating Point Numbers</title>
</head>
<body>
<?php $float = 3.14; ?>
Round:	<?php echo round($float,1);//round the number with 1 decimel number after number ?><br/>
Ceiling:<?php echo ceil($float);//ceiling always round up ?><br/>
Foor:	<?php echo floor($float);//floor always round low ?><br/>
<br/>

<?php $interger = 3; ?>

<?php echo "Is {$interger} interger? " .is_int($interger); ?><br/>
<?php echo "Is {$float} interger? " .is_int($float); ?><br/>

<br/>

<?php echo "Is {$interger} float? " .is_float($interger); ?><br/>
<?php echo "Is {$float} float? " .is_float($float); ?><br/>

<br/>

<?php echo "Is {$interger} numeric? " .is_numeric($interger); ?><br/>
<?php echo "Is {$float} numeric? " .is_numeric($float); ?><br/>


</body>
</html>