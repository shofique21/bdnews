<?php  
session_start(); 
include('db/dbconfig.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>bdnews</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="row">
                <div class="col-md-3">
                    <div class="flex-container">
                        <div class="text-start pad-left-15">Bd news for today</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="assets/images/google_logo.png" width="150px" alt="bdnews">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="flex-container">
                        <div class="text-right pad-left-15">advertisment</div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <?php
                         $sql = 'SELECT * FROM category order by name';
                         $query = mysqli_query($link, $sql);
                          while ($category = mysqli_fetch_array($query)) { ?>
                          <li><a href="#"><?php echo $category['name']; ?></a></li>
                        <?php } ?>
                        <?php
                    if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true &&  $_SESSION["user_type"] == 2) {
                        
                         ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dashboard <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="createCategory.php">Create Category</a></li>
                                <li><a href="categoryList.php">Category List</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                       if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true)
                        {  ?>
                          <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['name']; ?></a></li>
                          <li><a href="db/logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
                        <?php } else { ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php } ?>
                        
                    </ul>
                </div>
            </div>
        </nav>
       
    