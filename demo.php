<?php
ob_start();
require_once('includes/load.php');
if ($session->isUserLoggedIn(true)) {
  redirect('home.php', false);
}
?>
<?php include_once('layouts/header.php'); ?>

<?php echo display_msg($msg); ?>
<div class="login-page" style="background-image: url('banner.jpg'); background-size: cover;">
  <div class="text-center">
    <h1 style="display: block;">WAREHOUSE MANGEMENT SYSTEM</h1>
  </div>


  <div class="header">
    <div class="homepageContainer">
      <a href="index.php">Admin Login</a>
      <a href="empolyeelogin.php">employee Login</a>
      <a href="user.php">user login</a>
      <a href="index.php">ABOUT US</a>
      <a href="demo.php">HOME</a>
    </div>
  </div>
  