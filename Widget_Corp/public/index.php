  <?php require_once("../includes/session.php"); ?>
  <?php require_once("../includes/db_connection.php"); ?>
  <?php require_once("../includes/functions.php"); ?>
  <?php $layout_context = "public"; ?>
  <?php include("../includes/layouts/header.php"); ?>
  
  <?php find_selected_page(true);?>

  <div id="main">
   <div id="navigation">
    <?php echo public_navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
    <?php if($current_page){ ?>
    <h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
<<<<<<< HEAD
    <?php echo nl2br(htmlentities($current_page["content"])); ?>
    <?php } else { ?>
     <p>Welcome!</p>
=======
    <?php echo nl2br(htmlentities(strip_tags($current_page["content"]))); ?>
    <?php } else { ?>
      <p>Welcome!</p>
>>>>>>> fc10140f8d42b9a3c5f4baed1e1d675760dc3ebb
    <?php } ?> 
  </div>
</div>

<?php include("../includes/layouts/footer.php") ?> 
