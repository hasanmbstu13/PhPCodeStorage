<?php 
	
	class Person{

	}

	// $classes = get_declared_classes();
	// foreach ($classes as $class) {
	// 	echo $class ."<br/>";
	// }

	if(class_exists("Animal")){ // determine whether a class is exist or not.
		echo "That class has been defined.<br />";
	}else{
		echo "Class not defined!<br/>";
	}
 ?>