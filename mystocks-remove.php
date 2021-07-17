<!DOCTYPE HTML>

<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">


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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" src="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
	 <div class="switch switch-blue">
      <input type="radio" class="switch-input" name="view2" value="week2" id="week2" checked>
      <label for="week2" class="switch-label switch-label-off">GLOBAL</label>
      <input type="radio" class="switch-input" name="view2" value="month2" id="month2">
      <label for="month2" class="switch-label switch-label-on">LOCAL</label>
      <span class="switch-selection"></span>

    </div>
   
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
      <a href="">ADD STOCKS</a>
      <a href="" >VIEW STOCKS</a>
      <a href="" class="active">REMOVE STOCKS</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">MANAGE ORDERS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ordersReceived.php">VIEW ORDERS</a>
      <a href="#">REVIEW/CANCEL ORDERS</a>
    </div>
  </div>

  <a href="#">SHOP HERE</a>
  <div align="right" class="dropdown">
    <button class="dropbtn">ACCOUNTS & MORE
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">MY PROFILE</a>
      <a href="#">OFFERS</a>
      <a href="#">PAYMENT OPTIONS</a>
      <a href="#">CHANGE PASSWORD</a>
    </div>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>

<div id="main">
      <div class="container">
        <header>
          <center><h2>MANAGE YOUR E-GROCERY BUSINESS WITH EASE</h2></center><br>
          <center><h2>REMOVE  STOCKS</h2></center>
        </header>

 <?php
         if(isset($_POST['delete'])) {
            $dbhost = 'localhost:3036';
            $dbuser = 'root';
            $dbpass = 'rootpassword';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
        
            $emp_id = $_POST['emp_id'];
            
            $sql = "DELETE FROM /*Enter here*/ WHERE emp_id = $emp_id" ;
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "Deleted stock successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
            <script src="addstocks.js"></script>
<body>
  
<div ng-app="invoice" class="" >
  <section ng-controller="InvoiceController">
  <table border="1px" class="ml-2 justify-content-center">
    <thead>
    <tr>
      <th>CATEGORY</th>
      <th>ID</th>
      <th>NAME</th>
    
    </tr>
  </thead>
  <tbody>
    <tr ng-repeat="item in invoice.items">
      <td><form action="/action_page.php">
  <label for="category">Choose a category</label>
  <select name="category" id="">
    <option value="vegetables">VEGETABLES</option>
    <option value="FRUITS">FRUITS</option>
    <option value=""></option>
    <option value=""></option>
  </select>
  <br><br>
</form></td>
      <td><input type="text" class="form-control" ng-model="item.id"></td>
      <td><input type="text" class="form-control" ng-model="item.name"></td>
     <td><button class="button" style="color: red" ng-click="remove($index)">Delete</button></td>

    </tr>
    
      <td><button  class="button" style="color: green" ng-click="add()">Add</button></td>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
                        <!--<td width = "100">Item name</td>
                        <td><input name = "emp_id" type = "text" 
                           id = "emp_id"></td>-->
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td > </td>
                        <td>
                           <center><input style="background-color: green" size="80" name = "delete" type = "submit" 
                              id = "delete" value = "Remove"></center>
                        </td>
                     </tr>
                     
                  </table>
               </form>
            <?php
         }
      ?>



<div id="copyright">
      <div class="container">
        BY GROUP B7- TCOA49, TCOA57, TCOA58, TCOA61
      </div>
    </div>

  </body>
</html>