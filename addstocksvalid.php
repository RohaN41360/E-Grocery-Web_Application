<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php 
 
     session_start(); 
     if (!isset($_SESSION['ousername'])) {
         header('location:ownerlogin.php');
   }// put your code here
        
require 'connection.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $username = $_SESSION['ousername'];
        $shopname = $_SESSION['oshopname'];
       
       $query = "create table $username(id INT(11) AUTO_INCREMENT,product_name VARCHAR(100),product_price VARCHAR(100),product_image VARCHAR(60),"
           . "product_code VARCHAR(100), PRIMARY KEY(id) ) ";
   $q= mysqli_query($conn, $query);
   if(!$q)
   {
       echo 'could not create table'.mysqli_error($conn);
   }
   ?>
       
       <?php
        
        $productname =$_POST['productname'];
        $productprice =$_POST['productprice'];
        $productimage =$_POST['productimage'];
        $productcode =$_POST['productcode'];
        
       
//} 
        
        if(!empty($productname) && !empty($productprice) && !empty($productcode) && !empty($productimage))
{
         $query = "INSERT INTO products (`product_name`, `product_price`, `product_image`, `product_code`) "
                . "VALUES ('$productname','$productprice','$productimage','$productcode')";
	$res = mysqli_query($conn,$query);
	if($res){
            echo "<div class='alert alert-success alert-dismissible mt-2 cont'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <strong>Product Added Successfully</strong> 
    </div>";
             $_SESSION['shoAlert']= 'block';
             $_SESSION['mesage']= 'Product added Successfully ';
             header('location:addstocks.php');
	}
         $query1 = "INSERT INTO $username(`product_name`, `product_price`, `product_image`, `product_code`) "
                . "VALUES ('$productname','$productprice','$productimage','$productcode')";
	$res1 = mysqli_query($conn,$query1);
	if($res1){
            echo "<div class='alert alert-success alert-dismissible mt-2 cont'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <strong>Product Added Successfully</strong> 
    </div>";
             $_SESSION['shoAlert']= 'block';
             $_SESSION['mesage']= 'Product added Successfully ';
             header('location:addstocks.php');
	}
	else
	{
		echo "<div class='alert alert-danger alert-dismissible mt-2 cont'>
  <button Could Not ADD the Product </strong> 
</div>".mysqli_error($conn);
	}
}
else
{
	echo "<div class='alert alert-danger alert-dismissible mt-2 cont'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Please Fill all the fields </strong> 
</div>";
}
        
        ?>
    </body>
</html>
