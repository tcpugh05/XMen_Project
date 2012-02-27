<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query("CREATE DATABASE my_db",$con))
  {
  echo "Database created";
  }



// Create table
$tableExists="SELECT * FROM User_Accounts";
$result=mysql_query($tableExists);
mysql_select_db("my_db", $con);
if(!$result){
	$sql = "CREATE TABLE User_Accounts (
  id int NOT NULL auto_increment,
  first_name varchar(35) NOT NULL default 'Jane',
  last_name varchar(35) NOT NULL default 'Smith',
  pswd varchar(52),
  username varchar(52), 
  reported int NOT NULL default '0',
  needsHelp enum('T','F') NOT NULL default 'F',
  PRIMARY KEY  (id)
) ;";
// Execute query
    mysql_query($sql,$con);
	mysql_close($con);
}
else{
	echo "it is false";
	echo "table exists"; 
}
?>

