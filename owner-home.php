<!DOCTYPE HTML>
 <?php
 include 'connection.php';
     session_start()  ; 
     if (!isset($_SESSION['ousername'])) {
         header('location:ownerlogin.php');
   }// put your code here
  $username=$_SESSION['ousername'];
   $query = "create table $username (id INT(11) AUTO_INCREMENT,product_name VARCHAR(100),product_price VARCHAR(20),product_image VARCHAR(200),"
           . "product_code VARCHAR(100), PRIMARY KEY(id) ) ";
   $q= mysqli_query($conn, $query);
   
        ?>
<html>
    <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">


<!-- Back to top button -->
<a id="button"></a>
	
		<title>E-grocery(Owners space)</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script  src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
 
     <script src="js/addstocks.js"></script>
  
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/button.js"></script>
   
		<noscript>
			
			
      <link rel="stylesheet" href="css/button.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
     </head>	 

     <!--Global & Local button
	 <div class="switch switch-blue">
      <input type="radio" class="switch-input" name="view2" value="week2" id="week2" checked>
      <label for="week2" class="switch-label switch-label-off">GLOBAL</label>
      <input type="radio" class="switch-input" name="view2" value="month2" id="month2">
      <label for="month2" class="switch-label switch-label-on">LOCAL</label>
      <span class="switch-selection"></span>

    </div>-->
   
	<body class="homepage">
  <h2 style="color: white">WELCOME  <?php echo $_SESSION['ousername']; ?></h2>

	<!-- Header -->

		<div id="header">
                    
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1 align="left"><strong><a href="#">E-GROCERY(OWNERS SPACE)</a></strong></h1>
						<span></span>
					</div>
				</div>

				
				<!-- Nav -->
				
					<div class="topnav" id="myTopnav">
                                          
                                          <!--  <a href="">Home</a>-->
                                            
  <div class="dropdown">
    <button class="dropbtn"><p class="active">MY STOCKS</p>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="addstocks.php" class="active">ADD STOCKS</a>
      <a href="mystocks-view.php">VIEW STOCKS</a>
    <!--  <a href=" ">REMOVE STOCKS</a>-->
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">MANAGE ORDERS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ordersReceived.php">VIEW ORDERS</a>
      <!<!--  <a href="#">REVIEW/CANCEL ORDERS</a> --> 
    </div>
  </div>

 
  <div align="right" class="dropdown">
    <button class="dropbtn">ACCOUNTS & MORE
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ownerprofile.php">MY PROFILE</a>
 
      <a href="ownerchangepass.php">CHANGE PASSWORD</a>
    </div>
  </div>
   <a href="ownerlogout.php" class="btn btn-danger">LOGOUT</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>

<div id="main">
      <div class="container">
        <header>
          <center><h2>MANAGE YOUR E-GROCERY BUSINESS WITH EASE</h2></center>
        </header>




<script src="addstocks.js"></script>







    <div id="copyright">
      <div class="container">
        BY GROUP B7- TCOA49, TCOA57, TCOA58, TCOA61
      </div>
    </div>

  </body>
</html>