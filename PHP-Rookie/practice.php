<?php
		
		$details = "Hi I am Mohammad Mainul Hasan"."\n"."I am from Noakhali.";
		echo $details;


		$a = "<li";
		$b = "class=\"selected\"";
		$c = ">";


		echo $a.$b.$c;

		

		$name="Rajeev";
		$$name="Sanjeev";
		echo $name."<br/>";
		echo $$name."<br/>";
		echo $Rajeev;

		$a = @(57/0);
		$a = (57/0);

		echo $a;

		$out = `dir c:`;
		echo '<pre>'.$out.'</pre>';

		echo '<br/>';
		echo '<br/>';
		echo '<br/>';
		
		echo ucwords(strtolower('RANGPUR'));
	
?>

<pre>
	<?php echo $a.$b.$c; ?>
</pre>
