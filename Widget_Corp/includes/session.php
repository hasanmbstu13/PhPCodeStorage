<?php 
	session_start();

	// This session page is imported from bbs
	function message(){
	  if(isset($_SESSION["message"])){
	    $output = "<div class =\"message\">";
	    $output .= htmlentities($_SESSION["message"]); //data coming is also possible from user
	    $output .= "</div>";
	    
	    //clear message after use
	    $_SESSION["message"] = null;
	    
	    return $output;  
	}
 }

 	function errors(){
 	  if(isset($_SESSION["errors"])){
 	    $errors = $_SESSION["errors"];
 	    
 	    //clear errors after use
 	    $_SESSION["errors"] = null;
 	    
 	    return $errors;  
 	}
  }
?>