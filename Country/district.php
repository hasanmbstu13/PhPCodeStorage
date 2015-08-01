<?php require_once("db_connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php
	if(isset($_POST['submit'])){
		$division_id = $_POST["division_name"];
		$district_name = mysql_prep($_POST["district_name"]);

		$query =  "INSERT INTO districts (";
		$query .= "division_id,name";
		$query .= ") VALUES (";
		$query .= "{$division_id},'{$district_name}'";
		$query .= ")";	
		$result = mysqli_query($connection, $query);

		if($result){
			header("Location: index.php");
			exit;
		} else {
			echo "District creation failed";
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
		<h2>Create District</h2>
		<form action="district.php" method="post">
			<p>Division:
				<select name="division_name">
				  <?php
				  	$division_set = get_division_name();
					while($division = mysqli_fetch_assoc($division_set)){
						echo "<option value=".$division["id"].">".$division["name"]."</option>";						
					}
				  ?>
				</select>
			</p>
			<p>Add District Name With Division:
			  <input type="text" name="district_name" value="" />
			</p>
			<input type="submit" name="submit" value="Create District" />
		</form>
	</div>
</body>
</html>