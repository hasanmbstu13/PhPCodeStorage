  <?php require_once("../includes/session.php"); ?>
  <?php require_once("../includes/db_connection.php"); ?>
  <?php require_once("../includes/functions.php"); ?>
  <?php include("../includes/layouts/header.php"); ?>
  <?php find_selected_page();?>

 <div id="main">
   <div id="navigation">
    <?php echo navigation($current_subject, $current_page); //here $current_subject or $current_page may be associative array or null.?>	
  </div>
  <div id="page">
    <?php echo message();?>
    <?php $errors = errors(); ?>
    <?php echo form_errors($errors); ?>
      
     <h2>Create Page</h2>
     <form action="create_page.php" method="post">
      <p>Menu name: 
        <input type="text" name="menu_name" value="" id="menu_name" />
      </p>
      <p>Position: 
        <select name="position">
        <?php
          $page_set = find_pages_for_subject($current_subject["id"]); 
          $page_count = mysqli_num_rows($page_set);
          for($count=1; $count <= ($page_count + 1); $count++) {
           echo "<option value=\"{$count}\">{$count}</option>";
          }
         ?>  
          
        </select>
      </p>
      <p>Visible: 
        <input type="radio" name="visible" value="0" /> No
        &nbsp;
        <input type="radio" name="visible" value="1" /> Yes
      </p>
      Content:
      <br>
      <textarea rows="20" cols="80" name = "content">
      </textarea> 
      <input type="hidden" name="subject_id" value="<?php echo $current_subject["id"]; ?>" />
      <br>
      <br>
      <input type="submit" name = "submit" value="Create Page" />
      <br>
     </form>
     <br />
     <a href="manage_content.php">Cancel</a>
  </div>
</div>

<?php include("../includes/layouts/footer.php") ?> 
