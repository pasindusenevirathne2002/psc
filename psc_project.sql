-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2023 at 02:59 AM
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
  `aindex` int(10) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `age` int(3) NOT NULL,
  `school` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`aindex`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  PRIMARY KEY (`mid`,`did`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`mid`, `did`, `dname`, `dsname`, `dtname`) VALUES
(0, 1, 'Governor Secretariat Office\r\n', 'ආණ්ඩුකාර ලේකම් කාර්යාලය\r\n', 'கல்வி அமைச்சு\r\n'),
(0, 2, 'Council Secretariat\r\n', 'සභා ලේකම් කාර්යාලය\r\n', 'கவுன்சில் செயலகம்\r\n'),
(0, 3, 'Provincial Public Service Commission\r\n', 'පළාත් රජ්‍ය සේවා කොමිෂන් සභාව\r\n', 'மாகாண பொது சேவை ஆணைக்குழு\r\n'),
(2, 1, 'Ministry of Education\r\n', 'අධ්‍යාපන අමාත්‍යාංශය\r\n', 'கல்வி அமைச்சு\r\n'),
(2, 2, 'Department of Education\r\n', 'අධ්‍යාපන දෙපාර්තමේන්තුව\r\n', 'கல்வித்துறை\r\n'),
(2, 3, 'Road Development Authority\r\n', 'මාර්ග සංවර්ධන අධිකාරිය\r\n', 'வழி மேம்பாட்டு ஆணையம்\r\n'),
(3, 1, 'Ministry of Agriculture\r\n', 'කෘෂිකර්ම අමාත්‍යාංශය\r\n', 'விவசாய அமைச்சு\r\n\r\n'),
(3, 2, 'Department of Agriculture\r\n', 'කෘෂිකර්ම දෙපාර්තමේන්තුව\r\n', 'வேளாண் துறை\r\n'),
(3, 3, 'Irrigation Department\r\n', 'වාරිමාර්ග දෙපාර්තමේන්තුව\r\n', 'நீர்ப்பாசன திணைக்களம்\r\n'),
(3, 4, 'Department of Cooperative Development\r\n', 'සමූපකාර සංවර්ධන දෙපාර්තමේන්තුව\r\n', 'கூட்டுறவு வளர்ச்சி துறை\r\n'),
(4, 1, 'Ministry of Fisheries\r\n', 'ධීවර අමාත්‍යාංශය\r\n', 'கடற்றொழில் அமைச்சு\r\n'),
(4, 2, 'Department of Production and Health\r\n', 'සත්ව නිෂ්පාදන හා සෞඛ්‍ය දෙපාර්තමේන්තුව\r\n', 'உற்பத்தி மற்றும் சுகாதாரத் துறை\r\n'),
(4, 3, 'Department Of Industrial Development\r\n', 'කර්මාන්ත සංවර්ධන දෙපාර්තමේන්තුව\r\n', 'தொழில் வளர்ச்சி துறை\r\n'),
(5, 1, 'Ministry of Sports\r\n', 'ක්‍රීඩා අමාත්‍යාංශය\r\n', 'விளையாட்டுத்துறை அமைச்சு\r\n\r\n'),
(5, 2, 'Department of Socials Welfare, Probation and Child Care Services\r\n', 'සමාජ සුබසාධන, පරිවාස හා ළමාරක්ෂක සේවා දෙපාර්තමේන්තුව\r\n', 'சமூக நலன், நன்னடத்தை மற்றும் குழந்தை பராமரிப்பு சேவைகள் துறை\r\n'),
(5, 3, 'Department Of Housing Commissioner\'s\r\n', 'නිවාස කොමසාරිස් දෙපාර්තමේන්තුව\r\n', 'வீட்டுவசதி ஆணையர் துறை\r\n');

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
  `aindex` int(5) NOT NULL,
  `nic` int(12) NOT NULL,
  `officername` varchar(200) COLLATE utf8_bin NOT NULL,
  `address` varchar(200) COLLATE utf8_bin NOT NULL,
  `paddress` varchar(200) COLLATE utf8_bin NOT NULL,
  `telno` int(10) NOT NULL,
  `wtelno` int(10) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`aindex`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `aindex` int(5) NOT NULL,
  `sname` varchar(200) COLLATE utf8_bin NOT NULL,
  `grade` varchar(50) COLLATE utf8_bin NOT NULL,
  `sdate` date NOT NULL,
  `sallery` int(10) NOT NULL,
  `media` varchar(50) COLLATE utf8_bin NOT NULL,
  `adate` date NOT NULL,
  `permenat` varchar(50) COLLATE utf8_bin NOT NULL,
  `appointment` varchar(100) COLLATE utf8_bin NOT NULL,
  `paexam` varchar(100) COLLATE utf8_bin NOT NULL,
  `examname` varchar(100) COLLATE utf8_bin NOT NULL,
  `examdate` date NOT NULL,
  `examno` int(20) NOT NULL,
  `exammark` int(3) NOT NULL,
  `inclusiondate` date NOT NULL,
  `rservice` varchar(100) COLLATE utf8_bin NOT NULL,
  `service` varchar(100) COLLATE utf8_bin NOT NULL,
  `posision` varchar(100) COLLATE utf8_bin NOT NULL,
  `sinhala` varchar(50) COLLATE utf8_bin NOT NULL,
  `tamil` varchar(50) COLLATE utf8_bin NOT NULL,
  `english` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`aindex`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

DROP TABLE IF EXISTS `transfer`;
CREATE TABLE IF NOT EXISTS `transfer` (
  `aindex` int(10) NOT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `workdetail`
--

DROP TABLE IF EXISTS `workdetail`;
CREATE TABLE IF NOT EXISTS `workdetail` (
  `aindex` int(10) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `fulltime` date NOT NULL,
  `department` varchar(200) COLLATE utf8_bin NOT NULL,
  `ministry` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`aindex`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
