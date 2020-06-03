<?php
$dbh =new PDO("mysql:host=localhost:3307;dbname=myminiproject","root","");
$SN=isset($_GET['SlNo'])? $_GET['SlNo'] : "";
$stat=$dbh->prepare("Select * from questionbank where SlNo=?");
$stat->bindParam(1,$SN);
$stat->execute();
$row=$stat->fetch();
error_reporting(E_ALL ^ E_NOTICE);
header('content-Type:'.$row['FileType']);
echo $row['FileData'];
?>
