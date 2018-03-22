-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 03:07 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
  `organisation_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `state_admin_id` int(11) NOT NULL,
  `district_admin_id` int(11) NOT NULL,
  `hospital_department_id` int(11) NOT NULL,
  `status_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disease_coverage`
--

CREATE TABLE `disease_coverage` (
  `disease_coverage_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `district_admin`
--

CREATE TABLE `district_admin` (
  `district_admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empanelment_request`
--

CREATE TABLE `empanelment_request` (
  `empanelment_request_id` int(11) NOT NULL,
  `organisation_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `documents` varchar(255) NOT NULL,
  `status_message` varchar(255) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `fund_id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `organisation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `hospital_shortName` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `hospital_incharge_name` varchar(255) NOT NULL,
  `hospital_incharge_mobile` varchar(10) NOT NULL,
  `hospital_incharge_phone` varchar(11) NOT NULL,
  `hospital_incharge_email` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `generalBeds` int(11) NOT NULL,
  `dayCareBeds` int(11) NOT NULL,
  `icuBeds` int(11) NOT NULL,
  `iccuBeds` int(11) NOT NULL,
  `hduBeds` int(11) NOT NULL,
  `majorOts` int(11) NOT NULL,
  `minorOts` int(11) NOT NULL,
  `hospitalAddress` varchar(300) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `panNumber` varchar(255) NOT NULL,
  `clinicalRegistrationNumber` varchar(255) NOT NULL,
  `panCardHolderName` varchar(255) NOT NULL,
  `serviceTaxRegistrationNumber` varchar(255) NOT NULL,
  `branchAddress` varchar(255) NOT NULL,
  `bankAccountNumber` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `payeeName` varchar(255) NOT NULL,
  `numberOfFullTimePhysicians` int(11) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `fullTimeConsultants` int(11) NOT NULL,
  `partTimeConsultants` int(11) NOT NULL,
  `visitingConsultants` int(11) NOT NULL,
  `dutyDoctors` int(11) NOT NULL,
  `generalNurses` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `pharmacy_type` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `hospital_type` varchar(255) NOT NULL,
  `nabh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `hospital_shortName`, `pincode`, `hospital_incharge_name`, `hospital_incharge_mobile`, `hospital_incharge_phone`, `hospital_incharge_email`, `owner_name`, `generalBeds`, `dayCareBeds`, `icuBeds`, `iccuBeds`, `hduBeds`, `majorOts`, `minorOts`, `hospitalAddress`, `latitude`, `longitude`, `panNumber`, `clinicalRegistrationNumber`, `panCardHolderName`, `serviceTaxRegistrationNumber`, `branchAddress`, `bankAccountNumber`, `ifsc_code`, `payeeName`, `numberOfFullTimePhysicians`, `remarks`, `fullTimeConsultants`, `partTimeConsultants`, `visitingConsultants`, `dutyDoctors`, `generalNurses`, `bank_name`, `pharmacy_type`, `state`, `district`, `location`, `hospital_type`, `nabh`) VALUES
(1, 'Aaa', 'Ss', 600002, 'Hi', '9876543210', '12345678123', 'hi@mail.com', 'Owner', 12, 13, 12, 12, 12, 12, 12, 'Nainiappa Street Chintadripet', 13.067439, 0, 'Ieips4833f', '2345678', 'Hjk', '12345678', 'Chintadripet', '1234567890', '34567890123', 'Swa', 12, 'No', 34, 23, 12, 34, 12, 'Sbi', 'pvt', 'Tamil Nadu', 'chennai', 'chennai', 'pvt', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_department`
--

CREATE TABLE `hospital_department` (
  `hospital_department_id` int(11) NOT NULL,
  `hospital_department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_facilities`
--

CREATE TABLE `hospital_facilities` (
  `hospital_facilities_id` int(11) NOT NULL,
  `facility_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_facilities_bridge`
--

CREATE TABLE `hospital_facilities_bridge` (
  `hospital_facilities_bridge_id` int(11) NOT NULL,
  `hospital_facility_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_admin`
--

CREATE TABLE `main_admin` (
  `main_admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `organisation_id` int(11) NOT NULL,
  `organisation_name` varchar(255) NOT NULL,
  `license` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `scheme_id` int(11) NOT NULL,
  `scheme_name` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `maximum_amount` int(11) NOT NULL,
  `guidelines` varchar(2000) NOT NULL,
  `type` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updation_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fund_allocated` bigint(20) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`scheme_id`, `scheme_name`, `description`, `maximum_amount`, `guidelines`, `type`, `creation_date`, `updation_date`, `fund_allocated`, `created_by`, `updated_by`, `file_url`) VALUES
(1, 'sss', 'ddd', 1123, 'ggfd', 'dee', '2018-03-22 09:33:28', '0000-00-00 00:00:00', 12345, '', '', 'c1916-download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `scheme_admin`
--

CREATE TABLE `scheme_admin` (
  `scheme_admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state_admin`
--

CREATE TABLE `state_admin` (
  `state_admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(43, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 13:32:45'),
(44, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 13:32:59'),
(45, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 13:35:28'),
(46, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 13:43:39'),
(47, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 13:44:35'),
(48, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 14:59:22'),
(49, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 20:21:20'),
(50, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 20:21:32'),
(51, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 20:27:34'),
(52, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 20:31:38'),
(53, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 22:15:49'),
(54, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 23:36:45'),
(55, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-21 23:46:18'),
(56, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 09:04:35'),
(57, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 09:05:28'),
(58, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 11:19:28'),
(59, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 11:27:18'),
(60, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 12:09:16'),
(61, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 13:11:08'),
(62, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 13:35:21'),
(63, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 13:35:48'),
(64, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 13:38:09'),
(65, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 14:07:23'),
(66, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 14:36:59'),
(67, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 19:06:07'),
(68, 13, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Swathy\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-22 19:14:02');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reset_password`
--

INSERT INTO `tbl_reset_password` (`id`, `email`, `activation_id`, `agent`, `client_ip`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(26, 'subhailams@gmail.com', 'yAw2cjZFvW7bIig', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-20 15:04:30', NULL, NULL),
(27, 'swarna.ilas@gmail.com', 'AtIuJ5nE1delzY0', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-21 04:37:16', NULL, NULL),
(28, 'swathy.sumithra@gmail.com', 'rLGQ238PBm5uSI9', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-21 06:17:33', NULL, NULL),
(29, 'swathy.sumithra@gmail.com', 'KGc96mD54xZQRyt', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-21 06:29:55', NULL, NULL),
(30, 'swathy.sumithra@gmail.com', 'Cjou2VQTWKpgSb0', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-21 06:31:22', NULL, NULL),
(31, 'swarna.ilas@gmail.com', '5cnmlKu24Tij06b', 'Chrome 64.0.3282.186', '::1', 0, 1, '2018-03-21 06:32:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'Administrator'),
(2, 'Organization'),
(3, 'Hospital');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(9, 'swarna.ilas@gmail.com', '$2y$10$INB2ji1pfQY1xXwIALSe6O7twr7764QPn9l.rJ4gDkMquKKufmsOy', 'Swarna Swapna', '7708446162', 1, 0, 1, '2018-03-20 07:41:17', 9, '2018-03-20 18:58:16'),
(13, 'swathy.sumithra@gmail.com', '$2y$10$plYt7LWB3xxCzM1XMQcIYeWBqaN01DzPIX05447jyh545GG027moe', 'Swathy', '7896441234', 3, 0, 9, '2018-03-20 19:08:06', 9, '2018-03-21 06:43:53'),
(14, 'xxx@gmail.com', '$2y$10$6.JCk7s7BRcemPlu395g1.geCGtT9r/9CQS.ToQtAQBVdayadMLMS', '', '9876543210', 3, 0, 0, '2018-03-21 15:57:18', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_details`
--
ALTER TABLE `application_details`
  ADD PRIMARY KEY (`application_details_id`),
  ADD KEY `scheme_id` (`scheme_id`),
  ADD KEY `district_admin_id` (`district_admin_id`),
  ADD KEY `state_admin_id` (`state_admin_id`),
  ADD KEY `organisation_id` (`organisation_id`),
  ADD KEY `hospital_department_id` (`hospital_department_id`);

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
-- Indexes for table `district_admin`
--
ALTER TABLE `district_admin`
  ADD PRIMARY KEY (`district_admin_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `empanelment_request`
--
ALTER TABLE `empanelment_request`
  ADD PRIMARY KEY (`empanelment_request_id`),
  ADD KEY `organisation_id` (`organisation_id`),
  ADD KEY `scheme_id` (`scheme_id`),
  ADD KEY `hospital_id` (`hospital_id`);

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
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `hospital_department`
--
ALTER TABLE `hospital_department`
  ADD PRIMARY KEY (`hospital_department_id`);

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
-- Indexes for table `main_admin`
--
ALTER TABLE `main_admin`
  ADD PRIMARY KEY (`main_admin_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`organisation_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`scheme_id`);

--
-- Indexes for table `scheme_admin`
--
ALTER TABLE `scheme_admin`
  ADD PRIMARY KEY (`scheme_admin_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `scheme_id` (`scheme_id`);

--
-- Indexes for table `state_admin`
--
ALTER TABLE `state_admin`
  ADD PRIMARY KEY (`state_admin_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

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
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_details`
--
ALTER TABLE `application_details`
  MODIFY `application_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disease_coverage`
--
ALTER TABLE `disease_coverage`
  MODIFY `disease_coverage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district_admin`
--
ALTER TABLE `district_admin`
  MODIFY `district_admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empanelment_request`
--
ALTER TABLE `empanelment_request`
  MODIFY `empanelment_request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `fund_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital_department`
--
ALTER TABLE `hospital_department`
  MODIFY `hospital_department_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `main_admin`
--
ALTER TABLE `main_admin`
  MODIFY `main_admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `organisation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `scheme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scheme_admin`
--
ALTER TABLE `scheme_admin`
  MODIFY `scheme_admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state_admin`
--
ALTER TABLE `state_admin`
  MODIFY `state_admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_details`
--
ALTER TABLE `application_details`
  ADD CONSTRAINT `application_details_ibfk_1` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`),
  ADD CONSTRAINT `application_details_ibfk_2` FOREIGN KEY (`district_admin_id`) REFERENCES `district_admin` (`district_admin_id`),
  ADD CONSTRAINT `application_details_ibfk_3` FOREIGN KEY (`state_admin_id`) REFERENCES `state_admin` (`state_admin_id`),
  ADD CONSTRAINT `application_details_ibfk_4` FOREIGN KEY (`organisation_id`) REFERENCES `organisation` (`organisation_id`),
  ADD CONSTRAINT `application_details_ibfk_5` FOREIGN KEY (`hospital_department_id`) REFERENCES `hospital_department` (`hospital_department_id`);

--
-- Constraints for table `disease_coverage`
--
ALTER TABLE `disease_coverage`
  ADD CONSTRAINT `disease_coverage_ibfk_1` FOREIGN KEY (`disease_id`) REFERENCES `disease` (`disease_id`),
  ADD CONSTRAINT `disease_coverage_ibfk_2` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`);

--
-- Constraints for table `empanelment_request`
--
ALTER TABLE `empanelment_request`
  ADD CONSTRAINT `empanelment_request_ibfk_1` FOREIGN KEY (`organisation_id`) REFERENCES `organisation` (`organisation_id`),
  ADD CONSTRAINT `empanelment_request_ibfk_2` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`),
  ADD CONSTRAINT `empanelment_request_ibfk_3` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

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

--
-- Constraints for table `scheme_admin`
--
ALTER TABLE `scheme_admin`
  ADD CONSTRAINT `scheme_admin_ibfk_2` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
