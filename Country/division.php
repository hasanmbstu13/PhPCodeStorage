<?php require_once("db_connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php
	if(isset($_POST['submit'])){
		$division_name = mysql_prep($_POST["division_name"]);

		$query =  "INSERT INTO divisions (";
		$query .= "name";
		$query .= ") VALUES (";
		$query .= "'{$division_name}'";
		$query .= ")";	
		$result = mysqli_query($connection, $query);

		if($result){
			header("Location: district.php");
			exit;
		} else {
			echo "Division creation failed";
		}
	}else {

	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Division Table</title>
</head>
<body>
	<div>
		<h2>Create Division</h2>
		<form action="division.php" method="post">
			<p>Division Name:
			  <input type="text" name="division_name" value="" />
			</p>
			<input type="submit" name="submit" value="Create Division" />
		</form>
	</div>
</body>
</html>