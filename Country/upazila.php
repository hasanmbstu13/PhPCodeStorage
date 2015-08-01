<?php require_once("db_connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php
	if(isset($_POST['submit'])){
		$district_id = $_POST["district_id"];
		$upazila_name = mysql_prep($_POST["upazila_name"]);

		$query =  "INSERT INTO upazilas (";
		$query .= "district_id,name";
		$query .= ") VALUES (";
		$query .= "{$district_id},'{$upazila_name}'";
		$query .= ")";	
		$result = mysqli_query($connection, $query);

		if($result){
			header("Location: index.php");
			exit;
		} else {
			echo "Upazila creation failed";
		}
	}else {

	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upazila Table</title>
</head>
<body>
	<div>
		<h2>Create Upazila</h2>
		<form action="upazila.php" method="post">
			<p>District:
				<select name="district_id">
				  <?php
				  	$districts = get_all_districts();
					while($district = mysqli_fetch_assoc($districts)){
						echo "<option value=".$district["id"].">".$district["name"]."</option>";						
					}
				  ?>
				</select>
			</p>
			<p>Add Upazila Name With District:
			  <input type="text" name="upazila_name" value="" />
			</p>
			<input type="submit" name="submit" value="Create Upazila" />
		</form>
	</div>
</body>
</html>