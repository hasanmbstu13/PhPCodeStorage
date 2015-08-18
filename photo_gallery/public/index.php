<?php 
require_once("../includes/database.php");
require_once("../includes/user.php");

// echo "<hr />";
$user = User::find_by_id(1);
echo $user->full_name();

echo "<hr />";

$users = User::find_all();
foreach ($users as $user) {
	echo "User: ". $user->username ."<br />";
	echo "Name: ". $user->full_name() ."<br /><br />";
}
// $user_set = User::find_all();
// while($user = $database->fetch_array($user_set)){
// 	echo "User: " . $user['username'] ."<br />";
// 	echo "Name: " . $user['first_name'] . " " .$user['last_name']."<br /><br />";
// }

// $User = new User();
// $found_user = $User->find_all();
 //echo $found_user["username"];
?>