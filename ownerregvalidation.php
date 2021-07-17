<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--> <?php/*
     session_start()  ; 
     if (!isset($_SESSION['ousername'])) {
         header('location:index.php');
   }*/?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        session_start();
       // header('location:type.php');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "data";
// Create connection

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

$oemailid=$_POST['oemailid'];
$ousername=$_POST['ousername'];
$opassword=$_POST['opassword'];
$oshopname=$_POST['oshopname'];
$oaddress=$_POST['oaddress'];

$e=" select * from ownerregistration where oemailid = '$oemailid'";
$u=" select * from ownerregistration where ousername = '$ousername'";
$_SESSION['shopname'] = $oshopname;
$result1 = mysqli_query($conn, $e);
$result2 = mysqli_query($conn, $u);
$num1 = mysqli_num_rows($result1);
$num2 = mysqli_num_rows($result2);
//echo $oshopname;
if($num1 == 1)
{
    
    echo " <div class='try1' style='border: 4px; border-style: solid;border-color: black; "
    . "background-color:orangered;' ><h1>Email id  already exist<br> please try another Email-id </h1></div>";
}
else if($num2 == 1)
{
    echo" <div class='try1' style='border: 4px; border-style: solid;border-color: black; "
    . "background-color:orangered;' ><h1><center>Username already taken<br> please try another username </center></h1></div>";
}
 else {
$reg ="INSERT INTO ownerregistration(`oemailid`, `ousername`, `opassword`, `oshopname`,`oaddress`)"
        . " VALUES ('$oemailid', '$ousername', '$opassword','$oshopname', '$oaddress') "; 
mysqli_query($conn, $reg);
echo"<div class='try1' style='border: 4px; border-style: solid;border-color: black; "
    . "background-color:#5EE191;' ><h1><center>You Have Registered Successfully As A Owner<br>Now Login by Username and Password</center> </h1></div>";
}?>
        
        <h3><a href="ownerlogin.php" class="text-center">Go To Login Page</a>  </h3>
        <h3><a href="ownerreg.php" class="text-center">Back</a>  </h3>
    </body>
</html>
