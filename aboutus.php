<?php
ob_start();
require_once('includes/load.php');
if ($session->isUserLoggedIn(true)) {
  redirect('home.php', false);
}
?>
<?php include_once('layouts/header.php'); ?>

<?php echo display_msg($msg); ?>
<div class="login-page" style="background-image: url('swamy.jpg'); background-size: cover;">
  <div class="text-center">
    <h1 style="display: block;">WAREHOUSE MANGEMENT SYSTEM</h1>
  </div>


  <div class="header">
    <div class="homepageContainer">
      <a href="index.php">Admin Login</a>
      <a href="empolyeelogin.php">employee Login</a>
      <a href="user.php">user login</a>
      <a href="aboutus.php">ABOUT US</a>
      <a href="demo.php">HOME</a>
    </div>
  </div>
  <div class="text-center">
    <h2 style="display: block;">Warehouse management systems (WMS) are software applications designed to manage and optimize warehouse operations. These systems typically include a range of features and functionalities to help warehouse managers streamline their operations, increase efficiency, and reduce costs</h2>
  </div>
  
<?php include_once('layouts/footer.php'); ?>