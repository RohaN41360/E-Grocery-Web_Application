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
  <a href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn"><p>MY STOCKS</p>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="mystocks-add.php">ADD STOCKS</a>
      <a href="mystocks-view.php" >VIEW STOCKS</a>
      <a href="mystocks-remove.php">REMOVE STOCKS</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn"> <p class="active">MANAGE ORDERS</p>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="vieworders.php" class="active">VIEW ORDERS</a>
      <a href="revcanorders.php">REVIEW/CANCEL ORDERS</a>
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
          <center><h2>VIEW ORDERS</h2></center>
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
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "company");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, username, password FROM login";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>




<div id="copyright">
      <div class="container">
        BY GROUP B7- TCOA49, TCOA57, TCOA58, TCOA61
      </div>
    </div>

  </body>
</html>