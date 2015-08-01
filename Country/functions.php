<?php
	function redirect_to($new_location){
		header("Location: " . $new_location);
		exit;
	}

	function mysql_prep($string){ 
		global $connection;

		$escaped_string = mysqli_real_escape_string($connection,$string);
		return $escaped_string;
	}

	function confirm_query($result_set){ 
		global $connection;

		if(!$result_set){
			die("Database query failed:".mysqli_error($connection). __LINE__ .' in ' .__FILE__ );  
		}
	}

	function get_division_name()
	{
		global $connection;

		$query =  "SELECT * ";
		$query .= "FROM divisions ";
		$query .= "ORDER BY name";
		$divisions = mysqli_query($connection,$query);
		confirm_query($divisions);
		return $divisions;
	}

	function get_all_districts()
	{
		global $connection;

		$query =  "SELECT * ";
		$query .= "FROM districts ";
		$query .= "ORDER BY name";
		$districts = mysqli_query($connection,$query);
		confirm_query($districts);
		return $districts;
	}
?>