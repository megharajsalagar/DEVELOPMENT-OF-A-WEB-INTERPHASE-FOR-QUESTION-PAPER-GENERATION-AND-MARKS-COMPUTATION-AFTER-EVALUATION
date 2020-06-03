<?php
    $my_command = escapeshellcmd('result1.py');
    $command_output = shell_exec($my_command);
    echo $command_output;
	echo '<script> window.print(); </script>';
	header('refresh:5;url=GQB.php');
?>
