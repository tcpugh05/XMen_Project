<?php
session_start();
$con = mysql_connect('localhost','root','','mReg2')
	or die(mysqli_error());
mysql_select_db("mReg2",$con); 

?>
