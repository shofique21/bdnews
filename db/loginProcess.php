<?php
  session_start();
  include('dbconfig.php');
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $query = mysqli_query($link,$sql);
  $result = mysqli_fetch_array($query);

   if($result){
        $_SESSION["success"] = "You are login successfully";
        $_SESSION["name"] = $result["name"];
        $_SESSION["user_type"] = $result["user_type"];
        $_SESSION["is_login"] = true;
        header('Location: ../index.php');
     
   }else{
      $_SESSION["failed"] = "Failed to login. Please try again";
      header('Location: ../login.php');
   }
?>