
<form method="post" action="forgot_password.php">
<label for="username_or_email">Enter your email or username:</label>
<input type="text" id="username_or_email" name="username_or_email">
<button type="submit">Reset Password</button>
</form>
<?php
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "inventory_system";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

// Use the $conn variable to execute queries on the database

