<!DOCTYPE html>
<!-- <?php 

//include("include/include.php");

?> -->
<html>
<head>
	<title>This is Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" media="all">
	<!--  -->

	<link rel="stylesheet" type="text/css" href="insert_product.css">
	<!--  -->
</head>
<body>
	<div class="main_wrapper">
	   
	   <div id="header">
	   <h1 align="center" style="margin-top: 40px;font-family: cursive;">Welcome to the admin area</h1>
	   </div>
	   
	   <div id="right">
	   <h2 style="text-align: center">Mange Content</h2>
	   
	    <a href="index.php?insert_product">Insert New Product</a>
	   
	    <a href="index.php?view_products">View All Product</a>
	   
	    
	    <a href="index.php?viewComplain  ">View Complain</a>

	    <a href="index.php?viewContact  ">View Contact</a>
	    
	    
	    <a href="admin_login_out/logout.php">Admin Logout</a>
	   </div>
	 
	   	<div id="left">

	   		<?php 

	   		if(isset($_GET['insert_product'])){

	   			include ("insert_product.php");
	   		 
	   		}
	   		if(isset($_GET['view_products'])){

	   			include ("view_products.php");
	   		 
	   		}


	   		if(isset($_GET['edit_pro'])){

	   			include ("edit_pro.php");
	   		 
	   		}
	   		if(isset($_GET['viewComplain'])){

	   			include ("viewComplain.php");
	   		 
	   		}
	   		if(isset($_GET['viewContact'])){
	   			
	   			include ("viewContact.php");
	   		 
	   		}

	   		?>
	   	</div>
	 
	  
	</div>
</body>
</html>