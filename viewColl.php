<?php
include 'header.php';
echo "<h1>Colloborator View</h1>"; 
echo "<h1>Hi there ".$_SESSION['firstname']; 
$query = "SELECT * FROM collaborators;"; 
$result = mysql_query($query,$con) or die('</br>Could grab collaborator table '.mysql_error()); 
echo "<table border='1'>"; 
echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Harbored</th><th>Funded</th><th>Intimate</th><th>Failed To Report</th><th>Participated</th><th>AdditionalInfo</th></tr>"; 
while($row = mysql_fetch_array($result)) {

echo "<tr><td>";  
echo $row['ID']; 
echo "</td><td>";
echo $row['Name']; 
echo "</td><td>";
echo $row['Address']; 
echo "</td><td>";
echo $row['Harbored'];
echo "</td><td>";
echo $row['Funded'];
echo "</td><td>"; 
echo $row['Intamate'];
echo "</td><td>";
echo $row['FailedtoRepo'];
echo "</td><td>";
echo $row['Participated'];
echo "</td><td>";
echo $row['AdditionalInfo'];
echo "</td></tr>";
} 
echo "</table>"; 




?>