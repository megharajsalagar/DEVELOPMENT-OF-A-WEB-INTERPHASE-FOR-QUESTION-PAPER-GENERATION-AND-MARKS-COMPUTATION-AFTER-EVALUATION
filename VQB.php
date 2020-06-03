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
<html>
<link rel="stylesheet" type="text/css" href="css/login.css" />
<style>
table, th, td {
  border: 1px solid black;
}
td {
  height: 60px;
  width:200px;
   text-align: center;
}
</style>
<body >
<div class="note" style="position: relative;">
				<a href="index.php"><img src="images/edu6.png"
			height="130" width="150"style="margin:0px 0px 10px 0px"></img></a>
			<a href="logout.php"><img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/logout-3-110981.png"
			height="80" width="90"  style="margin:0px 0px 40px 1750px"></img></a>
			<marquee style="color:blue">Welcome Here you can  view or Download the Question Bank</marquee>
</div>
</body>
</html>

<?php
echo "<br><br><br><br><br><div align='center'>";
echo '<div class="limiter">
		<div class="container-login100" >
				<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first" align="center"><br><br>
		';
$connect=mysqli_connect('localhost:3307','root','','myminiproject');
$sql = "select * from questionbank";	 
$result=mysqli_query($connect, $sql);
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
   echo '<link rel="stylesheet" type="text/css" href="css/main.css">';
   echo '<link rel="stylesheet" type="text/css" href="css/main3.css">';
echo '</head>';
echo '<body>';
echo '<div class="container-contact100">';
echo '<div class="wrap-contact100" style="width:700px;">';
echo '<form class="contact100-form validate-form" action="" method="post">';
echo '<table class="tab">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">Sl.No</th>';
echo '<th scope="col">File Name</th>';
echo '<th scope="col">File Link</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
$x=1;
include 'viewqblink.php';
while($row = mysqli_fetch_array($result)){
echo '<tr>';
echo '<td>'.$x++.'</td>';
echo '<td>'.$row["FileName"].'</td>';

echo "<td><a target='_blank' href='download.php?SlNo=".$row['SlNo']."'>Download ".$row['FileName']." Here</a></td>";
echo '</tr>';
}
echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '</body>';
echo '</html>';
echo"</div><br><br><br>";
echo"</div>";echo"</div>";echo"</div>";echo"</div>";
?>