<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mutant Registration</title>
<link rel="stylesheet" href="style.css" type="text/css" />


</head>
<body>
<div id="wrap">
	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				
					<!-- CONTENT -->
					<h3>Mutant Registered</h3>
					<p>Thanks for reporting an abduction! </p>
					
					<?php
					$con = mysql_connect("localhost");
					mysql_select_db("mutantREG", $con); 
					$CodeName = $_POST['CodeName'];
					$BirthName = $_POST['BirthName'];
					$Level = $_POST['Level'];
					$Power = $_POST['Power'];
					$PowerTwo = $_POST['PowerTwo'];
					$PowerOther = $_POST['PowerOther'];
					$FstAssoc = $_POST['FstAssoc'];
					$ScdAssoc = $_POST['ScdAssoc'];
					$Address = $_POST['Address'];
					$query = "INSERT INTO Mutant (CodeName, BirthName, Level, Power, PowerTwo, PowerOther, FstAssoc, ScdAssoc, Address) VALUES('$CodeName', '$BirthName', '$Level', '$Power', '$PowerTwo', '$PowerOther', '$FstAssoc', '$ScdAssoc', '$Address')";
					$result = mysqli_query($con, $query) or die ("ERROR");
					mysql_close($con);
					?>
					<!-- END CONTENT -->
					
				</div>
				
				<?php
				    include('SIDEnFOOTER.html');
				?>
				   


			</div>
		</div>
	</div>
</div>
</body>
</html>
