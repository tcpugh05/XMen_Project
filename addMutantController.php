<?php
	include 'connect.php';
	echo $_GET['codeName'];
	echo $_GET['birthName'];
	echo $_GET['level'];
	echo $_GET['power'];
	echo $_GET['power2']; 
	echo $_GET['bossID'];
	echo $_GET['address']; 
	$required = array('codeName','birthName','level','power','power2','bossID','address');
	$error = false;
	foreach($required as $field){
		if(empty($_GET[$field])){
			$error=true;
			echo "</br>" .$field . " is blank"; 
		}
	}
	if($error){
		echo"ERROR IS TRUE ERROR IS TRUE";
		header("Location: error.php?errorCode=Did not fill out form completely"); 
		exit; 	
	}

	//Checking if old usernames
	$query = "SELECT * FROM mutant where codeName='".$_GET['codeName']."'"; 
	echo "</br>Query is".$query; 
	$result = mysql_query($query,$con) or die('</br>Could not insert into table '.mysql_error());
	$number_of_rows = mysql_num_rows($result);
	
	echo "get username is ". $_GET['codeName']."</br>";
	echo "number of rows is ". $number_of_rows; 
	
	if($number_of_rows == 0){
		
		$sql = "INSERT INTO mutant(CodeName,BirthName,Level,Address)
			VALUES('".$_GET['codeName']."','".$_GET['birthName']."','".$_GET['level']."','" .$_GET['address']."')"; 
		
	echo $sql; 
	mysql_query($sql,$con) or die('</br>Could not insert into table '.mysql_error());
	$query = "SELECT (ID) FROM mutant where codeName='".$_GET['codeName']."';";
	$result = mysql_query("$query",$con) or die("</br> Could not find ID" . mysql_error());
	
	$row = mysql_fetch_assoc($result);
	echo $row["ID"];
	//header("Location: viewMutants.php"); 
	
	$sql = "INSERT INTO powers(PID,Power) VALUES('".$row["ID"]."','".$_GET['power']."');";
	mysql_query($sql,$con) or die('</br>Could not insert power 1 into table '.mysql_error());
	
	$sql = "INSERT INTO powers(PID,Power) VALUES('".$row["ID"]."','".$_GET['power2']."');";
	mysql_query($sql,$con) or die('</br>Could not insert power 2 into table '.mysql_error());	
	header("Location: viewMutants.php"); 
	}
	else{
		header("Location: error.php?errorCode=Duplicate Mutants"); 
	}
	$sql = "INSERT INTO Boss(birthName) FROM mReg2 WHERE mReg2.ID='".$_GET['bossID']."';";
	//$query = "SELECT BirthName FROM mutant where ID == '".$_GET['bossID']."'";
	
	//$query = "c1.id, c2.id AS Boss FROM mReg2 c1 INNER JOIN mReg2 c2 ON c1.ID = c2.
?>