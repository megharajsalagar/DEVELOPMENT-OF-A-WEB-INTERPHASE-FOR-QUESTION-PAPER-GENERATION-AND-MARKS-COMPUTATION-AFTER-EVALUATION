
<?php
$dbh =new PDO("mysql:host=localhost:3307;dbname=myminiproject","root","");
if(isset($_POST['upload']))
{
	$name=$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['type'];
	$data=file_get_contents($_FILES['myfile']['tmp_name']);
	$stmt=$dbh->prepare("insert into inputdocumentdata values('',?,?,?)"); 
	$stmt->bindParam(1,$name);
	$stmt->bindParam(2,$type);
	$stmt->bindParam(3,$data);
	$stmt->execute();
	header('Location:PhpFileToRunPythonFileToGenerateQstnBank.php');
}	

?>