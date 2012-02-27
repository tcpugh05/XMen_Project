<html>
	<a href="login.php">Login</a>
	<a href="register.php">Register</a>
	<a href="logout.php">Logout</a>
<?php
	if(isset($_SESSION['firstname'])){
		echo "<a href=\"user_list.php\">User List</a>";
	}
?>
</html>