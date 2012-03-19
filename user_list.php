<?php
//session_start(); 
//include 'connect.php';
include 'header.php';
echo "<h1>Admin Page</h1>"; 
echo "<h1>Hi there ".$_SESSION['firstname']; 
$query = "SELECT * FROM User_accounts;"; 
//$result = mysql_query($query,$con) or die('</br>Could not insert into table '.mysql_error());; 
echo "<table border='1'>"; 
echo "<tr><th>Id</th><th>First Name</th><th>Last Name</th><th>User Name</th><th>Password</th><th>Reported</th><th>Needs Help</th></tr>"; 
while($row = mysql_fetch_array($result)) { 
echo "<tr><td>"; 
echo $row['id']; 
echo "</td><td>"; 
echo $row['first_name']; 
echo "</td><td>";
echo $row['last_name']; 
echo "</td><td>";
echo $row['username'];
echo "</td><td>";
echo $row['pswd']; 
echo "</td><td>";
echo $row['reported']; 
echo "</td><td>";
echo $row['needsHelp']; 
echo "</td></tr>";

} 
echo "</table>"; 




?>