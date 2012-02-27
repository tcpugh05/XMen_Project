<?php
	include 'header.php';
	include 'connect.php';
?>
<form action="loginController.php" method="get">
	Username: <input type="text" name="username" /></br>
	Password: <input type="password" name="pswd"/></br>
	<input type="submit" name="mysubmit" value="Submit"/>
</form>