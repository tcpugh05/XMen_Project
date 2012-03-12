<?php
	session_start(); 
	include 'header.php';
	//Checkign to see if any fields are blank
	$error = false; 
	$required = array('username','pswd');
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
	/*$_SESSION['username']=$_GET['username'];
	$_SESSION['pswd']=$_GET['pswd'];*/
	$sql ="SELECT * from user_accounts where username=\"".$_GET['username']."\";";
	echo "query is:" . $sql; 
	$result = mysql_query($sql,$con) or die('</br>Could not insert into table '.mysql_error());
	$number_of_rows = mysql_num_rows($result);
	echo "</br>about to print information</br>"; 
	if($number_of_rows ==1){
		$row = mysql_fetch_array($result);
		if($_GET['pswd'] != $row['pswd']){
			echo $_GET['pswd'];
			echo "<br>". $row['pswd'];
			header("Location: error.php?errorCode=The password is wrong");
			exit;
		}
		$_SESSION['firstname']= $row['first_name'];
		$_SESSION['lastname']=$row['last_name'];	
		$_SESSION['needHelp']=$row['needsHelp'];
		echo "FIRSTNAME HERE: " . $_SESSION['firstname']."</br>";
		echo $_SESSION['lastname']."</br>";
		echo $_SESSION['needHelp']."</br>";
		echo $_SESSION['username']."</br>";
		echo "<h1>Hi there ".$_SESSION['firstname']."</h1>";
 		header("Location: user_list.php"); 
	}
	else{
		header("Location: error.php?errorCode=That user does not exist");
	}
 
	
 ?>
