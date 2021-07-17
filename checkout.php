  <?php
 include 'connection.php';
     session_start()  ; 
     $username=$_SESSION['username'];
     if (!isset($_SESSION['username'])) {
         header('location:index.php');
   }?>
<?php
 require 'connection.php';
 $grand_total = 0;
 $allItems='';
 $items = array();
 $sql = "SELECT  CONCAT(product_name,'(',qty,')','(₹',product_price,')') AS ItemQty, total_price,product_price FROM $username ";
 $stmt  = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($stmt)){
     $grand_total += $row['total_price'];
     $items[]=$row['ItemQty'];
 }
 $allItems = implode(",<br> ", $items);            //to get all the items in string format
 
    
        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php 

?>
<html>
    <head> <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" src="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title>checkout</title>
    </head>
    <body>
        <script>
        function play()
        {
            var audio= document.getElementById('mytone');
            audio.play();
        }
        </script>
          <audio id="mytone">
      <source src="images/took.mp3" type="audio/mpeg">
        Your browser does not support the <code>audio</code> tag.
    </audio>
        
       
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="products.php">Groferies</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto" onmouseover="play()">
      <li class="nav-item">
          <a class="nav-link " href="products.php">Products</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link active" href="checkout.php">checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Caccount.php">Account</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:28px"></i>
              <span id="cart-item" class="badge badge-danger"></span></a>
              <li class="nav-item">
        <a class="nav-link " href="logout.php">Logout</a>
      </li>
      </li>
    </ul>
  </div>
</nav>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg--6 px-4 pb-4" id="order">
                    <h4 class="text-center  text-info p-2">Complete your Order</h4>
                    <div class="jumbotron p-3 mb-2 text-center">
                        <h6 class="lead"><b>Product(s):</b><?= $allItems; ?></h6>
                        <h6 class="lead"><b>Delivery Charges : </b>Free</h6>
                        <h5><b>Total Amount Payable : </b><?= number_format($grand_total,2)?>/-</h5>
                    </div>
                    <form action="action.php" method="post" id="placeOrder" name="myform" onsubmit="return check()">
                        <input type="hidden" name="products" value="<?= $allItems?>">
                        <input type="hidden" name="grand_total" value="<?= $grand_total?>">
                         <div class="form-group">
                            <input type="text" name="uname" class="form-control" placeholder="Enter UserName" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" class="form-control" placeholder="Enter phone" required>
                        </div>
                        <div class="form-group">
                            <textarea name="address" class="form-control" rows="3" cols="10" 
                                      placeholder="Enter the Delivery Addresss Here...." required></textarea>
                        </div>
                        <h6 class="text-center text-danger  lead">Select Shop Name</h6>

                         <div class="form-group">
                            <select name="shopname" class="form-control" required>
                                <option value="" selected disabled>-Select Shop -</option>
                                                        <?php
                         $q = "SELECT * FROM ownerregistration ";
                         $res = mysqli_query($conn,$q);

                         while($row = mysqli_fetch_assoc($res)){?>
                                 <option><?php echo $row['oshopname'];?></option>
                                 <?php }?>

                            </select>
                        </div><h6 class="text-center text-danger  lead">Select Payment Mode</h6>
                                                <div class="form-group">
                            <select name="pmode" class="form-control" required>
                                <option value="" selected disabled>-Select Payment Mode-</option>
                                <option value="cod">Cash On delivery</option>
                                <option value="netbanking">Net Banking</option>
                                  <option value="cards">Debit/Credit card</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input  type="submit" value="place order" class="btn btn-danger btn-block">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    <center>    <a href="products.php" class="btn btn-success mt-2 mb-2"><i class="fa fa-cart-plus"></i>
            &nbsp;&nbsp;Continue Shopping</a>    </center>
    
        
        
          <!-- Footer -->
        <footer class="page-footer font-small blue pt-4" style="background-color: black">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase text-info">Groferies</h5>
        <p class="text-primary">..............</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase text-danger">Useful Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase text-danger">Follow Us</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Facebook</a>
          </li>
          <li>
            <a href="#!">Youtube</a>
          </li>
          <li>
            <a href="#!">instagram</a>
          </li>
          <li>
            <a href="#!">Twitter</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 text-warning">© 2020 Copyright:
    <a href="https://mdbootstrap.com/">Groferies</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
        
        <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
     $("#placeOrder").submit(function(e){
         e.preventDefault();  //stop page referesh
         $.ajax({
             url:'action.php',
             method: 'post',
             data:$('form').serialize()+"&action=order",
             success: function(response){
                 $('#order').html(response);
             }
         });
     });
      
     load_cart_item_number();
      
      function load_cart_item_number(){
          $.ajax({
              url:'action.php',
              method:'get',
              data:{cartItem:"cart_item"},
              success:function(response){
                  $("#cart-item").html(response);
                  }
           });
      }
     });
    
</script>
    </body>
</html>
 
