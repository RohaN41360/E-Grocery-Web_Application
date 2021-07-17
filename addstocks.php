<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
     session_start()  ; 
     if (!isset($_SESSION['ousername'])) {
         header('location:ownerlogin.php');
   }// put your code here
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Stocks</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" src="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body> 
        <div  style="display:<?php if(isset($_SESSION['shoAlert'])){echo$_SESSION['shoAlert'];}
                    else{echo 'none';} unset($_SESSION['shoAlert']); ?>" class="alert alert-success alert-dismissible mt-3 w-50 mx-auto">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><?php if(isset($_SESSION['mesage'])){echo$_SESSION['mesage'];} unset($_SESSION['shoAlert']); ?></strong> 
                      </div>
        <div class="conatiner " >
            <div class="w-50 mx-auto"> <!--bootstrap  class for div in center -->
            <h3 class="text-center text-info">ADD STOCKS </h3>
            <form class="form-group"  method="post" action="addstocksvalid.php" name="">  
                <label class="text-danger"> Product Name:</label>
                <input  type="text" name="productname" id="productname" class="form-control" placeholder="Enter the Product Name " required>
                 <label class="text-danger"> Product price:</label>
                 <input  type="number" name="productprice" id=" productprice" class="form-control" placeholder="Enter the Product Price " required>
                <label class="text-danger"> Product Image path:</label>
                <input  type="text" name="productimage" id="productimage" class="form-control"  placeholder="Enter the Product Image Path " required>
                  <label class="text-danger"> Product code:</label>
                  <input  type="text" name="productcode" id="productcode" class="form-control" placeholder="Enter the Product Code " required><br>
                  <a href="owner-home.php " class="btn btn-warning">BACK</a>
                  <input type="reset" name="add" value="RESET "class="btn btn-info">
                <input type="submit" name="submit" value="ADD" class="btn btn-success clickBtn">
            
            </form>
            </div>
        </div>
         <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
`
    
    </body>
</html>
