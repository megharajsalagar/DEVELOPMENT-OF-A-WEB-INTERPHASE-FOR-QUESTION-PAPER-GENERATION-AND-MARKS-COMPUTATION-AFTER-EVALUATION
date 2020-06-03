<?php
session_start ();
if ((isset( $_SESSION['login'] )))
	{	
		if(($_SESSION['type'])==1)
		{
			header('refresh:0;url=teacher.php');
		}
	else
	{
		header('refresh:0;url=student.php');		
	}
	}
?>
<html lang="en">
<head>
<script type="text/javascript">
  function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
</script>
	<title>Login QPG</title>

    <link rel="stylesheet" type="text/css" href="css/login.css" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg.jpg');background-attachment: fixed;">
				<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
		<br>
			<b style="font-size:30px;color:Red">Login</b>
			<br><br>
			<img src="images/edu5.png"
			height="150" width="150"><br><br>
			<form action="login.php" method="post">
			<b style="color:violet">Enter the Username</b><br>
			
			<input type="text" name="username" id="username" class="fadeIn second"  required><br><br>
			<b style="color:violet">Enter the Password</b><br>
			
			<input type="password" class="fadeIn second" name="pass" required><br><br>
			<div class="container">
			  <input type="submit" value="Login"></input>
</form>				  	<br>
			<a href="Register.html" class="btn btn-4">No account?</a><br><br>
		    </div>
			</div>

  </div>
</div>	
	</div>
	</div>

</body>
</html>
