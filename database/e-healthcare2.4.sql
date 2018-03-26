-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 26, 2018 at 06:25 AM
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
  `hospital_id` int(11) NOT NULL,
  `patientName` varchar(255) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `amount_credited` int(11) DEFAULT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application_details`
--

INSERT INTO `application_details` (`application_details_id`, `application_reference`, `status`, `scheme_id`, `status_message`, `hospital_id`, `patientName`, `disease_id`, `amount_credited`, `district_id`) VALUES
(7, 'sdaf', 'approved', 5, 'credied', 9, 'yuva', 2, 200000, 1),
(8, 'afgj3', 'approved', 5, 'proceeded', 9, 'aasif', 4, 35723, 19);

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
(2, 'heart surgery'),
(3, 'cancer'),
(4, 'eye surgery'),
(5, 'tb treatment');

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
(3, 1, 4),
(4, 2, 4),
(5, 3, 4),
(6, 5, 5),
(7, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`) VALUES
(1, 'Amritsar'),
(2, 'Barnala'),
(3, 'Bathinda'),
(4, 'Fazilka'),
(5, 'Faridkot'),
(6, 'Fatehgarh Sahib'),
(7, 'Firozpur'),
(8, 'Gurdaspur'),
(9, 'Hoshiarpur'),
(10, 'Jalandhar'),
(11, 'Kapurthala'),
(12, 'Ludhiana'),
(13, 'Mansa'),
(14, 'Moga'),
(15, 'Mohali'),
(16, 'Muktsar'),
(17, 'Pathankot'),
(18, 'Patiala'),
(19, 'Rupnagar'),
(20, 'Sangrur'),
(21, 'Shahid Bhagat Singh Nagar'),
(22, 'Tarn Taran');

-- --------------------------------------------------------

--
-- Table structure for table `district_admin`
--

