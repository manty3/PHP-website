<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akshay world</title>
  
  <?php include('./front/common.php') ?>
</head>
<body>
<?php include('./front/header.php');
if(isset($_GET['signup']))
{

include('./front/signup.php');
}else if(isset($_GET['login']))
 {
  include('./front/login.php');

}


?>





</body>
</html>