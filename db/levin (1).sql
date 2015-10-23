-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2015 at 11:14 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `levin`
--

-- --------------------------------------------------------

--
-- Table structure for table `akasha.b2encs4103`
--

CREATE TABLE IF NOT EXISTS `akasha.b2encs4103` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `uninum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `akasha.b2encs4103`
--

INSERT INTO `akasha.b2encs4103` (`friend_id`, `uninum`) VALUES
(1, 'B1ENCS4108'),
(3, 'B1ENCS4112'),
(4, 'B1ENCS4103');

-- --------------------------------------------------------

--
-- Table structure for table `ananthu.b1encs4102`
--

CREATE TABLE IF NOT EXISTS `ananthu.b1encs4102` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `uninum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ananthu.b1encs4102`
--

INSERT INTO `ananthu.b1encs4102` (`friend_id`, `uninum`) VALUES
(1, 'B1ENCS4108'),
(2, 'B1ENCS4112'),
(3, 'B1ENCS4102');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `ansid` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(500) NOT NULL,
  `author` varchar(20) NOT NULL,
  `qid` int(11) NOT NULL,
  `atimestamp` varchar(30) NOT NULL,
  PRIMARY KEY (`ansid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ansid`, `answer`, `author`, `qid`, `atimestamp`) VALUES
(6, 'what is it about ?', 'Levin E P', 11, '1418248286'),
(7, 'it is for my main project.will you help me', 'Nidheesh V', 11, '1418248340'),
(8, 'yes , it is campus social networking site with data compression.', 'Levin E P', 12, '1418248507'),
(9, 'hello', 'Levin E P', 11, '1418286840'),
(10, 'CSNDC ', 'Levin E P', 17, '1418314562'),
(11, 'abdnasd s', 'Levin E P', 18, '1418372982'),
(12, 'fkdfkddd', 'Levin E P', 19, '1418381940'),
(13, 'hello', 'Levin E P', 20, '1418381962'),
(14, 'Po poora', 'Levin E P', 21, '1418386042');

-- --------------------------------------------------------

--
-- Table structure for table `arjun.b2encs4104`
--

CREATE TABLE IF NOT EXISTS `arjun.b2encs4104` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `uninum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `arjun.b2encs4104`
--

INSERT INTO `arjun.b2encs4104` (`friend_id`, `uninum`) VALUES
(1, 'B2ENCS4104'),
(2, 'B1ENCS4108');

-- --------------------------------------------------------

--
-- Table structure for table `ass.asdkjsbd`
--

CREATE TABLE IF NOT EXISTS `ass.asdkjsbd` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `uninum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ass.asdkjsbd`
--

INSERT INTO `ass.asdkjsbd` (`friend_id`, `uninum`) VALUES
(1, 'asdkjsbd');

-- --------------------------------------------------------

--
-- Table structure for table `bbhh.assadsa`
--

CREATE TABLE IF NOT EXISTS `bbhh.assadsa` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `uninum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bbhh.assadsa`
--

INSERT INTO `bbhh.assadsa` (`friend_id`, `uninum`) VALUES
(1, 'assadsa');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `comment` varchar(500) NOT NULL,
  `author` varchar(30) NOT NULL,
  `sid` int(10) NOT NULL,
  `ctimestamp` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cid`, `comment`, `author`, `sid`, `ctimestamp`) VALUES
(1, '', 'Levin E P', 1, ''),
(2, '', 'Levin E P', 1, ''),
(3, 'jchvchvch', 'Levin E P', 1, ''),
(4, 'hhhhhhh', 'Levin E P', 1, ''),
(5, 'Hi there nidheesh', 'Levin E P', 5, ''),
(6, 'hi', 'Levin E P', 10, ''),
(7, 'hhhhh', 'Levin E p', 13, ''),
(8, 'edmvfh', 'Levin E P', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `starttime` time NOT NULL,
  `enddate` date NOT NULL,
  `endtime` time NOT NULL,
  `timestamp1` int(15) NOT NULL,
  `timestamp2` int(15) NOT NULL,
  `seminarhall` varchar(20) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `timestamp` varchar(30) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `fjhd.ad,js`
--

CREATE TABLE IF NOT EXISTS `fjhd.ad,js` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `uninum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fjhd.ad,js`
--

INSERT INTO `fjhd.ad,js` (`friend_id`, `uninum`) VALUES
(1, 'ad,js');

-- --------------------------------------------------------

--
-- Table structure for table `kjbhb.yyyyy`
--

CREATE TABLE IF NOT EXISTS `kjbhb.yyyyy` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `uninum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kjbhb.yyyyy`
--

INSERT INTO `kjbhb.yyyyy` (`friend_id`, `uninum`) VALUES
(1, 'yyyyy');

-- --------------------------------------------------------

--
-- Table structure for table `levin.b1encs4108`
--

CREATE TABLE IF NOT EXISTS `levin.b1encs4108` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `uninum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `levin.b1encs4108`
--

