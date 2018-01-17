<?php 

include_once 'db_connection.php';
function confirm_query($result_set){ 
	global $connection;

	if(!$result_set){
		die("Database query failed:".mysqli_error($connection). __LINE__ .' in ' .__FILE__ );  
	}
}

if(isset($_POST['suraa_no'])){
	$query  = "SELECT aya_no ";
	$query .= " FROM sura_aya_no";
	$query .= " WHERE sura_no=".$_POST['suraa_no'];

	$result = mysqli_query($connection, $query);
	$options = '';
	confirm_query($result);
		if($sura_no = mysqli_fetch_object($result)){
			for ($begin=1; $begin <= $sura_no->aya_no ; $begin++) { 
				$options.="<option value='$begin'>$begin</option>";
			}
		}
		
	echo $options;
	exit;

}

