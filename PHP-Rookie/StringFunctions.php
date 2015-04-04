<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String Functions</title>
</head>
<body>
<!-- Notes:
The PHP strpos() function searches for a specific text within a string.
If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
Tip: The first character position in a string is 0 (not 1). -->
	<?php 
		//middle part of a string: start>0

		//syntax substr($string, $start, $length)
		$name = 'Mr. George Clooney';
		printf('<br />Formal Name: %s', $name);

		//pull out the first name
		printf('<br />First Name: %s', substr($name, 4, 6));

		printf('<br />First Name: %s', substr($name, strpos($name, 'G'), 6));
	 	
	 	//die();
	 ?>

	<br>

	<?php 
		//first part of a string = start with 0

		//syntax substr($string, $start, $length)
		$firstName = 'Mainul';
		$lastName = 'Hasan';

		//print the name
		printf('<br />Full Name: %s %s', $firstName, $lastName);

		//use substr to get the 1st initials
		//NOTE: strings start with 0, not 1!
		printf('<br />Initials: %s %s',substr($firstName, 0, 1),substr($lastName, 0, 1)); 
	 ?>

	<br>

	<?php 
		//printf() is used to precisely format a string
		//a format string includes text and placeholders which start with "%"

		//variable assignments
		$name = "Mainul";
		$accountNumber = 12341156;
		$balance = 144.22;
		printf('%20s%08d%.2f',$name,$accountNumber,$balance);
		//die();
	 ?>

	 <br>
	
	<?php 

		$first = "The quick brown fox";
		$second = " jumped over the lazy dog.";

		$third = $first;
		$third .= $second;
		echo "$third";
	 ?>
	
	Find Position: <?php echo strpos($third, "brown");//return the string position?><br/>

	 <br/>
	 Lowercase: <?php echo strtolower($third);//return the strings with all characters in lower Case format ?><br/> 
	 Uppercase: <?php echo strtoupper($third);//return the strings with all characters in Upper Case format ?><br/>
	 Uppercase first character of the sentence: <?php echo ucfirst($third); //return the strings with first characters in Upper Case format in a sentence?><br/>
	 Uppercase first character of each words of the sentence: <?php echo ucwords($third); //return the strings with first characters of each word in Upper Case format?><br/>
	 <br/>
	 Length: <?php echo strlen($third); //return the string lengths?><br/>
	 Count The Number of Words in a string: <?php echo str_word_count("Hello world!"); // outputs 2 ?><br>
	 Trim: <?php echo trim("      A       ") . trim("    B C D      ").trim("          E    "); //remove all whithespace before and after of the string?><br/>
	 Find: <?php $var =  strstr("The color is brown color","brown");//search the string if matching the string with the desired string return desired string with the ending of the strings
	 			echo $var; ?><br/>
	 Replace by string: <?php echo str_replace("quick", "super-fast", $third); //replace the string with desired string in a string?><br/>
	<br/>
	Repeat: <?php echo str_repeat($third,2);//repeat the string in two time?><br/>
	Reverse: <?php echo strrev("Hello world!"); // outputs !dlrow olleH ?><br>
	Make Substring: <?php echo substr($third, 4,23);//make a substring in 5 position and length of the string is 10 characters?><br/>
    Find Position: <?php echo strpos($third, "brown");//return the string position?><br/>
	Find Character: <?php echo strchr($third,"o");//find the character in the string and return the string with the finding character with the remaining string?><br/>
</body>
</html>