<?php
$link = mysqli_connect("localhost", "root", "", "library");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT * from books")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("Result set has %d rows.\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

for ($i=1; $i <=$row_cnt-4; $i++) { 
		$result = mysqli_query("select books_no from books where id = $i");
		while ($row = mysqli_fetch_array($result))
		{
			$original_value =  $row['books_no'];
			//$an_array = str_split($value);

			//$value1 = stristr(haystack, needle)($value);

			$value = substr($original_value, 0,10);
			$value1 = substr($original_value,10,2);
			$value2 = substr($original_value, 12,2);

			//str_replace(search, replace, subject)
			//$original_value = mysqli_query("select books_no from books where id = 1");
			$concat = mysqli_query("update books 
									set books_no = concat(concat($value,0),concat($value1,0),$value2) 
									where id = $i");
			//print_r($row);
			echo $value2;
			//echo "<br />";
		}

	}


/* close connection */
mysqli_close($link);
?>