<?php 
    session_start();
    session_destroy();
    unset($_SESSION['isLoggedIn']);
    unset($_SESSION['username']);
    header("Location: login.php");
    exit();
?>