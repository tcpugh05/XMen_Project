DROP DATABASE IF EXISTS mutantREG;
CREATE DATABASE IF NOT EXISTS mutantREG;
USE mutantREG;

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
  `Power` enum('Telepathy','Energy Attack','Personal Fortification','Intellegence','Cold','Fire','Personal Regeneration','Associated Regeneration','Power Adoption','Speed','Technology Interface','Sonic','Telekanisis','Flight','Other','Unkown') NOT NULL default 'Unkown',
  `PowerTwo` enum('Telepathy','Energy Attack', 'Personal Fortification','Intellegence','Cold','Fire','Personal Regeneration','Associated Regeneration','Power Adoption','Speed','Technology Interface','Sonic','Telekanisis','Flight','Other','None','Unkown') NOT NULL default 'Unkown',
  `PowerOther` varchar(52) NOT NULL default '',
  `FstAssoc` varchar(52) NOT NULL default '',
  `ScdAssoc` varchar(52) NOT NULL default '',
  `Address` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`ID`)
) ;

--
-- Dumping data for table `Mutant`
--

INSERT INTO `Mutant` VALUES (1,'Cyclops','Scott Summers','4','Energy Attack','None','Powerfull Energy Beam from Eyes','X-Men','Unkown','Xavier Instatute for for the Gifted');
INSERT INTO `Mutant` VALUES (2,'Beast','Unkown','4','Intellegence','None','Is Blue Ape','X-Men', 'Unkown','Xavier Instatute for for the Gifted');
INSERT INTO `Mutant` VALUES (3,'Emma Frost','Emma Frost','4','Telepathy','Personal Fortification','Can harden body into diamonds but in that form cannont use telepathy','X-Men','The Inner Circle','Unkown');
INSERT INTO `Mutant` VALUES (4,'Profesor X','Charles Xavier','5','Telepathy','None','Restricted to wheelchair and founder of X-Men','X-Men','Unkown','Xavier Instatute for for the Gifted');






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
-- Table structure for table `User_Accounts`
--

DROP TABLE IF EXISTS `User_accounts`;
CREATE TABLE `User_Accounts` (
  `ID` int(15) NOT NULL auto_increment,
  `Name` varchar(35) NOT NULL default '',
  `PSWD` varchar(52),
  `Reported` int(5) NOT NULL default '0',
  `NeedsHelp` enum('T','F') NOT NULL default 'F',
  PRIMARY KEY  (`ID`)
) ; 

--
-- Dumping data for table `User_Accounts`
--

INSERT INTO `User_Accounts` VALUES (1,'Senitor Kelly',SHA('D0wnW1ththeMut@nts!!!'),'54','T');



