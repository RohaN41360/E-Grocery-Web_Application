<!DOCTYPE html>
 <?php
 
     session_start()  ; 
     if (!isset($_SESSION['username'])) {
         header('location:index.php');
   }// put your code here
        ?>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
    <h2 class="text-danger text-center">Change Password</h2>
  <form action="Custpassvalidation.php" method="post" name="regform" id="myform" onsubmit="return check()">
    <div class="form-group">
      <label for="cpwd"></label>
      <input type="hidden" class="form-control" id="" placeholder="Enter Current Password" name="cpwd">
    </div>
    <div class="form-group">
      <label for="pwd">New Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter New  password" name="npwd">
    </div>
      
    
      <button type="submit" class="btn btn-success btnsubmit">Submit</button>&nbsp;
      <a href="Caccount.php" class="btn btn-warning">back</a>
    
  </form>
  <div class="container text-success" id="message"></div>
</div>
    <script>
                var cpwd=document.regform.cpwd.value;
          var npwd=document.regform.npwd.value;
          function check()
          {
          
        
       if (npwd == " ")
			{
				alert("password should not be empty");
				return false;
			}
                    }
        </script>

        
   
        
        
</body>
</html>