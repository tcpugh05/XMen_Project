DROP DATABASE IF EXISTS mREG2;
CREATE DATABASE IF NOT EXISTS mREG2;
USE mREG2;

--
--Created by Isaac Erickson--
--

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
  PRIMARY KEY  (`ID`)
) ;

--
-- Dumping data for table `Mutant`
--

INSERT INTO `Mutant` VALUES (1,'Cyclops','Scott Summers','4','Xavier Instatute for for the Gifted');
INSERT INTO `Mutant` VALUES (2,'Beast','Unkown','4','Xavier Instatute for for the Gifted');
INSERT INTO `Mutant` VALUES (3,'Emma Frost','Emma Frost','4','Unkown');
INSERT INTO `Mutant` VALUES (4,'Profesor X','Charles Xavier', 5 ,'Xavier Instatute for for the Gifted');
INSERT INTO Mutant VALUES (5, 'Jugernaught', 'The Jugernaught Itch!', 5, 'Unkown');




--
-- Table structure for table `Powers`
--

DROP TABLE IF EXISTS `Powers`;
CREATE TABLE `Powers`(
	PID int(3) NOT NULL,
	Power varchar(35) NOT NULL
);
--
-- Dumping data for table `Powers`
--

INSERT INTO Powers VALUES (1, 'Energy Attack');
INSERT INTO Powers VALUES (2, 'Intellegence');
INSERT INTO Powers VALUES (2, 'Blue Furr');
INSERT INTO Powers VALUES (3, 'Telepathy');
INSERT INTO Powers VALUES (3, 'Personal Fortification');
INSERT INTO Powers VALUES (4, 'Telepathy');
INSERT INTO Powers VALUES (5, 'Super Strength');
INSERT INTO Powers VALUES (5, 'Personal Fortification');



--
-- Table structure for table `Assoc`
--

DROP TABLE IF EXISTS `Assoc`;
CREATE TABLE `Assoc`(
	AID int(3) NOT NULL,
	Association varchar(35) NOT NULL
);

--
-- Dumping data for table 'Assoc'
--

INSERT INTO Assoc VALUES (1, 'X-Men');
INSERT INTO Assoc VALUES (2, 'X-Men');
INSERT INTO Assoc VALUES (3, 'X-Men');
INSERT INTO Assoc VALUES (3, 'The Inner Circle');
INSERT INTO Assoc VALUES (4, 'X-Men');
INSERT INTO Assoc VALUES (5, 'The Brotherhood');







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
  firstname varchar(35) NOT NULL default 'Jane',
  lastname varchar(35) NOT NULL default 'Smith',
  username varchar(35) NOT NULL default 'MrEcho',
  pswd varchar(52),
  reported int(5) NOT NULL default '0',
  needHelp enum('T','F') NOT NULL default 'F',
  PRIMARY KEY  (username)
); 


--
-- Dumping data for table `User_accounts`
--

INSERT INTO `User_accounts` VALUES ('Senitor', 'Kelly', 'Senitor Kelly', SHA('D0wnW1ththeMut@nts!!!'), 54, 'T');


