<?php require_once("../includes/initialize.php"); ?>
<?php include_layout_template('header.php'); ?>

		<h2>Menu</h2>
		<div>
			<?php 
				$users = User::find_all();
				// echo "<pre>";
				// print_r($users);
				// echo "</pre>";
				// exit;
				foreach ($users as $user) {
					echo "User: ". $user->username ."<br />";
					echo "Name: ". $user->full_name() ."<br /><br />";
				}
			 ?>
		</div>
	</div>
<?php include_layout_template('footer.php'); ?>




<?php 
// require_once("../includes/functions.php");
// require_once("../includes/database.php");
// require_once("../includes/user.php");

// require_once("../includes/initialize.php");



// $sql  = "INSERT INTO users (id, username, password, first_name, last_name) ";
// $sql .= "VALUES (3,'sabbir','hasan','Mahmudul','Hasan')";
// $result = $database->query($sql);

// echo "<hr />";
// $user = User::find_by_id(1);
// // echo "<pre>";
// // print_r($user);
// // echo "</pre>";
// // exit;
// // echo $user->full_name();

// echo "<hr />";

// $users = User::find_all();
// // echo "<pre>";
// // print_r($users);
// // echo "</pre>";
// // exit;
// foreach ($users as $user) {
// 	echo "User: ". $user->username ."<br />";
// 	echo "Name: ". $user->full_name() ."<br /><br />";
// }
// // $user_set = User::find_all();
// // while($user = $database->fetch_array($user_set)){
// // 	echo "User: " . $user['username'] ."<br />";
// // 	echo "Name: " . $user['first_name'] . " " .$user['last_name']."<br /><br />";
// // }

// // $User = new User();
// // $found_user = $User->find_all();
//  //echo $found_user["username"];
?>