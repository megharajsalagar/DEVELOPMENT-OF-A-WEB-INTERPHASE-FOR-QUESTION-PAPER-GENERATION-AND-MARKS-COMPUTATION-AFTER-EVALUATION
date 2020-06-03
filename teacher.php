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
<head>

</head>

<style>

</style>
<link rel="stylesheet" type="text/css" href="css/login.css" />

<body >
<div class="note" style="position: relative;">

				<a href="index.php"><img src="images/edu6.png"
			height="130" width="150"style="margin:0px 0px 10px 0px"></img></a>
			<a href="logout.php"><img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/logout-3-110981.png"
			height="80" width="90"  style="margin:0px 0px 40px 1750px"></img></a><marquee style="color:blue">Welcome to Teacher Login. Here you can create or view Question Bank,Question Paper even Update the Student Marks</marquee>
	</div>			

<div class="wrapper fadeInDown"align="center" style="position: relative;">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
		<br>
			<br><br>
<button onclick="VQB()"class="button" style='color:#008CBA';>View Question Bank</button><br><br>
<button onclick="VQP()" class="button">View Question Paper</button><br><br>
<button onclick="GQB()" class="button">Generate Question Bank</button><br><br>
<button onclick="GQP()" class="button">Generate Question Paper</button><br><br>
<button onclick="partA()" class="button">Update Marks</button><br><br>

<br><br>
</div>
</div>
</div>
 
<script>
function partA() {
	
var value='NZi42UDfiP5vZ7pJ';
var queryString = "https://miniprojectp2-72429.firebaseapp.com?"+ value;
window.location.href = queryString;
}
function GQB() {
  window.location.replace("GQB.php");
}
function GQP() {
  window.location.replace("GQP.php");
}function VQB() {
  window.location.replace("VQB.php");
}function VQP() {
  window.location.replace("VQPT.php");
}
</script>
</body>








</html>