INSERT INTO `levin.b1encs4108` (`friend_id`, `uninum`) VALUES
(5, 'B1ENCS4102'),
(7, 'B2ENCS4103'),
(10, 'B1ENCS4108'),
(13, 'B2ENCS4104'),
(17, 'B1ENCS4112');

-- --------------------------------------------------------

--
-- Table structure for table `nidheesh.b1encs4112`
--

CREATE TABLE IF NOT EXISTS `nidheesh.b1encs4112` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `uninum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `nidheesh.b1encs4112`
--

INSERT INTO `nidheesh.b1encs4112` (`friend_id`, `uninum`) VALUES
(9, 'B1ENCS4102'),
(12, 'B2ENCS4103'),
(15, 'B1ENCS4112'),
(21, 'B1ENCS4108');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `notificationname` varchar(100) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `ntimestamp` varchar(30) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `notificationname`, `desc`, `dept`, `ntimestamp`) VALUES
(5, 'ICollege Union nauguration', 'college Union inauguration\r\nHeld infront of college block\r\nPlease particitape', 'For All Departments', '1418369686'),
(7, 'xÚËHÍÉÉ\0,', 'xÚ+I-NËÎ*NJ\0Ã', 'xÚsË/RpÌÉQpI-H,*ÉMÍ+)\0A^', '1418370546'),
(8, 'xÚ344,NL\0dÌ', 'asda', 'xÚsË/RpÌÉQpI-H,*ÉMÍ+)\0A^', '1418370872'),
(9, 'This is a notification', 'Sample', 'Computer Science Engineering', '1418373171'),
(10, 'This is a sample notification', 'saidbasinan', 'For All Departments', '1418381122'),
(11, 'SFI Gamin confrence', 'Please attend noe', 'For All Departments', '1418386328'),
(12, 'hello', 'llllll', 'For All Departments', '1418812723'),
(13, 'hello', '', 'For All Departments', '1419073611'),
(14, 'hello', 'this is', 'For All Departments', '1420013169');

-- --------------------------------------------------------

--
-- Table structure for table `paval.`
--

CREATE TABLE IF NOT EXISTS `paval.` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `uninum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `paval.`
--

