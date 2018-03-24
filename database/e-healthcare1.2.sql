-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
<<<<<<< HEAD
-- Generation Time: Mar 22, 2018 at 02:46 PM
=======
-- Generation Time: Mar 23, 2018 at 01:51 PM
>>>>>>> master
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_details`
--

CREATE TABLE `application_details` (
  `application_details_id` int(11) NOT NULL,
  `application_reference` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `status_message` varchar(255) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application_details`
--

INSERT INTO `application_details` (`application_details_id`, `application_reference`, `status`, `scheme_id`, `status_message`, `hospital_id`) VALUES
(2, 'ref1234', 'approved', 1, 'documents are verified. credited amount is 60000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(11) NOT NULL,
  `disease_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `disease_name`) VALUES
(1, 'kidney operation'),
(2, 'heart surgery');

-- --------------------------------------------------------

--
-- Table structure for table `disease_coverage`
--

CREATE TABLE `disease_coverage` (
  `disease_coverage_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disease_coverage`
--

INSERT INTO `disease_coverage` (`disease_coverage_id`, `disease_id`, `scheme_id`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
-- Table structure for table `eligible_criteria`
--

CREATE TABLE `eligible_criteria` (
  `eligible_criteria_id` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `eligible_criteria_bridge`
--

CREATE TABLE `eligible_criteria_bridge` (
  `eligible_criteria_bridge_id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `eligible_criteria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
>>>>>>> master
-- Table structure for table `empanelment_request`
--

CREATE TABLE `empanelment_request` (
  `empanelment_request_id` int(11) NOT NULL,
  `organisation_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `documents` varchar(255) NOT NULL,
  `status_message` varchar(255) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `stateAdmin_id` int(11) NOT NULL,
  `stateAdmin_comments` varchar(255) NOT NULL,
  `stateAdmin_status` varchar(255) NOT NULL,
  `stateAdmin_updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `districtAdmin_id` int(11) NOT NULL,
  `districtAdmin_comments` varchar(255) NOT NULL,
  `districtAdmin_status` varchar(255) NOT NULL,
  `districtAdmin_updatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

<<<<<<< HEAD
=======
--
-- Dumping data for table `empanelment_request`
--

INSERT INTO `empanelment_request` (`empanelment_request_id`, `organisation_id`, `status`, `scheme_id`, `documents`, `status_message`, `hospital_id`, `stateAdmin_id`, `stateAdmin_comments`, `stateAdmin_status`, `stateAdmin_updatedAt`, `districtAdmin_id`, `districtAdmin_comments`, `districtAdmin_status`, `districtAdmin_updatedAt`) VALUES
(1, 1, 'approved', 1, 'dfh', 'approved by admin', 8, 18, 'approved', 'xrnjxmk', '2018-03-22 16:59:56', 14, 'fxdb ', 'dggnds', '0000-00-00 00:00:00'),
(2, 1, 'approved', 1, 'sdflk', 'documents are verified', 1, 18, 'dsvgs', 'dsg', '2018-03-23 06:20:27', 19, 'wft', 'qwgtf', '0000-00-00 00:00:00');

>>>>>>> master
-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `fund_id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `organisation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `hospital_shortName` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `hospital_incharge_name` varchar(255) NOT NULL,
  `hospital_incharge_mobile` varchar(10) DEFAULT NULL,
  `hospital_incharge_phone` varchar(11) DEFAULT NULL,
  `hospital_email` varchar(255) NOT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `generalBeds` int(11) DEFAULT NULL,
  `dayCareBeds` int(11) DEFAULT NULL,
  `icuBeds` int(11) DEFAULT NULL,
  `iccuBeds` int(11) DEFAULT NULL,
  `hduBeds` int(11) DEFAULT NULL,
  `majorOts` int(11) DEFAULT NULL,
  `minorOts` int(11) DEFAULT NULL,
  `hospitalAddress` varchar(300) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `panNumber` varchar(255) DEFAULT NULL,
  `clinicalRegistrationNumber` varchar(255) DEFAULT NULL,
  `panCardHolderName` varchar(255) DEFAULT NULL,
  `serviceTaxRegistrationNumber` varchar(255) DEFAULT NULL,
  `branchAddress` varchar(255) DEFAULT NULL,
  `bankAccountNumber` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `payeeName` varchar(255) DEFAULT NULL,
  `numberOfFullTimePhysicians` int(11) DEFAULT NULL,
  `remarks` varchar(1000) DEFAULT NULL,
  `fullTimeConsultants` int(11) DEFAULT NULL,
  `partTimeConsultants` int(11) DEFAULT NULL,
  `visitingConsultants` int(11) DEFAULT NULL,
  `dutyDoctors` int(11) DEFAULT NULL,
  `generalNurses` int(11) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `pharmacy_type` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `hospital_type` varchar(255) DEFAULT NULL,
  `nabh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `hospital_shortName`, `pincode`, `hospital_incharge_name`, `hospital_incharge_mobile`, `hospital_incharge_phone`, `hospital_email`, `owner_name`, `generalBeds`, `dayCareBeds`, `icuBeds`, `iccuBeds`, `hduBeds`, `majorOts`, `minorOts`, `hospitalAddress`, `latitude`, `longitude`, `panNumber`, `clinicalRegistrationNumber`, `panCardHolderName`, `serviceTaxRegistrationNumber`, `branchAddress`, `bankAccountNumber`, `ifsc_code`, `payeeName`, `numberOfFullTimePhysicians`, `remarks`, `fullTimeConsultants`, `partTimeConsultants`, `visitingConsultants`, `dutyDoctors`, `generalNurses`, `bank_name`, `pharmacy_type`, `state`, `district`, `location`, `hospital_type`, `nabh`) VALUES
<<<<<<< HEAD
(1, 'apollo nursing home', 'apollo', 600099, 'yuva', '9840595496', '', 'yuvaammu3@gmail.com', 'xyz', 100, 23, 50, 25, 23, 222, 123, '69/21, xyzxyz, abc - 600099', 23.45, 23.234, '123412341234', '1xya245', 'apollo', 'afaks34', 'tvk nagar', '123434556', '234567IOB', 'yuva', 20, 'sdkjf', 24, 12, 22, 20, 40, 'iob', 'outsourcing', 'tamilnadu', 'chennai', 'center', 'private', 'first level'),
(2, 'Maya', 'Maya', 600011, 'Gana', '9840595496', '04425502946', 'abc@gmail.com', 'Edwin', 23, 21, 232, 42, 2, 34, 24, '4,dh.scgg,dy', 23.4667, 0, '234512345677fg', 'Gs34sdh', 'Fgh', '335gfsd', 'Dshj', '113563`', '2bb5', 'Wg', 45, '34sg', 34, 34, 34, 232, 35, 'Iob', 'DSSG', 'TAMILNADU', 'CHENNAI', 'ASSGMK', '', 'FINAL');
=======
(1, 'Apollo Nursing Home', 'Apollo', 600011, 'Yuvarani', '9840595496', '04425502946', 'yuvaammu3@gmail.com', 'Edwin Kishore', 100, 23, 50, 25, 23, 222, 12345, '69/21, Xyzxyz, Abc - 600099', 23.45, 0, '123412341234', '1xya245', 'Apollo', 'Afaks34', 'Tvk Nagar', '123434556', '234567iob', 'Yuva', 20, 'Sdkjf', 24, 12, 22, 20, 40, 'Iob', 'outsourcing', 'tamilnadu', 'chennai', 'center', 'private', 'fvjm'),
(2, 'Apollo Nursing Home', 'Apollo', 600099, 'Yuvarani', '9840595496', '04425502946', 'abc@gmail.com', 'Gana', 100, 23, 50, 25, 23, 222, 12345, '69/21, Xyzxyz, Abc - 600099', 23.45, 0, '123412341234', '1xya245', 'Apollo', 'Afaks34', 'Tvk Nagar', '123434556', '234567iob', 'Yuva', 20, 'Sdkjf', 24, 12, 22, 20, 40, 'Iob', 'outsourcing', 'tamilnadu', 'chennai', 'center', 'private', 'fvjm'),
(4, 'Apollo Nursing Home', 'Apollo', 600099, 'Yuvarani', '9840595496', '04425502946', 'edwin@gmail.com', 'Gana', 100, 23, 50, 25, 23, 222, 12345, '69/21, Xyzxyz, Abc - 600099', 23.45, 0, '123412341234', '1xya245', 'Apollo', 'Afaks34', 'Tvk Nagar', '123434556', '234567iob', 'Yuva', 20, 'Sdkjf', 24, 12, 22, 20, 40, 'Iob', 'outsourcing', 'tamilnadu', 'chennai', 'center', 'private', 'fvjm'),
(6, 'Apollo Nursing Home', 'Apollo', 600099, 'Yuvarani', '9840595496', '04425502946', 'edwinkishore@gmail.com', 'Gana', 100, 23, 50, 25, 23, 222, 12345, '69/21, Xyzxyz, Abc - 600099', 23.45, 0, '123412341234', '1xya245', 'Apollo', 'Afaks34', 'Tvk Nagar', '123434556', '234567iob', 'Yuva', 20, 'Sdkjf', 24, 12, 22, 20, 40, 'Iob', 'outsourcing', 'tamilnadu', 'chennai', 'center', 'private', 'fvjm'),
(8, 'Apollo Nursing Home', 'Apollo', 600099, 'Yuvarani', '9840595496', '04425502946', 'akn@gmail.com', 'Gana', 100, 23, 50, 25, 23, 222, 12345, '69/21, Xyzxyz, Abc - 600099', 23.45, 0, '123412341234', '1xya245', 'Apollo', 'Afaks34', 'Tvk Nagar', '123434556', '234567iob', 'Yuva', 20, 'Sdkjf', 24, 12, 22, 20, 40, 'Iob', 'outsourcing', 'tamilnadu', 'chennai', 'center', 'private', 'fvjm');
>>>>>>> master

-- --------------------------------------------------------

--
-- Table structure for table `hospital_facilities`
--

CREATE TABLE `hospital_facilities` (
  `hospital_facilities_id` int(11) NOT NULL,
  `facility_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_facilities_bridge`
--

CREATE TABLE `hospital_facilities_bridge` (
  `hospital_facilities_bridge_id` int(11) NOT NULL,
  `hospital_facility_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `organisation_id` int(11) NOT NULL,
  `organisation_name` varchar(255) NOT NULL,
  `license` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

<<<<<<< HEAD
=======
--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`organisation_id`, `organisation_name`, `license`, `user_id`) VALUES
(1, 'dfadf', 'sdaf2', 2);

>>>>>>> master
-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `programme_id` int(11) NOT NULL,
  `programme_name` varchar(255) NOT NULL,
  `programme_description` varchar(500) NOT NULL,
  `guidelines` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `fundAllocated` bigint(20) NOT NULL,
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updation_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `scheme_id` int(11) NOT NULL,
  `scheme_name` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `maximum_amount` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updation_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fund_allocated` bigint(20) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `requiredFile_url1` varchar(255) DEFAULT NULL,
  `requiredFile_url2` varchar(255) DEFAULT NULL,
  `requiredFile_url3` varchar(255) DEFAULT NULL,
<<<<<<< HEAD
  `beneficiaries_count` int(11) DEFAULT NULL
=======
  `beneficiaries_count` int(11) DEFAULT NULL,
  `type_id` int(11) NOT NULL
>>>>>>> master
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scheme`
--

<<<<<<< HEAD
INSERT INTO `scheme` (`scheme_id`, `scheme_name`, `description`, `maximum_amount`, `type`, `creation_date`, `updation_date`, `fund_allocated`, `created_by`, `updated_by`, `requiredFile_url1`, `requiredFile_url2`, `requiredFile_url3`, `beneficiaries_count`) VALUES
(1, 'rsby', 'scheme for kidney operation', 12000, 'insurance', '2018-03-21 16:00:33', '0000-00-00 00:00:00', 8888888, 'yuva', '', NULL, NULL, NULL, NULL);
=======
INSERT INTO `scheme` (`scheme_id`, `scheme_name`, `description`, `maximum_amount`, `type`, `creation_date`, `updation_date`, `fund_allocated`, `created_by`, `updated_by`, `requiredFile_url1`, `requiredFile_url2`, `requiredFile_url3`, `beneficiaries_count`, `type_id`) VALUES
(1, 'rsby', 'scheme for kidney operation', 12000, 'insurance', '2018-03-21 16:00:33', '0000-00-00 00:00:00', 8888888, 'yuva', '', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `scheme_type`
--

CREATE TABLE `scheme_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
>>>>>>> master

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:06:53'),
(2, 3, '{\"role\":\"3\",\"roleText\":\"Employee\",\"name\":\"Employee\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:08:07'),
(3, 2, '{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Manager\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:08:42'),
(4, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:10:34'),
(5, 9, '{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Swarna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:11:32'),
(6, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:11:49'),
(7, 10, '{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:13:04'),
(8, 9, '{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:15:08'),
(9, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:16:23'),
(10, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:17:02'),
(11, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:19:48'),
(12, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:44:25'),
(13, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 12:45:58'),
(14, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 16:32:56'),
(15, 12, '{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Subha\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 16:34:50'),
(16, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 16:35:21'),
(17, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 20:58:36'),
(18, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 21:11:00'),
(19, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 21:16:50'),
(20, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Spartan 16.16299', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299', 'Windows 10', '2018-03-20 21:21:51'),
(21, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Spartan 16.16299', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299', 'Windows 10', '2018-03-20 21:31:23'),
(22, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:27:08'),
(23, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:28:01'),
(24, 12, '{\"role\":\"2\",\"roleText\":\"Hospital\",\"name\":\"Subha\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:33:57'),
(25, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:34:20'),
(26, 11, '{\"role\":\"3\",\"roleText\":\"Organization\",\"name\":\"Yuvarani\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:34:50'),
(27, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:35:34'),
(28, 11, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:35:42'),
(29, 12, '{\"role\":\"2\",\"roleText\":\"Organization\",\"name\":\"Subha\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:36:01'),
(30, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:36:42'),
(31, 11, '{\"role\":\"3\",\"roleText\":\"Organization\",\"name\":\"Yuvarani\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:36:52'),
(32, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:37:06'),
(33, 13, '{\"role\":\"2\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-20 23:38:18'),
(34, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 09:07:07'),
(35, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 10:17:00'),
(36, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 10:26:53'),
(37, 13, '{\"role\":\"2\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 10:27:11'),
(38, 13, '{\"role\":\"2\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 10:33:42'),
(39, 13, '{\"role\":\"2\",\"roleText\":\"Organization\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 11:13:23'),
(40, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 11:13:41'),
(41, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 11:14:00'),
(42, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 11:16:51'),
(43, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 13:42:55'),
(44, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 13:49:37'),
(45, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 13:50:30'),
(46, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 14:15:13'),
(47, 15, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 17:47:01'),
(48, 16, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 17:53:45'),
(49, 15, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 17:58:27'),
(50, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 18:06:41'),
(51, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 19:08:33'),
(52, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 20:13:24'),
(53, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 20:22:06'),
(54, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 20:57:32'),
(55, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 22:07:48'),
(56, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-21 22:19:31'),
(57, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 06:57:42'),
(58, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 06:59:05'),
(59, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 07:45:10'),
(60, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 11:42:40'),
(61, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 12:12:54'),
(62, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 12:14:04'),
(63, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 12:15:10'),
(64, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 18:09:20'),
(65, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 18:33:15'),
<<<<<<< HEAD
(66, 21, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Maya Nursing Home\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 18:58:05');
=======
(66, 21, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Maya Nursing Home\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 18:58:05'),
(67, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 20:59:33'),
(68, 22, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Akn Nursing Home\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 22:30:31'),
(69, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 08:47:47'),
(70, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\",\"email\":\"swarna.ilas@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 11:05:37'),
(71, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\",\"email\":\"yuvaammu3@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 11:12:35'),
(72, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\",\"email\":\"yuvaammu3@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 13:44:49'),
(73, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\",\"email\":\"yuvaammu3@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 14:32:59'),
(74, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\",\"email\":\"yuvaammu3@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 18:04:15');
>>>>>>> master

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_reset_password`
--

INSERT INTO `tbl_reset_password` (`id`, `email`, `activation_id`, `agent`, `client_ip`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(26, 'subhailams@gmail.com', 'yAw2cjZFvW7bIig', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-20 15:04:30', NULL, NULL),
(27, 'swarna.ilas@gmail.com', 'AtIuJ5nE1delzY0', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-21 04:37:16', NULL, NULL),
(28, 'swathy.sumithra@gmail.com', 'rLGQ238PBm5uSI9', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-21 06:17:33', NULL, NULL),
(29, 'swathy.sumithra@gmail.com', 'KGc96mD54xZQRyt', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-21 06:29:55', NULL, NULL),
(30, 'swathy.sumithra@gmail.com', 'Cjou2VQTWKpgSb0', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-21 06:31:22', NULL, NULL),
(31, 'swarna.ilas@gmail.com', '5cnmlKu24Tij06b', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-21 06:32:08', NULL, NULL),
(32, 'ucs14334@rmd.ac.in', '5cdbCJFQN9KXGTm', 'Chrome 65.0.3325.181', '127.0.0.1', 0, 1, '2018-03-21 14:49:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'Administrator'),
(2, 'Organization'),
(3, 'Hospital'),
(4, 'stateAdmin'),
(5, 'districtAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(9, 'swarna.ilas@gmail.com', '$2y$10$INB2ji1pfQY1xXwIALSe6O7twr7764QPn9l.rJ4gDkMquKKufmsOy', 'Swarna Swapna', '7708446162', 1, 0, 1, '2018-03-20 07:41:17', 9, '2018-03-20 18:58:16'),
(13, 'swathy.sumithra@gmail.com', '$2y$10$plYt7LWB3xxCzM1XMQcIYeWBqaN01DzPIX05447jyh545GG027moe', 'Swathy', '7896441234', 3, 0, 9, '2018-03-20 19:08:06', 9, '2018-03-21 06:43:53'),
(14, 'yuvaammu3@gmail.com', '$2y$10$XkQXKspeWFCO3.XpYcEmc.ojnIvCwn5gnmrOnB/HUl21uelDDfPTq', 'Yuvarani', '9840595496', 3, 0, 9, '2018-03-21 08:20:13', NULL, NULL),
(15, 'yuvarani421997@gmail.com', '$2y$10$vQOrtZ9uKDNClJX6XaplwO5bHRDGfQyDTTJSlp42Z1iHn7GPzXRFW', '', '9840595496', 3, 0, 0, '2018-03-21 12:16:46', NULL, NULL),
(18, 'abc@gmail.com', '$2y$10$rsJA4HwkpZzKmfXm8MZT0O/fORjvbmMO5yJ87hSrLfAa2hw.4YWx6', 'State Admin', '9840595496', 4, 0, 9, '2018-03-21 16:38:34', NULL, NULL),
(19, 'abcd@gmail.com', '$2y$10$R4dGvgrvfYL2XAXh/pkLxOUNvU6X6mXyWwi7kyGxN443.xa3DK6/q', 'District Admin', '9840595496', 5, 0, 9, '2018-03-21 16:39:17', NULL, NULL),
<<<<<<< HEAD
(21, 'ucs14334@rmd.ac.in', '$2y$10$JQUAJopsZHhkVgqVt1KUX.LUIgQye43jpWG/dRp4MaiuKIeF7yhMe', 'Maya Nursing Home', '9840595496', 3, 0, 0, '2018-03-22 13:27:58', NULL, NULL);
=======
(21, 'ucs14334@rmd.ac.in', '$2y$10$JQUAJopsZHhkVgqVt1KUX.LUIgQye43jpWG/dRp4MaiuKIeF7yhMe', 'Maya Nursing Home', '9840595496', 3, 0, 0, '2018-03-22 13:27:58', NULL, NULL),
(22, 'akn@gmail.com', '$2y$10$Gw23ZASxz6UoyJoTSH1DVO8U72zgrykyYRonXqxZ2A6n4mElpxulC', 'Akn Nursing Home', '9840154072', 3, 0, 0, '2018-03-22 15:28:42', NULL, NULL);
>>>>>>> master

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_details`
--
ALTER TABLE `application_details`
  ADD PRIMARY KEY (`application_details_id`),
  ADD KEY `scheme_id` (`scheme_id`),
  ADD KEY `hospital_id` (`hospital_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `disease_coverage`
--
ALTER TABLE `disease_coverage`
  ADD PRIMARY KEY (`disease_coverage_id`),
  ADD KEY `disease_id` (`disease_id`),
  ADD KEY `scheme_id` (`scheme_id`);

--
<<<<<<< HEAD
=======
-- Indexes for table `eligible_criteria`
--
ALTER TABLE `eligible_criteria`
  ADD PRIMARY KEY (`eligible_criteria_id`);

--
-- Indexes for table `eligible_criteria_bridge`
--
ALTER TABLE `eligible_criteria_bridge`
  ADD PRIMARY KEY (`eligible_criteria_bridge_id`),
  ADD KEY `scheme_id` (`scheme_id`),
  ADD KEY `eligible_criteria_id` (`eligible_criteria_id`);

--
>>>>>>> master
-- Indexes for table `empanelment_request`
--
ALTER TABLE `empanelment_request`
  ADD PRIMARY KEY (`empanelment_request_id`),
  ADD KEY `organisation_id` (`organisation_id`),
  ADD KEY `scheme_id` (`scheme_id`),
  ADD KEY `hospital_id` (`hospital_id`),
  ADD KEY `stateAdmin_id` (`stateAdmin_id`),
  ADD KEY `districtAdmin_id` (`districtAdmin_id`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`fund_id`),
  ADD KEY `scheme_id` (`scheme_id`),
  ADD KEY `organisation_id` (`organisation_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`),
  ADD UNIQUE KEY `hospital_incharge_email` (`hospital_email`);

--
-- Indexes for table `hospital_facilities`
--
ALTER TABLE `hospital_facilities`
  ADD PRIMARY KEY (`hospital_facilities_id`);

--
-- Indexes for table `hospital_facilities_bridge`
--
ALTER TABLE `hospital_facilities_bridge`
  ADD PRIMARY KEY (`hospital_facilities_bridge_id`),
  ADD KEY `hospital_id` (`hospital_id`),
  ADD KEY `hospital_facility_id` (`hospital_facility_id`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`organisation_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`programme_id`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
<<<<<<< HEAD
  ADD PRIMARY KEY (`scheme_id`);
=======
  ADD PRIMARY KEY (`scheme_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `scheme_type`
--
ALTER TABLE `scheme_type`
  ADD PRIMARY KEY (`type_id`);
>>>>>>> master

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_details`
--
ALTER TABLE `application_details`
  MODIFY `application_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `disease_coverage`
--
ALTER TABLE `disease_coverage`
  MODIFY `disease_coverage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `empanelment_request`
--
ALTER TABLE `empanelment_request`
  MODIFY `empanelment_request_id` int(11) NOT NULL AUTO_INCREMENT;
=======
-- AUTO_INCREMENT for table `eligible_criteria`
--
ALTER TABLE `eligible_criteria`
  MODIFY `eligible_criteria_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eligible_criteria_bridge`
--
ALTER TABLE `eligible_criteria_bridge`
  MODIFY `eligible_criteria_bridge_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `empanelment_request`
--
ALTER TABLE `empanelment_request`
  MODIFY `empanelment_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> master
--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `fund_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
<<<<<<< HEAD
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> master
--
-- AUTO_INCREMENT for table `hospital_facilities`
--
ALTER TABLE `hospital_facilities`
  MODIFY `hospital_facilities_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hospital_facilities_bridge`
--
ALTER TABLE `hospital_facilities_bridge`
  MODIFY `hospital_facilities_bridge_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
<<<<<<< HEAD
  MODIFY `organisation_id` int(11) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `organisation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> master
--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `programme_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `scheme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
=======
-- AUTO_INCREMENT for table `scheme_type`
--
ALTER TABLE `scheme_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
>>>>>>> master
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
<<<<<<< HEAD
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
=======
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
>>>>>>> master
--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_details`
--
ALTER TABLE `application_details`
  ADD CONSTRAINT `application_details_ibfk_1` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`),
  ADD CONSTRAINT `application_details_ibfk_2` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

--
-- Constraints for table `disease_coverage`
--
ALTER TABLE `disease_coverage`
  ADD CONSTRAINT `disease_coverage_ibfk_1` FOREIGN KEY (`disease_id`) REFERENCES `disease` (`disease_id`),
  ADD CONSTRAINT `disease_coverage_ibfk_2` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`);

--
<<<<<<< HEAD
=======
-- Constraints for table `eligible_criteria_bridge`
--
ALTER TABLE `eligible_criteria_bridge`
  ADD CONSTRAINT `eligible_criteria_bridge_ibfk_1` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`),
  ADD CONSTRAINT `eligible_criteria_bridge_ibfk_2` FOREIGN KEY (`eligible_criteria_id`) REFERENCES `eligible_criteria` (`eligible_criteria_id`);

--
>>>>>>> master
-- Constraints for table `empanelment_request`
--
ALTER TABLE `empanelment_request`
  ADD CONSTRAINT `empanelment_request_ibfk_1` FOREIGN KEY (`organisation_id`) REFERENCES `organisation` (`organisation_id`),
  ADD CONSTRAINT `empanelment_request_ibfk_2` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`),
  ADD CONSTRAINT `empanelment_request_ibfk_3` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`),
  ADD CONSTRAINT `empanelment_request_ibfk_4` FOREIGN KEY (`stateAdmin_id`) REFERENCES `tbl_users` (`userId`),
  ADD CONSTRAINT `empanelment_request_ibfk_5` FOREIGN KEY (`districtAdmin_id`) REFERENCES `tbl_users` (`userId`);

--
-- Constraints for table `fund`
--
ALTER TABLE `fund`
  ADD CONSTRAINT `fund_ibfk_1` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`),
  ADD CONSTRAINT `fund_ibfk_2` FOREIGN KEY (`organisation_id`) REFERENCES `organisation` (`organisation_id`);

--
-- Constraints for table `hospital_facilities_bridge`
--
ALTER TABLE `hospital_facilities_bridge`
  ADD CONSTRAINT `hospital_facilities_bridge_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`),
  ADD CONSTRAINT `hospital_facilities_bridge_ibfk_2` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`),
  ADD CONSTRAINT `hospital_facilities_bridge_ibfk_3` FOREIGN KEY (`hospital_facility_id`) REFERENCES `hospital_facilities` (`hospital_facilities_id`);
<<<<<<< HEAD
=======

--
-- Constraints for table `scheme`
--
ALTER TABLE `scheme`
  ADD CONSTRAINT `scheme_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `scheme_type` (`type_id`);
>>>>>>> master
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
