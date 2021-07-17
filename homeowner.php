<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
     session_start()  ; 
     if (!isset($_SESSION['ousername'])) {
         header('location:index.php');
   }// put your code here
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Owner Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" src="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <meta charset="UTF-8">  
    </head>
    <body>
         
        <h3>WELCOME  <?php echo $_SESSION['ousername']; ?></h3>
          <a href="ordersReceived.php" class="btn btn-success">SEE Orders</a>
             <a href="logout.php" class="btn btn-danger">LOGOUT</a>
              <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
