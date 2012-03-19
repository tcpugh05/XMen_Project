<?php
	include "connect.php";
	echo $_GET["name"];
	echo $_GET["address"];
	echo $_GET["harbored"];
	echo $_GET["funded"];
	echo $_GET["intimate"];
	echo $_GET["part"];
	echo $_GET["failToRepo"];
	echo $_GET["add"];
	
	$required = array('name','address');
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
	$query = "SELECT * FROM collaborators where Name='".$_GET['name']."'"; 
	echo "</br>Query is".$query; 
	$result = mysql_query($query,$con) or die('</br>Could not insert into table '.mysql_error());
	$number_of_rows = mysql_num_rows($result);
	
	//echo "get username is ". $_GET['codeName']."</br>";
	echo "number of rows is ". $number_of_rows; 
	
	if($number_of_rows == 0){
		$query = "INSERT INTO collaborators(Name,Address,Harbored,Funded,Intamate,FailedtoRepo,Participated,AdditionalInfo)
					VALUES('".$_GET["name"].
					"','".$_GET["address"].
					"','".$_GET["harbored"].
					"','".$_GET["funded"].
					"','".$_GET["intimate"].
					"','".$_GET["failToRepo"].
					"','".$_GET["part"].
					"','".$_GET["add"].
					"');";
		echo $query; 
		mysql_query($query,$con) or die('</br>Could not collaborator into table '.mysql_error());
		header("Location:viewColl.php"); 
	}
	else{
		header("Location: error.php?errorCode=Duplicate Collaborators"); 
	}
	 
?>