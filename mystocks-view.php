<!DOCTYPE HTML>

 <?php
     session_start()  ; 
     if (!isset($_SESSION['ousername'])) {
         header('location:ownerlogin.php');
         include 'connection.php';
   }?>
<html>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
     

<!-- Back to top button -->
<a id="button"></a>
	<head>
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
	
   
	<body class="homepage">


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
                                            <a href="owner-home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn"><p class="active">MY STOCKS</p>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="addstocks.php">ADD STOCKS</a>
      <a href="" class="active">VIEW STOCKS</a>
     <!-- <a href="">REMOVE STOCKS</a>-->
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">MANAGE ORDERS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ordersReceived.php">VIEW ORDERS</a>
      <!--<a href="">REVIEW/CANCEL ORDERS</a>-->
    </div>
  </div>

 
  <div align="right" class="dropdown">
    <button class="dropbtn">ACCOUNTS & MORE
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ownerprofile.php">MY PROFILE</a>
     
      <a href="#">CHANGE PASSWORD</a>
    </div>
  </div>
   <a href="ownerlogout.php" class="btn ">LOGOUT</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>

<div id="main">
      <div class="container">
        <header>
          <center><h2>MANAGE YOUR E-GROCERY BUSINESS WITH EASE</h2></center><br>
          <center><h2 style="color:red">MY STOCKS</h2></center>
        </header>
</head>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>

    <table >
        <thead> 
        <th>PRODUCT-ID</th>
        <th>PRODUCT-NAME</th>
        <th>PRODUCT-PRICE</th>
        <th>PRODUCT-IMAGE</th>
        <th>PRODUCT-CODE</th>
        </thead>
    
<tbody>
    <?php
      include 'connection.php';
     $username = $_SESSION['ousername'];
        $shopname = $_SESSION['oshopname'];
    $a = "SELECT * FROM $username";
    $run = mysqli_query($conn, $a);
    while($row=mysqli_fetch_assoc($run)):
 ?>
    <tr><td><?= $row['id']?></td>
    <td><?= $row['product_name']?></td>
    <td>₹<?= number_format($row['product_price'],2)?></td>
    <td><img src="<?= $row['product_image']?>" height="100px"/></td>
    <td><?= $row['product_code']?></td></tr>
</tbody>
<?php endwhile;?>
</table>

<div id="copyright">
      <div class="container">
        BY GROUP B7- TCOA49, TCOA57, TCOA58, TCOA61
      </div>
    </div>

  </body>
</html>