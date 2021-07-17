<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

 <?php
     session_start()  ; 
     if (!isset($_SESSION['username'])) {
         header('location:index.php');
   }// put your code here
        ?>
<html>
    <head> <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <title></title>
    </head>
    <body>
        <div style="height: 70px;width: 100%;background: radial-gradient(orangered,white);">
             <div id="h2">
        <h2>WELCOME  <?php echo $_SESSION['username']; ?></h2>
        </div>
        <div id="h1">
            <a href="home.php" class="btn">HOME</a>
            <a href="products.php" class="btn">PRODUCTS</a>
            <a href="" class="btn">CONTACT</a>
            <a href="" class="btn">ABOUT</a>
            <a href="logout.php" class="btn">LOGOUT</a>
            <img src="images/cart (2).png" width="40px"/>
        </div>
        </div>
        

        
         <!-- single products details -->
         <div class="small-container" style="border:1px solid;">
             <div class="row" ">
                 <div class="co1-2" >
                     <img src="images/gingerpaste.png"  width="100%"alt=""/>
                 </div>
                 <div class="col-2" style="border:1px solid;">
                     <p>Paste</p>
                     <h1>Ginger Paste by Nilon's</h1>
                     <h4>50₹</h4>
                     <input type="number" value="1">
                     <a href="" class="btn">Add to Cart</a>
                     <h3>Product Details</h3>
                     <p>Best</p>
             </div>
             </div>
             
         </div>       
         
         <div class="small-container">
             <h2 class="titdle"></h2>
             
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
                     <img src="images/aashirwaad atta.jpg" alt="" width="250px"style="border:1px;border-style: solid;"/>
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
             
                 
            </div>
         
         <!-- offer-->
         
       
         <!-------------testimonial----------------->
         
         
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
    </body>
</html>

