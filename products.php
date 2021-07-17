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
    <head> <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" src="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title>products in AScending</title>
    </head>
    <body><script>
        function play()
        {
            var audio= document.getElementById('mytone');
            audio.play();
        }
         function playc()
        {
            var audio= document.getElementById('mytonec');
            audio.play();
        }
        </script>
       <audio id="mytone">
      <source src="images/took.mp3" type="audio/mpeg">
        Your browser does not support the <code>audio</code> tag.
    </audio>
         <audio id="mytonec">
      <source src="images/addtocart.mp3" type="audio/mpeg">
        Your browser does not support the <code>audio</code> tag.
    </audio>
       
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="home.php" >Groferies</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto" onmouseover="play()">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="products.php">Products</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Caccount.php">Account</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:28px"></i>
              <span id="cart-item" class="badge badge-danger"></span></a>
              <li class="nav-item">
        <a class="nav-link active" href="logout.php">Logout</a>
      </li>
      </li>
    </ul>
  </div>
</nav>
        <div class="dropdown">
    <button class="btn btn-default dropdown-toggle btn-in" type="button" data-toggle="dropdown">A to Z
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="prodASC.php">A to Z</a></li>
        <li><a href="prodveg.php">Vegetables</a></li>
      <li><a href="prodfruits.php">Fruits</a></li>
      
    </ul>
  </div>
</div>
        
        <div class="container">
            <div id="message"></div>
            <div class="row mt-2 pb-3">
                <?php 
                
                
                $stmt = $conn->prepare("select * from products  ");
              $stmt->execute();
               $resul= $stmt->get_result();
                 while($row = $resul->fetch_assoc()):
                 ?>
                    <div class=" col-sm-6 col-md-4 col-lg-3 mb-2">
                       
                    <div class="card-deck">
                        <div class="card p-2 border-secondary mb-2">
                            <img src="<?= $row['product_image']; ?>" class="card-img-top" height="250px">
                            <div class="card-body p-1"> 
                            <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
                            <h5 class="card-text text-center text-danger">₹&nbsp;&nbsp;<?= number_format($row['product_price'],2)?>/-</h5> 
                            </div> 
                            <div class="card-footer p-1">
                                <form action="" class="form-submit">
                                    <input type="hidden" class="pid" value="<?= $row['id']?>">
                                    <input type="hidden" class="pname" value="<?= $row['product_name']?>">
                                     <input type="hidden" class="pprice" value="<?= $row['product_price']?>">
                                      <input type="hidden" class="pimage" value="<?= $row['product_image']?>">
                                       <input type="hidden" class="pcode" value="<?= $row['product_code']?>">
                                       <button  class="btn btn-info btn-block addItemBtn" onclick="playc()" ><i class="fa fa-cart-plus"> 
                                           </i>&nbsp;&nbsp;Add to Cart</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
               <?php endwhile; ?>
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
      $(".addItemBtn").click(function(e){
          e.preventDefault();               //stop refreshing page when btn  is clicked
          var $form = $(this).closest(".form-submit");
          var pid = $form.find(".pid").val();
          var pname = $form.find(".pname").val();
          var pprice = $form.find(".pprice").val();
          var pimage = $form.find(".pimage").val();
          var pcode = $form.find(".pcode").val();
                  // send request using ajax to server
                  $.ajax({
                      url: 'action.php',
                      method:'post',
                      data:{pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
                      success:function(response){
                          $("#message").html(response);
                          window.scrollTo(0,0);
                          load_cart_item_number();
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
   $("h1").fadeOut("slow");
   $("h1").fadeIn("fast");
   
</script>
    </body>
</html>
