<?php
	include 'header.php';
	$searchterm = $_POST['search'];
        $query = "SELECT * FROM Mutant JOIN powers ON Mutant.ID = powers.PID WHERE Mutant.CodeName = '$searchterm'";
	$result = mysql_query($query,$con) or die('</br>Could grab into table '.mysql_error());

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Code Name</th><th>Birth Name</th><th>Level</th><th>Address</th><th>Powers</th></tr>";
while($row = mysql_fetch_array($result)) {

echo "<tr><td>";
echo $row['ID'];
echo "</td><td>";
echo $row['CodeName'];
echo "</td><td>";
echo $row['BirthName'];
echo "</td><td>";
echo $row['Level'];
echo "</td><td>";
echo $row['Address'];
echo "</td><td>";
echo $row['Power'];
echo "</td></tr>";
}
echo "</table>";




?>


