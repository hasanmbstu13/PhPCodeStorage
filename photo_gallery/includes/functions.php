<?php 
	
	function strip_zeros_from_date($marked_string=""){
		//remove the marked zeros
		$no_zeros = str_replace('*0', '', $marked_string);
		//remove any remaining marks
		$cleaned_string = str_replace('*', '', $no_zeros);
		return $cleaned_string;
	}

	function redirect_to($location = NULL){
		if($location != NULL){
			header("Location: " . $location);
			exit;
		}
	}

	function output_message($message=""){
		if(!empty($message)){
			return "<p class=\"message\">{$message}</p>";
		} else {
			return "";
		}
	}

	function __autoload($class_name) {
		$class_name = strtolower($class_name);
		// $path = "../includes/{$class_name}.php";
		$path = LIB_PATH.DS."{$class_name}.php";
		if(file_exists($path)) {
			require_once($path);
		} else {
			die("The file {$class_name}.php could not be found.");
		}
	}

	function include_layout_template($template="") { // Helper method we write helper class for this such type of helper method.
		include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template);
	}

	function log_action($action, $message="") {
		$logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';
		$new = file_exists($logfile) ? false : true;
<<<<<<< HEAD
		if($handle = fopen($logfile,'a')) { // append - will create a file first if the file will not exists and after appending with the file
			$timestamp = strftime("%Y-%m-%d %H:%M:%S",time());
			$content = "{$timestamp} | {$action}: {$message}\n";
			fwrite($handle,$content);
			fclose($handle);
			if($new) { chmod($logfile, 0755);}
		} else {
			echo "Could not open log file for writing.";
=======
		if($handle = fopen($logfile, 'a+')) { // append
		  $timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
		  $content = "{$timestamp} | {$action} : {$message}\n";
		  fwrite($handle, $content);
		  fclose($handle);
		  if($new) { chmod($logfile, 0755);}
		} else {
			echo "Could not open lof file for writing.";
>>>>>>> 06f4633031aaf9b5c042c711e42bc703e2c2e439
		}
	}

	//passwprd: GRANT ALL PRIVILEGES ON photo_gallery.* TO 'gallery'@'localhost' IDENTIFIED BY 'php0TL123';
?> 