<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
 include 'connection.php';
     session_start()  ; 
     if (!isset($_SESSION['ousername'])) {
         header('location:ownerlogin.php');
   } 
   $user = $_SESSION['ousername'];
   ?>
<html>
    <head>
        <meta charset="UTF-8">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
        <title>MY-PROFILE</title>
    </head>
    <body>
        
        <div class="conatiner" >
            <h2 class="text-center text-danger bg-warning">MY PROFILE</h2>
             
            <table class="table table-bordered text-center" style="margin: 30px;">
                <thead><tr>
                    <th>OWNER-ID</th>
                    <th>USERNAME</th>
                      <th>EMAIL-ID</th>
                       <th>SHOP-NAME</th>
                       <th>ADDRESS</th>
                       <th>TOTAL PRODUCTS IN YOUR STOCK</th></tr>
                </thead>
                  <?php 
                $a = "SELECT * FROM ownerregistration where ousername = '$user'";
                $b = mysqli_query($conn, $a);
                while($row = mysqli_fetch_assoc($b)):
                ?>
                <tbody>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['ousername']?></td>
                        <td><?=$row['oemailid']?></td>
                        <td><?=$row['oshopname']?></td>
                        <td><?=$row['oaddress']?></td>
                          <?php endwhile; ?>
                         <?php 
                $aa = "SELECT * from $user ";
                $bb = mysqli_query($conn, $aa);
               $cc = mysqli_num_rows($bb);
               if($cc > 0)
                ?>
               
                    <td><?php echo $cc;?></td>
                    </tr>
                </tbody>
  </table>
             <center> <a href="owner-home.php " class="btn btn-success">BACK</a></center>
        </div>
        
        
        
        
        
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
