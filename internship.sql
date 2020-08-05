-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 01:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `query` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester_1`
--

CREATE TABLE `semester_1` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `hindi` varchar(255) NOT NULL,
  `marathi` varchar(255) NOT NULL,
  `math` varchar(255) NOT NULL,
  `science` varchar(255) NOT NULL,
  `social_studies` int(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester_1`
--

INSERT INTO `semester_1` (`id`, `name`, `english`, `hindi`, `marathi`, `math`, `science`, `social_studies`, `roll`, `percentage`) VALUES
(1, ' Liam     ', '99', '66', '55', '88', '44', 88, 101, '73.333333333333'),
(2, ' Noah    ', '77', '77', '88', '25', '63', 96, 102, '71'),
(3, ' William    ', '85', '96', '96', '85', '74', 52, 103, '81.333333333333'),
(4, ' James    ', '45', '45', '68', '56', '89', 45, 104, '58'),
(5, ' Oliver    ', '45', '85', '36', '52', '47', 56, 105, '53.5'),
(6, ' Benjamin    ', '88', '56', '54', '23', '25', 36, 106, '47'),
(7, ' Elijah    ', '86', '87', '52', '38', '98', 100, 107, '76.833333333333'),
(8, ' Lucas    ', '58', '36', '95', '68', '95', 69, 108, '70.166666666667'),
(9, ' Mason    ', '96', '98', '45', '89', '99', 100, 109, '87.833333333333'),
(10, ' Logan    ', '88', '66', '55', '44', '33', 77, 110, '60.5'),
(11, ' Alexander    ', '45', '75', '89', '63', '45', 78, 201, '65.833333333333'),
(12, ' Jacob    ', '89', '63', '58', '96', '45', 12, 202, '60.5'),
(13, ' Ethan    ', '12', '14', '15', '16', '7', 8, 203, '12'),
(14, ' Michael    ', '85', '96', '74', '99', '100', 14, 204, '78'),
(15, ' Daniel    ', '99', '66', '77', '55', '88', 66, 205, '75.166666666667'),
(16, ' Henry    ', '59', '74', '56', '89', '74', 56, 206, '68'),
(17, ' Jackson    ', '12', '85', '36', '74', '56', 85, 207, '58'),
(18, ' Sebastian    ', '56', '85', '96', '74', '25', 69, 208, '67.5'),
(19, ' Aiden    ', '45', '78', '96', '36', '54', 78, 209, '64.5'),
(20, ' Matthew    ', '45', '96', '78', '41', '63', 89, 210, '68.666666666667'),
(21, ' Samuel    ', '78', '96', '85', '74', '85', 96, 301, '85.666666666667'),
(22, ' David    ', '99', '74', '88', '99', '66', 55, 302, '80.166666666667'),
(24, ' Carter    ', '51', '71', '91', '88', '52', 36, 304, '64.833333333333'),
(26, ' Wyatt    ', '85', '96', '78', '45', '74', 85, 306, '77.166666666667'),
(27, ' John    ', '71', '45', '78', '99', '100', 57, 307, '75'),
(29, ' Luke    ', '85', '99', '100', '45', '71', 45, 309, '74.166666666667'),
(30, ' Jayden    ', '99', '99', '99', '99', '88', 99, 310, '97.166666666667'),
(31, ' Dylan    ', '44', '88', '99', '100', '41', 58, 401, '71.666666666667'),
(34, 'Isaac', '85', '96', '74', '99', '45', 77, 404, '79.333333333333'),
(36, ' Julia    ', '44', '77', '88', '99', '66', 77, 406, '75.166666666667'),
(37, ' Mateo    ', '77', '88', '99', '100', '100', 100, 407, '94'),
(40, ' Lincoln    ', '41', '58', '96', '74', '52', 96, 410, '69.5');

-- --------------------------------------------------------

--
-- Table structure for table `semester_2`
--

