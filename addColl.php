<?php
include "header.php";
?>
<html>
	<form action="addCollController.php" action="get">
		Name:<input type="text" name="name"></br>
		Address: <input type="text" name="address"></br>
		Harbored:
			<select name="harbored">
				<option>T</option>
				<option>F</option>
			</select></br>
		Funded
		<select name="funded">
				<option>T</option>
				<option>F</option>
			</select></br>
		
		Intimate	
		<select name="intimate">
				<option>T</option>
				<option>F</option>
			</select></br>
		
		Failed To Report Mutant:	
		<select name="failToRepo">
				<option>T</option>
				<option>F</option>
			</select></br>
			
		Participated:
		<select name="part">
				<option>T</option>
				<option>F</option>
			</select></br>
		Additional Information:
		<input type="text" name="add">
		
		
	<!--	First Association:<input type="text" name="birthName"></br>
		Second Association:<input type="text" name="birthName"></br> -->
		<input type="submit" name="mysubmit" value="Submit"/>
	</form>
</html>