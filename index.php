                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>    
        function play()
        {
            var audio= document.getElementById('mytone');
            audio.play();
        }
        
      
            function check()
          {
        var uname=document.regform.username.value;
          var pass=document.regform.password.value;
          
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
  <!--  <style>
body {
  background-image: url('images/bck.jfif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>-->
    <audio id="mytone">
        <source src="images/tdn.mp3" type="audio/mpeg">
        Your browser does not support the <code>audio</code> tag.
    </audio>
	
	<div class="container">
            <h2 class="text-center bg-warning"> E-GROFERRIES</h2>
            <h3 class="text-info">LOGIN</h3>
            <h4 class="text-danger">(FOR CUSTOMER ONLY)</h4>
            <form action="validlogin.php" method="post" onsubmit="return check()" class="form-group" name="regform">
			<label>Username:</label>
                        <input type="text" name="username" class="form-control username" placeholder="Enter Your Username">
			<label>Password:</label>
                        <input type="password" name="password" class="form-control password" placeholder="Enter Your Password"><br>
                        <button  class="btn btn-success" id="btn" name="submit" onclick="return play()">Login</button><br>
                        
		</form><div class="text-danger msg" id=""></div>
            <a href="type.php" class="text-danger btn ">Don't Have an Account</a><BR>
            <a href="ownerlogin.php" class="text-info btn">For Owner Login Click here</a>

	</div>                                                                                                                                                                                                                                                                                                                                                                  


            <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 
<!--     <script>
    $(document).ready(function(){
       $('#btn').click(function(e){
          // e.preventDefault();
         var $form = $(this).closest(".form-group");
          var username = $form.find(".username").val();
          var password = $form.find(".password").val();
          data = {username:username,password:password},
          $.ajax({
                      url: 'validlogin.php',
                      type:'post',
                      
                      data:JSON.stringify(data),
                      success:function(response){
                          $(".msg").html(response);
                        
                      },
                      });
       }) ;
    });
    
    </script>-->