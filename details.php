<!DOCTYPE html>
<?php

include("function/function.php");

?>
<html>
<head>

	<title>HomePage</title>

	<link rel="stylesheet" type="text/css" href="fontPage.css">
	
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style/style.css">

	<link rel="stylesheet" type="text/css" href="style/details.css">
	
</head>


</style>
<body>


<!-- main header -->
<div id="main_header">
	<!-- logo -->
	<div id="logo">
			
		<span id="sell">Sell</span><span id="Zone">Zone.com</span>
	</div>
	<!-- search box -->
	<div id="search">
		<form method="get" action="results.php" enctype="multipart/form-data">
			<input class="search_area" type="text" name="user_query" placeholder="Search here">
			<input class="search_btn " type="submit" name="serach" value="Search">
		</form>
	</div>
	
<!-- /main header -->
<!-- product -->

	
</div>

<!-- navBar -->
<div id="navBar">
	<nav>
		<a href="index.php">Home</a>
		
		<a href="admin_area/complain.php">Complain box</a>
		<a href="contact/index.php">Contact info.</a>
		<a href="About_us/About_us.php">About us</a>
		
	</nav>

</div>




<br>
<br>
<br>

<!-- static all products starts -->
<!-- static all products ends -->

<!-- product and sidebar area strats -->
<div class="mainContainer">
	
	<div id="sideBar">
		<div id="sidebar_title">Catagories</div>
		<ul id="sideBarUl">
			
         <?php getCat(); ?>

			
		</ul>
		<div id="sidebar_title">Brands</div>
		<ul id="sideBarUl">
			
			<?php getBrands(); ?>
		</ul>
	</div>

	<div id="productArea">
		
		<!--  -->
		<?php getSinglePro(); ?>
		 <?php seachBox(); ?>
		<!--  -->


	</div>

</div>

<!-- product and sidebar area ends -->




	<div id="footer">
		
		<div class="footer_sub">
			<h2>Abot this WebSite:</h2>
			<p>This is a website based on used computer accessories.We basically want to help pepole to gain some extra money from their unused prodects with the help of our website.Just give us a call and give your product details and let us know how watch you expecteing from your particular product.then we will place your product infomation on our website and if any one insterted on your product they can call you and you can discuss and sell your product if you want <span><a href="#">Read more...</a></span></p>
		</div>

		<div class="footer_sub2">
			<center>
				<h2>Social Media Links:</h2>
				<ul>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Instagram</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Linkdin</a></li>
					
				</ul>
			</center>
		</div>
		<div class="footer_sub3">
			<h2>Admin Section:</h2>
			<h3>Login as <a href="admin_area/admin_login_out/login.php">Admin</a></h3>
		</div>
		
		
	</div>
<!--  -->

<div style="margin-top: 100px"></div>

</body>


</html>