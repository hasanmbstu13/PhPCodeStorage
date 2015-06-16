<?php 
	function redirect_to($new_location){
		header("Location: " . $new_location);
		exit;
	}
	function mysql_prep($string){ //this function is for escaping long name of the sql injection function.
		global $connection;

		$escaped_string = mysqli_real_escape_string($connection,$string);
		return $escaped_string;
	}
	function confirm_query($result_set){ //This function confirm whether a database query is successful or not
		global $connection;

		if(!$result_set){
			//die("Database query failed.");  
			die("Database query failed:".mysqli_error($connection). __LINE__ .' in ' .__FILE__ );  
		}
	}
	function form_errors($errors = array()){
		$output = "";
		if(!empty($errors)){
			$output .= "<div class = \"error\">";
			$output .= "Please fix the following errors:";
			$output .= "<ul>";
			foreach ($errors as $key => $error){
				$output .= "<li>{$error}</li>";
			}
			$output .= "</ul>";
			$output .= "</div>";
		}
		return $output;
	}

	function find_all_subjects(){ //find all subjects from database.
		global $connection;

		$query  = "SELECT * ";  
		$query .= "FROM subjects ";  
		//$query .= "WHERE visible = 1 ";
		$query .= "ORDER BY position ASC";
		$subject_set = mysqli_query($connection, $query); 
		confirm_query($subject_set);
		return $subject_set;
	}

	function find_pages_for_subject($subject_id){ //find pages for a subject
		global $connection;

		$safe_subject_id = mysqli_real_escape_string($connection,$subject_id);

		$query  = "SELECT * ";  
		$query .= "FROM pages ";  
		$query .= "WHERE visible = 1 ";
		$query .= "AND subject_id = {$safe_subject_id} ";
		$query .= "ORDER BY position ASC";
		$page_set = mysqli_query($connection, $query); 
		confirm_query($page_set);
		return $page_set;
	}

	function find_subject_by_id($subject_id){
		global $connection;

		$safe_subject_id = mysqli_real_escape_string($connection,$subject_id);

		$query  = "SELECT * ";  
		$query .= "FROM subjects ";  
		$query .= "WHERE id = {$safe_subject_id} ";
		$query .= "LIMIT 1";//this is good practice to always use limit 1 i.e it will be ensure that always we get 1 row.
		$subject_set = mysqli_query($connection, $query); 
		confirm_query($subject_set);
		if($subject = mysqli_fetch_assoc($subject_set)){
			return $subject;
		}else{
			return null;
		}
	}
	function find_page_by_id($page_id){
		global $connection;

		$safe_page_id = mysqli_real_escape_string($connection,$page_id);

		$query  = "SELECT * ";  
		$query .= "FROM pages ";  
		$query .= "WHERE id = {$safe_page_id} ";
		$query .= "LIMIT 1";//this is good practice to always use limit 1 i.e it will be ensure that always we get 1 row.
		$page_set = mysqli_query($connection, $query); 
		confirm_query($page_set);
		if($page = mysqli_fetch_assoc($page_set)){
			return $page;
		}else{
			return null;
		}
	}
	function find_selected_page(){
		 global $current_subject;
		 global $current_page;
		 
		 if(isset($_GET["subject"])){
		  $current_subject = find_subject_by_id($_GET["subject"]);
		  $current_page = null;	
		}elseif (isset($_GET["page"])) {
		  $current_page = find_page_by_id($_GET["page"]);
		  $current_subject = null;
		}else{
		  $current_page = null;  
		  $current_subject = null;
		}
	}

		 //navigation takes 2 arguments
		// - the current subject array or null
	   // - the current page array or null
	function navigation($subject_array, $page_array){
		$output = "<ul class=\"subjects\">";
		$subject_set = find_all_subjects(); 
		while($subject = mysqli_fetch_assoc($subject_set)){
			$output .= "<li";
			if($subject_array && $subject["id"] == $subject_array["id"]){
				$output .= " class=\"selected\"";
			}
			$output .= ">";
			$output .= "<a href=\"manage_content.php?subject=";
			$output .= urlencode($subject["id"]); 
			$output .= "\">";
			$output .= $subject["menu_name"]."(".$subject["id"].")"; 
			$output .= "</a>";

			$page_set = find_pages_for_subject($subject["id"]); 
			$output .= "<ul class=\"pages\">";
			while($page = mysqli_fetch_assoc($page_set)){ 
				$output .= "<li";
				if($page_array && $page["id"] == $page_array["id"]){
					$output .= " class=\"selected\"";
				}
				$output .= ">";
				$output .= "<a href=\"manage_content.php?page=";
				$output .= urlencode($page["id"]); 
				$output .= "\">";
				$output .= $page["menu_name"]; 
				$output .= "</a></li>";
			}
			mysqli_free_result($page_set); 
			$output .= "</ul></li>";
		}
		mysqli_free_result($subject_set);
		$output .= "</ul>";
		return $output;
	}
?>