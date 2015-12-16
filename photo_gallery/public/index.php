<?php  ?>
<?php require_once("../includes/initialize.php"); ?>
<?php
	// Find all photos
	// calling static methods find_all()
	$photos = Photograph::find_all(); 
	// print_r($photos);
?>
<?php include_layout_template('header.php'); ?>

<?php foreach ($photos as $photo): ?>
  <div style="float: left; margin-left: 20px;">
	<a href="photo.php?id=<?php echo $photo->id; ?>">
  	   <!-- here .. is not required in the source because images
  	   folder and index page in the same directory -->
  	   <!-- The smaller version of the image shown in the photo list
  	   If we want to larger version then we need create another 
  	   file in our project this file is photo.php -->
  	   <img src="<?php echo $photo->image_path(); ?>" width="200" />
	</a>
  	<p><?php echo $photo->caption; ?> </p>
  </div>
<?php endforeach; ?>

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
// // Instead of clumsy like below we can write method full_name based on attribute of class 
	// And the attribute feeding from database object	
	// echo "Name: " . $user['first_name'] . " " .$user['last_name']."<br /><br />";
// // }

// // $User = new User();
// // $found_user = $User->find_all();
//  //echo $found_user["username"];
?>