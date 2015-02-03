<?php 

		$link = mysql_connect("localhost", "root", "");
		mysql_select_db("library", $link);


		$totalRow = mysql_query("SELECT * FROM books", $link);
		$num_rows = mysql_num_rows($totalRow);

		//$result = "select books_no from books;


		
		for ($i=1; $i <=$num_rows; $i++) { 
		$result = mysql_query("select books_no from books where id = $i");
		while ($row = mysql_fetch_array($result))
		{
			$original_value =  $row['books_no'];
			//$an_array = str_split($value);

			//$value1 = stristr(haystack, needle)($value);

			$value = substr($original_value, 0,10);
			$value1 = substr($original_value,10,2);
			$value2 = substr($original_value, 12,2);

			//str_replace(search, replace, subject)
			//$original_value = mysql_query("select books_no from books where id = 1");
			$concat = mysql_query("update books 
									set books_no = concat(concat($value,0),concat($value1,0),$value2) 
									where id = $i");
			//print_r($row);
			//echo $value2;
			//echo "<br />";
		}

	}

/*UPDATE books
 SET books_no = to_number( SUBSTR(TO_CHAR(books_no), 1, 10)
  ||'0'
  || SUBSTR(TO_CHAR(books_no), 11, 2)
  ||'0'
  || SUBSTR(TO_CHAR(books_no), 13) )
   FROM TABLE
  WHERE LENGTH(books_no) = 14*/







?>