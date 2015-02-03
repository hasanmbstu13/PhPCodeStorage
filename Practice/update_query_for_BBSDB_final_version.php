	<?php 

	#TestCase
	#30243799770105
	#50108899772727
	#51365465123221
	#91065665123221
	#51065565023221
	#51065565023001
	#51065565003221


	$link = mysqli_connect("localhost", "root", "", "library");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	if ($result = mysqli_query($link, "SELECT * from books")) {

		/* determine number of rows result set */
		$row_cnt = mysqli_num_rows($result);

		/* close result set */
		mysqli_free_result($result);
	}



	for ($i=1; $i <=$row_cnt-6; $i++) { 

		$result = mysqli_query($link,"select books_no from books where id = $i");
		
		while ($row = mysqli_fetch_array($result))
		{
			$final_value = '0';

			$valueFromDatabase =  $row['books_no'];

			$firstTenDigit = strval(substr($valueFromDatabase,0,10));
			

			$middleTwoDigit = strval(substr($valueFromDatabase,10,2));
			

			$lastTwoDigit = strval(substr($valueFromDatabase, 12,2));

			$insertedValue = 0;
			$insertedValueInString = strval($insertedValue);

			$firstTenDigit.= $insertedValueInString;
			$middleTwoDigit.= $insertedValueInString;

			$final_value.=$firstTenDigit;
			$final_value.=$middleTwoDigit;
			$final_value.=$lastTwoDigit;

			$concat = mysqli_query($link,"update books 
										  set books_no = $final_value 
										  where id = $i");

		}
	}

	mysqli_close($link);

?>