<?php 
	//1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "secretpassword";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	//Test if connection occured
	if (mysqli_connect_errno()) { //determines error no; errono() is equal to the error no or either is 0
		die("Databse connection failed: " .
			mysqli_connect_error() .//determine actual error //retruns empty string if there is not a problem
			"(" . mysqli_connect_errno() . ")" //determine error no.
		);
	}
 ?>
 <?php 
 	//2. Perform database query
 	$query  =  "SELECT * "; 
 	$query .= "FROM subjects ";
 	$query .= "WHERE visible = 1 ";
 	$query .= "ORDER BY positon ASC";

 	$result = mysqli_query($connection, $query);
 	//Test if there was a query error
 	if(!$result){
 			die("Database query failed.");
 		}
  ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Databases</title>
 </head>
 <body>
 	<?php 
 		//3. Use returned data (if any)
 		while($row = mysqli_fetch_row($result))
 		{
 			//output data from each row
 			var_dump($row);
 			echo "<hr />";
 		}
 	 ?>
 	 <?php 
 	 	//4. Release returned data
 	 	mysqli_free_result($result);
 	  ?>
 </body>
 </html>

 <?php 
 	// 5. Close database connection
 	mysqli_close($connection);
  ?>