CREATE TABLE `semester_2` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `hindi` varchar(255) NOT NULL,
  `marathi` varchar(255) NOT NULL,
  `math` varchar(255) NOT NULL,
  `science` varchar(255) NOT NULL,
  `social_studies` int(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester_2`
--

INSERT INTO `semester_2` (`id`, `name`, `english`, `hindi`, `marathi`, `math`, `science`, `social_studies`, `roll`, `percentage`) VALUES
(1, ' Liam     ', '44', '88', '66', '77', '99', 44, 101, '69.666666666667'),
(2, ' Noah    ', '99', '66', '99', '88', '44', 55, 102, '75.166666666667'),
(3, ' William    ', '99', '66', '88', '44', '33', 77, 103, '67.833333333333'),
(4, ' James    ', '99', '88', '55', '66', '85', 96, 104, '81.5'),
(5, ' Oliver    ', '52', '36', '74', '45', '96', 65, 105, '61.333333333333'),
(6, ' Benjamin    ', '96', '78', '45', '36', '96', 78, 106, '71.5'),
(7, ' Elijah    ', '89', '56', '35', '96', '87', 96, 107, '76.5'),
(8, ' Lucas    ', '77', '85', '96', '74', '52', 63, 108, '74.5'),
(9, ' Mason    ', '96', '85', '35', '96', '78', 45, 109, '72.5'),
(10, ' Logan    ', '78', '79', '68', '89', '85', 56, 110, '75.833333333333'),
(11, ' Alexander    ', '78', '89', '96', '74', '52', 35, 201, '70.666666666667'),
(12, ' Jacob    ', '85', '96', '74', '25', '74', 36, 202, '65'),
(13, ' Ethan    ', '96', '74', '56', '74', '12', 3, 203, '52.5'),
(14, ' Michael    ', '96', '74', '52', '85', '96', 78, 204, '80.166666666667'),
(15, 'Daniel', '96', '74', '85', '78', '45', 96, 205, '79'),
(16, ' Henry    ', '56', '89', '69', '74', '56', 85, 206, '71.5'),
(17, ' Jackson    ', '56', '78', '96', '74', '12', 47, 207, '60.5'),
(18, ' Sebastian    ', '45', '89', '96', '74', '56', 78, 208, '73'),
(19, ' Aiden    ', '96', '78', '41', '25', '96', 78, 209, '69'),
(20, ' Matthew    ', '96', '78', '41', '25', '36', 96, 210, '62'),
(21, ' Samuel    ', '88', '99', '44', '77', '55', 22, 301, '64.166666666667'),
(24, ' Carter    ', '99', '88', '44', '55', '66', 77, 304, '71.5'),
(27, ' John    ', '99', '55', '77', '44', '85', 96, 307, '76'),
(29, ' Luke    ', '89', '45', '74', '85', '96', 78, 309, '77.833333333333'),
(30, ' Jayden    ', '96', '85', '74', '78', '99', 78, 310, '85'),
(31, ' Dylan    ', '99', '78', '45', '74', '85', 96, 401, '79.5'),
(34, ' Isaac    ', '96', '78', '41', '25', '36', 78, 404, '59'),
(35, ' Gabriel    ', '89', '63', '89', '74', '52', 88, 405, '75.833333333333'),
(36, ' Julia    ', '77', '99', '66', '88', '58', 96, 406, '80.666666666667'),
(37, ' Mateo    ', '77', '88', '99', '66', '44', 77, 407, '75.166666666667'),
(38, ' Anthony    ', '77', '88', '99', '66', '44', 77, 408, '75.166666666667'),
(39, ' Jaxon    ', '78', '96', '85', '74', '78', 89, 409, '83.333333333333');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `standard` varchar(100) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `utcategory_1` varchar(255) NOT NULL,
  `utcategory_2` varchar(255) NOT NULL,
  `utcategory_3` varchar(255) NOT NULL,
  `utcategory_4` varchar(255) NOT NULL,
  `scategory_1` varchar(255) NOT NULL,
  `scategory_2` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `phone`, `standard`, `roll`, `gender`, `utcategory_1`, `utcategory_2`, `utcategory_3`, `utcategory_4`, `scategory_1`, `scategory_2`, `date`) VALUES
(1, 'Liam ', 'Liam@gmail.com', '75369841236', '1st', '101', 'Male', 'Achiever', 'Ranker', 'Ranker', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(2, 'Noah', 'Noah@gmail.com', '123687468', '1st', '102', 'Male', 'Achiever', 'Ranker', 'Ranker', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(3, 'William', 'William@gmail.com', '103673654', '1st', '103', 'Male', 'Fail', 'Achiever', 'Achiever', 'Achiever', 'Ranker', 'Achiever', '2020-08-04'),
(4, 'James', 'James@gmail.com', '3679845610', '1st', '104', 'Male', 'Defaulter', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Ranker', '2020-08-04'),
(5, 'Oliver', 'Oliver@gmail.com', '4789657894', '1st', '105', 'Male', 'Achiever', 'Ranker', 'Achiever', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(6, 'Benjamin', 'Benjamin@gmail.com', '9874687495', '1st', '106', 'Male', 'Achiever', 'Ranker', 'Achiever', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(7, 'Elijah', 'Elijah@gmail.com', '6789412365', '1st', '107', 'Female', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(8, 'Lucas', 'Lucas@gmail.com', '974894567', '1st', '108', 'Female', 'Fail', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(9, 'Mason', 'Mason@gmail.com', '4789557894', '1st', '109', 'Female', 'Defaulter', 'Achiever', 'Achiever', 'Achiever', 'Ranker', 'Achiever', '2020-08-04'),
(10, 'Logan', 'Logan@gmail.com', '9874897456', '1st', '110', 'Male', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(11, 'Alexander', 'Alexander@gmail.com', '8743012547', '2nd', '201', 'Male', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(12, 'Jacob', 'Jacob@gmail.com', '7894789456', '2nd', '202', 'Female', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(13, 'Ethan', 'Ethan@gmail.com', '6789478945', '2nd', '203', 'Female', 'Achiever', 'Defaulter', 'Fail', 'Achiever', 'Fail', 'Achiever', '2020-08-04'),
(14, 'Michael', 'Michael@gmail.com', '7547896578', '2nd', '204', 'Male', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Ranker', '2020-08-04'),
(15, 'Daniel', 'Daniel@gmail.com', '9784578965', '2nd', '205', 'Female', 'Fail', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(16, 'Henry', 'Henry@gmail.com', '7897478956', '2nd', '206', 'Male', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(17, 'Jackson', 'Jackson@gmail.com', '9878978978', '2nd', '207', 'Female', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(18, 'Sebastian', 'Sebastian@gmail.com', '6789478945', '2nd', '208', 'Male', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(19, 'Aiden', 'Aiden@gmail.com', '7894789567', '2nd', '209', 'Female', 'Achiever', 'Fail', 'Achiever', 'Defaulter', 'Achiever', 'Achiever', '2020-08-04'),
(20, 'Matthew', 'Matthew@gmail.com', '7894756894', '2nd', '210', 'Female', 'Achiever', 'Ranker', 'Achiever', 'Fail', 'Achiever', 'Achiever', '2020-08-04'),
(21, 'Samuel', 'Samuel@gmail.com', '5789475689', '3rd', '301', 'Male', 'Fail', 'Achiever', 'Achiever', 'Achiever', 'Ranker', 'Achiever', '2020-08-04'),
(22, 'David', 'David@gmail.com', '4789657894', '3rd', '302', 'Male', 'Fail', 'Achiever', '', 'Achiever', 'Ranker', '', '2020-08-04'),
(23, 'Joseph', 'Joseph@gmail.com', '9874557864', '3rd', '303', 'Male', 'Achiever', '', 'Ranker', '', '', '', '2020-08-04'),
(24, 'Carter', 'Carter@gmail.com', '7897456789', '3rd', '304', 'Female', 'Ranker', 'Achiever', '', '', 'Achiever', 'Achiever', '2020-08-04'),
(25, 'Owen', 'Owen@gmail.com', '4785698745', '3rd', '305', 'Male', 'Achiever', '', 'Achiever', '', '', '', '2020-08-04'),
(26, 'Wyatt', 'Wyatt@gmail.com', '5789478569', '3rd', '306', 'Male', 'Achiever', 'Achiever', 'Ranker', 'Ranker', 'Achiever', '', '2020-08-04'),
(27, 'John', 'John@gmail.com', '5789475687', '3rd', '307', 'Female', 'Achiever', '', '', 'Achiever', 'Achiever', 'Achiever', '2020-08-04'),
(28, 'Jack', 'Jack@gmail.com', '7587469856', '3rd', '308', 'Female', 'Ranker', '', 'Ranker', '', '', '', '2020-08-04'),
(29, 'Luke', 'luke@gmail.com', '5789475687', '3rd', '309', 'Male', 'Ranker', 'Achiever', '', '', 'Achiever', 'Achiever', '2020-08-04'),
(30, 'Jayden', 'Jayden@gmail.com', '9874789478', '3rd', '310', 'Male', 'Ranker', 'Achiever', 'Ranker', 'Ranker', 'Ranker', 'Ranker', '2020-08-04'),
(31, 'Dylan', 'Dylan@gmail.com', '8574689745', '4th', '401', 'Male', 'Achiever', 'Fail', 'Achiever', 'Ranker', 'Achiever', 'Achiever', '2020-08-04'),
(32, 'Grayson', 'Grayson@gmail.com', '5789647569', '4th', '402', 'Male', 'Achiever', '', '', '', '', '', '2020-08-04'),
(33, 'Levi', 'Levi@gmail.com', '7568947569', '4th', '403', 'Female', '', 'Achiever', '', 'Achiever', '', '', '2020-08-04'),
(34, 'Isaac', 'Isaac@gmail.com', '5867896547', '4th', '404', 'Male', 'Ranker', '', 'Achiever', '', 'Achiever', 'Achiever', '2020-08-04'),
(35, 'Gabriel', 'Gabriel@gmail.com', '5789654789', '4th', '405', 'Other', 'Achiever', 'Ranker', 'Ranker', 'Ranker', '', 'Achiever', '2020-08-04'),
(36, 'Julia', 'Julia@gmail.com', '5789654789', '4th', '406', 'Other', '', '', '', '', 'Achiever', 'Ranker', '2020-08-04'),
(37, 'Mateo', 'Mateo@gmail.com', '5789647856', '4th', '407', 'Male', 'Fail', 'Ranker', 'Ranker', '', 'Ranker', 'Achiever', '2020-08-04'),
(38, 'Anthony', 'Anthony@gmail.com', '8965745896', '4th', '408', 'Other', 'Fail', '', 'Achiever', 'Fail', '', 'Achiever', '2020-08-04'),
(39, 'Jaxon', 'Jaxon@gmail.com', '8745698568', '4th', '409', 'Male', '', 'Ranker', 'Achiever', 'Fail', '', 'Ranker', '2020-08-04'),
(40, 'Lincoln', 'Lincoln@gmail.com', '9685698569', '4th', '410', 'Male', '', '', 'Achiever', 'Ranker', 'Achiever', '', '2020-08-04'),
(41, 'Joshua', 'Joshua@gmail.com', '9685745689', '5th', '501', 'Male', '', '', '', '', '', '', '2020-08-04'),
(42, 'Christopher', 'Christopher@gmail.com', '9685747485', '5th', '502', 'Female', '', '', '', '', '', '', '2020-08-04'),
(43, 'Andrew', 'Andrew@gmail.com', '5874569874', '5th', '503', 'Other', '', '', '', '', '', '', '2020-08-04'),
(44, 'Theodore', 'Theodore@gmail.com', '8569745689', '5th', '504', 'Male', '', '', '', '', '', '', '2020-08-04'),
(45, 'Caleb', 'Caleb@gmail.com', '9685747485', '5th', '505', 'Male', '', '', '', '', '', '', '2020-08-04'),
(46, 'Ryan', 'Ryan@gmail.com', '9685747485', '5th', '506', 'Male', '', '', '', '', '', '', '2020-08-04'),
(47, 'Asher', 'Asher@gmail.com', '8574748574', '5th', '507', 'Male', '', '', '', '', '', '', '2020-08-04'),
(48, 'Nathan', 'Nathan@gmail.com', '6352417485', '5th', '508', 'Female', '', '', '', '', '', '', '2020-08-04'),
(49, 'Thomas', 'Thomas@gmail.com', '8574968574', '5th', '509', 'Male', '', '', '', '', '', '', '2020-08-04'),
(50, 'Leo', 'Leo@gmail.com', '8596748574', '5th', '510', 'Male', '', '', '', '', '', '', '2020-08-04'),
(51, 'Isaiah', 'Isaiah@gmail.com', '9685747474', '6th', '601', 'Male', '', '', '', '', '', '', '2020-08-04'),
(52, 'Charles', 'Charles@gmail.com', '7452638596', '6th', '602', 'Male', '', '', '', '', '', '', '2020-08-04'),
(53, 'Josiah', 'Josiah@gmail.com', '9652638574', '6th', '603', 'Female', '', '', '', '', '', '', '2020-08-04'),
(54, 'Hudson', 'Hudson@gmail.com', '8563524196', '6th', '604', 'Male', '', '', '', '', '', '', '2020-08-04'),
(55, 'Christian', 'Christian@gmail.com', '6352748596', '6th', '605', 'Other', '', '', '', '', '', '', '2020-08-04'),
(56, 'Hunter', 'Hunter@gmail.com', '6385968574', '6th', '606', 'Other', '', '', '', '', '', '', '2020-08-04'),
(57, 'Connor', 'Connor@gmail.com', '6385968596', '6th', '607', 'Male', '', '', '', '', '', '', '2020-08-04'),
(58, 'Eli', 'Eli@gmal.com', '9685747485', '6th', '608', 'Male', '', '', '', '', '', '', '2020-08-04'),
(59, 'Ezra', 'Ezra@gmail.com', '5285968596', '6th', '609', 'Male', '', '', '', '', '', '', '2020-08-04'),
(60, 'Aaron', 'Aaron@gmail.com', '8596748596', '6th', '610', 'Male', '', '', '', '', '', '', '2020-08-04'),
(61, 'Landon', 'Landon@gmail.com', '9685748596', '7th', '701', 'Male', '', '', '', '', '', '', '2020-08-04'),
(62, 'Adrian', 'Adrian@gmail.com', '9685968596', '7th', '702', 'Female', '', '', '', '', '', '', '2020-08-04'),
(63, 'Jonathan', 'Jo@gmail.comnathan', '9674859685', '7th', '703', 'Other', '', '', '', '', '', '', '2020-08-04'),
(64, 'Nolan', 'Nolan@gmail.com', '9685747485', '7th', '704', 'Male', '', '', '', '', '', '', '2020-08-04'),
(65, 'Jeremiah', 'Jeremiah@gmail.com', '9685968596', '7th', '705', 'Male', '', '', '', '', '', '', '2020-08-04'),
(66, 'Easton', 'Easton@gmail.com', '9685748596', '7th', '706', 'Male', '', '', '', '', '', '', '2020-08-04'),
(67, 'Elias', 'Elia@gmail.com', '7474859696', '7th', '707', 'Male', '', '', '', '', '', '', '2020-08-04'),
(68, 'Colton', 'Colton@gmail.com', '9969696968', '7th', '708', 'Other', '', '', '', '', '', '', '2020-08-04'),
(69, 'Cameron', 'Cameron@gmail.com', '9696857496', '7th', '709', 'Female', '', '', '', '', '', '', '2020-08-04'),
(70, 'Carson', 'Carson@gmail.com', '9659685969', '7th', '710', 'Male', '', '', '', '', '', '', '2020-08-04'),
(71, 'Robert', 'Robert@gmail.com', '8596858965', '8th', '801', 'Male', '', '', '', '', '', '', '2020-08-04'),
(72, 'Angel', 'Angel@gmail.com', '8596859685', '8th', '802', 'Female', '', '', '', '', '', '', '2020-08-04'),
(73, 'Maverick', 'Maverick@gmail.com', '9696968574', '8th', '803', 'Male', '', '', '', '', '', '', '2020-08-04'),
(74, 'Nicholas', 'Nicholas@gmail.com', '6963528596', '8th', '804', 'Male', '', '', '', '', '', '', '2020-08-04'),
(75, 'Dominic', 'Dominic@gmail.com', '9636523563', '8th', '805', 'Female', '', '', '', '', '', '', '2020-08-04'),
(76, 'Jaxson', 'Jaxson@gmail.com', '8563524152', '8th', '806', 'Male', '', '', '', '', '', '', '2020-08-04'),
(77, 'Greyson', 'Greyson@gmail.com', '8596352365', '8th', '807', 'Male', '', '', '', '', '', '', '2020-08-04'),
(78, 'Adam', 'Adam@gmail.com', '8596635235', '8th', '808', 'Other', '', '', '', '', '', '', '2020-08-04'),
(79, 'Ian', 'Ian@gmail.com', '9635236563', '8th', '809', 'Male', '', '', '', '', '', '', '2020-08-04'),
(80, 'Austin', 'Austin@gmail.com', '8563524152', '8th', '810', 'Male', '', '', '', '', '', '', '2020-08-04'),
(81, 'Santiago', 'Santiago@gmail.com', '9685635241', '9th', '901', 'Male', '', '', '', '', '', '', '2020-08-04'),
(82, 'Jordan', 'Jordan@gmail.com', '9685635263', '9th', '902', 'Male', '', '', '', '', '', '', '2020-08-04'),
(83, 'Cooper', 'Cooper@gmail.com', '9685968563', '9th', '903', 'Male', '', '', '', '', '', '', '2020-08-04'),
(84, 'Brayden', 'Brayden@gmail.com', '9685635296', '9th', '904', 'Male', '', '', '', '', '', '', '2020-08-04'),
(85, 'Roman', 'Roman@gmail.com', '9684135668', '9th', '905', 'Male', '', '', '', '', '', '', '2020-08-04'),
(86, 'Evan', 'Evan@gmail.com', '5896327596', '9th', '906', 'Female', '', '', '', '', '', '', '2020-08-04'),
(87, 'Ezekiel', 'Ezekiel@gmail.com', '9635263852', '9th', '907', 'Female', '', '', '', '', '', '', '2020-08-04'),
(88, 'Xavier', 'Xavier@gmail.com', '9685749685', '9th', '908', 'Female', '', '', '', '', '', '', '2020-08-04'),
(89, 'Jose', 'Jose@gmaill.com', '9685742536', '9th', '909', 'Other', '', '', '', '', '', '', '2020-08-04'),
(90, 'Jace', 'Jace@gmail.com', '9685968563', '9th', '910', 'Male', '', '', '', '', '', '', '2020-08-04'),
(91, 'Jameson', 'Jameson@gmail.com', '9638527418', '10th', 'a01', 'Male', '', '', '', '', '', '', '2020-08-04'),
(92, 'Leonardo', 'Leonardo@gmail.com', '9638523697', '10th', 'a02', 'Male', '', '', '', '', '', '', '2020-08-04'),
(93, 'Bryson', 'Bryson@gmail.com', '9638589635', '10th', 'a03', 'Male', '', '', '', '', '', '', '2020-08-04'),
(94, 'Axel', 'Axel@gmail.com', '9635896325', '10th', 'a04', 'Male', '', '', '', '', '', '', '2020-08-04'),
(95, 'Everett', 'Everett@gmail.com', '9338596856', '10th', 'a05', 'Other', '', '', '', '', '', '', '2020-08-04'),
(96, 'Parker', 'Parker@gmail.com', '9638527485', '10th', 'a06', 'Female', '', '', '', '', '', '', '2020-08-04'),
(97, 'Kayden', 'Kayden@gmail.com', '933852741', '10th', 'a07', 'Female', '', '', '', '', '', '', '2020-08-04'),
(98, 'Miles', 'Miles@gmail.com', '9638596856', '10th', 'a08', 'Female', '', '', '', '', '', '', '2020-08-04'),
(99, 'Sawyer', 'Sawyer@gmail.com', '9685968567', '10th', 'a09', 'Male', '', '', '', '', '', '', '2020-08-04'),
(100, 'Jason', 'Jason@gmail.com', '9685968596', '10th', 'a10', 'Male', '', '', '', '', '', '', '2020-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `unit_test_1`
--

CREATE TABLE `unit_test_1` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `hindi` varchar(255) NOT NULL,
  `marathi` varchar(255) NOT NULL,
  `math` varchar(255) NOT NULL,
  `science` varchar(255) NOT NULL,
  `social_studies` int(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit_test_1`
--

INSERT INTO `unit_test_1` (`id`, `name`, `english`, `hindi`, `marathi`, `math`, `science`, `social_studies`, `roll`, `percentage`) VALUES
(1, ' Liam     ', '16', '18', '14', '8', '20', 19, 101, '79.166666666667'),
(2, ' Noah    ', '14', '12', '10', '8', '6', 12, 102, '51.666666666667'),
(3, ' William    ', '2', '7', '6', '5', '9', 10, 103, '32.5'),
(4, ' James    ', '9', '8', '6', '5', '8', 9, 104, '37.5'),
(5, ' Oliver    ', '10', '10', '14', '10', '12', 16, 105, '60'),
(6, ' Benjamin    ', '15', '14', '17', '18', '19', 13, 106, '80'),
(7, ' Elijah    ', '12', '14', '15', '14', '18', 12, 107, '70.833333333333'),
(8, ' Lucas    ', '6', '4', '8', '2', '3', 9, 108, '26.666666666667'),
(9, ' Mason    ', '9', '9', '9', '6', '5', 2, 109, '33.333333333333'),
(10, ' Logan    ', '6', '9', '7', '10', '14', 18, 110, '53.333333333333'),
(11, ' Alexander    ', '12', '15', '16', '14', '12', 19, 201, '73.333333333333'),
(12, ' Jacob    ', '12', '16', '18', '19', '12', 10, 202, '72.5'),
(13, ' Ethan    ', '16', '14', '12', '15', '13', 18, 203, '73.333333333333'),
(14, ' Michael    ', '18', '19', '12', '14', '20', 10, 204, '77.5'),
(15, ' Daniel    ', '3', '4', '9', '7', '6', 8, 205, '30.833333333333'),
(16, ' Henry    ', '16', '18', '15', '13', '14', 16, 206, '76.666666666667'),
(17, ' Jackson    ', '12', '14', '16', '17', '18', 1, 207, '65'),
(18, ' Sebastian    ', '10', '14', '15', '16', '12', 13, 208, '66.666666666667'),
(19, ' Aiden    ', '12', '15', '16', '17', '10', 13, 209, '69.166666666667'),
(20, ' Matthew    ', '15', '12', '13', '16', '17', 18, 210, '75.833333333333'),
(21, ' Samuel    ', '1', '6', '7', '4', '5', 8, 301, '25.833333333333'),
(22, ' David    ', '9', '6', '7', '4', '2', 5, 302, '27.5'),
(23, ' Joseph    ', '9', '10', '14', '12', '18', 19, 303, '68.333333333333'),
(24, ' Carter    ', '20', '15', '14', '19', '14', 16, 304, '81.666666666667'),
(25, ' Owen    ', '15', '14', '17', '18', '19', 10, 305, '77.5'),
(26, ' Wyatt    ', '15', '16', '17', '19', '14', 10, 306, '75.833333333333'),
(27, ' John    ', '15', '16', '10', '14', '12', 17, 307, '70'),
(28, ' Jack    ', '19', '17', '18', '13', '20', 20, 308, '89.166666666667'),
(29, ' Luke    ', '19', '12', '20', '20', '18', 18, 309, '89.166666666667'),
(30, ' Jayden    ', '18', '16', '14', '15', '17', 19, 310, '82.5'),
(31, ' Dylan    ', '12', '14', '17', '12', '18', 19, 401, '76.666666666667'),
(32, ' Grayson    ', '15', '14', '19', '17', '15', 12, 402, '76.666666666667'),
(34, ' Isaac    ', '19', '15', '17', '18', '19', 16, 404, '86.666666666667'),
(35, ' Gabriel    ', '12', '17', '15', '18', '19', 14, 405, '79.166666666667'),
(37, ' Mateo    ', '8', '9', '6', '4', '7', 5, 407, '32.5'),
(38, ' Anthony    ', '10', '3', '5', '8', '7', 1, 408, '28.333333333333');

-- --------------------------------------------------------

--
-- Table structure for table `unit_test_2`
--

CREATE TABLE `unit_test_2` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `hindi` varchar(255) NOT NULL,
  `marathi` varchar(255) NOT NULL,
  `math` varchar(255) NOT NULL,
  `science` varchar(255) NOT NULL,
  `social_studies` int(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit_test_2`
--

INSERT INTO `unit_test_2` (`id`, `name`, `english`, `hindi`, `marathi`, `math`, `science`, `social_studies`, `roll`, `percentage`) VALUES
(1, ' Liam     ', '12', '14', '16', '18', '19', 20, 101, '82.5'),
(2, ' Noah    ', '20', '18', '19', '14', '16', 12, 102, '82.5'),
(3, ' William    ', '14', '12', '15', '17', '19', 18, 103, '79.166666666667'),
(4, ' James    ', '12', '14', '15', '17', '8', 19, 104, '70.833333333333'),
(5, ' Oliver    ', '16', '17', '18', '19', '14', 20, 105, '86.666666666667'),
(6, ' Benjamin    ', '20', '20', '20', '20', '20', 20, 106, '100'),
(7, ' Elijah    ', '18', '19', '14', '15', '16', 12, 107, '78.333333333333'),
(8, ' Lucas    ', '12', '14', '15', '16', '17', 19, 108, '77.5'),
(9, ' Mason    ', '12', '15', '17', '9', '20', 13, 109, '71.666666666667'),
(10, ' Logan    ', '10', '10', '10', '5', '15', 15, 110, '54.166666666667'),
(11, ' Alexander    ', '12', '14', '16', '17', '19', 1, 201, '65.833333333333'),
(12, ' Jacob    ', '14', '16', '15', '12', '10', 2, 202, '57.5'),
(13, ' Ethan    ', '14', '10', '2', '3', '4', 9, 203, '35'),
(14, ' Michael    ', '14', '10', '15', '12', '13', 17, 204, '67.5'),
(15, ' Daniel    ', '16', '17', '10', '12', '14', 1, 205, '58.333333333333'),
(16, ' Henry    ', '12', '14', '19', '10', '12', 14, 206, '67.5'),
(17, ' Jackson    ', '12', '14', '16', '17', '19', 14, 207, '76.666666666667'),
(18, ' Sebastian    ', '16', '12', '14', '17', '19', 2, 208, '66.666666666667'),
(19, ' Aiden    ', '2', '3', '9', '7', '4', 5, 209, '25'),
(20, ' Matthew    ', '12', '14', '17', '19', '20', 20, 210, '85'),
(21, ' Samuel    ', '11', '15', '16', '7', '14', 16, 301, '65.833333333333'),
(22, ' David    ', '18', '12', '14', '16', '17', 1, 302, '65'),
(24, ' Carter    ', '15', '13', '17', '14', '15', 12, 304, '71.666666666667'),
(26, ' Wyatt    ', '12', '17', '14', '16', '12', 10, 306, '67.5'),
(29, ' Luke    ', '12', '17', '15', '16', '17', 17, 309, '78.333333333333'),
(30, ' Jayden    ', '15', '17', '14', '16', '10', 12, 310, '70'),
(31, ' Dylan    ', '5', '7', '8', '9', '6', 4, 401, '32.5'),
(33, ' Levi    ', '4', '7', '8', '9', '10', 20, 403, '48.333333333333'),
(35, ' Gabriel    ', '16', '17', '18', '19', '14', 15, 405, '82.5'),
(37, 'Mateo', '20', '20', '14', '16', '17', 16, 407, '85.833333333333'),
(39, 'Jaxon', '20', '20', '14', '16', '18', 18, 409, '88.333333333333');

-- --------------------------------------------------------

--
-- Table structure for table `unit_test_3`
--

CREATE TABLE `unit_test_3` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `hindi` varchar(255) NOT NULL,
  `marathi` varchar(255) NOT NULL,
  `math` varchar(255) NOT NULL,
  `science` varchar(255) NOT NULL,
  `social_studies` int(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit_test_3`
--

INSERT INTO `unit_test_3` (`id`, `name`, `english`, `hindi`, `marathi`, `math`, `science`, `social_studies`, `roll`, `percentage`) VALUES
(1, ' Liam     ', '20', '20', '15', '17', '18', 16, 101, '88.333333333333'),
(2, ' Noah    ', '12', '18', '16', '14', '20', 18, 102, '81.666666666667'),
(3, ' William    ', '12', '4', '15', '16', '4', 9, 103, '50'),
(4, ' James    ', '14', '15', '16', '12', '13', 10, 104, '66.666666666667'),
(5, ' Oliver    ', '12', '14', '16', '10', '15', 3, 105, '58.333333333333'),
(6, ' Benjamin    ', '15', '16', '10', '12', '13', 15, 106, '67.5'),
(7, ' Elijah    ', '18', '19', '12', '10', '3', 6, 107, '56.666666666667'),
(8, ' Lucas    ', '12', '13', '14', '15', '16', 17, 108, '72.5'),
(9, ' Mason    ', '18', '12', '10', '14', '12', 10, 109, '63.333333333333'),
(10, ' Logan    ', '12', '15', '16', '10', '13', 14, 110, '66.666666666667'),
(11, ' Alexander    ', '14', '16', '10', '12', '20', 20, 201, '76.666666666667'),
(12, ' Jacob    ', '14', '12', '17', '19', '12', 15, 202, '74.166666666667'),
(13, ' Ethan    ', '2', '4', '6', '8', '9', 4, 203, '27.5'),
(14, ' Michael    ', '8', '9', '3', '4', '10', 20, 204, '45'),
(15, ' Daniel    ', '18', '19', '15', '16', '10', 12, 205, '75'),
(16, ' Henry    ', '12', '14', '16', '17', '19', 14, 206, '76.666666666667'),
(17, ' Jackson    ', '12', '14', '16', '18', '1', 10, 207, '59.166666666667'),
(18, 'Sebastian', '10', '14', '13', '16', '17', 18, 208, '73.333333333333'),
(19, ' Aiden    ', '12', '14', '16', '17', '8', 16, 209, '69.166666666667'),
(20, ' Matthew    ', '12', '14', '17', '18', '19', 14, 210, '78.333333333333'),
(21, ' Samuel    ', '15', '16', '17', '19', '14', 12, 301, '77.5'),
(23, ' Joseph    ', '15', '17', '16', '17', '19', 18, 303, '85'),
(25, ' Owen    ', '15', '16', '17', '14', '5', 15, 305, '68.333333333333'),
(26, 'Wyatt', '20', '18', '19', '10', '20', 20, 306, '89.166666666667'),
(28, ' Jack    ', '15', '17', '18', '19', '14', 16, 308, '82.5'),
(30, ' Jayden    ', '19', '14', '15', '16', '17', 18, 310, '82.5'),
(31, ' Dylan    ', '12', '14', '16', '17', '18', 19, 401, '80'),
(34, ' Isaac    ', '12', '14', '16', '17', '15', 20, 404, '78.333333333333'),
(35, ' Gabriel    ', '14', '20', '20', '14', '16', 20, 405, '86.666666666667'),
(37, ' Mateo    ', '20', '20', '20', '19', '18', 14, 407, '92.5'),
(38, ' Anthony    ', '12', '15', '14', '10', '20', 20, 408, '75.833333333333'),
(39, ' Jaxon    ', '12', '14', '16', '17', '18', 19, 409, '80'),
(40, ' Lincoln    ', '20', '20', '20', '1', '3', 6, 410, '58.333333333333');

-- --------------------------------------------------------

--
-- Table structure for table `unit_test_4`
--

CREATE TABLE `unit_test_4` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `hindi` varchar(255) NOT NULL,
  `marathi` varchar(255) NOT NULL,
  `math` varchar(255) NOT NULL,
  `science` varchar(255) NOT NULL,
  `social_studies` int(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit_test_4`
--

INSERT INTO `unit_test_4` (`id`, `name`, `english`, `hindi`, `marathi`, `math`, `science`, `social_studies`, `roll`, `percentage`) VALUES
(1, ' Liam     ', '12', '12', '14', '15', '16', 20, 101, '74.166666666667'),
(2, ' Noah    ', '14', '9', '7', '9', '20', 9, 102, '56.666666666667'),
(3, ' William    ', '9', '5', '8', '11', '12', 15, 103, '50'),
(4, ' James    ', '0', '17', '12', '11', '10', 19, 104, '57.5'),
(5, ' Oliver    ', '16', '6', '6', '7', '12', 20, 105, '55.833333333333'),
(6, ' Benjamin    ', '16', '17', '17', '15', '14', 12, 106, '75.833333333333'),
(7, ' Elijah    ', '14', '17', '15', '10', '8', 3, 107, '55.833333333333'),
(8, ' Lucas    ', '16', '9', '11', '13', '11', 8, 108, '56.666666666667'),
(9, ' Mason    ', '18', '13', '11', '8', '11', 11, 109, '60'),
(10, ' Logan    ', '20', '13', '19', '16', '12', 9, 110, '74.166666666667'),
(11, ' Alexander    ', '12', '14', '15', '16', '10', 12, 201, '65.833333333333'),
(12, ' Jacob    ', '12', '14', '6', '10', '12', 14, 202, '56.666666666667'),
(13, ' Ethan    ', '12', '14', '6', '17', '15', 10, 203, '61.666666666667'),
(14, ' Michael    ', '12', '14', '15', '10', '6', 8, 204, '54.166666666667'),
(15, ' Daniel    ', '14', '16', '12', '17', '18', 19, 205, '80'),
(16, ' Henry    ', '12', '17', '16', '18', '19', 10, 206, '76.666666666667'),
(17, ' Jackson    ', '10', '1', '14', '16', '17', 19, 207, '64.166666666667'),
(18, ' Sebastian    ', '12', '17', '19', '6', '6', 4, 208, '53.333333333333'),
(19, ' Aiden    ', '12', '10', '3', '6', '7', 8, 209, '38.333333333333'),
(20, ' Matthew    ', '10', '2', '4', '6', '8', 9, 210, '32.5'),
(21, ' Samuel    ', '15', '16', '17', '18', '12', 10, 301, '73.333333333333'),
(22, ' David    ', '12', '14', '16', '17', '18', 6, 302, '69.166666666667'),
(26, ' Wyatt    ', '15', '16', '17', '20', '20', 20, 306, '90'),
(27, ' John    ', '15', '17', '14', '10', '12', 20, 307, '73.333333333333'),
(30, ' Jayden    ', '20', '20', '20', '20', '20', 20, 310, '100'),
(31, ' Dylan    ', '14', '20', '20', '20', '20', 18, 401, '93.333333333333'),
(33, ' Levi    ', '14', '16', '20', '5', '4', 5, 403, '53.333333333333'),
(35, ' Gabriel    ', '20', '20', '20', '20', '20', 20, 405, '100'),
(38, ' Anthony    ', '3', '4', '8', '7', '5', 6, 408, '27.5'),
(39, ' Jaxon    ', '8', '9', '6', '3', '4', 1, 409, '25.833333333333'),
(40, ' Lincoln    ', '16', '19', '14', '16', '17', 18, 410, '83.333333333333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester_1`
--
ALTER TABLE `semester_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester_2`
--
ALTER TABLE `semester_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_test_1`
--
ALTER TABLE `unit_test_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_test_2`
--
ALTER TABLE `unit_test_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_test_3`
--
ALTER TABLE `unit_test_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_test_4`
--
ALTER TABLE `unit_test_4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
