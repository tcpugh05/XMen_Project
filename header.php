<html>
<?php
include 'connect.php';
	if(isset($_SESSION['firstname'])){
		echo "<a href=\"user_list.php\">View User List</a>|";
		echo "<a href=\"addMutant.php\">Add Mutant</a>|";
		echo "<a href=\"viewMutants.php\">View Mutants</a>|"; 
		echo "<a href=\"addColl.php\">Add Collaborator</a>|";
		echo "<a href=\"viewColl.php\">View Collborator."; 
		echo "<a href=\"logout.php\">Logout</a>"; 
	}
	else{
		echo "<a href=\"login.php\">Login</a>|";
	echo "<a href=\"register.php\">Register</a>";
	}
?>

</html>
