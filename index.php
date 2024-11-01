<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akshay World</title>
  
  <?php 
  // session_start(); // Start session at the beginning of the script

  include('./front/common.php');
  ?>
</head>
<body>

<?php
include('./front/header.php');

// Check if 'user' exists in the session, is an array, and has 'username' key
if (isset($_SESSION['user']) && is_array($_SESSION['user']) && isset($_SESSION['user']['username'])) {
    $isUserLoggedIn = true;
} else {
    $isUserLoggedIn = false;
}

// If signup is requested and user is not logged in, include the signup page
if (isset($_GET['signup']) && !$isUserLoggedIn) {
    include('./front/signup.php');
} 
// If login is requested and user is not logged in, include the login page
else if (isset($_GET['login']) && !$isUserLoggedIn) {
    include('./front/login.php');
}
?>

</body>
</html>
