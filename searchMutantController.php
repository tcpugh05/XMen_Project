<?php
	include 'header.php';
	$searchterm = $_POST['search'];
        $query = "SELECT * FROM Mutant WHERE CodeName = '$searchterm'";
	$result = mysql_query($query,$con) or die('</br>Could grab into table '.mysql_error());

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Code Name</th><th>Birth Name</th><th>Level</th><th>Address</th><th>Powers</th></tr>";
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
echo "</td></tr>";
}
echo "</table>";




?>


