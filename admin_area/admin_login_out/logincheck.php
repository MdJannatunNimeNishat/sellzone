<?php 
session_start();

$con = mysqli_connect('localhost', 'root');
//$con = mysqli_connect('localhost', 'id11108486_selladmin',"selladmin123!@#");

//if($con){
//	echo "connection sucessful";
//}else{
//	echo "no connection";
//}


$db = mysqli_select_db($con, 'adminlogin');
//$db = mysqli_select_db($con, 'id11108486_admin');

if(isset($_POST['submit'])){	
	$username= $_POST['user'];
	$password= $_POST['pass'];

	

	$sql = " select * from admintable
	where adminName='$username' and adminPass = '$password' ";
	
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		
		if($row == 1){			
			//echo "login successful";
		//	$_SESSION['user'] = $username;
			header('location:..\index.php');
			//C:\xampp\htdocs\myProject\admin_area
		}else{
			echo "error";
			header('location:login.php');
		}	
}

 ?>