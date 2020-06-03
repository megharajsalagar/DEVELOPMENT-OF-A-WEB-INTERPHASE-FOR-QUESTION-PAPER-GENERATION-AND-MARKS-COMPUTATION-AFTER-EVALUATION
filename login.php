<?php
session_start();
echo $_POST['username'];
$con = new mysqli("localhost:3307","root","","myminiproject");
if(!empty($_POST['username']) && !empty($_POST['pass'])){
	//mysqli real escape prevent from sql injection which filter the user input
	$email=$_POST['username'];
	$password=$_POST['pass'];
	echo $email;
	echo"  ";
	echo $pasword;
	$qr=mysqli_query($con,"select * from users where email='".$email."' and password='".$password."'");
	if(mysqli_num_rows($qr)>0){
		$data=mysqli_fetch_array($qr);
		$_SESSION['user_data']=$data;
		if($data['usertype']=='1'){
			 $_SESSION['login']=$email;
			 $_SESSION['type']=1;
		header('Location:teacher.php');	
		}
		else{
			$_SESSION['login']=$email;
			 $_SESSION['type']=2;
			header("Location:student.php");
		}
	}
	else{
		echo "Invalid username and password";
		header('refresh:5;url=index.php');
	}
}
else{
	echo"Please Enter Email and Password";
	header('refresh:5;url=index.php');
}
?>
