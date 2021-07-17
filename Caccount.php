<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title> <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        <a class="nav-link " href="checkout.php">checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="Caccount.php">Account</a>
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
        <div class="">
            <a href="home.php" class="btn btn-outline-info">Home</a><br><br>
            <a href="Chistory.php" class="btn btn-outline-success">My Orders</a><br><br>
            <a href="Custpasschange.php" class="btn btn-outline-danger">Change Password</a><br><br>
        </div>
                <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
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
</script>
    </body>
</html>