CREATE TABLE `district_admin` (
  `district_admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district_admin`
--

INSERT INTO `district_admin` (`district_admin_id`, `user_id`, `district_id`) VALUES
(2, 27, 1),
(3, 28, 19);

-- --------------------------------------------------------

--
-- Table structure for table `eligible_criteria`
--

CREATE TABLE `eligible_criteria` (
  `eligible_criteria_id` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eligible_criteria`
--

INSERT INTO `eligible_criteria` (`eligible_criteria_id`, `criteria`) VALUES
(1, 'Below Poverty Line'),
(2, 'Senior Citizenship'),
(3, 'All'),
(4, 'Children');

-- --------------------------------------------------------

--
-- Table structure for table `eligible_criteria_bridge`
--

CREATE TABLE `eligible_criteria_bridge` (
  `eligible_criteria_bridge_id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `eligible_criteria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eligible_criteria_bridge`
--

INSERT INTO `eligible_criteria_bridge` (`eligible_criteria_bridge_id`, `scheme_id`, `eligible_criteria_id`) VALUES
(1, 4, 2),
(2, 4, 4),
(3, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `empanelment_request`
--

CREATE TABLE `empanelment_request` (
  `empanelment_request_id` int(11) NOT NULL,
  `organisation_id` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `documents` varchar(255) NOT NULL,
  `status_message` varchar(255) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `stateAdmin_id` int(11) DEFAULT NULL,
  `stateAdmin_comments` varchar(255) DEFAULT NULL,
  `stateAdmin_status` varchar(255) DEFAULT NULL,
  `stateAdmin_updatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `districtAdmin_id` int(11) DEFAULT NULL,
  `districtAdmin_comments` varchar(255) DEFAULT NULL,
  `districtAdmin_status` varchar(255) DEFAULT NULL,
  `districtAdmin_updatedAt` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `empanelment_request`
--

INSERT INTO `empanelment_request` (`empanelment_request_id`, `organisation_id`, `status`, `scheme_id`, `documents`, `status_message`, `hospital_id`, `stateAdmin_id`, `stateAdmin_comments`, `stateAdmin_status`, `stateAdmin_updatedAt`, `districtAdmin_id`, `districtAdmin_comments`, `districtAdmin_status`, `districtAdmin_updatedAt`, `created_at`) VALUES
(3, NULL, 'State approved', 4, 'file1', 'Have to proceed my state Admin', 9, NULL, NULL, 'approved', '2018-03-26 06:21:35', 27, 'approved. all documents are verified', 'approved', '2018-03-25 18:43:12', '2018-03-26 00:44:12'),
(4, NULL, 'approved', 5, 'file2', 'all documents are verified', 9, 26, 'approved', 'Amount credited', '2018-03-25 18:36:00', 27, 'forwarded to state admin', 'approved', '2018-03-25 19:30:00', '0000-00-00 00:00:00'),
(5, 1, 'pending', 4, '', '', 16, NULL, NULL, NULL, '2018-03-26 06:11:22', NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'pending', 5, '', '', 16, NULL, NULL, NULL, '2018-03-26 06:12:13', NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `facilities_type`
--

CREATE TABLE `facilities_type` (
  `facilities_type_id` int(11) NOT NULL,
  `facility_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facilities_type`
--

INSERT INTO `facilities_type` (`facilities_type_id`, `facility_type`) VALUES
(1, '\r\nMedical Specialties'),
(2, 'Surgical Specialties'),
(3, 'Medical Super Specialties'),
(4, 'Surgical Super Specialties'),
(5, 'Emergency'),
(6, 'Support Services\r\n'),
(7, 'Infrastructure & Support\r\n'),
(8, 'Standards on Basic Services');

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
(9, 'Apollo Nursing Home', 'Apollo', 600099, 'Swathy', '9840595496', NULL, 'swathy.sumithra@gmail.com', 'Edwin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Akn Nursing Home', NULL, NULL, 'Yuvarani', NULL, NULL, 'yuvaammu3@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_facilities`
--

CREATE TABLE `hospital_facilities` (
  `hospital_facilities_id` int(11) NOT NULL,
  `facility_type` varchar(255) NOT NULL,
  `facility_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital_facilities`
--

INSERT INTO `hospital_facilities` (`hospital_facilities_id`, `facility_type`, `facility_type_id`) VALUES
(1, 'Anesthesiology', 1),
(2, 'Aviation Medicine', 1),
(3, 'Community medicine', 1),
(4, 'Dermatology, Vernology and leprosy', 1),
(5, 'Family medicine', 1),
(6, 'General Medicine', 1),
(7, 'Geriatrics', 1),
(8, 'Immuno Hematology and Blood transfusion.', 1),
(9, 'Nuclear medine', 1),
(10, 'Pediatrics', 1),
(11, 'Physical Medicine and Rehabilitation', 1),
(12, 'Psychiatry', 1),
(13, 'Radio Diagnosis', 1),
(14, 'Rheumatology', 1),
(15, 'Sports Medicine', 1),
(16, 'Tropical Medicine', 1),
(17, 'Tuberculosis and Respiratory medicine or pulmonary medicine\r\n', 1),
(18, 'Otorhinolaryngology', 2),
(19, 'General Surgery', 2),
(20, 'Ophthalmology', 2),
(21, 'Orthopedics', 2),
(22, 'Obstetrics and Gynecology', 2),
(23, 'Cardiology', 3),
(24, 'Clinical Hematology', 3),
(25, 'Clinical Pharmacology', 3),
(26, 'Endocrinology', 0),
(27, 'Medical Gastroenterology', 0),
(28, 'Medical Genetics', 0),
(29, 'Medical Oncology', 0),
(30, 'Neonatology', 0),
(31, 'Nephrology', 0),
(32, 'Neurology', 0),
(33, 'Neuro Radiology\r\n', 0),
(34, 'Endocrinology', 3),
(35, 'Medical Gastroenterology', 3),
(36, 'Medical Genetics', 3),
(37, 'Medical Oncology', 3),
(38, 'Neonatology', 3),
(39, 'Nephrology', 3),
(40, 'Neurology', 3),
(41, 'Neuro Radiology', 3),
(42, 'Cardiovascular Thoracic surgery', 4),
(43, 'Urology', 4),
(44, 'Neuro surgery', 4),
(45, 'Pediatric surgery', 4),
(46, 'Plastic and reconstructive surgery', 4),
(47, 'Surgical gastroenterology', 4),
(48, 'Surgical oncology', 4),
(49, 'Endocrine surgery\r\n', 4),
(50, 'Gynecological oncology', 4),
(51, 'Vascular surgery', 4),
(52, 'Emergency room/casuality/Minor OT', 5),
(53, '24 hr ambulance', 5),
(54, 'Burns unit', 5),
(55, 'Blood bank', 5),
(56, 'Blood bank', 5),
(57, 'Reception and billing', 6),
(58, 'Laboratory', 6),
(59, 'Imaging', 6),
(60, 'Pharmacy', 6),
(61, 'Sterilisation/ CSSD', 6),
(62, 'Laundry', 6),
(63, 'Medical gases and manifold room\r\n', 6),
(64, 'Power back up', 7),
(65, 'Kitchen service', 7),
(66, 'Air condition system', 7),
(67, 'Waste disposal system', 7),
(68, 'Basic signages', 7),
(69, 'Waiting area with public utilities and safe drinking water', 7),
(70, 'Legal /Statutory requirments\r\n', 7),
(71, 'Registration of patients', 8),
(72, 'Assessment of patients', 8),
(73, 'Infection control practices including use of Disinfectants and hand washing', 8),
(74, 'Patient safety practices', 8),
(75, 'Safety consideration', 8),
(76, 'Patient information and education', 8),
(77, 'Grievance registration and disposal mechanism', 8),
(78, 'Discharge', 8);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_facilities_bridge`
--

CREATE TABLE `hospital_facilities_bridge` (
  `hospital_facilities_bridge_id` int(11) NOT NULL,
  `hospital_facility_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital_facilities_bridge`
--

INSERT INTO `hospital_facilities_bridge` (`hospital_facilities_bridge_id`, `hospital_facility_id`, `hospital_id`) VALUES
(1, 8, 9),
(2, 23, 9);

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

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`organisation_id`, `organisation_name`, `license`, `user_id`) VALUES
(1, 'dfadf', 'sdaf2', 2);

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
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updation_date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `fund_allocated` bigint(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `requiredFile_url1` varchar(255) DEFAULT NULL,
  `requiredFile_url2` varchar(255) DEFAULT NULL,
  `requiredFile_url3` varchar(255) DEFAULT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`scheme_id`, `scheme_name`, `description`, `maximum_amount`, `creation_date`, `updation_date`, `fund_allocated`, `created_by`, `updated_by`, `requiredFile_url1`, `requiredFile_url2`, `requiredFile_url3`, `type_id`) VALUES
(4, 'RSBY', 'For All Disease', 23333, '2018-03-26 04:56:16', '0000-00-00 00:00:00', 2338768369, 24, 24, NULL, NULL, NULL, 1),
(5, 'ESIC', 'Primary to super Specialist', 456735, '2018-03-26 04:57:06', '0000-00-00 00:00:00', 423627823, 24, 24, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `scheme_type`
--

CREATE TABLE `scheme_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scheme_type`
--

INSERT INTO `scheme_type` (`type_id`, `type_name`) VALUES
(1, 'General Insurance'),
(2, 'Employee Insurance'),
(3, 'Senior Citizenship Insurance'),
(4, 'Children Healthcare');

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
(66, 21, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Maya Nursing Home\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 18:58:05'),
(67, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 20:59:33'),
(68, 22, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Akn Nursing Home\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-22 22:30:31'),
(69, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 08:47:47'),
(70, 9, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\",\"email\":\"swarna.ilas@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 11:05:37'),
(71, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\",\"email\":\"yuvaammu3@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 11:12:35'),
(72, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\",\"email\":\"yuvaammu3@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 13:44:49'),
(73, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\",\"email\":\"yuvaammu3@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 14:32:59'),
(74, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\",\"email\":\"yuvaammu3@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-23 18:04:15'),
(75, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\",\"email\":\"yuvaammu3@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-24 09:55:46'),
(76, 14, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\",\"email\":\"yuvaammu3@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-25 12:32:09'),
(77, 23, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"Swarna Swapna\",\"email\":\"swarna.ilas@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-26 11:04:45'),
(78, 31, '{\"role\":\"3\",\"roleText\":\"Hospital\",\"name\":\"Yuvarani\",\"email\":\"yuvaammu3@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-26 11:35:57'),
(79, 26, '{\"role\":\"5\",\"roleText\":\"DistrictAdmin\",\"name\":\"Dhilip\",\"email\":\"district1@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-26 11:44:13'),
(80, 24, '{\"role\":\"4\",\"roleText\":\"StateAdmin\",\"name\":\"Shylajhaa\",\"email\":\"rsshylu@gmail.com\"}', '127.0.0.1', 'Chrome 65.0.3325.181', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'Windows 7', '2018-03-26 11:45:50');

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
  `roleId` int(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'Administrator'),
(2, 'Organization'),
(3, 'Hospital'),
(4, 'StateAdmin'),
(5, 'DistrictAdmin'),
(6, 'SchemeAdmin');

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
  `roleId` int(11) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) DEFAULT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(23, 'swarna.ilas@gmail.com', '$2y$10$INB2ji1pfQY1xXwIALSe6O7twr7764QPn9l.rJ4gDkMquKKufmsOy', 'Swarna Swapna', '7708446162', 1, 0, NULL, '2018-03-04 00:00:00', NULL, NULL),
(24, 'rsshylu@gmail.com', '$2y$10$zLvz6UisssCSnOhkNjenUu59wRLSSmcCJG4MtM1FSf3az2n3jk7zG', 'Shylajhaa', '9003298594', 4, 0, 23, '2018-03-26 05:37:30', NULL, NULL),
(25, 'swathy.sumithra@gmail.com', '$2y$10$hQRa7Msrl5uWRAVBDFs.C.B8Xv9HBKPnX3NL6T0dT3LWzDeEEdbG.', 'Swathy', '9884133946', 3, 0, 23, '2018-03-26 05:38:23', NULL, NULL),
(26, 'district1@gmail.com', '$2y$10$bR3wuAxi/jBhRQThlhikr..rVqBjDqFtK0dpK.GbvpfjOD9HNYQH.', 'Dhilip', '9551543211', 5, 0, 23, '2018-03-26 05:39:27', NULL, NULL),
(27, 'district2@gmail.com', '$2y$10$QmjCphutR90O4YRY69yyN.zkWJrvdqi3Wr3tyjMaOAZ3Bwq2wXq1.', 'Rajesh', '9600054034', 5, 0, 23, '2018-03-26 05:40:05', NULL, NULL),
(31, 'yuvaammu3@gmail.com', '$2y$10$HUEbj35XeRHBpBnIjLMGLei2MotCYBCyZudMC0VqW09znNb9UkANW', 'Yuvarani', '9840595496', 3, 0, NULL, '2018-03-26 06:05:38', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_details`
--
ALTER TABLE `application_details`
  ADD PRIMARY KEY (`application_details_id`),
  ADD KEY `scheme_id` (`scheme_id`),
  ADD KEY `hospital_id` (`hospital_id`),
  ADD KEY `disease_id` (`disease_id`),
  ADD KEY `district_id` (`district_id`);

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
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `district_admin`
--
ALTER TABLE `district_admin`
  ADD PRIMARY KEY (`district_admin_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `district_id` (`district_id`);

--
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
-- Indexes for table `facilities_type`
--
ALTER TABLE `facilities_type`
  ADD PRIMARY KEY (`facilities_type_id`);

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
  ADD PRIMARY KEY (`hospital_facilities_id`),
  ADD KEY `facility_type_id` (`facility_type_id`);

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
  ADD PRIMARY KEY (`scheme_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `scheme_type`
--
ALTER TABLE `scheme_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `state_admin`
--
ALTER TABLE `state_admin`
  ADD PRIMARY KEY (`state_admin_id`),
  ADD KEY `user_id` (`user_id`);

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
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `roleId` (`roleId`),
  ADD KEY `createdBy` (`createdBy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_details`
--
ALTER TABLE `application_details`
  MODIFY `application_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `disease_coverage`
--
ALTER TABLE `disease_coverage`
  MODIFY `disease_coverage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `district_admin`
--
ALTER TABLE `district_admin`
  MODIFY `district_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `eligible_criteria`
--
ALTER TABLE `eligible_criteria`
  MODIFY `eligible_criteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `eligible_criteria_bridge`
--
ALTER TABLE `eligible_criteria_bridge`
  MODIFY `eligible_criteria_bridge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `empanelment_request`
--
ALTER TABLE `empanelment_request`
  MODIFY `empanelment_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `facilities_type`
--
ALTER TABLE `facilities_type`
  MODIFY `facilities_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `fund_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `hospital_facilities`
--
ALTER TABLE `hospital_facilities`
  MODIFY `hospital_facilities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `hospital_facilities_bridge`
--
ALTER TABLE `hospital_facilities_bridge`
  MODIFY `hospital_facilities_bridge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `organisation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `programme_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `scheme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `scheme_type`
--
ALTER TABLE `scheme_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `state_admin`
--
ALTER TABLE `state_admin`
  MODIFY `state_admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` int(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_details`
--
ALTER TABLE `application_details`
  ADD CONSTRAINT `application_details_ibfk_1` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`),
  ADD CONSTRAINT `application_details_ibfk_2` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`),
  ADD CONSTRAINT `application_details_ibfk_3` FOREIGN KEY (`disease_id`) REFERENCES `disease` (`disease_id`),
  ADD CONSTRAINT `application_details_ibfk_4` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`);

--
-- Constraints for table `disease_coverage`
--
ALTER TABLE `disease_coverage`
  ADD CONSTRAINT `disease_coverage_ibfk_1` FOREIGN KEY (`disease_id`) REFERENCES `disease` (`disease_id`),
  ADD CONSTRAINT `disease_coverage_ibfk_2` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`);

--
-- Constraints for table `district_admin`
--
ALTER TABLE `district_admin`
  ADD CONSTRAINT `district_admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`userId`),
  ADD CONSTRAINT `district_admin_ibfk_2` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`);

--
-- Constraints for table `eligible_criteria_bridge`
--
ALTER TABLE `eligible_criteria_bridge`
  ADD CONSTRAINT `eligible_criteria_bridge_ibfk_1` FOREIGN KEY (`scheme_id`) REFERENCES `scheme` (`scheme_id`),
  ADD CONSTRAINT `eligible_criteria_bridge_ibfk_2` FOREIGN KEY (`eligible_criteria_id`) REFERENCES `eligible_criteria` (`eligible_criteria_id`);

--
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
-- Constraints for table `hospital_facilities`
--
ALTER TABLE `hospital_facilities`
  ADD CONSTRAINT `hospital_facilities_ibfk_1` FOREIGN KEY (`facility_type_id`) REFERENCES `facilities_type` (`facilities_type_id`);

--
-- Constraints for table `hospital_facilities_bridge`
--
ALTER TABLE `hospital_facilities_bridge`
  ADD CONSTRAINT `hospital_facilities_bridge_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`),
  ADD CONSTRAINT `hospital_facilities_bridge_ibfk_2` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`),
  ADD CONSTRAINT `hospital_facilities_bridge_ibfk_3` FOREIGN KEY (`hospital_facility_id`) REFERENCES `hospital_facilities` (`hospital_facilities_id`);

--
-- Constraints for table `scheme`
--
ALTER TABLE `scheme`
  ADD CONSTRAINT `scheme_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `scheme_type` (`type_id`),
  ADD CONSTRAINT `scheme_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`userId`),
  ADD CONSTRAINT `scheme_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`userId`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `tbl_roles` (`roleId`),
  ADD CONSTRAINT `tbl_users_ibfk_2` FOREIGN KEY (`createdBy`) REFERENCES `tbl_users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
