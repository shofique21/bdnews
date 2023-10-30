<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['is_login']);
session_destroy();
header('Location: ../index.php');
?>