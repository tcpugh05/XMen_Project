<html>
	
<?
include 'header.php'; 
echo "<h1>On this page</h1>"; 
echo "<h1>The Cross Join!</h1>";
echo "<h2>Query is \"SELECT mutant.codename, powers.power FROM mutant CROSS JOIN powers WHERE mutant.ID = powers.PID\"</h2>";

echo "<h1>Using the Order and AS functions</h1>";
echo "<h2>Query is \"SELECT mutant.CodeName AS Mutant, mutant.level FROM mutant, powers WHERE powers.PID = mutant.ID AND powers.power = 'Telepathy' ORDER by mutant.Level;\"</h2>";




echo "<h1>Using Distinct Function and Group By </h1>";
echo "<h2>Query is \"SELECT DISTINCT mutant.CodeName, powers.power, assoc.Association FROM mutant, powers, assoc WHERE mutant.ID = powers.PID AND mutant.ID = assoc.AID GROUP by mutant.CodeName;\"</h2>"; 


echo "<h1>Using Subqueries and Natural Joins</h1>";
echo "<h2>Query is \"SELECT mt.Codename, mt.Level, pw.power FROM mutant AS mt NATURAL JOIN powers AS pw WHERE pw.PID IN(SELECT ID FROM mutant WHERE level = 5);\"</h2>"; 




$query = "SELECT mutant.codename, powers.power FROM mutant CROSS JOIN powers WHERE mutant.ID = powers.PID";
$result = mysql_query($query,$con) or die('</br>Could grab into table '.mysql_error());
echo "<table border='1'>";
echo "<tr><th>Cross Join</th></tr>"; 
echo "<tr><th>Codename</th><th>Power</th></tr>";
while($row = mysql_fetch_array($result)){
echo "<tr><td>";
echo $row['codename'];
echo "</td><td>";
echo $row['power'];
echo "</td></tr>";
}
$query = "SELECT mutant.CodeName AS Mutant, mutant.level FROM mutant, powers WHERE powers.PID = mutant.ID AND powers.power = 'Telepathy' ORDER by mutant.Level;";
$result = mysql_query($query,$con) or  die('</br>Could grab into table '.mysql_error());
echo "<table border='1'>";
echo "<tr><th>ORDER/AS</th><tr>"; 
echo "<tr><th>Mutant</th><th>Level</th></tr>";
while($row = mysql_fetch_array($result)){
echo "<tr><td>";
echo $row['Mutant'];
echo "</td><td>";
echo $row['level'];
echo "</td></tr>";
}


$query = "SELECT DISTINCT mutant.CodeName, powers.power, assoc.Association FROM mutant, powers, assoc WHERE mutant.ID = powers.PID AND mutant.ID = assoc.AID GROUP by mutant.CodeName;";
$result = mysql_query($query,$con) or  die('</br>Could grab into table '.mysql_error());
echo "<table border='1'>";
echo "<tr><th>DISTINCT/GROUP BY</th><tr>"; 
echo "<tr><th>Mutant</th><th>Level</th></tr>";
while($row = mysql_fetch_array($result)){
echo "<tr><td>";
echo $row['power'];
echo "</td><td>";
echo $row['Association'];
echo "</td></tr>";
}

$query = "SELECT mt.Codename, mt.Level, pw.power FROM mutant AS mt NATURAL JOIN powers AS pw WHERE pw.PID IN(SELECT ID FROM mutant WHERE level = 5);";
$result = mysql_query($query,$con) or  die('</br>Could grab into table '.mysql_error());
echo "<table border='1'>";
echo "<tr><th>Subqueries/Natural Joins</th><tr>"; 
echo "<tr><th>Mutant</th><th>Level</th></tr>";
while($row = mysql_fetch_array($result)){
echo "<tr><td>";
echo $row['Codename'];
echo "</td><td>";
echo $row['Level'];
echo "</td><td>"; 
echo $row['power'];
echo "</td></tr>";
} 
?>








</html>
