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
         
   }?>
<html>
    <head>
        <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        <h4 class="text-success text-center">Received Orders</h4>
        <table class="table table-bordered table-striped" style="margin: 30px;">
    <thead>
      <tr>  
          <th class="text-danger">ID</th>
          <th class="text-danger">FROM</th>
        <th class="text-danger">EMAIL</th>
        <th class="text-danger">PHONE NUMBER</th>
        <th class="text-danger">PRODUCTS</th>
        <th class="text-danger">PAYMENT MODE</th>
        <th class="text-danger">ADDRESS</th>
        <th class="text-danger">TOTAL AMOUNT</th>
      </tr>
    </thead>
        <?php
       include 'connection.php';
       $shopname= $_SESSION['oshopname'];
         //echo $shopname;
       $sql = "SELECT  * FROM orders where shopname like '$shopname' order by id desc";
       $res = mysqli_query($conn, $sql);
       if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)):
            ?>
        
    <tbody>
      <tr>
        <td><?= $row['id']?></td>
        <td><?= $row['name']?></td>
        <td><?= $row['email']?></td>
        <td><?= $row['phone']?></td>
        <td><?= $row['products']?></td>
        <td><?= $row['pmode']?></td>
        <td><?= $row['address']?></td>
        <td><?= $row['amount_paid']?></td>
      </tr>
            <?php endwhile;}	
?>
    </tbody>
  </table>
    <center> <a href="owner-home.php " class="btn btn-success">BACK</a></center>
        
        <script>
        $("table").fadeOut("fast");
         $("table").fadeIn("slow");
       
        </script>
    </body>
</html>
