<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['type']);
session_destroy();
header('refresh:0;url=index.php');
?>
