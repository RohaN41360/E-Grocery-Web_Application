<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
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
/*
     mysqli_select_db($conn,"data");
  
$sql = 'SELECT * FROM ownerregistration';
  //$sql = 'SELECT * FROM login';
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo " <select>{$row['id']}.
          <option> {$row['oshopname']}</option></select><br>
          ";
} //end of while  
}else{  
echo "0 results";  
}*/ ?>
