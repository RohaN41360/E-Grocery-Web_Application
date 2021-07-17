<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
 include 'connection.php';
     session_start()  ; 
     if (!isset($_SESSION['username'])) {
         header('location:index.php');
   }// put your code here
        ?>
<html>
    <head>
        <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"> 
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
         <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand " href="products.php">Groferies</a>

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
        <a class="nav-link active" href="checkout.php">checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Caccount.php">Account</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:28px"></i>
              <span id="cart-item" class="badge badge-danger"></span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

        <h3 class="text-success text-center">MY ORDERS</h3>
      <table class="table table-bordered" style="margin: 30px;">
    <thead>
      <tr>  
          <th>ID</th>
        <th>FROM</th>
        <th>EMAIL</th>
        <th>PHONE NUMBER</th>
        <th>PRODUCTS</th>
        <th>PAYMENT MODE</th>
        <th>ADDRESS</th>
        <th>SHOP NAME</th>
        <th>TOTAL AMOUNT</th>
      </tr>
    </thead>
        <?php
       include 'connection.php';
       $username = $_SESSION['username'];
       $sql = "SELECT  * FROM orders where ussername like '$username' order by id desc";
       $res = mysqli_query($conn, $sql);
       if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)):
            ?>
  
    <tbody>
      <tr>
        <td><?= $row['id']?></td>
        <td><?= $row['name']?></td>
        <td><?= $row['email']?></td>
        <td><?= $row['phone']?></td>
        <td><?= $row['products']?></td>
        <td><?= $row['pmode']?></td>
        <td><?= $row['address']?></td>
        <td><?= $row['shopname']?></td>
        <td><?= $row['amount_paid']?></td>
      </tr>
          <?php endwhile;}	
?>
    </tbody>
  </table>
  
        
       
    <center><a href="products.php" class="btn btn-success mb-3"><i class="fa fa-cart-plus"></i>
                                            &nbsp;&nbsp;Continue Shopping</a></center>
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
 <script>
        $("table").fadeOut("fast");
         $("table").fadeIn("slow");
       
        </script>
    </body>
</html>
