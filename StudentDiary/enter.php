<?php
	session_start();
	
	if(!isset($_SSESSION['index1']) || empty($_SESSION['index1']))
	{
		header('location:  http://localhost/student.php');
		exit;
	}
	else
		echo $_SESSION['inex1'];
?>

