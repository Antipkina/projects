<?php
session_start();

if(!isset($_SSESSION['index2']) || empty($_SESSION['index2']))
{
    header('location:  http://localhost/teacher.php');
    exit;
}
else
    echo $_SESSION['index2'];
?>
