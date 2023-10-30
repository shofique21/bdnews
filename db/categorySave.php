<?php
session_start();
 include('dbconfig.php');
 
 $name     = $_POST['name'];
 $status      = $_POST['status'];

$sql = "INSERT INTO category (name, status) VALUES (
    '$name','$status')";

$result = mysqli_query($link,$sql);
    if($result){
        $_SESSION["success"] = "Category has been created successfully";
        header('Location: ../createCategory.php');
    }else{
        $_SESSION["failed"] = "Failed to create category. Something was wrong";
        header('Location: ../createCategory.php');
    }
?>