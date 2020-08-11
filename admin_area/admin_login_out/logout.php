<?php 

session_start();
session_destroy();

//header('location:admin_login_out/login.php');
echo "<script>window.open('login.php?logged_out=You have logged out, come back soon!','_self')</script>";
 ?>