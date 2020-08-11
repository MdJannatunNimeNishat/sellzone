
<!-- <?php 
//session_start();

$con// = mysqli_connect('localhost', 'root');



 ?> -->



<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	
	<link rel="stylesheet" type="text/css" href="login.css">
	
	

	<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="AddProduct.css"> -->

</head>




<body>


<!-- main header -->
<div id="main_header">
	<!-- logo -->
	<div id="logo">
			
		<span id="ist">Sell</span><span id="iist">Zone.com</span>
	</div>


<div id="search">
		<form method="get" action="../../results.php" enctype="multipart/form-data">
			<input class="search_area" type="text" name="user_query" placeholder="Search here">
			<input class="search_btn " type="submit" name="serach" value="Search">
	
		</form>
	</div>

	
<!-- /main header -->
<!-- product -->

	
</div>

<!-- navBar -->
<section>
<div id="navBar">
	
<nav>
		
		<a href="../../index.php">Home</a>
		<a href="../../allProducts.php">All Products</a>
		

		<a href="../complain.php">Complain box</a>
		<a href="../../contact/index.php">Contact info.</a>
		<a href="../../About_us/About_us.php" target="_blank">About us</a>
		
	</nav>


</div>
</section>
<br>
<br>
<!-- <form  class="text" action="logincheck.php" method="post"> -->
<form  class="allform" action="logincheck.php" method="post">
    
    <h1>Admin Login</h1>
    <br><br>
     Username:<input type="text" name="user" placeholder="abc" value="@gmail.com" required="">
    
     <br><br>
     Password: <input type="password" placeholder="***"
     name="pass"  required=""
     >
     <br><br>


<button class="btn4"   name="submit" type="submit"> 
   Sign In

</button>

</form>

	
</body>
</html>
