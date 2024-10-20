<?php 
session_start();
include("../db/db.php");

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare an SQL statement to prevent SQL injection
    $user = $conn->prepare("INSERT INTO users(`id`, `username`, `email`, `password`) VALUES (NULL, ?, ?, ?)");

    if ($user === false) {
        die("Error in preparing SQL statement: " . $conn->error);
    }

    // Bind parameters (s means string for each variable)
    $user->bind_param("sss", $username, $email, $password);

    // Execute the query
    $result = $user->execute();

    if ($result) {
        echo "New user registered";
        $_SESSION["user"]=["username"=>$username,"email"=>$email];
        header("location:/FIRSTPROJECT");
    } else {
        echo "New user not registered: " . $user->error;
    }

    // Close the prepared statement and connection
    $user->close();
    $conn->close();
}else if (isset($_POST['signup'])) {


    
}




?>
