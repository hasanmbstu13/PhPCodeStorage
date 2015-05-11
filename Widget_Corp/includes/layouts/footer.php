<div id="footer">Copyright 2007, Widget Corp</div>
</body>
</html>
<?php 
 	global $connection;
 	
	if ($connection) {
		mysqli_close($connection);
	}	
?> 