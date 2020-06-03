<?php
session_start ();
if ((isset ( $_SESSION['login'] )))
	{	
		if(($_SESSION['type'])==1)
		{
			echo"";
		}
	else
	{
		echo"illegal access, Attempt will be reported to admin";
		
		header('refresh:0;url=warn.php');
	}
	}
	else
	{
	header('refresh:0;url=index.php');
	}
?>

<html>
<style>
.btn {
  background-color:#7579ff;
  justify-content: center;
  align-items: center;
  width: 25%;
  height: 40px;

  font-family: Poppins-Medium;
  font-size: 16px;
  color: #000;
  line-height: 1.2;
}
</style>


<link rel="stylesheet" type="text/css" href="css/login.css" />
<body >
<div class="note" style="position: relative;">
<a href="index.php"><img src="images/edu6.png"
			height="130" width="150"style="margin:0px 0px 10px 0px"></img></a>
			<a href="logout.php"><img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/logout-3-110981.png"
			height="80" width="90"  style="margin:0px 0px 40px 1750px"></img></a>
			<marquee style="color:blue">Welcome to Teacher Login. Here you can create or view Question Bank by uploading Modules and download question bank with the help of secret key</marquee>
</div>

<div class="wrapper fadeInDown"align="center">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
	<br><br>
	<form  method='post' enctype="multipart/form-data">
<b style="color:violet">UPLOAD FILE</b><br><br>
<input type="file"  name="myfile"><br><br>
<button name="upload" class="btn" formaction="inputQbPhpFile.php" >
	<span>UPLOAD</span>
</button>
</form>
<br><br><br>
<form method='post' enctype="multipart/form-data">
<b style="color:violet">DOWNLOAD FILE </b><br><br>
<input type="text" name="ename" placeholder="Enter your secret key here" required><br><br>
<button name="submit" formaction="download1.php" class="btn">
	<span>SUBMIT</span>
</button>
</form>
<br><br>
</div></div></div>

</div>





</body>

</html>