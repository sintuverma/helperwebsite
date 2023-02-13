<?php
session_destroy();
unset($_SESSION['admin_id']);
unset($_SESSION['admin_name']);
unset($_SESSION['admin_email']);
unset($_SESSION['admin_mobile']);
unset($_SESSION['username']);
// session_start();
// $_SESSION['logout_msg'] ="Successfully Logout.";
header("location:admin_login.php");
?>