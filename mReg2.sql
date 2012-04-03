
DROP DATABASE IF EXISTS mREG2;
CREATE DATABASE IF NOT EXISTS mREG2;
USE mREG2;
GRANT ALL ON *.* TO 'xmen1982'@'localhost' IDENTIFIED BY 'password';


--
-- Table structure for table `Mutant`
--

DROP TABLE IF EXISTS `Mutant`;
CREATE TABLE `Mutant` (
  `ID` int(15) NOT NULL auto_increment,
  `CodeName` varchar(35) NOT NULL default '',
  `BirthName` varchar(35) NOT NULL default '',
  `Level` int(5) NOT NULL default '0',
  `Address` varchar(40) NOT NULL default '',
  `BossID` int(15) NOT NULL default '0',
  PRIMARY KEY  (`ID`)
) ;

--
-- Dumping data for table `Mutant`
--

INSERT INTO `Mutant` VALUES (1,'Cyclops','Scott Summers','4','Xavier Instatute for for the Gifted','2');
INSERT INTO `Mutant` VALUES (2,'Beast','Unknown','4','Xavier Instatute for for the Gifted','1');
INSERT INTO `Mutant` VALUES (3,'Emma Frost','Emma Frost','4','Unknown','3');
INSERT INTO `Mutant` VALUES (4,'Profesor X','Charles Xavier', '5' ,'Xavier Instatute for for the Gifted','3');
INSERT INTO Mutant VALUES (5, 'Jugernaught', 'The Jugernaught Itch!', '5' , 'Unknown','3');




--
-- Table structure for table `Powers`
--

DROP TABLE IF EXISTS `Powers`;
CREATE TABLE `Powers`(
	power_id int(4) NOT NULL auto_increment,
	PID int(3) NOT NULL,
	Power varchar(35) NOT NULL,
	PRIMARY KEY(power_id)
);
--
-- Dumping data for table `Powers`
--

INSERT INTO Powers VALUES (0,1, 'Energy Attack');
INSERT INTO Powers VALUES (1,2, 'Intellegence');
INSERT INTO Powers VALUES (2,2, 'Blue Furr');
INSERT INTO Powers VALUES (3,3, 'Telepathy');
INSERT INTO Powers VALUES (4,3, 'Personal Fortification');
INSERT INTO Powers VALUES (5,4, 'Telepathy');
INSERT INTO Powers VALUES (6,5, 'Super Strength');
INSERT INTO Powers VALUES (7,5, 'Personal Fortification');



--
-- Table structure for table `Assoc`
--

DROP TABLE IF EXISTS `Assoc`;
CREATE TABLE `Assoc`(
	AID int(3) NOT NULL auto_increment,
	Association varchar(35) NOT NULL,
	PRIMARY KEY(`AID`)
	
	
);

--
-- Dumping data for table 'Assoc'
--

INSERT INTO Assoc VALUES (1, 'X-Men');
INSERT INTO Assoc VALUES (2, 'The Inner Circle');
INSERT INTO Assoc VALUES (3, 'The Brotherhood');





DROP TABLE IF EXISTS `Boss`;
CREATE TABLE `Boss`(
	BID int(3) NOT NULL,
	BirthName varchar(30) NOT NULL);
INSERT INTO Boss VALUES (1, 'Cyclops');
INSERT INTO Boss VALUES (2, 'Beast');
INSERT INTO Boss VALUES (3, 'Emma Frost');
INSERT INTO Boss VALUES (4, 'Professor X');
INSERT INTO Boss VALUES (5, 'Jugernaught');

	

--
-- Table structure for table `Collaborators`
--

DROP TABLE IF EXISTS `Collaborators`;
CREATE TABLE `Collaborators` (
  `ID` int(15) NOT NULL auto_increment,
  `Name` varchar(52) NOT NULL default '',
  `Address` varchar(52) NOT NULL default '',
  `Harbored` enum('T','F') NOT NULL default 'F',
  `Funded` enum('T','F') NOT NULL default 'F',
  `Intamate` enum('T','F') NOT NULL default 'F',
  `FailedtoRepo` enum('T','F') NOT NULL default 'F',
  `Participated` enum('T','F') NOT NULL default 'F',
  `AdditionalInfo` varchar(52) NOT NULL default '',
  PRIMARY KEY  (`ID`)
) ;

--
-- Dumping data for table `Collaborators`
--

INSERT INTO `Collaborators` VALUES (1,'Moyra','','T','F','T','T','T','Personal Friend of Profesor X');
INSERT INTO `Collaborators` VALUES (2,'Edward','Twilight Town where vampires live','T','T','T','T','T','Married Bella  She has got to be a Mutant_I mean look at her');
INSERT INTO `Collaborators` VALUES (3,'Papa Smurf','Smurf Village','F','F','F','T','T','Little Blue Man not mutant    Why');
INSERT INTO `Collaborators` VALUES (4,'April Oniel','New York NY','T','T','T','T','T','Runs with the Teenage MUTANT ninja Turtles_ Possible relations with Donatello');






--
-- Table structure for table `User_accounts`
--

DROP TABLE IF EXISTS `User_accounts`;
CREATE TABLE `User_Accounts` (
  id int(15) NOT NULL auto_increment,
  firstname varchar(35) NOT NULL default 'Jane',
  lastname varchar(35) NOT NULL default 'Smith',
  username varchar(35) NOT NULL default 'MrEcho',
  pswd varchar(52),
  reported int(5) NOT NULL default '0',
  needHelp enum('T','F') NOT NULL default 'F',
  PRIMARY KEY  (id)
); 


--
-- Dumping data for table `User_accounts`
--

INSERT INTO `User_accounts` VALUES (1,'Senitor', 'Kelly', 'Senitor Kelly', SHA('D0wnW1ththeMut@nts!!!'), 54, 'T');


