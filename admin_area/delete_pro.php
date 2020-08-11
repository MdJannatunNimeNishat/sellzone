<?php 
	include("include/include.php");

	if ($_GET['delete_pro']) {
		
		$delete_id = $_GET['delete_pro'];

		$delete_pro= "delete from products where product_id = '$delete_id'";

		$run_delete = mysqli_query($con, $delete_pro);

		if ($run_delete) {
			
			echo "<script>alert('Peoduct has been deleted!')</script>";
			echo "<script>window.open('index.php?view_products','_self')</script>";
		}


	}


 ?>