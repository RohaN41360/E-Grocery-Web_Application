<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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


$username=$_POST['ousername'];
$password=$_POST['opassword'];
$shopname=$_POST['oshopname'];

$u=" select * from ownerregistration where  ousername = '$username' && opassword='$password' && oshopname = '$shopname' ";
$result = mysqli_query($conn, $u);
$num = mysqli_num_rows($result);

if($num == 1)
{
  $_SESSION['ousername']=$username;
   $_SESSION['oshopname']=$shopname;
    header('location:owner-home.php');
}
else {
     echo "<div class='container col-sm-6'><div class='alert alert-danger text-center alert-dismissible mt-2'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Invalid Login Credentials </strong> 
</div>
<p class=' alert alert-danger text-center '>Please try again with Valid Login Credentials</p>
<center><a href='ownerlogin.php' class='btn btn-success'>Back</a></center></div>";
}


        ?>
         <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script
    </body>
</html>
