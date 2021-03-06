  <?php require_once("../includes/session.php"); ?>
  <?php require_once("../includes/db_connection.php"); ?>
  <?php require_once("../includes/functions.php"); ?>
  <?php require_once("../includes/validation_functions.php"); ?>
  
  <?php
  $username = "";

  if(isset($_POST['submit'])){
        //Process the form


    //validations
    $required_fields = array("user_name","password");
    validate_presences($required_fields);

    if(empty($errors)){
      // Attempt Login

      $username = $_POST["user_name"];
      $password = $_POST["password"];

      $found_admin = attempt_login($username, $password);

      if($found_admin){
        // Success
       //  Mark user as logged in
        // $_COOKIE["admin_id"] = $found_admin["id"];
        $_SESSION["admin_id"] = $found_admin["id"];
        $_SESSION["user_name"] = $found_admin["username"]; // This is useful because of if want to use it in header,where username required
        redirect_to("admin.php");                          // I can used to it as text or refer to them I always know to person name
      } else {                                             // And I don't back to go database for know person's user name.
        //Failure
        $_SESSION["message"] = "Username/password not found.";
      }
    }
  }
  else {
    // This is probably a GET request
  } //end: if(isset($_POST['submit']))
  ?>


  <?php $layout_context = "admin"; ?>
  <?php include("../includes/layouts/header.php"); ?>
  <div id="main">
   <div id="navigation"> 
   </div>
   <div id="page">
    <?php echo message();?>
    <?php echo form_errors($errors); ?>

    <h2>Login</h2>
    <form action="login.php" method="post">
      <p>Username: 
        <input type="text" name="user_name" value="<?php echo htmlentities($username); ?>" id="user_name" />
      </p> 
      <p>Password: 
        <input type="password" name="password" value="" id="password" />
      </p>
      <input type="submit" name = "submit" value="Submit" />
      <br>
    </form>
  </div>
</div>

<?php include("../includes/layouts/footer.php") ?> 
