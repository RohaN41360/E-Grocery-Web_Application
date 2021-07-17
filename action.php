<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

 include 'connection.php';
session_start();

$username=$_SESSION['username'];

        
        if(isset($_POST['pid'])){
            $pid =$_POST['pid'];
             $pname =$_POST['pname'];
              $pprice =$_POST['pprice'];
               $pimage =$_POST['pimage'];
                $pcode =$_POST['pcode'];
                  $pqty =1;
                  
                $stmt = $conn->prepare("SELECT product_code FROM $username WHERE product_code=?");
                $stmt->bind_param("s",$pcode);
                $stmt->execute();
                $re= $stmt->get_result();
                $r = $re->fetch_assoc();
                $code=$r['product_code'];
                 
                 if(!$code){
            $query = $conn->prepare("INSERT INTO $username (product_name,product_price,product_image,qty,total_price,product_code)
                VALUES (?,?,?,?,?,?) ");
                  $query->bind_param("sssiss",$pname,$pprice,$pimage,$pqty,$pprice,$pcode);  
                  $query->execute();
                 echo"<div class='alert alert-success alert-dismissible mt-2'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Item added in your Cart </strong> 
</div>"
                ;
                 }
 else {
     echo "<div class='alert alert-danger alert-dismissible mt-2'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Item already added in your Cart </strong> 
</div>";
                      
 }
}

        if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item'){
            $stmt = $conn->prepare("SELECT * FROM $username ");
            $stmt->execute();
            $stmt->store_result();
            $rows = $stmt->num_rows;
            echo $rows;
        }
        
        
        if(isset($_GET['remove'])){
            $id=$_GET['remove'];
            // $stmt = $conn->prepare("DELETE FROM $username WHERE id =?");
            // $stmt->bind_param("i",$id);
            // $stmt->execute();

            $a = "delete from $username where id = '$id' ";
            $b = mysqli_query($conn,$a);
            
            $_SESSION['showAlert']= 'block';
             $_SESSION['message']= 'Item Removed from Cart';
             header('location:cart.php');
        }
        
        if(isset($_GET['clear'])){
            // $stmt=$conn->prepare("DELETE FROM $username");
            // $stmt->execute();
            $a = "delete from $username  ";
            $b = mysqli_query($conn,$a);
            $_SESSION['showAlert']= 'block';
             $_SESSION['message']= ' All Item Removed from Cart';
            header('location:cart.php');
        }
        
        if(isset($_POST['qty'])){
            $qty =$_POST['qty'];
            $pid =$_POST['pid'];
            $pprice = $_POST['pprice'];
            
            $tprice = $qty*$pprice;
            
            // $stmt = $conn->prepare("UPDATE $username SET qty=?, total_price=? WHERE id=?");
            // $stmt->bind_param("isi",$qty,$tprice,$pid);
            // $stmt->execute();
            $a = "update $username set qty='$qty',total_price='$tprice' where id='$pid'";
            $b = mysqli_query($conn,$a);
        }
        
        if(isset($_POST['action']) && isset($_POST['action']) == 'order'){
            $name = $_POST['name'];
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $products = $_POST['products'];
            $grand_total = $_POST['grand_total'];
            $address = $_POST['address'];
            $pmode = $_POST['pmode'];
            $shopname = $_POST['shopname'];
            
            $data = '';
            
            $stmt = "INSERT INTO orders (ussername,name,email,phone,address,pmode,products,amount_paid,shopname) "
                    . " VALUES ('$uname','$name','$email','$phone','$address','$pmode','$products','$grand_total','$shopname')";
            $res = mysqli_query($conn, $stmt);
            
            $data .='<div class="text-center">'
                    . '<h1 class="display-4 mt-2ctext-danger">Thank You!</h1>'
                    . '<h2 class="text-success">Your Order Placed Successfully</h2>'
                    .'<h4 class="bg-danger text-light rounded p-2">Items Purchased: '.$products.'</h4>'
                    .'<h4>Your Name : '.$name.'</h4>'
                    .'<h4>Your Email : '.$email.'</h4>'
                    .'<h4>Your Phone : '.$phone.'</h4>'
                    .'<h4>Total Amount Paid : '.number_format($grand_total,2).'</h4>'
                    .'<h4>Payment Mode: '.$pmode.'</h4>'
                    .'<h4>from : '.$shopname.'</h4>'
                    . '</div>';
            
            echo $data;?>
      
        <?php }
        
        
        
        ?>

	