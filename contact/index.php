
<!DOCTYPE html>

<html lang="en" dir="ltr"> 
<!-- we use english language direction left to right -->
<!-- <html lang="en" dir="rtl"> -->
  <head>
    <meta charset="utf-8">
<!-- Unicode Transformation Format  -->
    <title>Contuct us</title>

    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- use for  making the website dynamic  -->
  </head>
  <body>

<div class="contact-section">

  <h1>Contact Us</h1>
  <div class="border"></div>

  <form class="contact-form" action="index.php" method="POST">

    <input type="text" class="contact-form-text" name="name" placeholder="Your name" required="">

    <input type="email" class="contact-form-text" name="email" placeholder="Your email" required="">

    <input type="text" class="contact-form-text" name="phone" placeholder="Your phone" required="">

    <input type="file" class="contact-form-text" name="image" placeholder="Product Image" required="">

    <input type="text" class="contact-form-text" name="brand" placeholder="
    Product brand" required="">
    
    <textarea class="contact-form-text" name="pro_desc" placeholder="Product description"></textarea>
    <input type="submit" class="contact-form-btn" name="submit" value="Send">

    
  </form>

</div>


  </body>
</html>
<?php


//function that connect the database
$con = mysqli_connect("localhost","root","","sellzone");
//$con = mysqli_connect("localhost","id11108486_selldb","selldb123!@#","id11108486_mydb");
//

//
if(isset($_POST['submit'])){

    // inthis line we check the button which name is insert now  is click orr not.By using isset() method, this method take one parameter in this case $_POST because we set the form method as post so we need to use this $POST method. Inside this post method we use 'insert_post' because we give the name of the button (insert now) is insert_post.



  
    //getting the text data from the fields
    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $brand = $_POST['brand'];
    //$image = $_POST['image'];

    $pro_desc = $_POST['pro_desc'];

    //in the above lines we just assign the valus that comes from the from fields to the local veriables.

  
    //getting the image from the field
     $image = $_FILES['image']['name'];
     $image_tmp = $_FILES['image']['tmp_name'];
    
   
    
    // upload image in a specific folder path 
   // C:\xampp\htdocs\myProjectMain\contact\product_images
    move_uploaded_file($image_tmp,"contact/product_images/$image");
  
    
    //writting the query for inserting this data to product table taht inside the ecomerce  database
     $insert_product = "insert into contact (name,email,phone,image,pro_desc,brand) 

     values ('$name','$email','$phone','$image','$pro_desc','$brand')";
     
     //run thoes query
     $insert_pro = mysqli_query($con, $insert_product);
     
     if($insert_pro){
     
     //echo "<script>alert('message send!')</script>";
     // echo "<script>window.open('insert_product.php','_self')</script>";
     echo "<script>window.open('index.php','_self')</script>";
     }
  }


?>
