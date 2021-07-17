<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php 
//include 'connection.php';
session_start();
$username=$_SESSION['username'];
?>
<html>
    <head> <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" src="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Cart</title>
    </head>
    <body>
       
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="products.php">Grocery</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link " href="products.php">Products</a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Caccount.php">Account</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:28px"></i>
              <span id="cart-item" class="badge badge-danger"></span></a>
              <li class="nav-item">
        <a class="nav-link active" href="logout.php">Logout</a>
      </li>
      </li>
    </ul>
  </div>
</nav>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div  style="display:<?php if(isset($_SESSION['showAlert'])){echo$_SESSION['showAlert'];}
                    else{echo 'none';} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><?php if(isset($_SESSION['message'])){echo$_SESSION['message'];} unset($_SESSION['showAlert']); ?></strong> 
                      </div>
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                              
                            <tr>
                                <td colspan="7">
                                    <h4 class="text-center text-info m-0">Products in your Cart!</h4></td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>
                                    <a href="action.php?clear=all" class="badge-danger badge p-1" 
         onclick="return confirm('Are you Sure want to clear your Cart?')"><i class="fa fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                                </th>
                             </tr>
                            </thead>
                            <tbody>
                                <?php 
                            require 'connection.php';
                            $stmt = $conn->prepare("SELECT * FROM $username");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            $grand_total = 0;
                            while ($row= $result->fetch_assoc()):
                                ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                            <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                    <td><img src="<?=$row['product_image']?>" width="50"></td>
                                    <td><?=$row['product_name']?></td>
                                    <td>₹&nbsp;&nbsp;<?= number_format($row['product_price'],2);?></td>
                                    <input type="hidden" class="pprice" value="<?=$row['product_price'] ?>">
                                    <td>
                                        <input type="number" class="form-control itemQty" value="<?=$row['qty']?>" style="width: 75px">
                                    </td>
                                    <td>₹&nbsp;&nbsp;<?= number_format($row['total_price'],2);?></td>
                                    <td><a href="action.php?remove=<?=$row['id']?>" class="text-danger lead"
                                           onclick="return confirm('Are you sure want to remove this item ')">
                                            <i class="fa fa-trash"></i></a></td>
                                </tr>
                                <?php $grand_total+=$row['total_price'];?>
                                <?php endwhile;?>
                                <tr>
                                    <td colspan="3"><a href="products.php" class="btn btn-success"><i class="fa fa-cart-plus"></i>
                                            &nbsp;&nbsp;Continue Shopping</a></td>
                                            <td colspan="2"><b>Grand Total</b></td>
                                            <td><b>₹&nbsp;&nbsp;<?= number_format($grand_total,2);?></b></td>
                                            <td><a href="checkout.php" class="btn btn-info <?= ($grand_total>1)?"":"disabled";?>"  >
                                                    <i class="fa fa-credit-card"></i>&nbsp;&nbsp;Checkout</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
                      
    
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
      
      $(".itemQty").on('change',function(){
          var $el = $(this).closest('tr');   //tr beccause all i/p  are int tr tag
          var pid = $el.find(".pid").val();
          var pprice = $el.find(".pprice").val();
          var qty = $el.find(".itemQty").val();
          location.reload(true);    
          $.ajax({
              url:'action.php',
              method:'post',
              cache: false,
              data:{qty:qty,pid:pid,pprice:pprice},
              success: function(response){
                  
                  console.log(response);
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
    
   
       $("img").hide("slow");
   $("img").show("fast");
   $("h1").hide("slow");
   $("h1").show("fast");
   

    
</script>

    </body>
</html>
 