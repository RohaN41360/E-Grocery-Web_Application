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
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" src="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <meta charset="UTF-8">
         <link href="style.css" rel="stylesheet">
          <style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #EE5B28;} 
.button2 {background-color: #008CBA;} /* Blue */
</style>
<link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Home</title>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-md bg-danger navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="home.php" >WELCOME  <?php echo $_SESSION['username']; 
      ?></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="home.php">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="products.php">Products</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link active" href="checkout.php">checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="Caccount.php">Account</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:28px"></i>
              <span id="cart-item" class="badge badge-danger"></span></a>
              <li class="nav-item">
        <a class="nav-link active " href="logout.php">Logout</a>
      </li>
      </li>
    </ul>
  </div>
</nav>
        <div class="custom" style="background: radial-gradient(#fff,#ffd6d6);">
            <center>
                <h1 style="font-size: 40px;">Get Groceries At Lowest Prices On Groferies With Extra Savings On Bank & Wallet Offers. 
                <br>Extra Product Discounts & Priority Delivery With Groferies Smart Bachat Club Membership. </h1>
                <p style="font-size: 32px;">Up to 50% off on Beverage. Up to 89%off PersonalCare. Up to 54% off on Snacks.
‎Up to 72% Off on Grocery · ‎Up to 50% off on Fruits · ‎Up to 50% on Snacks</p>
                <img src="images/tenperc.jpg" width="30%"/>
                <img src="images/twentyoff.jpg" width="30%"/>
                <img src="images/save.jpg" alt="" width="30%"/>
            </center> </div>
        <h3 class="text-primary text-center bg-warning text-uppercase">to buy the products go to the products section</h3>
        <!-- featured categories--> 
        
        <div class="categories">
            <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/dettolpack4.jpg" alt="" />
                </div>
                <div class="col-3">
                    <img src="images/sunflower oil.jpg" alt=""/>
                </div>
                <div class="col-3">
                    <img src="images/ghee.jpg" alt=""/>
                </div>
            </div>
            </div>
        </div>
        
         <!-- featured products-->
         
         <div class="small-container">
             <h2 class="title">Featured Products</h2>
             <div class="row">
                 <div class="col-4">
                     <img src="images/basmati rice.jpg" alt="" width="250px"style="border:1px;border-style: solid;"/>
                     <h4>Basmati Rice</h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-o"></i>
                     </div>
                     <p>90₹</p>
                 </div>
                 <div class="col-4" style="transistion:transform 0.5s;">
                     <img src="images/aashir atta.jpg" alt="" width="250px"style="border:1px;border-style: solid;"/>
                     <h4>Aashirwaad Chakki Atta</h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-half-o"></i>
                     </div>
                     <p>190₹</p>
                 </div>
                 <div class="col-4">
                     <img src="images/besan.jpg" alt="" width="215px"style="border:1px;border-style: solid;"/>
                     <h4>Besan Flour</h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-half-o"></i>
                     </div>
                     <p>40₹</p>
                 </div>
                 <div class="col-4">
                     <img src="images/maida.jpg" alt="" width="250px"style="border:1px;border-style: solid;"/>
                     <h4>Maida flour</h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-o"></i>
                     </div>
                     <p>50₹</p>
                 </div>
            </div>
             <h2 class="title">Latest Products</h2>
              <div class="row">
                 <div class="col-4">
                     <img src="images/almonds.jpg" alt="" width="250px"style="border:1px;border-style: solid;"/>
                     <h4>Almonds</h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-o"></i>
                     </div>
                     <p>90₹</p>
                 </div>
                 <div class="col-4" style="transistion:transform 0.5s;">
                     <img src="images/poha.jpg" alt="" width="240px"style="border:1px;border-style: solid;"/>
                     <h4>Poha </h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-half-o"></i>
                     </div>
                     <p>190₹</p>
                 </div>
                 <div class="col-4">
                     <img src="images/tatasalt.jpg" alt="" width="250px"style="border:1px;border-style: solid;"/>
                     <h4>TATA Salt</h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-half-o"></i>
                     </div>
                     <p>40₹</p>
                 </div>
                 <div class="col-4">
                     <img src="images/jaggery.jpg" alt="" width="250px"style="border:1px;border-style: solid;"/>
                     <h4>Jaggery</h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-o"></i>
                     </div>
                     <p>50₹</p>
                 </div>
            </div>
              <div class="row">
                 <div class="col-4">
                     <img src="images/meatmasala.jpg" alt="" width="250px"style="border:1px;border-style: solid;"/>
                     <h4>Meat Masala</h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-o"></i>
                     </div>
                     <p>90₹</p>
                 </div>
                 <div class="col-4" style="transistion:transform 0.5s;">
                     <img src="images/redchilli.jpg" alt="" width="220px"style="border:1px;border-style: solid;"/>
                     <h4>Red Chilli Powder</h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-half-o"></i>
                     </div>
                     <p>190₹</p>
                 </div>
                 <div class="col-4">
                     <img src="images/turmericpowder.jpg" alt="" width="250px"style="border:1px;border-style: solid;"/>
                     <h4>Turmeric Powder</h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-half-o"></i>
                     </div>
                     <p>40₹</p>
                 </div>
                 <div class="col-4">
                     <img src="images/garammasala.jpg" alt="" width="160px"style="border:1px;border-style: solid;"/>
                     <h4>Garam Masala</h4>
                     <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-o"></i>
                     </div>
                     <p>50₹</p>
                 </div>
            </div>
         </div>
         <!-- offer-->
         
         <div class="offer" style="background: radial-gradient(#fff,#ffd6d6);">
             <div class="small-container">
                 <div class="row">
                     <div class="col-2"> 
                         <img src="images/dettolhandw.jpg"   style="float:left" width="300px;"class="offer-img" />
                         <p style="margin:20px;">Excusively Available On Groceries</p>
                         <h1 style="font-size:50px">Dettol HandWash</h1>
                         <small style="font-size: 15px;">Use Dettol's Original Germ Protection Handwash Liquid Soap pH balanced formula
                              every day and keep your hands hygienically clean and refreshed. Dettol handwash also contains more than 85% 
                             naturally derived ingredients with no TCC & Triclosan, 
                             giving another healthy reason for hand washing whenever in need.</small><br>
                         <a href="" class="btn">Buy Now &#8594</a>
                     </div>
                    </div>
             </div>
         </div>
         <!-------------testimonial----------------->
         <div class="testimoninal">
             <div class="small-container">
                 <div class="row">
                     <div class="col-3">
                           <i class="fa fa-quote-left" ></i>
                         <p>Hi everyone.
                                I have been Ordering Groceries on Groferies.com & on the since the last 2 & half years.
                                I believe its a Comfortable way to Shop Quality Groceries from the Comfort of My Home. 
                                The Grofers App is much more user friendly & easier to use then the web version.
                                 I have always Suspected that Grofers does try to 
                                Push Certain Brands on their platform, meaning, for eg, there might not exactly be an 
                                Refined Oil brand Available with them & you are compelled to buy n try another because of the discounts..</p>
                         <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-half-o"></i>
                         </div>
                         <img src="images/p1.png"  alt=""/>
                         <h3>Omkar </h3>
                     </div>
                     <div class="col-3">
                           <i class="fa fa-quote-left" ></i>
                         <p>Hi everyone.
                                I will be sharing my honest review and my experience of using this 
                                which I am using for a couple of years to buy all my essentials, grocery,
                                snacks etc that's Grofers. It's an app which contains different types of 
                                items like all items related to snacks, pulses, rice, flour,
                                some fashion and electronics items recently added.
                                A very reliable app and a very good app to use. 
                             Order online and all the things will be delivered to you at the doorstep.</p>
                         <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-o"></i>
                        </div>
                         <img src="images/p3.png" alt=""/>
                         <h3>Tejaswi Kashyapi</h3>
                     </div>
                     <div class="col-3">
                           <i class="fa fa-quote-left" ></i>
                         <p>Hi everyone.
                                It is best  for ordering groceries
                                    I am using it since last 1.5 year but no any complaints till now
                                    I order groceries every month
                                    Product quality is excellent
                                    Product quality is excellentlyProduct quality is excellentlyProduct quality is excellentlyProduct quality is excellentProduct quality is excellent
                                    Delivery time is perfect
                                    One time there is one missing item in my order and I register complaint about it and money is refunded immidieatly
                                     Customer service is excellent.</p>
                         <div class="rating">
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star" ></i>
                         <i class="fa fa-star-half-o"></i>
                         </div>
                         <img src="images/p2.png" alt=""/>
                         <h3>Jhonny</h3>
                     </div>
                 </div>
             </div>
         </div>
         
         <!--------------brands-------->
     <!--    <div class="brands">
             <div class="small-container">
                 <div class="row">
                     <div class="col-5">
                         
                     </div>
                 </div>
             </div>
         </div>  -->
     <!---footer------->
     <div class="footer">
         <div class="row">
             <div class="footer-col-1">
                 <h3>Useful Links</h3>
                 <ul>
                     <li>Coupons</li>
                     <li>Blog Post</li>
                     <li>Return Policy</li>
                     <li>Join Affiliate</li>
                 </ul>
             </div>
             <div class="footer-col-2">
                 <h3>Follow Us</h3>
                 <ul>
                     <li>Facebook</li>
                     <li>Twitter</li>
                     <li>Instagram</li>
                     <li>Youtube</li>
                 </ul>
             </div>
         </div><hr>
         <p class="copyright">Copyright 2020</p>
     </div>
             <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script>
       $("img").hide("slow");
   $("img").show("fast");
   $("h1").hide("slow");
   $("h1").show("fast");
   $("h2").hide("slow");
   $("h2").show("fast");
   
    load_cart_item_number();
      
      function load_cart_item_number(){
          $.ajax({
              url:'action.php',
              method:'get',
              data:{cartItem:"cart_item"},
              success:function(response){
                  $("#cart-item").html(response);
                  },
           });
      };
   </script>
    </body>
</html>

