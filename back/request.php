<?php 

include("../db/db.php");
if(isset($_POST['signup'])) {

  $username=$_POST['username'];
  $username=$_POST['email'];
  $username=$_POST['password'];
 

  $user= $conn->prepare("INSERT INTO users(`id`,`username`,`email`,`password`)VALUES(NULL,?,?,?)");

  if($user === false) {
    die("Error in preparing SQL statement: " . $conn->error);
  }
  $user->bind_param("sss", $username, $email, $password);

  
  $result = $user->execute();

  if($result){

    echo "New user registerd";

  } else {

    echo "New user not registerd";

  }
}

?>