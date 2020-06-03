<?php
$connect = new mysqli("localhost:3307","root","","myminiproject");
 
// Define variables and initialize with empty values
    $username = $password = $cpassword = "";
	$email = trim($_POST["email"]);
    $sql = "select * from users where email='".$email."'";	 
    $result=mysqli_query($connect, $sql); 
    $row = mysqli_num_rows ( $result );
    if($row==0){  
	   $name= trim($_POST["name"]);
       $password = trim($_POST["password"]);
	   $gender = $_POST["gender"];
       $stmt = $connect->prepare("insert into users(name,email,password,gender) values(?,?,?,?)");
       $stmt->bind_param("ssss",$name,$email,$password,$gender);
       $stmt->execute();
       if($stmt){
		   echo' <html>
 <body>
 <h1 align="center" style="color:blue">Registered Successful</h1>
 </body>
 </html>';
          header('refresh:5;url=index.php');
       } else{
           echo "Something went wrong. Please try again later.";
         }
	}
    else{
		echo' <html>
 <body>
 <h1 align="center" style="color:Red">That email already exists! Please try again with another.</h1>
 </body>
 </html>';
		header( "refresh:5;url=register.html" );
    }      
?>
