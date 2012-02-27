<html>
<?php	include 'dbconnect.php';  
		include 'header.php';
?> 
	<form action="registerController.php" method="get">
	First Name: <input type="text" name="firstname" /><br />
	Last Name: <input type="text" name="lastname" /></br>
	Username: <input type="text" name="username" /></br>
	Password: <input type="password" name="pswd"/></br>
	Need immediate help: 
	<select name="needHelp">
		<option value="true">True</option>
		<option="false">False</option>
	</select>
	<input type="submit" name="mysubmit" value="Submit"/>
	
	</form>
</html>