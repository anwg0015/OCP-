-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2015 at 02:50 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ocp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity`
--

CREATE TABLE IF NOT EXISTS `tbl_activity` (
  `activity_id` int(5) NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(200) NOT NULL,
  `planned_date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `expected_participant` int(6) NOT NULL,
  `venue` varchar(20) NOT NULL,
  `status` varchar(9) NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_activity`
--

INSERT INTO `tbl_activity` (`activity_id`, `activity_name`, `planned_date`, `time`, `expected_participant`, `venue`, `status`) VALUES
(1, 'Enrance for new session', '2015-12-12', '12:00 onwards', 100, 'kcc hall', 'Active'),
(2, 'orientation for new student', '2015-12-15', '12:00 onwards', 200, 'kcc hall', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignment`
--

CREATE TABLE IF NOT EXISTS `tbl_assignment` (
  `assignment_id` int(5) NOT NULL,
  `assignment_name` varchar(200) NOT NULL,
  `assignment_sub` varchar(30) NOT NULL,
  `assignment_createdate` date NOT NULL,
  `assignment_submissiondate` date NOT NULL,
  `assignment_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assignment`
--

INSERT INTO `tbl_assignment` (`assignment_id`, `assignment_name`, `assignment_sub`, `assignment_createdate`, `assignment_submissiondate`, `assignment_file`) VALUES
(5, 'Assignment1', '2', '2014-09-03', '2014-11-18', 'DV_2016_Instructions_Nepali1.pdf'),
(6, 'Assignment1', '6', '2014-09-03', '2014-12-03', 'DV_2016_Instructions_Nepali2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch`
--

CREATE TABLE IF NOT EXISTS `tbl_batch` (
  `batch_id` int(5) NOT NULL AUTO_INCREMENT,
  `batch_year` int(5) NOT NULL,
  `batch_programme` varchar(50) NOT NULL,
  `programme_id` int(5) NOT NULL,
  `batch_status` varchar(50) NOT NULL,
  PRIMARY KEY (`batch_id`),
  KEY `programme_id` (`programme_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_batch`
--

INSERT INTO `tbl_batch` (`batch_id`, `batch_year`, `batch_programme`, `programme_id`, `batch_status`) VALUES
(1, 2010, '', 1, 'Active'),
(2, 2014, '', 1, 'Active'),
(3, 2014, '', 2, 'Active'),
(4, 2011, '', 2, 'Active'),
(5, 2013, '', 2, 'Active'),
(6, 111, '', 3, 'Deactive'),
(7, 2010, '', 4, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
  `course_id` int(5) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_level` varchar(50) NOT NULL,
  `course_faculty` varchar(50) NOT NULL,
  `course_programme` varchar(50) NOT NULL,
  `course_semester` varchar(5) NOT NULL,
  `course_startdate` date NOT NULL,
  `course_enddate` date NOT NULL,
  `course_description` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_code`, `course_name`, `course_level`, `course_faculty`, `course_programme`, `course_semester`, `course_startdate`, `course_enddate`, `course_description`) VALUES
(1, '', '', '', '', '', '', '2015-09-02', '2015-09-03', ''),
(2, 'hkj', 'hkh', 'jh', 'kjhj', 'hk', 'hj', '0000-00-00', '0000-00-00', 'kj'),
(3, 'ghjghj', 'ghjghj', 'ghg', 'hjgh', 'ghjghjg', 'gh', '0000-00-00', '0000-00-00', 'gh'),
(4, 'hjhjkhhh', 'jh', 'HJKHJHjhjkHJHjkhKHj', 'jkh', 'kjhkhj', 'hj', '0000-00-00', '0000-00-00', ''),
(5, 'aa', 'aa', 'aa', 'aa', 'aa', 'a', '0000-00-00', '0000-00-00', 'a'),
(6, 'a', 'a', '', 'a', 'a', 'a', '0000-00-00', '0000-00-00', ''),
(7, 'b', 'b', 'b', 'b', 'b', 'b', '0000-00-00', '0000-00-00', 'b'),
(8, 'c', 'c', 'c', 'c', 'c', 'c', '0000-00-00', '0000-00-00', 'c'),
(9, 'd', 'd', 'dd', 'd', 'd', 'd', '0000-00-00', '0000-00-00', 'd'),
(10, 'e', 'e', 'e', 'e', 'e', 'e', '0000-00-00', '0000-00-00', 'e'),
(11, 'f', 'f', 'ff', 'f', 'f', 'f', '0000-00-00', '0000-00-00', 'ff'),
(12, 'g', 'g', 'g', 'g', 'g', 'g', '0000-00-00', '0000-00-00', 'g'),
(13, 'h', 'h', 'h', 'h', 'h', 'h', '0000-00-00', '0000-00-00', 'h'),
(14, 'i', 'i', 'i', 'i', 'i', 'i', '0000-00-00', '0000-00-00', 'i'),
(15, 'i', 'i', 'i', 'i', 'i', 'i', '0000-00-00', '0000-00-00', 'jjjj'),
(16, 'k', 'k', 'k', 'k', 'k', 'k', '0000-00-00', '0000-00-00', 'k'),
(17, 'l', 'l', 'l', 'l', 'l', 'l', '0000-00-00', '0000-00-00', 'l'),
(18, 'aa', 'aa', 'aa', 'aa', 'aa', 'aaa', '0000-00-00', '0000-00-00', 'aaaaa<div><span class="Apple-tab-span" style="white-space:pre">		</span></div>'),
(19, 'ff', '', '-- Choose Course Level --', '-- Choose Faculty --', '-- Choose Programme --', '-- Ch', '0000-00-00', '0000-00-00', ''),
(20, '111111', 'das', 'Graduate', 'Science and Technology', 'BBA', 'I', '0000-00-00', '0000-00-00', '<span class="Apple-tab-span" style="white-space:pre">	</span>dsfnkns kfkjs<div>df;sjl</div><div>df;lsjf</div>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hod`
--

CREATE TABLE IF NOT EXISTS `tbl_hod` (
  `hod_id` int(5) NOT NULL AUTO_INCREMENT,
  `hod_prog_id` int(5) NOT NULL,
  `hod_teac_id` int(10) NOT NULL,
  PRIMARY KEY (`hod_id`),
  KEY `hod_prog_id` (`hod_prog_id`,`hod_teac_id`),
  KEY `hod_teac_id` (`hod_teac_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_hod`
--

INSERT INTO `tbl_hod` (`hod_id`, `hod_prog_id`, `hod_teac_id`) VALUES
(3, 1, 1),
(2, 2, 2),
(7, 3, 2),
(4, 4, 2),
(6, 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programme`
--

CREATE TABLE IF NOT EXISTS `tbl_programme` (
  `prog_id` int(5) NOT NULL AUTO_INCREMENT,
  `prog_name` varchar(100) NOT NULL,
  `prog_type` varchar(50) NOT NULL,
  `prog_status` varchar(50) NOT NULL,
  PRIMARY KEY (`prog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_programme`
--

INSERT INTO `tbl_programme` (`prog_id`, `prog_name`, `prog_type`, `prog_status`) VALUES
(1, 'BACHELOR IN INFORMATION TECHNOLOGY(BIT)', 'Undergraduate', 'Active'),
(2, 'BACHELOR IN COMPUTER APPLICATION (BCA)', 'Undergraduate', 'Active'),
(3, '', '', ''),
(4, 'MCA', 'Graduate', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_routine`
--

CREATE TABLE IF NOT EXISTS `tbl_routine` (
  `routine_id` int(5) NOT NULL AUTO_INCREMENT,
  `routine_sem_id` int(5) NOT NULL,
  `routine_desc` longtext NOT NULL,
  PRIMARY KEY (`routine_id`),
  KEY `routine_sem_id` (`routine_sem_id`),
  KEY `routine_sem_id_2` (`routine_sem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_routine`
--

INSERT INTO `tbl_routine` (`routine_id`, `routine_sem_id`, `routine_desc`) VALUES
(4, 4, '<p align="center">\r\n	BIT 2<sup>nd</sup> sem result</p>\r\n<table border="1" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:213px;">\r\n				<p>\r\n					Days</p>\r\n			</td>\r\n			<td style="width:213px;">\r\n				<p>\r\n					Sun</p>\r\n			</td>\r\n			<td style="width:213px;">\r\n				<p>\r\n					Mon</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:213px;">\r\n				<p>\r\n					Dkf</p>\r\n			</td>\r\n			<td style="width:213px;">\r\n				<p>\r\n					MATH</p>\r\n			</td>\r\n			<td style="width:213px;">\r\n				<p>\r\n					<strong>Sdk</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:213px;">\r\n				<p>\r\n					<em>wireless</em></p>\r\n			</td>\r\n			<td style="width:213px;">\r\n				<p>\r\n					Sad</p>\r\n			</td>\r\n			<td style="width:213px;">\r\n				<p>\r\n					Think</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:213px;">\r\n				<p>\r\n					This</p>\r\n			</td>\r\n			<td style="width:213px;">\r\n				<p>\r\n					Isa</p>\r\n			</td>\r\n			<td style="width:213px;">\r\n				<p>\r\n					A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:213px;">\r\n				<p>\r\n					Roshan</p>\r\n			</td>\r\n			<td style="width:213px;">\r\n				<p>\r\n					Ghale</p>\r\n			</td>\r\n			<td style="width:213px;">\r\n				<p>\r\n					<em>kathmandu</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>'),
(8, 2, '<p>\r\n	This is routin of BIT 2nd sem</p>\r\n<p>\r\n	and is not changed</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE IF NOT EXISTS `tbl_semester` (
  `sem_id` int(5) NOT NULL AUTO_INCREMENT,
  `sem_name` varchar(50) NOT NULL,
  `sem_fall_year` varchar(50) NOT NULL,
  `sem_status` varchar(50) NOT NULL,
  `sem_prog_id` int(5) NOT NULL,
  `sem_batch_id` int(5) NOT NULL,
  PRIMARY KEY (`sem_id`),
  KEY `sem_prog_id` (`sem_prog_id`,`sem_batch_id`),
  KEY `sem_batch_id` (`sem_batch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`sem_id`, `sem_name`, `sem_fall_year`, `sem_status`, `sem_prog_id`, `sem_batch_id`) VALUES
(1, '1st semester', '2014', 'Running', 1, 1),
(2, '2nd', '2015', 'finished', 1, 2),
(4, '2nd sem', '2011', 'Deactive', 1, 2),
(5, '3rd sem', '2011', 'Pending', 1, 1),
(6, '4th sem', '2014', 'Active', 1, 1),
(7, '!stsem', '2010', 'Running', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `staff_id` int(5) NOT NULL AUTO_INCREMENT,
  `staff_fname` varchar(50) NOT NULL,
  `staff_mname` varchar(50) NOT NULL,
  `staff_lname` varchar(50) NOT NULL,
  `staff_sex` varchar(10) NOT NULL,
  `staff_address` varchar(50) NOT NULL,
  `staff_status` varchar(50) NOT NULL,
  `staff_phone` int(10) NOT NULL,
  `staff_email` varchar(50) NOT NULL,
  `staff_password` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `staff_fname`, `staff_mname`, `staff_lname`, `staff_sex`, `staff_address`, `staff_status`, `staff_phone`, `staff_email`, `staff_password`) VALUES
(11, 'anil', '', 'fdr', 'female', 'fyt', 'Deactive', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `std_id` int(10) NOT NULL AUTO_INCREMENT,
  `std_idno` int(10) NOT NULL,
  `std_fname` varchar(5) NOT NULL,
  `std_mname` varchar(50) NOT NULL,
  `std_lname` varchar(50) NOT NULL,
  `std_sex` varchar(10) NOT NULL,
  `std_dob` date NOT NULL,
  `std_address` varchar(100) NOT NULL,
  `std_email` varchar(100) NOT NULL,
  `std_password` varchar(50) NOT NULL,
  `std_phone` varchar(10) NOT NULL,
  `std_mobile` int(10) NOT NULL,
  `std_level` varchar(50) NOT NULL,
  `std_faculty` varchar(50) NOT NULL,
  `std_programme` varchar(50) NOT NULL,
  `std_semester` varchar(10) NOT NULL,
  `std_batch` int(5) NOT NULL,
  `std_photo` varchar(150) NOT NULL,
  `std_createdat` date NOT NULL,
  `std_name` varchar(100) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`std_id`, `std_idno`, `std_fname`, `std_mname`, `std_lname`, `std_sex`, `std_dob`, `std_address`, `std_email`, `std_password`, `std_phone`, `std_mobile`, `std_level`, `std_faculty`, `std_programme`, `std_semester`, `std_batch`, `std_photo`, `std_createdat`, `std_name`) VALUES
(1, 0, 'a', 'a', 'a', 'a', '0000-00-00', 'a', 'a', 'a', 'a', 0, 'a', 'a', 'a', 'a', 0, 'a', '0000-00-00', ''),
(2, 33, 'a', 'a', 'a', 'male', '1992-11-03', 'kathmandu', 'ghalerosn@gmail.com', 'oo', '', 2147483647, '', '', '', '', 0, '', '2015-09-05', ''),
(3, 10015, 'rosha', '', 'ghale', 'male', '1992-11-03', 'kathmandu', 'ghalerosn@gmail.com', 'ooooo', '9861230398', 2147483647, '', 'Science and Technology', 'BCA', '', 2010, '', '2015-09-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher` (
  `teac_id` int(10) NOT NULL AUTO_INCREMENT,
  `teac_fname` varchar(50) NOT NULL,
  `teac_mname` varchar(50) NOT NULL,
  `teac_lname` varchar(50) NOT NULL,
  `teac_dob` date NOT NULL,
  `teac_sex` varchar(10) NOT NULL,
  `teac_address` varchar(50) NOT NULL,
  `teac_email` varchar(100) NOT NULL,
  `teac_phone` varchar(10) NOT NULL,
  `teac_mobile` int(10) NOT NULL,
  `teac_password` varchar(50) NOT NULL,
  `teac_role` varchar(10) NOT NULL,
  `teac_level` varchar(50) NOT NULL,
  `teac_faculty` varchar(50) NOT NULL,
  `teac_programme` varchar(50) NOT NULL,
  `teac_status` varchar(50) NOT NULL,
  `teac_photo` varchar(100) NOT NULL,
  `teac_createdat` date NOT NULL,
  PRIMARY KEY (`teac_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teac_id`, `teac_fname`, `teac_mname`, `teac_lname`, `teac_dob`, `teac_sex`, `teac_address`, `teac_email`, `teac_phone`, `teac_mobile`, `teac_password`, `teac_role`, `teac_level`, `teac_faculty`, `teac_programme`, `teac_status`, `teac_photo`, `teac_createdat`) VALUES
(1, 'raju', 'kumar', 'kattel', '0000-00-00', 'male', 'ktm', 'raju', '999', 9999999, 'aa', 'HOD', '', '', '', '', '', '2015-09-05'),
(2, 'roshan', 'ghale', '', '0000-00-00', 'male', '', 'aa', '', 0, 'aa', 'HOD', '', '', '', '', '', '0000-00-00'),
(3, 'roshan', '', '', '0000-00-00', '', 'h', 'ab', 'aa', 0, 'ab', 'HOD', '', '', '', '', '', '0000-00-00'),
(7, 'roshan', '', 'ghale', '1992-11-03', 'Male', 'ktm', '999', '99', 99, '99', 'HOD', '', '', '', 'Active', '', '0000-00-00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  ADD CONSTRAINT `tbl_batch_ibfk_1` FOREIGN KEY (`programme_id`) REFERENCES `tbl_programme` (`prog_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_hod`
--
ALTER TABLE `tbl_hod`
  ADD CONSTRAINT `tbl_hod_ibfk_1` FOREIGN KEY (`hod_prog_id`) REFERENCES `tbl_programme` (`prog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_hod_ibfk_2` FOREIGN KEY (`hod_teac_id`) REFERENCES `tbl_teacher` (`teac_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_routine`
--
ALTER TABLE `tbl_routine`
  ADD CONSTRAINT `tbl_routine_ibfk_1` FOREIGN KEY (`routine_sem_id`) REFERENCES `tbl_semester` (`sem_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD CONSTRAINT `tbl_semester_ibfk_1` FOREIGN KEY (`sem_prog_id`) REFERENCES `tbl_programme` (`prog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_semester_ibfk_2` FOREIGN KEY (`sem_batch_id`) REFERENCES `tbl_batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
