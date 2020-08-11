<!DOCTYPE html>

<html>
<head>
	<title>ViewComplain</title>
	
	<link rel="stylesheet" type="text/css" href="style/viewComplain.css">

</head>
<body>

 	  <?php 



// function getComp(){
include("include/function.php");

if (isset($_GET['viewComplain'])) {
	

	$get_Complian = "select * from complain";
		$run_query = mysqli_query($con,$get_Complian);
		$i=0;
		while ($row_com=mysqli_fetch_array($run_query)) {
			$com_id= $row_com['complain_id'];
			$user_name= $row_com['user_name'];
			$user_email= $row_com['user_email'];
			$product_title= $row_com['product_title'];
			$product_cat= $row_com['product_cat'];
			$product_brand= $row_com['product_brand'];
			$product_image= $row_com['product_image'];
			$author_address= $row_com['author_address'];
			$author_phone_number= $row_com['author_phone_number'];
			$product_desc= $row_com['product_desc'];
			$i++;

 ?>

<div id="mainContainer">
	
		<?php echo "Complain No.$i"; ?>
		<hr>
     <?php echo "Name of the victim: $user_name <br>" ; 
      
      echo "Victim email:  $user_email <br Product_title: $product_title <br> Product_cat: $product_cat <br> Product_brand:  $product_brand <br>" ; 
     ?>
     
     <img src="complain_images/<?php echo $product_image; ?>" width="160" height="160" />

    
     
     <?php echo "<br> Author address: $author_address <br>"; ?>
     
     <?php echo "Author Phone Number: $author_phone_number <br>"; ?>

     <?php echo "Product Description: $product_desc"; ?>

     

 </div>

<?php }
}
 ?>
</body>


</html>