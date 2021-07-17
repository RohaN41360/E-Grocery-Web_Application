<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head> <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>Customer Registration Form</title>
        <script>
        function validate(){
        var em = document.regform.remailid.value;
        var un = document.regform.rusername.value;
        var pwd = document.regform.rpassword.value;
        var add = document.regform.raddress.value;
       
       if(em == "")
			{
				alert("Email id  should not be empty");
				return false;
			}
       if (un == "")
			{
				alert("Username should not be empty");
				return false;
			}
        if(pwd == "")
			{
				alert("Password should not be empty");
				return false;
			}
        if(add == "")
			{
				alert("Address should not be empty");
				return false;
			}
                        
                    }
        </script>
    </head>
    <body style="background: radial-gradient(#fff,#ffd6d6);">
       <div class="container">
        <h2 class="text-center  bg-warning"> E-GROFERRIES</h2>
            <h3 class="text-info">REGISTRATION-FORM </h3>
            <h4 class="text-danger">(FOR CUSTOMER ONLY)</h4>
   
            <form name="regform" class="form-group" action="regphp.php" method="post" onsubmit="return validate()">
              
        <label>EMAIL-ID:</label>
        <input  type="text" class="form-control" name="remailid" size="20" placeholder="Enter your Email-id">
         
        <label>USERNAME:</label>
        <input  type="text"  class="form-control"name="rusername" placeholder= "Enter A Unique Username">
    
        <label>PASSWORD:</label>
        <input  class="form-control"type="password" name="rpassword" placeholder="Enter Your Password">

        <label>ADDRESS:</label>
        <input class="form-control"  type="text" name="raddress" placeholder="Enter Your Address"><br>
 <input type="reset" class="btn btn-primary" value="Reset" >
                <input type="submit" class="btn btn-success" value="Submit" >
        </form>
       </div>
                    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
<!-- 
                -->