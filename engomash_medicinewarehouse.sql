-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2021 at 11:08 AM
-- Server version: 5.7.32-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engomash_medicinewarehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `branch_address` varchar(100) NOT NULL,
  `branch_contact` varchar(50) NOT NULL,
  `skin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `branch_address`, `branch_contact`, `skin`) VALUES
(1, 'Administration Center', 'Kampala,Uganda', '0788042999', 'red'),
(5, 'URC/RHITES-N Acholi', 'University Research Co., LLC USAID RHITES-N, Acholi Activity Plot 2 Elizabeth Road, Gulu, Uganda', 'Plot 2, Elizabeth Road Gulu- Uganda', 'green'),
(6, 'Supervisor', 'University Research Co., LLC USAID RHITES-N, Acholi Activity Plot 2 Elizabeth Road, Gulu, Uganda', 'Plot 2, Elizabeth Road Gulu- Uganda', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_code` varchar(255) NOT NULL,
  `unitsperpack` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_code`, `unitsperpack`) VALUES
(13, 'Adrenaline Inj. 1 mg ', 'ITM0001', 1),
(14, 'Airway Guedel size 4', 'ITM0002', 1),
(15, 'Airways Guedel Size 2', 'ITM0003', 1),
(16, 'Airways Guedel Size 3', 'ITM0004', 1),
(17, 'Ambu Bag Adult', 'ITM0005', 1),
(18, 'Ambu bag pediatric', 'ITM0006', 1),
(19, 'Apron Plastified heavy duty\r\n', 'ITM0007', 1),
(20, 'Adhesive plaster', 'ITM0008', 1),
(21, 'Atropine Inj', 'ITM0014', 1),
(22, 'SD Bioline HIV Test Kit', 'ITM0015', 25),
(23, 'Plastic Buckets', 'ITM0016', 1),
(24, 'Bupivacaine Inj. 0.5%', 'ITM0017', 5),
(25, 'Cannula 22G Blue', 'ITM0018', 1),
(26, 'Cannula G24 Yellow', 'ITM0019', 1),
(27, 'Cannula G18 Green', 'ITM0020', 1),
(28, 'Circumcision Beds', 'ITM0021', 1),
(29, 'Condoms', 'ITM0022', 1),
(30, 'Copper T380 Intrauterine Devic', 'ITM0023', 25),
(31, 'Cotton Wool 500G', 'ITM0024', 1),
(32, 'Crepe Bandage', 'ITM0025', 1),
(33, 'Delivery set', 'ITM0026', 1),
(34, 'Liquid Soap 20L', 'ITM0027', 1),
(35, 'Liquid Soap 5L', 'ITM0028', 1),
(36, 'Determine HIV Test Kit', 'ITM0029', 100),
(37, 'Digital BP Machine', 'ITM0030', 1),
(38, 'Digital fingertip pulse oximet', 'ITM0031', 1),
(39, 'Ethanol 95% - 20L', 'ITM0032', 1),
(40, 'Ethanol 95% - 5L', 'ITM0033', 1),
(41, 'Examination Gloves', 'ITM0034', 100),
(42, 'Blood Glucose Test Strips', 'ITM0035', 1),
(43, 'Implanon NXT (etonogestrel 68m', 'ITM0036', 1),
(44, 'INH 100mg Tablets', 'ITM0037', 100),
(45, 'INH 300mg Tablets', 'ITM0038', 672),
(46, 'Instrument Trolley', 'ITM0039', 1),
(47, 'Jadelle Implants (2 x75mg  lev', 'ITM0040', 0),
(48, 'Sodium hypochlorite - (Jik) 5L', 'ITM0041', 1),
(49, 'Lignocaine Inj. 20mg/ml ', 'ITM0042', 10),
(50, 'MAUC TAPES (6-10 YRS)', 'ITM0043', 50),
(51, 'MAUC TAPES (6-59 mth)\r\n', 'ITM0044', 50),
(52, 'MAUC TAPES 10-15 YRS\r\n', 'ITM0045', 50),
(53, 'MAUC TAPES 15-18 YRS\r\n', 'ITM0046', 50),
(54, 'MAUC TAPES 18 YRS AND ABOVE', 'ITM0047', 50),
(55, 'Waste Bin 15 Litres', 'ITM0048', 1),
(56, 'Waste Bins Plastic 240L', 'ITM0049', 1),
(57, 'Mosquito nets', 'ITM0050', 40),
(58, 'N95 respirator mask', 'ITM0051', 1),
(59, 'Neonatal New born simulator', 'ITM0052', 1),
(60, 'Search Results\r\nWeb results\r\n\r', 'ITM0053', 30),
(61, 'Nosal Oxgyen Cannula Twin 200c', 'ITM0054', 1),
(62, 'Nosal Oxygen Cannula twin 160 ', 'ITM0055', 1),
(63, 'Nosal Oxygen Set', 'ITM0056', 1),
(64, 'Detergent Washing Power (Omo)', 'ITM0057', 1),
(65, 'Combined Oral Pill (Microgynon', 'ITM0058', 100),
(66, 'Oraquick HIV test kits (self-t', 'ITM0059', 1),
(67, 'Oxygen Cylinder Medical', 'ITM0060', 1),
(68, 'Oxygen Masks', 'ITM0061', 1),
(69, 'Under Pants', 'ITM0062', 1),
(70, 'Paracetamol 500mg Tablets', 'ITM0063', 1000),
(71, 'Portable Theatre Lights', 'ITM0064', 1),
(72, 'Povidone Iodine 10% - 1L', 'ITM0065', 1),
(73, 'Povidone Iodine 10% - 200ml', 'ITM0066', 1),
(74, 'Pyridoxine 25mg Tablet', 'ITM0067', 1),
(75, 'Pyridoxine 50mg Tablet', 'ITM0068', 1),
(76, 'Safety Boxes for syringe dispo', 'ITM0069', 1),
(77, 'Sayana Press (Injectable Contr', 'ITM0070', 1),
(78, 'HIV 1/2 STAT-PA Assay', 'ITM0071', 30),
(79, 'Stethescope (litman type)', 'ITM0072', 1),
(80, 'Suture Surgical 3-0', 'ITM0073', 1),
(81, 'Theatre Gowns', 'ITM0074', 1),
(82, 'Theatre Shoes', 'ITM0075', 1),
(83, 'Theatre slippers', 'ITM0076', 1),
(84, 'Toilet Papers', 'ITM0077', 1),
(85, 'T-Shirt', 'ITM0078', 1),
(86, 'VMMC Kit (Disposable)', 'ITM0079', 1),
(87, 'Ward screen (3 Fold)', 'ITM0080', 1),
(88, 'Weighing Scales (Slater Paed)', 'ITM0081', 1),
(89, 'Weighing Scales Paediatric', 'ITM0082', 1),
(90, 'Weighing Scales - Telescope', 'ITM0083', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_first` varchar(50) NOT NULL,
  `cust_last` varchar(30) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_contact` varchar(30) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `cust_pic` varchar(300) NOT NULL,
  `bday` date NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `house_status` varchar(30) NOT NULL,
  `years` varchar(20) NOT NULL,
  `rent` varchar(10) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_no` varchar(30) NOT NULL,
  `emp_address` varchar(100) NOT NULL,
  `emp_year` varchar(10) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `spouse` varchar(30) NOT NULL,
  `spouse_no` varchar(30) NOT NULL,
  `spouse_emp` varchar(50) NOT NULL,
  `spouse_details` varchar(100) NOT NULL,
  `spouse_income` decimal(10,2) NOT NULL,
  `comaker` varchar(30) NOT NULL,
  `comaker_details` varchar(100) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `credit_status` varchar(10) NOT NULL,
  `ci_remarks` varchar(1000) NOT NULL,
  `ci_name` varchar(50) NOT NULL,
  `ci_date` date NOT NULL,
  `payslip` int(11) NOT NULL,
  `valid_id` int(11) NOT NULL,
  `cert` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_first`, `cust_last`, `cust_address`, `cust_contact`, `balance`, `cust_pic`, `bday`, `nickname`, `house_status`, `years`, `rent`, `emp_name`, `emp_no`, `emp_address`, `emp_year`, `occupation`, `salary`, `spouse`, `spouse_no`, `spouse_emp`, `spouse_details`, `spouse_income`, `comaker`, `comaker_details`, `branch_id`, `credit_status`, `ci_remarks`, `ci_name`, `ci_date`, `payslip`, `valid_id`, `cert`, `cedula`, `income`) VALUES
(3, 'Kirabo', 'Nwoya URC District Offices', 'Anaka', '0782495392', 0.00, 'default.gif', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(5, '', 'Kitgum URC District Offices', 'Kitgum', '07782799429', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(6, '', 'Gulu URC District Offices', 'Gulu Office', '0772355436', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(7, '', 'Family Health', 'Lwani House - Gulu', '0754296416', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(8, '', 'Lamwo URC District Offices', 'Padibe', '0777263397', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(9, '', 'Amuru URC District Offices', 'Bibia', '0782013688', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(10, '', 'Laboratory services - HSS', 'Lwani House - Gulu', '0703965228', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(11, '', 'Agago URC District Offices', 'Patongo', '0782532426', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(12, '', 'Pader URC District Offices', 'Pader', '0772976812', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(13, '', 'Nutrition, WASH', 'Lwani House - Gulu', '0772841153', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(14, '', 'HIV Prevention, Dreams, ', 'Lwani House - Gulu', '0774011348', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(15, '', 'Omoro URC District Offices', 'Lalogi', '0774756822', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(16, '', 'Community Services - HSS', 'Lwani House - Gulu', '0774063791', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(17, '', 'Malaria Support Services', 'Lwani House - Gulu', '0772365986 ', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(18, '', 'TB Support Services', 'Lwani House - Gulu', '0772359207', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(19, '', 'VMMC Support Services', 'Lwani House - Gulu', '0776320614', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(20, '', 'Family Planning', 'Lwani House - Gulu', '0776320614', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(21, '', 'Awach HCIV', 'Gulu District', 'Boniface', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(22, '', 'TASO - Gulu Center', 'Gulu District', 'Boniface', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(23, '', 'Lalogi HCIV', 'Omoro District', 'Jennifer O', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(24, '', 'Bobi HCIII', 'Omoro District', 'Jennifer O', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(25, '', 'Layibi Teco HCIII', 'Gulu District', 'Boniface', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(26, '', 'Anaka General Hospital', 'Nwoya District', 'Eunice', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(27, '', 'Koch Goma HCIII', 'Nwoya District', 'Eunice', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(28, '', 'Alero HCIII', 'Nwoya', 'Eunice', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(29, '', 'Atiak HCIV', 'Amuru District', 'Samuel O', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(30, '', 'Kitgum General Hospital', 'Kitgum District', 'Richard J', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(31, '', 'St.Joseph Hospital Kitgum', 'Kitgum District', 'Richard J', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(32, '', 'Namokora HCIV', 'Kitgum District', 'Richard J', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(33, '', 'Padibe HCIV', 'Lamwo District', 'Raphael Obura', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(34, '', 'Madi-Opei HCIV', 'Lamwo District', 'Raphael Obura', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(35, '', 'Pajule HCIV', 'Pader District', 'Bob Malley', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(36, '', 'Dr.Ambrosali Memmorial Hospita', 'Agago District', 'Nelson', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(37, '', 'Patongo HCIII', 'Agago District', 'Nelson O', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(38, '', 'Gulu Regional Referral Hosp.', 'Gulu District', 'Boniface', 0.00, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', 5, '', '', '', '0000-00-00', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `user_id`, `action`, `date`) VALUES
(80, 8, 'has logged in the system at ', '2020-08-19 17:35:23'),
(81, 8, 'has logged in the system at ', '2020-08-31 17:47:48'),
(82, 8, 'has logged out the system at ', '2020-08-31 18:06:36'),
(83, 8, 'has logged in the system at ', '2020-08-31 18:07:19'),
(84, 8, 'has logged in the system at ', '2020-08-31 19:16:44'),
(85, 8, 'has logged in the system at ', '2020-09-04 14:14:38'),
(86, 8, 'has logged in the system at ', '2020-09-10 20:30:00'),
(87, 8, 'has logged in the system at ', '2020-09-11 03:10:03'),
(88, 8, 'has logged in the system at ', '2020-09-15 23:20:54'),
(89, 8, 'has logged in the system at ', '2020-09-24 22:51:21'),
(90, 8, 'has logged in the system at ', '2020-10-02 03:14:39'),
(91, 8, 'has logged in the system at ', '2020-10-02 03:16:43'),
(92, 8, 'has logged in the system at ', '2020-10-20 01:16:30'),
(93, 8, 'has logged in the system at ', '2021-02-02 14:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `payment_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `payment_for` date NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `interest` decimal(10,2) NOT NULL,
  `remaining` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `rebate` decimal(10,2) NOT NULL,
  `or_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `cust_id`, `sales_id`, `payment`, `payment_date`, `user_id`, `branch_id`, `payment_for`, `due`, `interest`, `remaining`, `status`, `rebate`, `or_no`) VALUES
(3211, 38, 58, 150.00, '2020-08-31 18:05:16', 8, 5, '2020-08-31', 150.00, 0.00, 0.00, 'paid', 0.00, 1901),
(3212, 22, 59, 30.00, '2020-08-31 18:13:45', 8, 5, '2020-08-31', 30.00, 0.00, 0.00, 'paid', 0.00, 1902),
(3213, 38, 60, 150.00, '2020-08-31 18:52:28', 8, 5, '2020-08-31', 150.00, 0.00, 0.00, 'paid', 0.00, 1903),
(3214, 29, 61, 2.00, '2020-08-31 19:43:46', 8, 5, '2020-08-31', 2.00, 0.00, 0.00, 'paid', 0.00, 1904),
(3215, 9, 62, 15.00, '2020-09-10 20:32:12', 8, 5, '2020-09-10', 15.00, 0.00, 0.00, 'paid', 0.00, 1905),
(3216, 5, 63, 1.00, '2020-09-24 23:01:02', 8, 5, '2020-09-24', 1.00, 0.00, 0.00, 'paid', 0.00, 1906),
(3217, 9, 64, 150.00, '2020-09-24 23:04:52', 8, 5, '2020-09-24', 150.00, 0.00, 0.00, 'paid', 0.00, 1907),
(3218, 11, 65, 3.00, '2020-10-20 01:21:07', 8, 5, '2020-10-20', 3.00, 0.00, 0.00, 'paid', 0.00, 1908);

-- --------------------------------------------------------

--
-- Table structure for table `procurement`
--

CREATE TABLE `procurement` (
  `user_id` int(25) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phonenumber` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `procurement`
