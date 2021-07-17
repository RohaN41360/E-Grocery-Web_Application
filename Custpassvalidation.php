<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--> <?php
 
     session_start()  ; 
     if (!isset($_SESSION['username'])) {
         header('location:index.php');
   }// put your code here
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title> <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
       <?php  
        include 'connection.php'; 
//echo 'Connected successfully<br/>';  
  $cpwd = $_POST['cpwd'];
  $npwd = $_POST['npwd'];
$uname = $_SESSION['username'];


$sql = "update registration set rpassword=\"$npwd\"  where rusername='$uname'";  
if(mysqli_query($conn, $sql)){  
  echo"<h3 class='text-success text-center'>Your Password updated successfully</h3><br><a href='caccount.php' class='btn btn-success'>GO BACK</a>";  
}else{  
    echo"<h3 class='text-danger'>Could not update your Password</h3> ". mysqli_error($conn);  
}  
  
 
?> 
    </body>
</html>
