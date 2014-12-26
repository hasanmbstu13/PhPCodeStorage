<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Processing</title>
</head>
<body>
	<pre>
		<?php 
			//print_r($_POST);
		 ?>
	</pre>
	<?php 
		if (isset($_POST["userName"])) {
			$username = $_POST["userName"];
		}else{
			$username = "";
		}
		if (isset($_POST["password"])) {
			$password = $_POST["password"];
		}else{
			$password = "";
		}	
		echo "{$username}: {$password}";
	 ?>
</body>
</html>