<?php
	include 'header.php';
	$searchterm = $_POST['search'];
	$query = "SELECT * FROM Mutant WHERE CodeName = ".$_POST['search'];
	$result = mysqli_query($con, $query)
	or die("ERROR QUERYING DATABASE");
	echo "<table id=\"hor-minimalist-b\">\n<tr><th>ID</th><th>Code Name</th><th>Birth Name</th><th>Level</th><th>Power</th><th>Power Two</th><th>Other Powers</th><th>First Association</th><th>Second Association</th><th>Address</th></tr>\n\n";
                while($row = mysqli_fetch_array($result)) {
                        $ID = $row['ID'];
                        $CodeName = $row['CodeName'];
                        $BirthName = $row['BirthName'];
			$Level = $row['Level'];
			$Power = $row['Power'];
			$PowerTwo = $row['PowerTwo'];
			$PowerOther = $row['PowerOther'];
			$FstAssoc = $row['FstAssoc'];
			$ScdAssoc = $row['ScdAssoc'];
			$Address = $row['Address'];

                        echo "<tr><td>$ID</td><td >$CodeName</td><td >$BirthName</td><td>$Level</td><td>$Power</td><td>$PowerTwo</td><td>$PowerOther</td><td>$FstAssoc</td><td>$ScdAssoc</td><td>$Address</td></tr>\n";
            }
            echo "</table>\n";

	?>
