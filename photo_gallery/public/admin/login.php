<?php 
require_once("../../includes/initialize.php");

// If person is already logged in redirect in index.php
// Avoid wastage of time to load this page
if($session->is_logged_in()) {
	redirect_to("index.php");
}

// Remember to give your form's submit tag a name="submit" attribute!
if(isset($_POST['submit'])) { // Form has been submitted.

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	// Check database to see if username/password exist.
	$found_user = User::authenticate($username, $password);

	if($found_user) {
		$session->login($found_user);
		log_action('Login', "{$found_user->username} logged in.");
		redirect_to("index.php");
	} else {
		// username/password combo was not found in the database
		$message = "Username/password combination incorrect.";
	}

} else { // Form has not been submitted.
	$username = "";
	$password = ""; 
}
?>
<html>
  <head>
    <title>Photo Gallery</title>
    <link href="../stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="header">
      <h1>Photo Gallery</h1>
    </div>
    <div id="main">
		<h2>Staff Login</h2>
		<?php 
			if(isset($message)){
				echo output_message($message); 
			}
		?>

		<form action="login.php" method="post">
		  <table>
		    <tr>
		      <td>Username:</td>
		      <td>
		        <input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username); ?>" />
		      </td>
		    </tr>
		    <tr>
		      <td>Password:</td>
		      <td>
		        <input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password); ?>" />
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
		        <input type="submit" name="submit" value="Login" />
		      </td>
		    </tr>
		  </table>
		</form>
    </div>
    <div id="footer">Copyright <?php echo date("Y", time()); ?>, Mainul Hasan</div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>
