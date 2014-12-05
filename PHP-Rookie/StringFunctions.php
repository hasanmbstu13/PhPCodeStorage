<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String Functions</title>
</head>
<body>
	<?php 

		$first = "The quick brown fox";
		$second = " jumped over the lazy dog.";

		$third = $first;
		$third .= $second;
		echo "$third";
	 ?>
	 <br/>
	 Lowercase: <?php echo strtolower($third);//return the strings with all characters in lower Case format ?><br/> 
	 Uppercase: <?php echo strtoupper($third);//return the strings with all characters in Upper Case format ?><br/>
	 Uppercase first: <?php echo ucfirst($third); //return the strings with first characters of each word in Upper Case format?><br/>
	 Uppercase words: <?php echo ucwords($third); //return the strings with first characters of each word in Upper Case format?><br/>
	 <br/>
	 Length: <?php echo strlen($third); //return the string lengths?><br/>
	 Trim: <?php echo trim("      A       ") . trim("    B C D      ").trim("          E    "); //remove all whithespace before and after of the string?><br/>
	 Find: <?php $var =  strstr("The color is brown color","brown");//search the string if matching the string with the desired string return desired string with the ending of the strings
	 			echo $var; ?><br/>
	 Replace by string: <?php echo str_replace("quick", "super-fast", $third); //replace the string with desired string in a string?><br/>
	<br/>
	Repeat: <?php echo str_repeat($third,2);//repeat the string in two time?><br/>
	Make Substring: <?php echo substr($third, 4,23);//make a substring in 5 position and length of the string is 10 characters?><br/>
    Find Position: <?php echo strpos($third, "brown");//return the string position?><br/>
	Find Character: <?php echo strchr($third,"o");//find the character in the string and return the string with the finding character with the remaining string?><br/>
</body>
</html>