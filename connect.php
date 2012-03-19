<?php
session_start();
$con = mysql_connect('localhost','xmen1982','password')
	or die(mysqli_error());
mysql_select_db("mreg2",$con); 
?>
