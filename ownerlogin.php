<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head> <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head >
        <title>Owner Login</title>
        <script>    
       
      
            function check()
          {
        var uname=document.regform.ousername.value;
          var pass=document.regform.opassword.value;
          
          if(uname == "")
			{
				alert("Username should not be empty");
				return false;
			}
       if (pass == "")
			{
				alert("password should not be empty");
				return false;
			}
                    }
        </script>
    </head>
    <body style="background: radial-gradient(#fff,#ffd6d6);">
        
       
  
	<div class="container">
            <h2 class="text-center bg-warning"> E-GROFERRIES</h2>
            <h3 class="text-info">LOGIN</h3>
            <h4 class="text-danger">(FOR OWNER ONLY)</h4>
            <form action="ownerloginvaidation.php" method="post" onsubmit="return check()" class="form-group" name="regform">
			<label>Username:</label>
                        <input type="text" name="ousername" class="form-control username" placeholder="Enter Your Username">
                        <label>Shop-Name:</label>
                        <input type="text" name="oshopname" class="form-control username" placeholder="Enter Your shopname">
			<label>Password:</label>
                        <input type="password" name="opassword" class="form-control password" placeholder="Enter Your Password"><br>
			<button  class="btn btn-success" name="submit"> submit</button><br>
			<div class="text-success msg"></div>
		</form>
            <a href="ownerreg.php" class="text-danger btn ">Don't Have an Account</a><BR>
            <a href="index.php" class="text-info btn">For Customer Login Click here</a>

	</div>
    
        
        <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
