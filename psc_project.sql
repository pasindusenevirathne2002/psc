-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2023 at 05:26 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psc_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `aindex` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(200) COLLATE utf8_bin NOT NULL,
  `dob` date DEFAULT NULL,
  `age` int(3) NOT NULL,
  `school` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`aindex`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`aindex`, `cname`, `dob`, `age`, `school`) VALUES
(1, 'L.G.S SADARUNI', NULL, 17, 'G/ANANDA CENTRAL COLLEGE'),
(2, 'L.P.S.HEMAL', NULL, 13, 'RICHMAND COLLEGE');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `mid` int(5) NOT NULL,
  `did` int(5) NOT NULL,
  `dname` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `dsname` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `dtname` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `own` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`mid`,`did`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`mid`, `did`, `dname`, `dsname`, `dtname`, `own`) VALUES
(0, 1, 'Governor Secretariat Office\r\n', 'ආණ්ඩුකාර ලේකම් කාර්යාලය\r\n', 'கல்வி அமைச்சு\r\n', 'own\r\n'),
(0, 2, 'Council Secretariat\r\n', 'සභා ලේකම් කාර්යාලය\r\n', 'கவுன்சில் செயலகம்\r\n', 'own\r\n'),
(0, 3, 'Provincial Public Service Commission\r\n', 'පළාත් රජ්‍ය සේවා කොමිෂන් සභාව\r\n', 'மாகாண பொது சேவை ஆணைக்குழு\r\n', 'own\r\n'),
(2, 1, 'Ministry of Education\r\n', 'අධ්‍යාපන අමාත්‍යාංශය\r\n', 'கல்வி அமைச்சு\r\n', 'own\r\n'),
(2, 2, 'Department of Education\r\n', 'අධ්‍යාපන දෙපාර්තමේන්තුව\r\n', 'கல்வித்துறை\r\n', 'Ministry of Education\r\n'),
(2, 3, 'Road Development Authority\r\n', 'මාර්ග සංවර්ධන අධිකාරිය\r\n', 'வழி மேம்பாட்டு ஆணையம்\r\n', 'Ministry of Education\r\n'),
(3, 1, 'Ministry of Agriculture\r\n', 'කෘෂිකර්ම අමාත්‍යාංශය\r\n', 'விவசாய அமைச்சு\r\n\r\n', 'own\r\n'),
(3, 2, 'Department of Agriculture\r\n', 'කෘෂිකර්ම දෙපාර්තමේන්තුව\r\n', 'வேளாண் துறை\r\n', 'Ministry of Agriculture\r\n'),
(3, 3, 'Irrigation Department\r\n', 'වාරිමාර්ග දෙපාර්තමේන්තුව\r\n', 'நீர்ப்பாசன திணைக்களம்\r\n', 'Ministry of Agriculture\r\n'),
(3, 4, 'Department of Cooperative Development\r\n', 'සමූපකාර සංවර්ධන දෙපාර්තමේන්තුව\r\n', 'கூட்டுறவு வளர்ச்சி துறை\r\n', 'Ministry of Agriculture\r\n'),
(4, 1, 'Ministry of Fisheries\r\n', 'ධීවර අමාත්‍යාංශය\r\n', 'கடற்றொழில் அமைச்சு\r\n', 'own\r\n'),
(4, 2, 'Department of Production and Health\r\n', 'සත්ව නිෂ්පාදන හා සෞඛ්‍ය දෙපාර්තමේන්තුව\r\n', 'உற்பத்தி மற்றும் சுகாதாரத் துறை\r\n', 'Ministry of Fisheries\r\n'),
(4, 3, 'Department Of Industrial Development\r\n', 'කර්මාන්ත සංවර්ධන දෙපාර්තමේන්තුව\r\n', 'தொழில் வளர்ச்சி துறை\r\n', 'Ministry of Fisheries\r\n'),
(5, 1, 'Ministry of Sports\r\n', 'ක්‍රීඩා අමාත්‍යාංශය\r\n', 'விளையாட்டுத்துறை அமைச்சு\r\n\r\n', 'own\r\n'),
(5, 2, 'Department of Socials Welfare, Probation and Child Care Services\r\n', 'සමාජ සුබසාධන, පරිවාස හා ළමාරක්ෂක සේවා දෙපාර්තමේන්තුව\r\n', 'சமூக நலன், நன்னடத்தை மற்றும் குழந்தை பராமரிப்பு சேவைகள் துறை\r\n', 'Ministry of Sports\r\n'),
(5, 3, 'Department Of Housing Commissioner\'s\r\n', 'නිවාස කොමසාරිස් දෙපාර්තමේන්තුව\r\n', 'வீட்டுவசதி ஆணையர் துறை\r\n', 'Ministry of Sports\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `oname` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nic` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `daddress` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `position` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `grade` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `adate` date DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `bname` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `mdate` date DEFAULT NULL,
  `pdate` date DEFAULT NULL,
  `lname` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `mustdate` date DEFAULT NULL,
  `passdate` date DEFAULT NULL,
  `pgrade` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `speriod` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `comdate` date DEFAULT NULL,
  `active` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `sallary` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `satisfac` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `disciplin` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `oname`, `nic`, `daddress`, `position`, `grade`, `adate`, `cdate`, `bname`, `mdate`, `pdate`, `lname`, `mustdate`, `passdate`, `pgrade`, `speriod`, `comdate`, `active`, `sallary`, `satisfac`, `disciplin`) VALUES