INSERT INTO `paval.` (`friend_id`, `uninum`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `author` varchar(20) NOT NULL,
  `rate` int(11) NOT NULL DEFAULT '0',
  `qtimestamp` varchar(20) NOT NULL,
  `tag1` varchar(20) NOT NULL,
  `tag2` varchar(20) NOT NULL,
  `tag3` varchar(20) NOT NULL,
  `tag4` varchar(20) NOT NULL,
  `tag5` varchar(20) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `author`, `rate`, `qtimestamp`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`) VALUES
(11, 'Can some on help me with my project work ?', 'B1ENCS4112', 1, '1418248254', 'Department', '', 'Friendship', '', 'Technical Subject'),
(12, 'Hey does any one know the full form of CSNDC ?', 'B1ENCS4112', 0, '1418248455', 'Project', '', '', '', 'Technical Subject'),
(13, 'can you solve a rubiks cube on your own with out checking www.google.com ?', 'B1ENCS4108', 0, '1418248680', 'Subject', 'Quiz', '', '', 'Technical Subject'),
(14, 'This is a sports question ?', 'B1ENCS4108', 0, '1418285872', 'Class', '', '', 'Matches', ''),
(15, 'what problem?', 'B1ENCS4108', 0, '1418286193', '', '', '', '', ''),
(16, 'Hello', 'B1ENCS4108', 0, '1418286817', '', '', '', '', ''),
(17, 'Facebook or CSNDC ?', 'B1ENCS4108', 2, '1418314551', '', '', 'Social Relevant', '', ''),
(18, 'hello this is aq ?', 'B1ENCS4108', 1, '1418372973', 'College', 'Quiz', '', '', ''),
(19, 'thisasidnad', 'B1ENCS4108', 0, '1418381807', '', '', '', '', ''),
(20, 'helloooo', 'B1ENCS4108', 0, '1418381949', '', 'Quiz', '', '', ''),
(21, 'This is a question !', 'B2ENCS4104', 0, '1418386023', '', '', 'Political', '', ''),
(22, 'HVHJVHJV', 'B1ENCS4108', 0, '1418394069', 'Department', '', '', '', ''),
(23, 'sample', 'B1ENCS4108', 1, '1420012964', 'University', '', 'Political', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE IF NOT EXISTS `share` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `share` varchar(500) NOT NULL,
  `author` varchar(30) NOT NULL,
  `rate` int(10) NOT NULL DEFAULT '0',
  `stimestamp` varchar(30) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`sid`, `share`, `author`, `rate`, `stimestamp`) VALUES
(5, 'hello', 'B1ENCS4112', 0, '1418362572'),
(6, '123', 'B1ENCS4108', 0, '1418362657'),
(7, 'hello', 'B1ENCS4108', 0, '1418363897'),
(8, 'this is a share', 'B1ENCS4108', 0, '1418364414'),
(9, 'asdvsabsamhdkbksa', 'B1ENCS4108', 0, '1418373030'),
(10, 'hello', 'B1ENCS4108', 2, '1418381361'),
(11, 'hello', 'B2ENCS4104', 0, '1418386118'),
(12, 'HFHFYHF', 'B1ENCS4108', 1, '1418394054'),
(13, 'staub', 'B1ENCS4108', 2, '1418812635'),
(14, 'sample', 'B1ENCS4108', 1, '1420012890');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobilenumber` varchar(11) NOT NULL,
  `add` varchar(500) NOT NULL,
  `town` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin` int(11) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `stype` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `addnum` varchar(30) NOT NULL,
  `uninum` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `rollnum` int(11) NOT NULL,
  `hostel` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `photo` blob NOT NULL,
  PRIMARY KEY (`uninum`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `dob`, `gender`, `email`, `mobilenumber`, `add`, `town`, `city`, `state`, `pin`, `utype`, `stype`, `course`, `dept`, `addnum`, `uninum`, `sem`, `rollnum`, `hostel`, `username`, `password`, `photo`) VALUES
(21, 'paval', 'ep', '1991-03-08', 'Male', 'pavalep@gmail.com', '9495966868', 'paval', 'thrissur', 'thrissur', 'kerala', 680003, '--', '--', '--', 'College Staff', '', '', '--', 0, '--', '', '', ''),
(18, 'Ananthu', 'K R', '1994-05-15', 'Male', 'djananthu10@gmail.com', '8089433491', 'Madakkulangara House,\r\nThiruvangoor P.O,\r\nCalicut', 'Thiruvangoor', 'Calicut', 'Kerala', 673304, 'Student', '--', 'B.Tech', 'Computer Science Engineering', '11A247', 'B1ENCS4102', 'S7', 4, 'Day Scholar', 'ananthu', 'password', ''),
(16, 'E P', 'Edakott Padamarajan ', '1994-01-08', 'Male', 'levinrockx@gmail.com', '8301091946', 'Pratheeksha house,\r\nPannimkulangara lane,\r\nAyyanthole,\r\nThrissur', 'Ayyanthole', 'Thrissur', 'Kerala', 680003, 'Student', '--', 'B.Tech', 'Computer Science Engineering', 'levinrockx', 'B1ENCS4108', '', 26, '--', 'levinrockx', 'levinias', ''),
(17, 'Nidheesh', 'V', '1994-05-26', 'Male', 'vnidheesh981@gmail.com', '9048203305', 'Chengalathparamba,\r\nSreekrishnapuram road,\r\nThriuvanoor', 'Thiruvanoor', 'Calicut', 'Kerala', 673029, 'Student', '--', 'B.Tech', 'Computer Science Engineering', '11A176', 'B1ENCS4112', '', 32, '--', 'nidheesh', '123', ''),
(19, 'Akasha', 'KK', '1994-01-09', 'Male', 'aravind51122@gmail.com', '9846042118', 'Kizhaketh house,\r\nThodannel P.O,Thodannel', 'Pala', 'Kottayam', 'Kerala', 686573, 'Student', '--', 'B.Tech', 'Computer Science Engineering', '11A246', 'B2ENCS4103', '', 6, '--', 'akash', '1234', ''),
(20, 'Arjun', 'K', '1995-04-25', 'Male', 'arjunkambrath@gmail.com', '9562863248', 'Kannur', 'Mayyil', 'Kannur', 'Kerala', 670602, 'Student', 'Teaching', 'B.Tech', 'Computer Science Engineering', '12A208', 'B2ENCS4104', 'S5', 13, 'Day Scholar', 'arjun', '123456', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
