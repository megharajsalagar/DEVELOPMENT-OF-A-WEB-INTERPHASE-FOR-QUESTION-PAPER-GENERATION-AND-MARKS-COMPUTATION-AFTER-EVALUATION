<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Please Upload Docx Files</title>
</head>
<body> 
<?php
echo "Upload now";
$dbh =new PDO("mysql:host=localhost:3307;dbname=myminiproject","root","");
if(isset($_POST['submit']))
{
	$name=$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['type'];
	$data=file_get_contents($_FILES['myfile']['tmp_name']);
	$stmt=$dbh->prepare("insert into myblob values('',?,?,?)"); 
	$stmt->bindParam(1,$name);
	$stmt->bindParam(2,$type);
	$stmt->bindParam(3,$data);
	$stmt->execute();
}
?>
<form method='post' enctype="multipart/form-data" >
<input type="file" name="myfile"/><br><br>
<input type="submit" name="submit"  value="Upload"\>
<input type="Submit" name="submit1"  formaction="test23.php">
</form>
</body>
</html>