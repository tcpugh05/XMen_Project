<?php
include "header.php";
?>
<html>
	<form action="addMutantController.php" action="get">
		Code Name:<input type="text" name="codeName"></br>
		Birth Name:<input type="text" name="birthName"></br>
		Level: <input type="text" name="level"></br>
		Power : 
			<select name="power">
				<option>Telepathy</option>
				<option>Energy Attack</option>
				<option>Personal Fortication</option>
				<option>Cold</option>
				<option>Fire</option>
				<option>Personal Regeneration</option>
				<option>Associated Regeneration</option>
				<option>Power Adoption</option>
				<option>Speed</option>
				<option>Technology Interface</option>
				<option>Sonic</option>
				<option>Telekanisis</option>
				<option>Flight</option>
				<option>Other</option>
				<option>Unknown</option>
			</select></br>
		Power Other : 
			<select name="power2">
				<option>Telepathy</option>
				<option>Energy Attack</option>
				<option>Personal Fortication</option>
				<option>Cold</option>
				<option>Fire</option>
				<option>Personal Regeneration</option>
				<option>Associated Regeneration</option>
				<option>Power Adoption</option>
				<option>Speed</option>
				<option>Technology Interface</option>
				<option>Sonic</option>
				<option>Telekanisis</option>
				<option>Flight</option>
				<option>Other</option>
				<option>Unknown</option>
			</select></br>
			Found By:<input type="text" name="FoundBy"></br>
		<?php
			$query ="SELECT CodeName FROM mutant;";
			$result = mysql_query($query,$con) or die('</br> Could not grab powers' . mysql_error());
			echo "Boss"; 
			echo "<select name=bossID>";
			while($row = mysql_fetch_array($result)){
			echo "<option>".$row['CodeName']."</option>";
			}
			
			echo "</select>"; 
			echo "</br>";
			
		?>

				
	<!--	First Association:<input type="text" name="birthName"></br>
		Second Association:<input type="text" name="birthName"></br> -->
		Address:<input type="text" name="address"></br>
		<input type="submit" name="mysubmit" value="Submit"/>
	</form>
</html>