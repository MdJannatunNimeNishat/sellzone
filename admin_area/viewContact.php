<!DOCTYPE html>

<html>
<head>
	<title>ViewContact</title>
	<!-- <link rel="stylesheet" type="text/css" href="style/fontPage.css">
	
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css"> -->
	<link rel="stylesheet" type="text/css" href="style/viewComplain.css">

</head>
<body>

 	  <?php 



// function getComp(){
include("include/function.php");

if (isset($_GET['viewContact'])) {
	

	$get_contact = "select * from contact";
		$run_query = mysqli_query($con,$get_contact);
		$i=0;
		while ($row_com=mysqli_fetch_array($run_query)) {
			$id= $row_com['id'];
			$name= $row_com['name'];
			$email= $row_com['email'];
			/*$product_title= $row_com['product_title'];
			$product_cat= $row_com['product_cat'];
			$product_brand= $row_com['product_brand'];*/
			$image= $row_com['image'];
			/*/$author_address= $row_com['author_address'];*/
			$phone= $row_com['phone'];
			$brand =$row_com['brand'];
			$pro_desc= $row_com['pro_desc'];
			$i++;

 ?>

<div id="mainContainer">
	
		<?php echo "No.$i"; ?>
		<hr>
     <?php echo "Name of the author: $name <br>" ; 
      
      echo "Author email:  $email <br>" ; 
     ?>
     
     <img src="../contact/product_images/<?php echo $image; ?>" width="160" height="160" />
     <br>
     <!-- <?php //echo  $image; ?> -->
     
     <?php echo "Author phone:  $phone <br>" ; ?>
     <?php echo "Product Brand:  $brand <br>" ; ?>

     <?php echo "Product Description: $pro_desc"; ?>

     

 </div>

<?php }
}
 ?>
</body>


</html>