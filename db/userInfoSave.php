<?php
session_start();
 include('dbconfig.php');
 
 $firstName     = $_POST['firstname'];
 $lastName      = $_POST['lastname'];
 $emailAddress  = $_POST['email'];
 $password      =  md5($_POST['password']);
 $gender        = $_POST['gender'];

 $name = $firstName." ".$lastName;

$sql = "INSERT INTO users (name, email, password, gender) VALUES (
    '$name','$emailAddress','$password','$gender')";

$result = mysqli_query($link,$sql);
    if($result){
        $_SESSION["success"] = "You resigtered successfully";
        header('Location: ../login.php');
    }else{
        $_SESSION["failed"] = "You are failed to registe ! try again";
        header('Location: ../signup.php');
    }
?>