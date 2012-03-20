<?php
include 'header.php';
        $searchterm = $_POST['search'];
        $query = "SELECT * FROM Collaborators WHERE Name = '$searchterm'";
        $result = mysql_query($query,$con) or die('</br>Could grab into table '.mysql_error());

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Harbored</th><th>Funded</th><th>Intimate</th><th>Failed to Report</th><th>Participated</th><th>Additional Info</th></tr>";
while($row = mysql_fetch_array($result)){
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
?>
