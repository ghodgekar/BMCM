-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 01:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmc_members`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_by` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_by` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `username`, `password`, `is_active`, `created_by`, `updated_by`) VALUES
(1, 'surabhi', 'surabhi@gmail.com', 'MTIzNDU2Nzg5', 1, '2023-11-06 18:29:50', '2023-11-06 18:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `subject`, `place`, `date`, `time`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', '2023-12-01', '10 pm', 1, '2023-11-18 13:38:39', '2023-11-18 13:38:39'),
(2, 'ghgdhdghdddd3333', 'hdghdgf', '2023-11-24', '15 pm', 1, '2023-11-18 16:44:29', '2023-11-18 16:44:29'),
(3, 'h', 'mnhdfj', '2023-11-17', '25NN', 1, '2023-11-18 17:25:59', '2023-11-18 17:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_data`
--

CREATE TABLE `candidate_data` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `blood_grup` varchar(40) NOT NULL,
  `position` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `domain_experties` varchar(255) NOT NULL,
  `workplace_location` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `current_address` varchar(255) NOT NULL,
  `recommender_name` varchar(50) NOT NULL,
  `recommender_mobile_no` varchar(50) NOT NULL,
  `recommender_member_no` varchar(50) NOT NULL,
  `fees_amt` varchar(200) NOT NULL,
  `fees_type` varchar(250) NOT NULL,
  `fees_transaction_id` varchar(200) NOT NULL,
  `fees_date` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `reason` varchar(250) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate_data`
--

INSERT INTO `candidate_data` (`id`, `reg_no`, `f_name`, `m_name`, `l_name`, `blood_grup`, `position`, `division`, `department`, `emp_id`, `dob`, `mobile_no`, `email`, `ward`, `domain_experties`, `workplace_location`, `permanent_address`, `current_address`, `recommender_name`, `recommender_mobile_no`, `recommender_member_no`, `fees_amt`, `fees_type`, `fees_transaction_id`, `fees_date`, `password`, `status`, `reason`, `created_by`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '020230', 'testyyy', 'test', 'test', '', 'test', 'test', 'testt', '222222', NULL, '789654123', 'gsgd@hsd.sds', '', '', '', 'sdhsg', 'hgsdh', 'dhfgh', '555555', 'dghdfhd', '', '', '', '', 'hsdg', 3, '', 0, 1, '2023-11-04 16:57:07', '2023-11-04 16:57:07'),
(2, '202300002', 'surabhi', 'suryakant', 'ghodgekar', 'AB', 'Manager', 'A', 'IT', '2018EPM', NULL, '7506332010', 'surabhi@gmail.com', '', '', '', 'Testing Address', 'Testing Current Address', 'Testing Recommendor', '9874562136', 'Test789555', '', 'GPAY', '123545697899999', '2500', 'MTIzNDU2Nzg5', 3, NULL, NULL, 1, '2023-11-11 22:52:48', '2023-11-11 22:52:48'),
(3, '202300003', 'dhj', 'hjhj', 'hjhjhj', '', 'jhhhj', 'hjjhhj', 'jhjhjjh', 'jhjhhj', NULL, '1234567899', 'jhj@gh.hjj', '', '', '', 'nhhj', 'jhhj', 'bghg', '1234567899', 'hgghghh', '', 'hhjhj', 'kjjjk', '555', 'MTIzNDU2Nzg5', 2, '', 0, 1, '2023-11-11 23:13:08', '2023-11-11 23:13:08'),
(4, '202300004', 'dhjjjh', 'hjjjhj', 'jh nnnb', 'bnbn', 'bn', 'bn', 'b', 'n', NULL, 'bn', 'b', '', '', '', 'nbnhhj', 'njhhj', 'b', '1234567899', 'hgghghh', '', 'hhjhj', 'kjjjk', '555', 'MTIzNDU2Nzg5', 1, NULL, NULL, 1, '2023-11-11 23:13:08', '2023-11-11 23:13:08'),
(5, '202300005', 'abcnn', 'nn', 'nn', 'nh', 'hjhj', 'h', 'hjh', 'jh', '10-11-2023', '1236547899', 'hd2@m.ddd', '77', 'hg7', 'gh', 'hj', 'j', 'ddnhd', '1234567899', 'dhjhdf', '2001', 'ndgh', '576tghd673gh', '10-22-2012', 'MTIzNDU2Nzg5', 3, '', 0, 1, '2023-12-03 15:59:55', '2023-12-03 15:59:55'),
(6, '202300006', 'mbfn', 'bnbn', 'bn', 'jhj', 'hjhj', 'jhj', 'h', 'bn', 'bn', '1236547855', 'bghj@nhn.dd', 'bb', 'n', 'bnb', 'hj', 'hj', 'nhb', 'nhh', 'jh', '201', 'jhj', 'hjj', 'hjh', 'MTIzNDU2', 1, NULL, NULL, 1, '2023-12-03 16:01:48', '2023-12-03 16:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_files`
--

CREATE TABLE `candidate_files` (
  `id` int(11) NOT NULL,
  `candidate_reg_no` varchar(100) NOT NULL,
  `document_no` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_master`
--

CREATE TABLE `document_master` (
  `id` int(11) NOT NULL,
  `doc_code` varchar(100) NOT NULL,
  `doc_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donation_data`
--

CREATE TABLE `donation_data` (
  `id` int(11) NOT NULL,
  `donar_name` varchar(200) NOT NULL,
  `donar_mobile` varchar(50) NOT NULL,
  `donar_amt` varchar(100) NOT NULL,
  `created_by` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation_data`
--

INSERT INTO `donation_data` (`id`, `donar_name`, `donar_mobile`, `donar_amt`, `created_by`) VALUES
(1, 'test', '7896541236', '2500', '2023-11-29 23:26:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_data`
--
ALTER TABLE `candidate_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_files`
--
ALTER TABLE `candidate_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_master`
--
ALTER TABLE `document_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation_data`
--
ALTER TABLE `donation_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidate_data`
--
ALTER TABLE `candidate_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `candidate_files`
--
ALTER TABLE `candidate_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_master`
--
ALTER TABLE `document_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation_data`
--
ALTER TABLE `donation_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
