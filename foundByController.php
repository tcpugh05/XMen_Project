<?php
	include 'header.php';
	$searchterm = $_POST['search'];
        $query = "SELECT Mutant.ID, Mutant.CodeName, Mutant.BirthName FROM Mutant JOIN Powers ON Mutant.ID = Powers.PID WHERE Mutant.FoundBy = '$searchterm' GROUP BY Mutant.CodeName;";
	$result = mysql_query($query,$con) or die('</br>Could grab into table '.mysql_error());

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Code Name</th><th>Birth Name</th></tr>";
while($row = mysql_fetch_array($result)) {


echo "<tr><td>";
echo $row['ID'];
echo "</td><td>";
echo $row['CodeName'];
echo "</td><td>";
echo $row['BirthName'];
echo "</td><td>";
echo "</td></tr>";
}
echo "</table>";
?>