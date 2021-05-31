<?php
header('Content-Type: text/html; charset=utf-8');

$userName=$_GET['user_name'];
$mail=$_GET['email'];
$message=$_GET['message'];



mail("$mail",'test',"Привет, $userName !$message");


?>