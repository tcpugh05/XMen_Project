<html>
	
<?php
	include 'connect.php';
	$_SESSION['firstname']=$_GET['firstname'];
	$_SESSION['lastname']=$_GET['lastname'];
	$_SESSION['username']=$_GET['username'];
	$_SESSION['pswd']=$_GET['pswd'];
	$_SESSION['needHelp']=$_GET['needHelp']; 
	//check to see if any value in form are blank//check to see if any value in form are blank
	$required = array('firstname','lastname','username','pswd','needHelp');
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
	echo $_GET['firstname']."</br>"; 
	echo $_GET['lastname']."</br>";
	echo $_GET['username']."</br>"; 
	echo $_GET['pswd']."</br>";
	echo $_GET['needHelp']. "</br>";
	if($_GET['needHelp']){
		$char = 'T'; 
		echo "Is true";
	}
	else{
		$char = 'F';
		echo "Is false"; 
	}
<<<<<<< HEAD
	$query = "SELECT * FROM user_accounts where username='".$_GET['username']."'"; 
	echo "</br>Query is".$query; 
	$result = mysql_query($query,$con) or die('</br>Could not insert into table '.mysql_error());; 
	$number_of_rows = mysql_num_rows($result);
	
	echo "get username is ". $_GET['username']."</br>";
	echo "number of rows is ". $number_of_rows; 
	if($number_of_rows == 0){
=======
	$con = mysql_connect('localhost','root','');
	mysql_select_db('mReg2', $con);
	
	//$query = "SELECT * FROM User_accounts where username ='".$_GET['username']."'"; 
	//echo "</br>Query is".$query; 
	//$result = mysql_query($query,$con) or die('</br>Could not insert into table '.mysql_error());; 
	//$number_of_rows = mysql_num_rows($result);
	
	echo "get username is ". $_GET['username']."</br>";
	//echo "number of rows is ". $number_of_rows; 
	//if($number_of_rows == 0){
>>>>>>> 75f8fcf771115740ae71b859c301452885f58604
	$sql ="INSERT INTO User_Accounts(firstname,lastname,username,pswd,needHelp)
			VALUES('".$_GET['firstname']."','".$_GET['lastname']."','".$_GET['username']."','" .$_GET['pswd']."',".$_GET['needHelp'] . ")"; 
	echo $sql; 
	mysql_query($sql,$con) or die('</br>Could not insert into table '.mysql_error());
	header("Location: user_list.php"); 
	//}
	//else{
	//	 header("Location: error.php?errorCode=Duplicate Username"); 
	//}

?>
</html>
