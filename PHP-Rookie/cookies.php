<?php 
	$expire = time() + (60*60*24*7);
	setcookie('userdata[name]', 'Mainul Hasan', $expire, '', '', TRUE);
	setcookie('userdata[age]', '29', $expire, '', '', TRUE);
	setcookie('userdata[gender]', 'Male', $expire, '', '', TRUE);
 ?>

<?php 
		//Remember: Setting cookies must be before *any* HTML output
	   //           unless output buffering is turned on.

		$name = "test";
		$value = 45;
		$expire = time() + (60*60*24*7);
		//setcookie($name, $value, $expire);

		//Unsetting Cookie
		// Wrong way
		// -unset($_COODIE["user_id"]);

		// Right ways
		// setcookie($name);
		// setcookie($name, null);
		// setcookie($name,$value,(time()-3600))

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
</head>
<body>
	<!-- <pre>
		<?php print_r($_COOKIE);?>
	</pre> -->
	<?php 
		$test = $_COOKIE["test"];
		echo $test;
	 ?>
</body>
</html>