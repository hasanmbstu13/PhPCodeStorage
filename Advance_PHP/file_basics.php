<?php 
	
	echo __FILE__."<br />"; // print the full path of the file.
	echo __LINE__."<br />"; // be careful once we include files
	echo dirname(__FILE__)."<br />";
	echo __DIR__ ."<br />";

	echo file_exists(__FILE__) ? 'yes' : 'no';
	echo "<br />";
	echo file_exists(__DIR__."/cloning.php") ? 'yes' : 'no';
	echo "<br />";

	echo is_file(__DIR__."/cloning.php") ? 'yes' : 'no';
	echo "<br />";
	echo is_file(__DIR__) ? 'yes' : 'no';
	echo "<br />";

	echo is_dir(__DIR__."/cloning.php") ? 'yes' : 'no';
	echo "<br />";
	echo is_dir(__DIR__) ? 'yes' : 'no';
	echo "<br />";
	echo is_dir('..') ? 'yes' : 'no';
	echo "<br />";


 ?>	