(1, 'VIKRAMANAYAKA KARUNARATHNA INDRANI ANOMI', '825730257V', 'REGINAL SECTRATARIAT-KARANDENIYA', 'SOCIAL SERVICE OFFICER', 'III', '2010-08-02', '2010-08-02', '2ND EFFICIENCY CUTOFF', '2015-08-02', '2011-04-18', 'TAMIL LANGUAGE I LEVEL', '2017-08-02', '2015-12-06', 'III', 'Yes', '2020-08-02', 'Yes', 'Yes', 'Yes', 'No'),
(2, 'pasi', 'ew131', 'ewf', 'Anikkagewaththa, School lane', 'Anikkagewaththa, School laneefF', '2023-06-25', '2023-06-26', 'III', '2023-06-27', '2023-06-28', 'galle', '2023-06-29', '2023-06-30', 'I', 'Yes', '2023-07-01', 'Yes', 'Yes', 'Yes', 'No'),
(3, 'pasi1', 'ew131Q', 'ewfQ', 'Anikkagewaththa, School laneQ', 'Anikkagewaththa, School laneefFQ', '2023-06-25', '2023-06-26', 'III', '2023-06-27', '2023-06-28', 'galleQ', '2023-06-29', '2023-06-30', 'I', 'Yes', '2023-07-01', 'Yes', 'Yes', 'Yes', 'No'),
(4, 'errrrrrrr', '42r', 'sf', 'da', 'DFE', '2023-06-28', '2023-07-01', 'III', '2023-06-30', '2023-06-27', 'ff', '2023-07-11', '2023-07-10', 'I', 'No', '2023-06-28', 'Yes', 'Yes', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `ministry`
--

DROP TABLE IF EXISTS `ministry`;
CREATE TABLE IF NOT EXISTS `ministry` (
  `mid` int(5) NOT NULL,
  `mname` varchar(200) COLLATE utf8_bin NOT NULL,
  `msname` varchar(200) COLLATE utf8_bin NOT NULL,
  `mtname` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ministry`
--

INSERT INTO `ministry` (`mid`, `mname`, `msname`, `mtname`) VALUES
(0, 'Independent\r\n', 'ස්වාධීන\r\n', 'ஒரு சுதந்திரமான\r\n'),
(1, 'Chief Ministry\r\n', 'ප්‍රධාන අමාත්‍යාංශය\r\n', 'தலைமை அமைச்சு\r\n'),
(2, 'Ministry of Education\r\n', 'අධ්‍යාපන අමාත්‍යාංශය\r\n', 'கல்வி அமைச்சு\r\n'),
(3, 'Ministry of Agriculture\r\n', 'කෘෂිකර්ම අමාත්‍යාංශය\r\n', 'விவசாய அமைச்சு\r\n'),
(4, 'Ministry of Fisheries\r\n', 'ධීවර අමාත්‍යාංශය\r\n', 'கடற்றொழில் அமைச்சு \r\n'),
(5, 'Ministry of Sports\r\n', 'ක්‍රීඩා අමාත්‍යාංශය\r\n', 'விளையாட்டுத்துறை அமைச்சு\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `officerdetail`
--

DROP TABLE IF EXISTS `officerdetail`;
CREATE TABLE IF NOT EXISTS `officerdetail` (
  `ministry` varchar(100) COLLATE utf8_bin NOT NULL,
  `department` varchar(100) COLLATE utf8_bin NOT NULL,
  `aindex` int(5) NOT NULL AUTO_INCREMENT,
  `officername` varchar(200) COLLATE utf8_bin NOT NULL,
  `nic` int(12) DEFAULT NULL,
  `daddress` varchar(100) COLLATE utf8_bin NOT NULL,
  `address` varchar(200) COLLATE utf8_bin NOT NULL,
  `paddress` varchar(200) COLLATE utf8_bin NOT NULL,
  `telno` int(10) DEFAULT NULL,
  `wtelno` int(10) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`aindex`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `officerdetail`
--

INSERT INTO `officerdetail` (`ministry`, `department`, `aindex`, `officername`, `nic`, `daddress`, `address`, `paddress`, `telno`, `wtelno`, `email`) VALUES
('Chief Ministry', 'HEALTH', 1, 'JAYASINHA DONA YAMUNA KUMARI', 0, 'BASE HOSPITAL-ELPITIYA', '67/75 SAMPATH UYANA, MIHIDU MAWATHA, IGALA, ELPITIYA ', '67/75 SAMPATH UYANA, MIHIDU MAWATHA, IGALA, ELPITIYA ', 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `satus`
--

DROP TABLE IF EXISTS `satus`;
CREATE TABLE IF NOT EXISTS `satus` (
  `aindex` int(10) NOT NULL AUTO_INCREMENT,
  `sinhala` varchar(50) COLLATE utf8_bin NOT NULL,
  `tamil` varchar(50) COLLATE utf8_bin NOT NULL,
  `english` varchar(50) COLLATE utf8_bin NOT NULL,
  `marrege` varchar(20) COLLATE utf8_bin NOT NULL,
  `mname` varchar(200) COLLATE utf8_bin NOT NULL,
  `waddress` varchar(200) COLLATE utf8_bin NOT NULL,
  `saddress` varchar(200) COLLATE utf8_bin NOT NULL,
  `forces` varchar(20) COLLATE utf8_bin NOT NULL,
  `service` varchar(100) COLLATE utf8_bin NOT NULL,
  `position` varchar(100) COLLATE utf8_bin NOT NULL,
  `child` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`aindex`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `satus`
--

INSERT INTO `satus` (`aindex`, `sinhala`, `tamil`, `english`, `marrege`, `mname`, `waddress`, `saddress`, `forces`, `service`, `position`, `child`) VALUES
(1, 'ii level', 'iii level', 'Good', 'Yes', 'L.P. ANIL SANTHA', 'AGRAMATHYA ARAKSHAKA KOTTASAYA, COLOMBO 05', '67/75 SAMPATH UYANA, MIHIDU MAWATHA, IGALA, ELPITIYA', 'Yes ', 'POLICE', 'SERGEANT', 'Yes '),
(2, '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `servicename` varchar(100) COLLATE utf8_bin NOT NULL,
  `nicname` varchar(50) COLLATE utf8_bin NOT NULL,
  `apofficer` varchar(100) COLLATE utf8_bin NOT NULL,
  `salaryscal` int(12) NOT NULL,
  `grade` varchar(100) COLLATE utf8_bin NOT NULL,
  `slevel` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `servicedetail`
--

DROP TABLE IF EXISTS `servicedetail`;
CREATE TABLE IF NOT EXISTS `servicedetail` (
  `aindex` int(5) NOT NULL AUTO_INCREMENT,
  `sname` varchar(200) COLLATE utf8_bin NOT NULL,
  `grade` varchar(50) COLLATE utf8_bin NOT NULL,
  `sdate` date NOT NULL,
  `sallery` float NOT NULL,
  `media` varchar(50) COLLATE utf8_bin NOT NULL,
  `adate` date NOT NULL,
  `permenat` varchar(50) COLLATE utf8_bin NOT NULL,
  `appointment` varchar(100) COLLATE utf8_bin NOT NULL,
  `exam` varchar(20) COLLATE utf8_bin NOT NULL,
  `ename` varchar(100) COLLATE utf8_bin NOT NULL,
  `edate` int(10) NOT NULL,
  `eno` varchar(50) COLLATE utf8_bin NOT NULL,
  `emark` int(3) NOT NULL,
  `idate` date NOT NULL,
  `rnumber` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`aindex`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `servicedetail`
--

INSERT INTO `servicedetail` (`aindex`, `sname`, `grade`, `sdate`, `sallery`, `media`, `adate`, `permenat`, `appointment`, `exam`, `ename`, `edate`, `eno`, `emark`, `idate`, `rnumber`) VALUES
(1, 'Health service', 'I', '2016-04-02', 521400, 'Sinhala', '2001-04-02', 'Yes', ' Central Government Service', 'No', '0', 0, '0', 0, '2006-09-29', '06/02/A(VII)');

-- --------------------------------------------------------

--
-- Table structure for table `temporyteach`
--

DROP TABLE IF EXISTS `temporyteach`;
CREATE TABLE IF NOT EXISTS `temporyteach` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `attach` varchar(100) COLLATE utf8_bin NOT NULL,
  `oname` varchar(100) COLLATE utf8_bin NOT NULL,
  `oaddress` varchar(200) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `nic` varchar(12) COLLATE utf8_bin NOT NULL,
  `telno` int(10) NOT NULL,
  `fschool` varchar(100) COLLATE utf8_bin NOT NULL,
  `stype` varchar(50) COLLATE utf8_bin NOT NULL,
  `stime` varchar(50) COLLATE utf8_bin NOT NULL,
  `province` varchar(100) COLLATE utf8_bin NOT NULL,
  `reason` varchar(500) COLLATE utf8_bin NOT NULL,
  `pfrom` varchar(50) COLLATE utf8_bin NOT NULL,
  `pto` varchar(50) COLLATE utf8_bin NOT NULL,
  `period` varchar(100) COLLATE utf8_bin NOT NULL,
  `wplace` varchar(200) COLLATE utf8_bin NOT NULL,
  `preason` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `temporyteach`
--

INSERT INTO `temporyteach` (`id`, `attach`, `oname`, `oaddress`, `dob`, `nic`, `telno`, `fschool`, `stype`, `stime`, `province`, `reason`, `pfrom`, `pto`, `period`, `wplace`, `preason`) VALUES
(1, 'Reasons supported by medical records', 'HETTIHEWAGEE INDIKA', 'KOSPELAKETIYA WATTA, AHANGAMA', '1968-09-09', '687530365V', 776880873, '', 'permanent', '06 YEARS 09 MONTHS', 'Central Province ', 'CHILD HELTH PROBLEM', 'No', 'O', '', '', ''),
(2, 'Medical Reasons', 'gd', 'fwr', '2023-07-11', 'RRR', 702002268, '', 'permanent', '2023-07-05', 'gbh', '2023-06-29', '2023-07-28', 'gd', '', '', ''),
(3, 'Medical Reasons', 'pasi', 'Anikkagewaththa, School lane', '2023-06-25', '12', 702002268, 'Kahawa', 'permanent', '2023-07-15', 'Uva Province', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2023-07-05', '2023-07-03', '678', 'galle', 'ngcj'),
(4, 'pregnancy', 'daa1', 'aaaaaaa2', '2023-06-26', '3', 702002264, 'aaaaaaaaa5', 'Attachment ', '2023-06-27', 'Central Province ', 'aaaaaaaa6', '2023-06-29', '2023-07-18', 'aaaaaa7', 'aaaaaa8', 'aaaaaa9'),
(5, 'Accidents', 'sa', 'aSS', '2023-06-28', 'DSDS12', 702002268, 'Anikkagewaththa, School lane', 'Attachment ', '2023-06-26', 'North Central Province ', 'SASAS', '2023-06-28', '2023-06-28', 'DA12', 'SCC', 'SAD');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

DROP TABLE IF EXISTS `transfer`;
CREATE TABLE IF NOT EXISTS `transfer` (
  `aindex` int(10) NOT NULL AUTO_INCREMENT,
  `transfer` varchar(200) COLLATE utf8_bin NOT NULL,
  `provincialcouncil` varchar(200) COLLATE utf8_bin NOT NULL,
  `ministry` varchar(200) COLLATE utf8_bin NOT NULL,
  `department` varchar(200) COLLATE utf8_bin NOT NULL,
  `serviceplace` varchar(200) COLLATE utf8_bin NOT NULL,
  `tminisrty` varchar(200) COLLATE utf8_bin NOT NULL,
  `tdepartment` varchar(200) COLLATE utf8_bin NOT NULL,
  `tserviceplace` varchar(200) COLLATE utf8_bin NOT NULL,
  `reson` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`aindex`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`aindex`, `transfer`, `provincialcouncil`, `ministry`, `department`, `serviceplace`, `tminisrty`, `tdepartment`, `tserviceplace`, `reson`) VALUES
(1, 'Central Government Service', '0', '0', '0', '0', 'HEALTH', 'HEALTH', 'TEACHING HOSPITAL-KARAPITIYA', 'MOVING TO GALLE AREA TO FACILITATE CHILDRENS EDUCATOIN ACTIVITIES');

-- --------------------------------------------------------

--
-- Table structure for table `workdetail`
--

DROP TABLE IF EXISTS `workdetail`;
CREATE TABLE IF NOT EXISTS `workdetail` (
  `aindex` int(10) NOT NULL AUTO_INCREMENT,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `fulltime` varchar(20) COLLATE utf8_bin NOT NULL,
  `department` varchar(100) COLLATE utf8_bin NOT NULL,
  `ministry` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`aindex`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `workdetail`
--

INSERT INTO `workdetail` (`aindex`, `start`, `end`, `fulltime`, `department`, `ministry`) VALUES
(1, '2001-04-02', '2001-06-12', '2 MONTHS 15 DAYS', 'Department of Animal Production and Health', 'Chief Ministry'),
(2, '2001-06-13', '2006-09-28', '05 YEARS 03 MONTHS', 'Department of Animal Production and Health', 'Chief Ministry'),
(3, '2006-09-29', '2023-06-15', '16 YEARS 09 MONTHS', 'Department of Animal Production and Health', 'Chief Ministry');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
