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
      <a href="index.php">ABOUT US</a>
      <a href="demo.php">HOME</a>
    </div>
  </div>
  <div class="text-center">
    <h2 style="display: block;">EMPLOYEE LOGIN</h2>
  </div>
  <form method="post" action="auth.php" class="clearfix">
    <div class="form-group">
      <label for="username" class="control-label">Username</label>
      <input type="name" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="Password" class="control-label">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-danger" style="border-radius:0%">Login</button></br></br><button
        type="submit" class="btn btn-danger" style="border-radius:0%">forget password</button>
    </div>
  </form>
</div>
<?php include_once('layouts/footer.php'); ?>