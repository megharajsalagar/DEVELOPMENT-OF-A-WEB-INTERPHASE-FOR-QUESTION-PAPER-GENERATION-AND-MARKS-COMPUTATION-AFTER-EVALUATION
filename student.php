<?php
session_start ();
if ((isset ( $_SESSION['login'] )))
	{	
		echo"";
	}
	else
	{
	header('refresh:0;url=index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<style>
.button {
  background-color:#7579ff; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width:50%;
}
</style>
<link rel="stylesheet" type="text/css" href="css/login.css" />

<body>
<div class="note" style="position: relative;">

				<a href="index.php"><img src="images/edu6.png"
			height="130" width="150"style="margin:0px 0px 10px 0px"></img></a>
			<a href="logout.php"><img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/logout-3-110981.png"
			height="80" width="90"  style="margin:0px 0px 40px 1750px"></img></a>
			<marquee style="color:blue">Welcome to Student Login. Here you can view Question Bank,Question Paper even See your Marks</marquee>
</div>
<div class="wrapper fadeInDown"align="center">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
		<br>
			<br><br>

<button onclick="VQB()"class="button">View Question Bank</button><br><br>
<button onclick="VQP()" class="button">View Question Paper</button><br><br>
<button class="button" onclick="partB()">View the Marks</button><br>

<br><br>
</div></div></div>
</body>
<script>
function partB() {
	
var value='YW6Oj7Rbsa44TaHI';
var queryString = "https://miniprojectp2-72429.firebaseapp.com?"+ value;
window.location.href = queryString;
}
function VQB() {
  window.location.replace("VQB.php");
}
function VQP() {
  window.location.replace("VQP.php");
}
</script>
</body>







</html>
