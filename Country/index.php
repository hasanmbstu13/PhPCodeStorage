<?php require_once("db_connection.php"); ?>
<?php require_once("functions.php"); ?>

<?php 
	$division_set = get_division_name();
	$district_set = get_all_districts();
	$upazila_set  = get_all_upazilas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
</head>
<body>
	<table style="width: 100%">
		<tr>
			<th>Divisions</th>
			<th colspan="3">Districts</th>
			<th>Upazila</th>
		</tr>
		<?php while($division = mysqli_fetch_assoc($division_set)){ ?>
		<tr>
			<td><?php echo $division["name"]; ?></td>
			<td>
			<?php //while($district = mysqli_fetch_assoc($district_set)){ ?>
			<!-- <pre><?php //print_r($district);exit; ?></pre> -->
			<?php //if($division["id"] == $district["division_id"]){ ?>
			<?php $district_array = find_district_for_division($division["id"]); 
				// print_r($district_array);exit;
			?>	
			<?php while($district_name = mysqli_fetch_assoc($district_array)){ ?>		    
			<?php //print_r($district_name);exit;
			echo $district_name["name"]; ?> <br>
				<?php //} ?>	
				<?php// } ?>	
			<?php } ?>			
			</td>
		</tr>
	<?php  } ?>
	</table>
</body>
</html>