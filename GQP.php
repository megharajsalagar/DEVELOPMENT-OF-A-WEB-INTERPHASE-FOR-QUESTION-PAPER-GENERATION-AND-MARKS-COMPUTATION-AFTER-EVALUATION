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

<!DOCTYPE html>

<html>
<head>
</head>
<style>
table, th, td {
  border: 1px solid black;
  padding:15px;
}
th, td ,.input100{
  text-align: center;
  padding: 5px;
}
 .input100{
 font-weight: bold;
 font-color: black;
 font-size:30px;
} 
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
<body>
<div class="note" style="position: relative;">
				<a href="index.php"><img src="images/edu6.png"
			height="130" width="150"style="margin:0px 0px 10px 0px"></img></a>
			<a href="logout.php"><img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/logout-3-110981.png"
			height="80" width="100"  style="margin:0px 0px 60px 1750px"></img></a>
			<marquee style="color:blue">Welcome to Teacher Login. Here you can create Question Paper by Providing Blueprint and Download Created Question Paper using Secret key</marquee>
</div>
<br><br><br><br><br>
<div >
<div class="wrapper fadeInDown"align="center">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
		<br>
			
	    <div align="center">
			<form method="post">
             <b style="color:red;font-size:36px";>					BLUEPRINT
				</b><br><br>
				<table>
				<tr>
				  <th>Chapter no</th>
				  <th>Secret key</th>
				  <th>One mark</th>
				  <th>Two mark</th>
				  <th>Three mark</th>
				  <th>Five mark</th>
				 </tr>  
				 <tr>
					<td><font style="font-size:25px";>1</font></td>
					<td><input  class="input100" type="text" name="sk1"></td>
					<td><input  class="input100" type="text" name="one1"></td>
					<td><input  class="input100" type="text" name="two1"></td>
					<td><input  class="input100" type="text" name="three1"></td>
					<td><input  class="input100" type="text" name="five1"></td>
				 </tr>
				 <tr>
				    <td><font style="font-size:25px";>2</font></td>
					<td><input  class="input100" type="text" name="sk2"></td>
					<td><input  class="input100" type="text" name="one2"></td>
					<td><input  class="input100" type="text" name="two2"></td>
					<td><input  class="input100" type="text" name="three2"></td>
					<td><input  class="input100" type="text" name="five2"></td>
				 </tr>
				 <tr>
			        <td><font style="font-size:25px";>3</font></td>
					<td><input  class="input100" type="text" name="sk3"></td>
					<td><input  class="input100" type="text" name="one3"></td>
					<td><input  class="input100" type="text" name="two3"></td>
					<td><input  class="input100" type="text" name="three3"></td>
					<td><input  class="input100" type="text" name="five3"></td>
				</tr>
				<tr>
					<td><font style="font-size:25px";>4</font></td>
					<td><input  class="input100" type="text" name="sk4"></td>
					<td><input  class="input100" type="text" name="one4"></td>
					<td><input  class="input100" type="text" name="two4"></td>
					<td><input  class="input100" type="text" name="three4"></td>
					<td><input  class="input100" type="text" name="five4"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>5</font></td>
					<td><input  class="input100" type="text" name="sk5"></td>
					<td><input  class="input100" type="text" name="one5"></td>
					<td><input  class="input100" type="text" name="two5"></td>
					<td><input  class="input100" type="text" name="three5"></td>
					<td><input  class="input100" type="text" name="five5"></td>
				 </tr>
				 <tr>
				    <td><font style="font-size:25px";>6</font></td>
					<td><input  class="input100" type="text" name="sk6"></td>
					<td><input  class="input100" type="text" name="one6"></td>
					<td><input  class="input100" type="text" name="two6"></td>
					<td><input  class="input100" type="text" name="three6"></td>
					<td><input  class="input100" type="text" name="five6"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>7</font></td>
					<td><input  class="input100" type="text" name="sk7"></td>
					<td><input  class="input100" type="text" name="one7"></td>
					<td><input  class="input100" type="text" name="two7"></td>
					<td><input  class="input100" type="text" name="three7"></td>
					<td><input  class="input100" type="text" name="five7"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>8</font></td>
					<td><input  class="input100" type="text" name="sk8"></td>
					<td><input  class="input100" type="text" name="one8"></td>
					<td><input  class="input100" type="text" name="two8"></td>
					<td><input  class="input100" type="text" name="three8"></td>
					<td><input  class="input100" type="text" name="five8"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>9</font></td>
					<td><input  class="input100" type="text" name="sk9"></td>
					<td><input  class="input100" type="text" name="one9"></td>
					<td><input  class="input100" type="text" name="two9"></td>
					<td><input  class="input100" type="text" name="three9"></td>
					<td><input  class="input100" type="text" name="five9"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>10</font></td>
					<td><input  class="input100" type="text" name="sk10"></td>
					<td><input  class="input100" type="text" name="one10"></td>
					<td><input  class="input100" type="text" name="two10"></td>
					<td><input  class="input100" type="text" name="three10"></td>
					<td><input  class="input100" type="text" name="five10"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>11</font></td>
					<td><input  class="input100" type="text" name="sk11"></td>
					<td><input  class="input100" type="text" name="one11"></td>
					<td><input  class="input100" type="text" name="two11"></td>
					<td><input  class="input100" type="text" name="three11"></td>
					<td><input  class="input100" type="text" name="five11"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>12</font></td>
					<td><input  class="input100" type="text" name="sk12"></td>
					<td><input  class="input100" type="text" name="one12"></td>
					<td><input  class="input100" type="text" name="two12"></td>
					<td><input  class="input100" type="text" name="three12"></td>
					<td><input  class="input100" type="text" name="five12"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>13</font></td>
					<td><input  class="input100" type="text" name="sk13"></td>
					<td><input  class="input100" type="text" name="one13"></td>
					<td><input  class="input100" type="text" name="two13"></td>
					<td><input  class="input100" type="text" name="three13"></td>
					<td><input  class="input100" type="text" name="five13"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>14</font></td>
					<td><input  class="input100" type="text" name="sk14"></td>
					<td><input  class="input100" type="text" name="one14"></td>
					<td><input  class="input100" type="text" name="two14"></td>
					<td><input  class="input100" type="text" name="three14"></td>
					<td><input  class="input100" type="text" name="five14"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>15</font></td>
					<td><input  class="input100" type="text" name="sk15"></td>
					<td><input  class="input100" type="text" name="one15"></td>
					<td><input  class="input100" type="text" name="two15"></td>
					<td><input  class="input100" type="text" name="three15"></td>
					<td><input  class="input100" type="text" name="five15"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>16</font></td>
					<td><input  class="input100" type="text" name="sk16"></td>
					<td><input  class="input100" type="text" name="one16"></td>
					<td><input  class="input100" type="text" name="two16"></td>
					<td><input  class="input100" type="text" name="three16"></td>
					<td><input  class="input100" type="text" name="five16"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>17</font></td>
					<td><input  class="input100" type="text" name="sk17"></td>
					<td><input  class="input100" type="text" name="one17"></td>
					<td><input  class="input100" type="text" name="two17"></td>
					<td><input  class="input100" type="text" name="three17"></td>
					<td><input  class="input100" type="text" name="five17"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>18</font></td>
					<td><input  class="input100" type="text" name="sk18"></td>
					<td><input  class="input100" type="text" name="one18"></td>
					<td><input  class="input100" type="text" name="two18"></td>
					<td><input  class="input100" type="text" name="three18"></td>
					<td><input  class="input100" type="text" name="five18"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>19</font></td>
					<td><input  class="input100" type="text" name="sk19"></td>
					<td><input  class="input100" type="text" name="one19"></td>
					<td><input  class="input100" type="text" name="two19"></td>
					<td><input  class="input100" type="text" name="three19"></td>
					<td><input  class="input100" type="text" name="five19"></td>
				 </tr>
				 <tr>
					<td><font style="font-size:25px";>20</font></td>
					<td><input  class="input100" type="text" name="sk20"></td>
					<td><input  class="input100" type="text" name="one20"></td>
					<td><input  class="input100" type="text" name="two20"></td>
					<td><input  class="input100" type="text" name="three20"></td>
					<td><input  class="input100" type="text" name="five20"></td>
				 </tr>
                </table><br><br>

			
						<button  formaction="blueprint.php" class="btn">
							<span>
								SUBMIT
							</span>
						</button>
				
			</form>
				<br>
				<br>
		<form  enctype="multipart/form-data" action="download2.php" method="GET">
		  <div >
			<span style="font-size:25px" ><b>ENTER SECRET KEY</b></span><br><br>
				<input style="font-size:18px" class="input100" type="number" name="ename" placeholder="Enter your secret key" action="" required><br><br>
		  </div>

						<button  formaction="download2.php" class="btn">
								DOWNLOAD							
						</button><br><br>
				<div align="center">
				<ol>
			
				</ol>
				</div>
			</form>
		</div><br><br><br>
	</div></div></div></div>
</body>
</html>