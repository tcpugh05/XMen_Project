<?php
include 'header.php';
echo "<h1>Mutant View</h1>"; 
echo "<h1>Hi there ".$_SESSION['firstname']; 
$query = "SELECT c1.ID, c1.CodeName, c1.BirthName, c1.Address, c2.CodeName AS BossID FROM mutant c1 INNER JOIN mutant c2 ON c1.BOSSID = c2.ID; "; 
$result = mysql_query($query,$con) or die('</br>Could grab into table '.mysql_error()); 
echo "<table border='1'>"; 
echo "<tr><th>ID</th><th>Code Name</th><th>Birth Name</th><th>Level</th><th>Address</th><th>Powers</th><th>Boss</th></tr>"; 
while($row = mysql_fetch_array($result)) {

$query ="SELECT * FROM powers WHERE PID = ".$row['ID'];
$power_result = mysql_query($query,$con) or die('</br> Could not grab powers' . mysql_error());
$powers_string = ''; 
while($power_row = mysql_fetch_array($power_result)){
	//echo $power_row['PID'];
	if($power_row['PID'] == $row['ID']){
		$powers_string = $powers_string . $power_row['Power'].',';
	}
}
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
echo $powers_string;
echo "</td><td>";  
echo $row['BossID']; 
echo "</td></tr>";
} 
echo "</table>"; 




?>