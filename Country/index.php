<?php require_once("db_connection.php"); ?>
<?php require_once("country_functions.php"); ?>
<?php $division_set = get_division_name(); ?>
<?php while($division = mysqli_fetch_assoc($division_set)){ ?>
<?php $district_array = find_district_for_division($division["id"]);   ?>
<?php 
$total_district = mysqli_num_rows($district_array);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table Structure</title>
</head>
<body>
	<table border="1" style="border-color:Aqua;height=100%;width=100%">
		<tr>
			<th colspan="3">Division</th>
			<th>District</th>
			<th>Upazila</th>
		</tr>
		<?php $division_set = get_division_name(); ?>
		<?php while($division = mysqli_fetch_assoc($division_set)){ ?>
		<?php $district_array = find_district_for_division($division["id"]);   ?>
		<?php $total_district = mysqli_num_rows($district_array); ?>
		<tr>
			<td rowspan="<?php echo $total_district+1;?>" colspan="3"><?php echo $division["name"]; ?></td>
	<!-- 		<td style="border:none;"></td>
			<td style="border:none;"></td> -->
			<!-- <td></td> -->
			<!-- <td></td> -->
		</tr>
		<?php while($district = mysqli_fetch_assoc($district_array)){ ?>
		<tr>
			<td><?php echo $district["name"]; ?></td>
			<td>
				<?php $upazila_array = find_upazila_for_district($district["id"]); ?>
				<?php while($upazila = mysqli_fetch_assoc($upazila_array)){ ?>
				<?php echo $upazila["name"]."<br>"; ?>
				<?php } ?>
			</td>
		</tr>
		<?php } ?>
		<?php } ?>
	</table>
</body>
</html>