--

INSERT INTO `procurement` (`user_id`, `username`, `email`, `phonenumber`, `password`, `name`, `status`, `branch_id`) VALUES
(2, 'miltonbtc', 'mdavid.trevor@gmail.com', '0772412259', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Dr.Milton Obote', 'active', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `expirydate` date NOT NULL,
  `prod_desc` varchar(500) NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `prod_pic` varchar(300) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `reorder` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `stockin_id` int(11) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `stockqty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `expirydate`, `prod_desc`, `prod_price`, `prod_pic`, `cat_id`, `prod_qty`, `branch_id`, `reorder`, `supplier_id`, `stockin_id`, `serial`, `stockqty`) VALUES
(52, 'v101', '2023-10-31', '', 15000.00, '', 86, 9490, 5, 0, 8, 33, '', 9500),
(53, 'B101', '2023-11-30', '', 1500.00, '', 24, 14900, 5, 0, 8, 33, '', 15000),
(54, 'B110', '2021-05-31', '', 2000.00, '', 24, 85, 5, 0, 10, 34, '', 100),
(55, 'LQ001', '2021-05-31', '', 20000.00, '', 34, 10, 5, 0, 10, 35, '', 50),
(56, 'TD100', '2021-04-30', '', 10000.00, '', 86, 1800, 5, 0, 8, 36, '', 2000),
(57, 'v101', '2023-10-31', '', 15000.00, '', 86, 1000, 5, 0, 10, 37, '', 1000),
(58, 'v101', '2023-10-31', '', 15000.00, '', 86, 0, 5, 0, 8, 38, '', 1000),
(59, 'VT2', '2024-05-31', '', 1000.00, '', 41, 1500, 5, 0, 9, 39, '', 1500),
(60, 'PCM11', '2023-12-31', '', 3000.00, '', 70, 0, 5, 0, 10, 40, '', 200),
(61, 'JK10', '2021-10-31', '', 15000.00, '', 48, 5, 5, 0, 10, 40, '', 15),
(62, 'AT1', '2021-10-31', '', 400.00, '', 13, 1, 5, 0, 10, 41, '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_request`
--

CREATE TABLE `purchase_request` (
  `pr_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `request_date` date NOT NULL,
  `branch_id` int(11) NOT NULL,
  `purchase_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestforquotation`
--

CREATE TABLE `requestforquotation` (
  `ItemID` int(60) NOT NULL,
  `Item` varchar(250) NOT NULL,
  `ItemSpecs` varchar(250) NOT NULL,
  `dateneeded` date NOT NULL,
  `Unitofmeasure` varchar(250) NOT NULL,
  `Quantityordered` int(60) NOT NULL,
  `Amount` int(60) NOT NULL,
  `Remarks` varchar(250) NOT NULL,
  `datemade` datetime NOT NULL,
  `supplier_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviewpayment`
--

CREATE TABLE `reviewpayment` (
  `reviewpayment_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `reviewsales_id` int(11) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `payment_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `payment_for` date NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `interest` decimal(10,2) NOT NULL,
  `remaining` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `rebate` decimal(10,2) NOT NULL,
  `or_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewpayment`
--

INSERT INTO `reviewpayment` (`reviewpayment_id`, `cust_id`, `reviewsales_id`, `payment`, `payment_date`, `user_id`, `branch_id`, `payment_for`, `due`, `interest`, `remaining`, `status`, `rebate`, `or_no`) VALUES
(8, 38, 8, 150.00, '2020-08-31 18:03:53', 8, 5, '2020-08-31', 150.00, 0.00, 0.00, 'paid', 0.00, 1901),
(9, 38, 9, 150.00, '2020-08-31 18:04:27', 8, 5, '2020-08-31', 150.00, 0.00, 0.00, 'paid', 0.00, 1902),
(10, 38, 10, 150.00, '2020-08-31 18:04:44', 8, 5, '2020-08-31', 150.00, 0.00, 0.00, 'paid', 0.00, 1903),
(11, 38, 11, 150.00, '2020-08-31 18:04:45', 8, 5, '2020-08-31', 150.00, 0.00, 0.00, 'paid', 0.00, 1904),
(12, 22, 12, 30.00, '2020-08-31 18:12:59', 8, 5, '2020-08-31', 30.00, 0.00, 0.00, 'paid', 0.00, 1905),
(13, 38, 13, 150.00, '2020-08-31 18:50:42', 8, 5, '2020-08-31', 150.00, 0.00, 0.00, 'paid', 0.00, 1906),
(14, 38, 14, 150.00, '2020-08-31 18:52:15', 8, 5, '2020-08-31', 150.00, 0.00, 0.00, 'paid', 0.00, 1907),
(15, 29, 15, 2.00, '2020-08-31 19:21:43', 8, 5, '2020-08-31', 2.00, 0.00, 0.00, 'paid', 0.00, 1908),
(16, 29, 16, 2.00, '2020-08-31 19:21:52', 8, 5, '2020-08-31', 2.00, 0.00, 0.00, 'paid', 0.00, 1909),
(17, 29, 17, 5.00, '2020-08-31 19:43:26', 8, 5, '2020-08-31', 5.00, 0.00, 0.00, 'paid', 0.00, 1910),
(18, 9, 18, 15.00, '2020-09-10 20:31:12', 8, 5, '2020-09-10', 15.00, 0.00, 0.00, 'paid', 0.00, 1911),
(19, 5, 19, 1.00, '2020-09-24 22:59:53', 8, 5, '2020-09-24', 1.00, 0.00, 0.00, 'paid', 0.00, 1912),
(20, 5, 20, 1.00, '2020-09-24 23:00:10', 8, 5, '2020-09-24', 1.00, 0.00, 0.00, 'paid', 0.00, 1913),
(21, 9, 21, 150.00, '2020-09-24 23:03:05', 8, 5, '2020-09-24', 150.00, 0.00, 0.00, 'paid', 0.00, 1914),
(22, 9, 22, 150.00, '2020-09-24 23:03:41', 8, 5, '2020-09-24', 150.00, 0.00, 0.00, 'paid', 0.00, 1915),
(23, 9, 23, 150.00, '2020-09-24 23:04:20', 8, 5, '2020-09-24', 150.00, 0.00, 0.00, 'paid', 0.00, 1916),
(24, 11, 24, 3.00, '2020-10-20 01:20:32', 8, 5, '2020-10-20', 3.00, 0.00, 0.00, 'paid', 0.00, 1917);

-- --------------------------------------------------------

--
-- Table structure for table `reviewproduct`
--

CREATE TABLE `reviewproduct` (
  `reviewproduct_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `expirydate` date NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `reviewstockin_id` int(11) NOT NULL,
  `remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviewsales`
--

CREATE TABLE `reviewsales` (
  `reviewsales_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `date_added` datetime NOT NULL,
  `modeofpayment` varchar(25) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `reviewstatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewsales`
--

INSERT INTO `reviewsales` (`reviewsales_id`, `cust_id`, `user_id`, `amount_due`, `discount`, `date_added`, `modeofpayment`, `branch_id`, `total`, `reviewstatus`) VALUES
(8, 38, 8, 150.00, 0.00, '2020-08-31 18:03:53', 'cash', 5, 150.00, 'approved'),
(9, 38, 8, 150.00, 0.00, '2020-08-31 18:04:27', 'cash', 5, 150.00, 'pending'),
(10, 38, 8, 150.00, 0.00, '2020-08-31 18:04:44', 'cash', 5, 150.00, 'pending'),
(11, 38, 8, 150.00, 0.00, '2020-08-31 18:04:45', 'cash', 5, 150.00, 'pending'),
(12, 22, 8, 30.00, 0.00, '2020-08-31 18:12:59', 'cash', 5, 30.00, 'approved'),
(13, 38, 8, 150.00, 0.00, '2020-08-31 18:50:42', 'cash', 5, 150.00, 'approved'),
(14, 38, 8, 150.00, 0.00, '2020-08-31 18:52:15', 'cash', 5, 150.00, 'pending'),
(15, 29, 8, 2.00, 0.00, '2020-08-31 19:21:43', 'cash', 5, 2.00, 'approved'),
(16, 29, 8, 2.00, 0.00, '2020-08-31 19:21:52', 'cash', 5, 2.00, 'pending'),
(17, 29, 8, 5.00, 0.00, '2020-08-31 19:43:26', 'cash', 5, 5.00, 'pending'),
(18, 9, 8, 15.00, 0.00, '2020-09-10 20:31:12', 'cash', 5, 15.00, 'approved'),
(19, 5, 8, 1.00, 0.00, '2020-09-24 22:59:53', 'cash', 5, 1.00, 'approved'),
(20, 5, 8, 1.00, 0.00, '2020-09-24 23:00:10', 'cash', 5, 1.00, 'pending'),
(21, 9, 8, 150.00, 0.00, '2020-09-24 23:03:05', 'cash', 5, 150.00, 'approved'),
(22, 9, 8, 150.00, 0.00, '2020-09-24 23:03:41', 'cash', 5, 150.00, 'pending'),
(23, 9, 8, 150.00, 0.00, '2020-09-24 23:04:20', 'cash', 5, 150.00, 'pending'),
(24, 11, 8, 3.00, 0.00, '2020-10-20 01:20:32', 'cash', 5, 3.00, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `reviewsales_details`
--

CREATE TABLE `reviewsales_details` (
  `reviewsalesdetails_id` int(11) NOT NULL,
  `reviewsales_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sales_qty` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `remark` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviewstockin`
--

CREATE TABLE `reviewstockin` (
  `reviewstockin_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `branch_id` int(11) NOT NULL,
  `reviewstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewstockin`
--

INSERT INTO `reviewstockin` (`reviewstockin_id`, `supplier_id`, `user_id`, `total`, `date`, `branch_id`, `reviewstatus`) VALUES
(11, 8, 8, 165, '2020-08-31 17:49:49', 5, 'approved'),
(12, 10, 8, 0, '2020-08-31 17:55:35', 5, 'pending'),
(13, 10, 8, 18, '2020-08-31 17:59:31', 5, 'pending'),
(14, 10, 8, 200, '2020-08-31 18:08:49', 5, 'approved'),
(15, 10, 8, 1, '2020-08-31 18:25:28', 5, 'approved'),
(16, 8, 8, 20, '2020-08-31 19:19:02', 5, 'approved'),
(17, 10, 8, 15, '2020-08-31 19:45:35', 5, 'approved'),
(18, 8, 8, 0, '2020-08-31 19:46:55', 5, 'pending'),
(19, 8, 8, 0, '2020-08-31 19:47:20', 5, 'pending'),
(20, 8, 8, 15, '2020-08-31 19:48:11', 5, 'approved'),
(21, 9, 8, 1, '2020-09-15 23:21:47', 5, 'approved'),
(22, 10, 8, 825, '2020-09-24 22:54:45', 5, 'approved'),
(23, 10, 8, 0, '2020-10-02 03:15:29', 5, 'pending'),
(24, 10, 8, 136, '2020-10-02 03:17:08', 5, 'pending'),
(25, 10, 8, 4, '2020-10-20 01:17:34', 5, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cash_tendered` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `amount_due` decimal(10,2) NOT NULL,
  `cash_change` decimal(10,2) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `modeofpayment` varchar(15) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `cust_id`, `user_id`, `cash_tendered`, `discount`, `amount_due`, `cash_change`, `date_added`, `modeofpayment`, `branch_id`, `total`) VALUES
(58, 38, 8, NULL, NULL, 150.00, NULL, '2020-08-31 18:05:16', 'cash', 5, 150.00),
(59, 22, 8, NULL, NULL, 30.00, NULL, '2020-08-31 18:13:45', 'cash', 5, 30.00),
(60, 38, 8, NULL, NULL, 150.00, NULL, '2020-08-31 18:52:28', 'cash', 5, 150.00),
(61, 29, 8, NULL, NULL, 2.00, NULL, '2020-08-31 19:43:46', 'cash', 5, 2.00),
(62, 9, 8, NULL, NULL, 15.00, NULL, '2020-09-10 20:32:12', 'cash', 5, 15.00),
(63, 5, 8, NULL, NULL, 1.00, NULL, '2020-09-24 23:01:02', 'cash', 5, 1.00),
(64, 9, 8, NULL, NULL, 150.00, NULL, '2020-09-24 23:04:52', 'cash', 5, 150.00),
(65, 11, 8, NULL, NULL, 3.00, NULL, '2020-10-20 01:21:07', 'cash', 5, 3.00);

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sales_details_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sales_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`sales_details_id`, `sales_id`, `prod_id`, `price`, `sales_qty`) VALUES
(67, 58, 52, 15000.00, 10),
(68, 59, 54, 2000.00, 15),
(69, 60, 53, 1500.00, 100),
(70, 61, 56, 10000.00, 200),
(71, 62, 58, 15000.00, 1000),
(72, 63, 60, 3000.00, 200),
(73, 63, 55, 20000.00, 40),
(74, 64, 61, 15000.00, 10),
(75, 65, 62, 400.00, 9);

-- --------------------------------------------------------

--
-- Table structure for table `stockin`
--

CREATE TABLE `stockin` (
  `stockin_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockin`
--

INSERT INTO `stockin` (`stockin_id`, `product_id`, `supplier_id`, `user_id`, `total`, `date`, `branch_id`) VALUES
(33, 0, 10, 8, 165, '2020-08-31', 5),
(34, 0, 10, 8, 200, '2020-08-31', 5),
(35, 0, 10, 8, 1, '2020-08-31', 5),
(36, 0, 8, 8, 20, '2020-08-31', 5),
(37, 0, 10, 8, 15, '2020-08-31', 5),
(38, 0, 8, 8, 15, '2020-08-31', 5),
(39, 0, 9, 8, 1, '2020-09-15', 5),
(40, 0, 10, 8, 825, '2020-09-24', 5),
(41, 0, 10, 8, 4, '2020-10-20', 5);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_address` varchar(300) NOT NULL,
  `supplier_contact` varchar(50) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_contact`, `branch_id`) VALUES
(8, 'Joint Medical Stores', 'Nsambya', '0312236447', 5),
(9, 'National Medical Stores', 'Entebbe', '0800200015', 5),
(10, 'Beyond Logistics Limited', 'Plot 1661,Link Road, off Mutaasa Road, Kakajjo Zone, ', '+256414593535', 5);

-- --------------------------------------------------------

--
-- Table structure for table `temp_deposit`
--

CREATE TABLE `temp_deposit` (
  `temp_deposit_id` int(30) NOT NULL,
  `cat_id` int(30) NOT NULL,
  `unitprice` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `prod_name` varchar(250) NOT NULL,
  `expirydate` date NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_trans`
--

CREATE TABLE `temp_trans` (
  `temp_trans_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` int(11) NOT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `payable_for` varchar(10) NOT NULL,
  `term` varchar(11) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `payment_start` date NOT NULL,
  `down` decimal(10,2) NOT NULL,
  `due_date` date NOT NULL,
  `interest` decimal(10,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `phonenumber`, `password`, `name`, `status`, `branch_id`) VALUES
(1, 'admin', '', '', 'a1Bz20ydqelm8m1wqlb458da725448e3d1eb7e11285f922f36', 'SCM', 'active', 1),
(4, 'user', '', '', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'Mona Lisa', 'active', 2),
(6, 'administrator', '', '', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'Giu Matthew', 'active', 0),
(7, 'Officer', 'samayo@urc-chs.com', '0775210211', 'a1Bz20ydqelm8m1wql28646d9b81e5a6d24ee5427f05372932', 'Stores', 'active', 5),
(8, 'jpaalo', 'jpaalo@urc-chs.com', '07724454301', 'a1Bz20ydqelm8m1wql2a76defde784140d721677c7dcfa8616', 'Julius Paalo', 'active', 5),
(9, 'anakusi', 'anakusi@URC-CHS.COM', '0785710596', 'a1Bz20ydqelm8m1wql28e5cba22e89d41b95bad42dffdfa6d7', 'Aisha Nakusi', 'active', 5),
(10, 'wmutabaazi', 'wmutabaazi@urc-chs.com', '0775210211', 'a1Bz20ydqelm8m1wqlb458da725448e3d1eb7e11285f922f36', 'William Mutabaazi', 'active', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `procurement`
--
ALTER TABLE `procurement`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `purchase_request`
--
ALTER TABLE `purchase_request`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `requestforquotation`
--
ALTER TABLE `requestforquotation`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `reviewpayment`
--
ALTER TABLE `reviewpayment`
  ADD PRIMARY KEY (`reviewpayment_id`);

--
-- Indexes for table `reviewproduct`
--
ALTER TABLE `reviewproduct`
  ADD PRIMARY KEY (`reviewproduct_id`);

--
-- Indexes for table `reviewsales`
--
ALTER TABLE `reviewsales`
  ADD PRIMARY KEY (`reviewsales_id`);

--
-- Indexes for table `reviewsales_details`
--
ALTER TABLE `reviewsales_details`
  ADD PRIMARY KEY (`reviewsalesdetails_id`);

--
-- Indexes for table `reviewstockin`
--
ALTER TABLE `reviewstockin`
  ADD PRIMARY KEY (`reviewstockin_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sales_details_id`);

--
-- Indexes for table `stockin`
--
ALTER TABLE `stockin`
  ADD PRIMARY KEY (`stockin_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `temp_deposit`
--
ALTER TABLE `temp_deposit`
  ADD PRIMARY KEY (`temp_deposit_id`);

--
-- Indexes for table `temp_trans`
--
ALTER TABLE `temp_trans`
  ADD PRIMARY KEY (`temp_trans_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3219;

--
-- AUTO_INCREMENT for table `procurement`
--
ALTER TABLE `procurement`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `purchase_request`
--
ALTER TABLE `purchase_request`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requestforquotation`
--
ALTER TABLE `requestforquotation`
  MODIFY `ItemID` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewpayment`
--
ALTER TABLE `reviewpayment`
  MODIFY `reviewpayment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reviewproduct`
--
ALTER TABLE `reviewproduct`
  MODIFY `reviewproduct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewsales`
--
ALTER TABLE `reviewsales`
  MODIFY `reviewsales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reviewsales_details`
--
ALTER TABLE `reviewsales_details`
  MODIFY `reviewsalesdetails_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewstockin`
--
ALTER TABLE `reviewstockin`
  MODIFY `reviewstockin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `sales_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `stockin`
--
ALTER TABLE `stockin`
  MODIFY `stockin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `temp_deposit`
--
ALTER TABLE `temp_deposit`
  MODIFY `temp_deposit_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_trans`
--
ALTER TABLE `temp_trans`
  MODIFY `temp_trans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
