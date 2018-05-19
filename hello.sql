-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 04:43 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hello`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_record`
--

CREATE TABLE `academic_record` (
  `s_id` varchar(20) NOT NULL,
  `s_ssc_tmarks` varchar(10) NOT NULL,
  `s_ssc_board` varchar(40) NOT NULL,
  `s_ssc_percentage` varchar(10) NOT NULL,
  `s_ssc_yearop` varchar(10) NOT NULL,
  `s_hsc_tmarks` varchar(10) NOT NULL,
  `s_hsc_board` varchar(40) NOT NULL,
  `s_hsc_percentage` varchar(10) NOT NULL,
  `s_hsc_yearop` varchar(10) NOT NULL,
  `s_sem1_pointer` varchar(10) NOT NULL,
  `s_sem2_pointer` varchar(10) NOT NULL,
  `s_sem3_pointer` varchar(10) NOT NULL,
  `s_sem4_pointer` varchar(10) NOT NULL,
  `s_sem5_pointer` varchar(10) NOT NULL,
  `s_sem6_pointer` varchar(10) NOT NULL,
  `s_sem7_pointer` varchar(10) NOT NULL,
  `s_sem8_pointer` varchar(10) NOT NULL,
  `s_sem1_seatno` varchar(20) NOT NULL,
  `s_sem2_seatno` varchar(20) NOT NULL,
  `s_sem3_seatno` varchar(20) NOT NULL,
  `s_sem4_seatno` varchar(20) NOT NULL,
  `s_sem5_seatno` varchar(20) NOT NULL,
  `s_sem6_seatno` varchar(20) NOT NULL,
  `s_sem7_seatno` varchar(20) NOT NULL,
  `s_sem8_seatno` varchar(20) NOT NULL,
  `s_sem1_yearop` varchar(10) NOT NULL,
  `s_sem2_yearop` varchar(10) NOT NULL,
  `s_sem3_yearop` varchar(10) NOT NULL,
  `s_sem4_yearop` varchar(10) NOT NULL,
  `s_sem5_yearop` varchar(10) NOT NULL,
  `s_sem6_yearop` varchar(10) NOT NULL,
  `s_sem7_yearop` varchar(10) NOT NULL,
  `s_sem8_yearop` varchar(10) NOT NULL,
  `s_sem1_lkt` varchar(10) NOT NULL,
  `s_sem2_lkt` varchar(10) NOT NULL,
  `s_sem3_lkt` varchar(10) NOT NULL,
  `s_sem4_lkt` varchar(10) NOT NULL,
  `s_sem5_lkt` varchar(10) NOT NULL,
  `s_sem6_lkt` varchar(10) NOT NULL,
  `s_sem7_lkt` varchar(10) NOT NULL,
  `s_sem8_lkt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_record`
--

INSERT INTO `academic_record` (`s_id`, `s_ssc_tmarks`, `s_ssc_board`, `s_ssc_percentage`, `s_ssc_yearop`, `s_hsc_tmarks`, `s_hsc_board`, `s_hsc_percentage`, `s_hsc_yearop`, `s_sem1_pointer`, `s_sem2_pointer`, `s_sem3_pointer`, `s_sem4_pointer`, `s_sem5_pointer`, `s_sem6_pointer`, `s_sem7_pointer`, `s_sem8_pointer`, `s_sem1_seatno`, `s_sem2_seatno`, `s_sem3_seatno`, `s_sem4_seatno`, `s_sem5_seatno`, `s_sem6_seatno`, `s_sem7_seatno`, `s_sem8_seatno`, `s_sem1_yearop`, `s_sem2_yearop`, `s_sem3_yearop`, `s_sem4_yearop`, `s_sem5_yearop`, `s_sem6_yearop`, `s_sem7_yearop`, `s_sem8_yearop`, `s_sem1_lkt`, `s_sem2_lkt`, `s_sem3_lkt`, `s_sem4_lkt`, `s_sem5_lkt`, `s_sem6_lkt`, `s_sem7_lkt`, `s_sem8_lkt`) VALUES
('24512015', '600', 'maharashtra', '68', '2009', '500', 'mumbai', '64.67', '2012', '7.5', '7.67', '3', '4', '5', '6', '7', '8', '1111', '2222', '3333', '4444', '5555', '6666', '7777', '8888', '', '', '3333', '4444', '5555', '6666', '7777', '8888', '1', '', '3', '4', '5', '6', '7', '8'),
('24512016', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` varchar(20) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_name`, `admin_password`) VALUES
('8097804715', 'Sparsh Turkane', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `s_id` varchar(20) NOT NULL,
  `s_sem3_july` varchar(10) NOT NULL,
  `s_sem3_aug` varchar(10) NOT NULL,
  `s_sem3_sept` varchar(10) NOT NULL,
  `s_sem3_oct` varchar(10) NOT NULL,
  `s_sem3_nov` varchar(10) NOT NULL,
  `s_sem4_jan` varchar(10) NOT NULL,
  `s_sem4_feb` varchar(10) NOT NULL,
  `s_sem4_mar` varchar(10) NOT NULL,
  `s_sem4_april` varchar(10) NOT NULL,
  `s_sem4_may` varchar(10) NOT NULL,
  `s_sem5_july` varchar(10) NOT NULL,
  `s_sem5_aug` varchar(10) NOT NULL,
  `s_sem5_sept` varchar(10) NOT NULL,
  `s_sem5_oct` varchar(10) NOT NULL,
  `s_sem5_nov` varchar(10) NOT NULL,
  `s_sem6_jan` varchar(10) NOT NULL,
  `s_sem6_feb` varchar(10) NOT NULL,
  `s_sem6_mar` varchar(10) NOT NULL,
  `s_sem6_april` varchar(10) NOT NULL,
  `s_sem6_may` varchar(10) NOT NULL,
  `s_sem7_july` varchar(10) NOT NULL,
  `s_sem7_aug` varchar(10) NOT NULL,
  `s_sem7_sept` varchar(10) NOT NULL,
  `s_sem7_oct` varchar(10) NOT NULL,
  `s_sem7_nov` varchar(10) NOT NULL,
  `s_sem8_jan` varchar(10) NOT NULL,
  `s_sem8_feb` varchar(10) NOT NULL,
  `s_sem8_mar` varchar(10) NOT NULL,
  `s_sem8_april` varchar(10) NOT NULL,
  `s_sem8_may` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`s_id`, `s_sem3_july`, `s_sem3_aug`, `s_sem3_sept`, `s_sem3_oct`, `s_sem3_nov`, `s_sem4_jan`, `s_sem4_feb`, `s_sem4_mar`, `s_sem4_april`, `s_sem4_may`, `s_sem5_july`, `s_sem5_aug`, `s_sem5_sept`, `s_sem5_oct`, `s_sem5_nov`, `s_sem6_jan`, `s_sem6_feb`, `s_sem6_mar`, `s_sem6_april`, `s_sem6_may`, `s_sem7_july`, `s_sem7_aug`, `s_sem7_sept`, `s_sem7_oct`, `s_sem7_nov`, `s_sem8_jan`, `s_sem8_feb`, `s_sem8_mar`, `s_sem8_april`, `s_sem8_may`) VALUES
('24512015', '31', '32', '33', '34', '35', '41', '42', '43', '44', '45', '51', '52', '53', '54', '55', '61', '62', '63', '64', '65', '71', '72', '73', '74', '75', '81', '82', '83', '84', '85'),
('24512016', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `document_link`
--

CREATE TABLE `document_link` (
  `s_id` varchar(20) NOT NULL,
  `s_dlink_ssc` text NOT NULL,
  `s_dlink_hsc` text NOT NULL,
  `s_dlink_sem1` text NOT NULL,
  `s_dlink_sem2` text NOT NULL,
  `s_dlink_sem3` text NOT NULL,
  `s_dlink_sem4` text NOT NULL,
  `s_dlink_sem5` text NOT NULL,
  `s_dlink_sem6` text NOT NULL,
  `s_dlink_sem7` text NOT NULL,
  `s_dlink_sem8` text NOT NULL,
  `s_dlink_sport1` text NOT NULL,
  `s_dlink_sport2` text NOT NULL,
  `s_dlink_sport3` text NOT NULL,
  `s_dlink_sport4` text NOT NULL,
  `s_dlink_sport5` text NOT NULL,
  `s_dlink_sport6` text NOT NULL,
  `s_dlink_sport7` text NOT NULL,
  `s_dlink_sport8` text NOT NULL,
  `s_dlink_sport9` text NOT NULL,
  `s_dlink_sport10` text NOT NULL,
  `s_dlink_coca1` text NOT NULL,
  `s_dlink_coca2` text NOT NULL,
  `s_dlink_coca3` text NOT NULL,
  `s_dlink_coca4` text NOT NULL,
  `s_dlink_coca5` text NOT NULL,
  `s_dlink_coca6` text NOT NULL,
  `s_dlink_coca7` text NOT NULL,
  `s_dlink_coca8` text NOT NULL,
  `s_dlink_coca9` text NOT NULL,
  `s_dlink_coca10` text NOT NULL,
  `s_dlink_acad1` text NOT NULL,
  `s_dlink_acad2` text NOT NULL,
  `s_dlink_acad3` text NOT NULL,
  `s_dlink_acad4` text NOT NULL,
  `s_dlink_acad5` text NOT NULL,
  `s_dlink_acad6` text NOT NULL,
  `s_dlink_acad7` text NOT NULL,
  `s_dlink_acad8` text NOT NULL,
  `s_dlink_acad9` text NOT NULL,
  `s_dlink_acad10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document_link`
--

INSERT INTO `document_link` (`s_id`, `s_dlink_ssc`, `s_dlink_hsc`, `s_dlink_sem1`, `s_dlink_sem2`, `s_dlink_sem3`, `s_dlink_sem4`, `s_dlink_sem5`, `s_dlink_sem6`, `s_dlink_sem7`, `s_dlink_sem8`, `s_dlink_sport1`, `s_dlink_sport2`, `s_dlink_sport3`, `s_dlink_sport4`, `s_dlink_sport5`, `s_dlink_sport6`, `s_dlink_sport7`, `s_dlink_sport8`, `s_dlink_sport9`, `s_dlink_sport10`, `s_dlink_coca1`, `s_dlink_coca2`, `s_dlink_coca3`, `s_dlink_coca4`, `s_dlink_coca5`, `s_dlink_coca6`, `s_dlink_coca7`, `s_dlink_coca8`, `s_dlink_coca9`, `s_dlink_coca10`, `s_dlink_acad1`, `s_dlink_acad2`, `s_dlink_acad3`, `s_dlink_acad4`, `s_dlink_acad5`, `s_dlink_acad6`, `s_dlink_acad7`, `s_dlink_acad8`, `s_dlink_acad9`, `s_dlink_acad10`) VALUES
('24512015', 'www.google.com', 'hsc', 'sem1', 'sem2', 'sem3', 'sem4', 'sem5', 'sem6', 'sem7', 'sem8', 'sport1s', 'sport2', 'sport3', 'sport4', 'sport5', 'sport6', 'sort7', 'spou8', 's9', 's10', 'c1', 'c2', 'c3', 'c4', 'c5', 'C6', 'C7', 'C8', 'C9', 'C10', 'A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10'),
('24512016', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_id` varchar(20) NOT NULL,
  `f_name` text NOT NULL,
  `f_branch` text NOT NULL,
  `f_email` varchar(100) NOT NULL,
  `f_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_id`, `f_name`, `f_branch`, `f_email`, `f_contact`) VALUES
('501', 'mech 1', 'Mechanical Engineering', '', ''),
('502', 'mech 2', 'Mechanical Engineering', '', ''),
('503', 'mech 3', 'Mechanical Engineering', '', ''),
('601', 'comp faculty 1', 'Computer Engineering', '', ''),
('602', 'comp faculty 2', 'Computer Engineering', '', ''),
('603a', 'comp facu', 'Computer Engineering', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_login`
--

CREATE TABLE `f_login` (
  `f_id` varchar(20) NOT NULL,
  `f_password` varchar(32) NOT NULL,
  `f_role_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_login`
--

INSERT INTO `f_login` (`f_id`, `f_password`, `f_role_id`) VALUES
('501', '12345', ''),
('502', '12345', ''),
('503', '12345', ''),
('601', '12345', ''),
('602', '12345', ''),
('603a', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `mentor_head`
--

CREATE TABLE `mentor_head` (
  `m_id` varchar(20) NOT NULL,
  `m_name` text NOT NULL,
  `m_branch` text NOT NULL,
  `m_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor_head`
--

INSERT INTO `mentor_head` (`m_id`, `m_name`, `m_branch`, `m_password`) VALUES
('100', 'computer', 'Computer Engineering', '12345'),
('101', 'sparsh', 'Mechanical Engineering', '12345'),
('102', 'elec', 'Electrical Engineering', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` varchar(20) NOT NULL,
  `s_name` text NOT NULL,
  `s_branch` text NOT NULL,
  `s_address` varchar(200) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_contact` varchar(20) NOT NULL,
  `s_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_branch`, `s_address`, `s_email`, `s_contact`, `s_photo`) VALUES
('24512015', 'sparsh kamal turkane', 'Computer Engineering', 'miraroad', 'rajaturkane99@gmail.com', '8097804715', ''),
('24512016', 'Utkarsh Kamal Turkane', 'Computer Engineering', '', 'utkarsh@gmail.com', '', ''),
('test', 'test', 'Computer Engineering', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject_name`
--

CREATE TABLE `subject_name` (
  `branch_name` varchar(50) NOT NULL,
  `s_sem3_sub1` text NOT NULL,
  `s_sem3_sub2` text NOT NULL,
  `s_sem3_sub3` text NOT NULL,
  `s_sem3_sub4` text NOT NULL,
  `s_sem3_sub5` text NOT NULL,
  `s_sem3_sub6` text NOT NULL,
  `s_sem4_sub1` text NOT NULL,
  `s_sem4_sub2` text NOT NULL,
  `s_sem4_sub3` text NOT NULL,
  `s_sem4_sub4` text NOT NULL,
  `s_sem4_sub5` text NOT NULL,
  `s_sem4_sub6` text NOT NULL,
  `s_sem5_sub1` text NOT NULL,
  `s_sem5_sub2` text NOT NULL,
  `s_sem5_sub3` text NOT NULL,
  `s_sem5_sub4` text NOT NULL,
  `s_sem5_sub5` text NOT NULL,
  `s_sem5_sub6` text NOT NULL,
  `s_sem6_sub1` text NOT NULL,
  `s_sem6_sub2` text NOT NULL,
  `s_sem6_sub3` text NOT NULL,
  `s_sem6_sub4` text NOT NULL,
  `s_sem6_sub5` text NOT NULL,
  `s_sem6_sub6` text NOT NULL,
  `s_sem7_sub1` text NOT NULL,
  `s_sem7_sub2` text NOT NULL,
  `s_sem7_sub3` text NOT NULL,
  `s_sem7_sub4` text NOT NULL,
  `s_sem7_sub5` text NOT NULL,
  `s_sem7_sub6` text NOT NULL,
  `s_sem8_sub1` text NOT NULL,
  `s_sem8_sub2` text NOT NULL,
  `s_sem8_sub3` text NOT NULL,
  `s_sem8_sub4` text NOT NULL,
  `s_sem8_sub5` text NOT NULL,
  `s_sem8_sub6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_name`
--

INSERT INTO `subject_name` (`branch_name`, `s_sem3_sub1`, `s_sem3_sub2`, `s_sem3_sub3`, `s_sem3_sub4`, `s_sem3_sub5`, `s_sem3_sub6`, `s_sem4_sub1`, `s_sem4_sub2`, `s_sem4_sub3`, `s_sem4_sub4`, `s_sem4_sub5`, `s_sem4_sub6`, `s_sem5_sub1`, `s_sem5_sub2`, `s_sem5_sub3`, `s_sem5_sub4`, `s_sem5_sub5`, `s_sem5_sub6`, `s_sem6_sub1`, `s_sem6_sub2`, `s_sem6_sub3`, `s_sem6_sub4`, `s_sem6_sub5`, `s_sem6_sub6`, `s_sem7_sub1`, `s_sem7_sub2`, `s_sem7_sub3`, `s_sem7_sub4`, `s_sem7_sub5`, `s_sem7_sub6`, `s_sem8_sub1`, `s_sem8_sub2`, `s_sem8_sub3`, `s_sem8_sub4`, `s_sem8_sub5`, `s_sem8_sub6`) VALUES
('Civil Engineering', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Computer Engineering', '3', '3', '3', '3', '3', '3', 'history2', 'geography2', 'maths2', 'science2', 'civics2', 'gk2', '5', '5', '5', '5', '5', '5', '6', '6', '6', '6', '6', '6', '7', '7', '7', '7', '7', '7', '8', '8', '8', '8', '8', '8'),
('Electrical Engineering', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('EXTC Engineering', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Mechanical Engineering', '3', '3', '3', '3', '3', '3', '4', '4', '4', '4', '4', '4', '5', '5', '5', '5', '5', '5', '6', '6', '6', '6', '6', '6', '7', '77', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `s_login`
--

CREATE TABLE `s_login` (
  `s_id` varchar(20) NOT NULL,
  `s_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_login`
--

INSERT INTO `s_login` (`s_id`, `s_password`) VALUES
('24512015', '12345'),
('24512016', '12345'),
('test', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `s_profile`
--

CREATE TABLE `s_profile` (
  `s_id` varchar(20) NOT NULL,
  `s_year` varchar(10) NOT NULL,
  `s_yoa` varchar(10) NOT NULL,
  `s_gname` text NOT NULL,
  `s_goccupation` text NOT NULL,
  `s_gcontact` varchar(20) NOT NULL,
  `f_id` varchar(20) NOT NULL,
  `s_branch` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_profile`
--

INSERT INTO `s_profile` (`s_id`, `s_year`, `s_yoa`, `s_gname`, `s_goccupation`, `s_gcontact`, `f_id`, `s_branch`) VALUES
('24512015', 'BE', '2012', 'kamal turkane', 'service', '9969660735', '601', 'Computer Engineering'),
('24512016', 'BE', '', '', '', '', '', 'Computer Engineering'),
('test', 'SE', '', '', '', '', '', 'Computer Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `term_test`
--

CREATE TABLE `term_test` (
  `s_id` varchar(20) NOT NULL,
  `s_sem3_sub1_tt1` varchar(11) NOT NULL,
  `s_sem3_sub1_tt2` varchar(11) NOT NULL,
  `s_sem3_sub2_tt1` varchar(11) NOT NULL,
  `s_sem3_sub2_tt2` varchar(11) NOT NULL,
  `s_sem3_sub3_tt1` varchar(11) NOT NULL,
  `s_sem3_sub3_tt2` varchar(11) NOT NULL,
  `s_sem3_sub4_tt1` varchar(11) NOT NULL,
  `s_sem3_sub4_tt2` varchar(11) NOT NULL,
  `s_sem3_sub5_tt1` varchar(11) NOT NULL,
  `s_sem3_sub5_tt2` varchar(11) NOT NULL,
  `s_sem3_sub6_tt1` varchar(11) NOT NULL,
  `s_sem3_sub6_tt2` varchar(11) NOT NULL,
  `s_sem4_sub1_tt1` varchar(11) NOT NULL,
  `s_sem4_sub1_tt2` varchar(11) NOT NULL,
  `s_sem4_sub2_tt1` varchar(11) NOT NULL,
  `s_sem4_sub2_tt2` varchar(11) NOT NULL,
  `s_sem4_sub3_tt1` varchar(11) NOT NULL,
  `s_sem4_sub3_tt2` varchar(11) NOT NULL,
  `s_sem4_sub4_tt1` varchar(11) NOT NULL,
  `s_sem4_sub4_tt2` varchar(11) NOT NULL,
  `s_sem4_sub5_tt1` varchar(11) NOT NULL,
  `s_sem4_sub5_tt2` varchar(11) NOT NULL,
  `s_sem4_sub6_tt1` varchar(11) NOT NULL,
  `s_sem4_sub6_tt2` varchar(11) NOT NULL,
  `s_sem5_sub1_tt1` varchar(11) NOT NULL,
  `s_sem5_sub1_tt2` varchar(11) NOT NULL,
  `s_sem5_sub2_tt1` varchar(11) NOT NULL,
  `s_sem5_sub2_tt2` varchar(11) NOT NULL,
  `s_sem5_sub3_tt1` varchar(11) NOT NULL,
  `s_sem5_sub3_tt2` varchar(11) NOT NULL,
  `s_sem5_sub4_tt1` varchar(11) NOT NULL,
  `s_sem5_sub4_tt2` varchar(11) NOT NULL,
  `s_sem5_sub5_tt1` varchar(11) NOT NULL,
  `s_sem5_sub5_tt2` varchar(11) NOT NULL,
  `s_sem5_sub6_tt1` varchar(11) NOT NULL,
  `s_sem5_sub6_tt2` varchar(11) NOT NULL,
  `s_sem6_sub1_tt1` varchar(11) NOT NULL,
  `s_sem6_sub1_tt2` varchar(11) NOT NULL,
  `s_sem6_sub2_tt1` varchar(11) NOT NULL,
  `s_sem6_sub2_tt2` varchar(11) NOT NULL,
  `s_sem6_sub3_tt1` varchar(11) NOT NULL,
  `s_sem6_sub3_tt2` varchar(11) NOT NULL,
  `s_sem6_sub4_tt1` varchar(11) NOT NULL,
  `s_sem6_sub4_tt2` varchar(11) NOT NULL,
  `s_sem6_sub5_tt1` varchar(11) NOT NULL,
  `s_sem6_sub5_tt2` varchar(11) NOT NULL,
  `s_sem6_sub6_tt1` varchar(11) NOT NULL,
  `s_sem6_sub6_tt2` varchar(11) NOT NULL,
  `s_sem7_sub1_tt1` varchar(11) NOT NULL,
  `s_sem7_sub1_tt2` varchar(11) NOT NULL,
  `s_sem7_sub2_tt1` varchar(11) NOT NULL,
  `s_sem7_sub2_tt2` varchar(11) NOT NULL,
  `s_sem7_sub3_tt1` varchar(11) NOT NULL,
  `s_sem7_sub3_tt2` varchar(11) NOT NULL,
  `s_sem7_sub4_tt1` varchar(11) NOT NULL,
  `s_sem7_sub4_tt2` varchar(11) NOT NULL,
  `s_sem7_sub5_tt1` varchar(11) NOT NULL,
  `s_sem7_sub5_tt2` varchar(11) NOT NULL,
  `s_sem7_sub6_tt1` varchar(11) NOT NULL,
  `s_sem7_sub6_tt2` varchar(11) NOT NULL,
  `s_sem8_sub1_tt1` varchar(11) NOT NULL,
  `s_sem8_sub1_tt2` varchar(11) NOT NULL,
  `s_sem8_sub2_tt1` varchar(11) NOT NULL,
  `s_sem8_sub2_tt2` varchar(11) NOT NULL,
  `s_sem8_sub3_tt1` varchar(11) NOT NULL,
  `s_sem8_sub3_tt2` varchar(11) NOT NULL,
  `s_sem8_sub4_tt1` varchar(11) NOT NULL,
  `s_sem8_sub4_tt2` varchar(11) NOT NULL,
  `s_sem8_sub5_tt1` varchar(11) NOT NULL,
  `s_sem8_sub5_tt2` varchar(11) NOT NULL,
  `s_sem8_sub6_tt1` varchar(11) NOT NULL,
  `s_sem8_sub6_tt2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term_test`
--

INSERT INTO `term_test` (`s_id`, `s_sem3_sub1_tt1`, `s_sem3_sub1_tt2`, `s_sem3_sub2_tt1`, `s_sem3_sub2_tt2`, `s_sem3_sub3_tt1`, `s_sem3_sub3_tt2`, `s_sem3_sub4_tt1`, `s_sem3_sub4_tt2`, `s_sem3_sub5_tt1`, `s_sem3_sub5_tt2`, `s_sem3_sub6_tt1`, `s_sem3_sub6_tt2`, `s_sem4_sub1_tt1`, `s_sem4_sub1_tt2`, `s_sem4_sub2_tt1`, `s_sem4_sub2_tt2`, `s_sem4_sub3_tt1`, `s_sem4_sub3_tt2`, `s_sem4_sub4_tt1`, `s_sem4_sub4_tt2`, `s_sem4_sub5_tt1`, `s_sem4_sub5_tt2`, `s_sem4_sub6_tt1`, `s_sem4_sub6_tt2`, `s_sem5_sub1_tt1`, `s_sem5_sub1_tt2`, `s_sem5_sub2_tt1`, `s_sem5_sub2_tt2`, `s_sem5_sub3_tt1`, `s_sem5_sub3_tt2`, `s_sem5_sub4_tt1`, `s_sem5_sub4_tt2`, `s_sem5_sub5_tt1`, `s_sem5_sub5_tt2`, `s_sem5_sub6_tt1`, `s_sem5_sub6_tt2`, `s_sem6_sub1_tt1`, `s_sem6_sub1_tt2`, `s_sem6_sub2_tt1`, `s_sem6_sub2_tt2`, `s_sem6_sub3_tt1`, `s_sem6_sub3_tt2`, `s_sem6_sub4_tt1`, `s_sem6_sub4_tt2`, `s_sem6_sub5_tt1`, `s_sem6_sub5_tt2`, `s_sem6_sub6_tt1`, `s_sem6_sub6_tt2`, `s_sem7_sub1_tt1`, `s_sem7_sub1_tt2`, `s_sem7_sub2_tt1`, `s_sem7_sub2_tt2`, `s_sem7_sub3_tt1`, `s_sem7_sub3_tt2`, `s_sem7_sub4_tt1`, `s_sem7_sub4_tt2`, `s_sem7_sub5_tt1`, `s_sem7_sub5_tt2`, `s_sem7_sub6_tt1`, `s_sem7_sub6_tt2`, `s_sem8_sub1_tt1`, `s_sem8_sub1_tt2`, `s_sem8_sub2_tt1`, `s_sem8_sub2_tt2`, `s_sem8_sub3_tt1`, `s_sem8_sub3_tt2`, `s_sem8_sub4_tt1`, `s_sem8_sub4_tt2`, `s_sem8_sub5_tt1`, `s_sem8_sub5_tt2`, `s_sem8_sub6_tt1`, `s_sem8_sub6_tt2`) VALUES
('24512015', '10', '20', '30', '40', '50', '60', '70', '80', '90', '100', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '10', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '18', '17', '19', '20', '21', '22', '23', '24', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24'),
('24512016', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_record`
--
ALTER TABLE `academic_record`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `document_link`
--
ALTER TABLE `document_link`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `f_login`
--
ALTER TABLE `f_login`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `mentor_head`
--
ALTER TABLE `mentor_head`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `subject_name`
--
ALTER TABLE `subject_name`
  ADD PRIMARY KEY (`branch_name`);

--
-- Indexes for table `s_login`
--
ALTER TABLE `s_login`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `s_profile`
--
ALTER TABLE `s_profile`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `term_test`
--
ALTER TABLE `term_test`
  ADD PRIMARY KEY (`s_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
