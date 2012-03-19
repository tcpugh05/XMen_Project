<?php
include 'connect.php';
	if(isset($_SESSION['firstname'])){
		echo "<li><a href=\"user_list.php\">___User List____</a>";
	}
?>
<html>
	<li><a href="login.php"> ___Login______ </a>
	<li><a href="register.php">___Register_____</a>
	<li><a href="logout.php">___Logout______</a>
	<li><a href="mutant.php">_Report_a_Mutant_</a>
	<li><a href="searchMutant.php">__Mutant_Search__</a>
</html>
