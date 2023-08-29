-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 07:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(60) NOT NULL,
  `ad_mail` varchar(160) NOT NULL,
  `ad_passcode` varchar(65) NOT NULL,
  `ad_img` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_czech_cs;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ad_id`, `ad_name`, `ad_mail`, `ad_passcode`, `ad_img`) VALUES
(1, 'Ali Asghar', 'asghar.ali3@gmail.com', 'mission_impossible', 'ad1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(70) NOT NULL,
  `doc_email` varchar(170) NOT NULL,
  `doc_passcode` varchar(30) NOT NULL,
  `doc_phone` varchar(12) NOT NULL,
  `doc_qualification` varchar(112) NOT NULL,
  `doc_img` varchar(212) NOT NULL,
  `hospital` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_czech_cs;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doc_id`, `doc_name`, `doc_email`, `doc_passcode`, `doc_phone`, `doc_qualification`, `doc_img`, `hospital`) VALUES
(1087, 'zumar', 'zumar.y21@gmail.com', '', '0343-1234', 'MBBS', 'd1.jpg', 475);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `code` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(160) NOT NULL,
  `Health_st` varchar(60) NOT NULL,
  `Message` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_czech_cs;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`code`, `Name`, `Email`, `Health_st`, `Message`) VALUES
(1, 'Muhd. Ahsan', 'ahsan.muhd21@gmail.com', 'Almost Recovered', 'The staff was very cooperative and doctors were gentle and hospital is clean.'),
(2, 'Saad Mubashir', 'saad.m@gmail.com', 'Recovered', 'The care and hospitality is very incredible besides healty treatment , tests & consultations for my father.'),
(3, 'Yumna Kanwal', 'Kanwal.y36@gmail.com', 'Recovered', 'The staff was outstanding. Everything was crystal and care since I entered and left.'),
(4, 'Ali Abbas', 'ali.abbas90@gmail.com', 'New patient', 'Very good Hospital. All staff member were very helpful and humble including doctors. ');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `Hosp_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_czech_cs;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_id`, `hospital_name`, `Hosp_img`) VALUES
(247, ' Life Line', 'h9.jpg'),
(389, 'Angelwalk', 'h4.jpg'),
(449, 'Flowerence', 'h8.jpg'),
(455, 'Care & Cure ', 'h1.avif'),
(475, 'Mankind ', 'h2.avif'),
(609, 'Mr.native ', 'h3.avif');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(60) NOT NULL,
  `phone_num` varchar(13) NOT NULL,
  `p_mail` varchar(150) NOT NULL,
  `p_pass` varchar(45) NOT NULL,
  `p_img` varchar(150) NOT NULL,
  `Age` int(12) NOT NULL,
  `p_gender` varchar(45) NOT NULL,
  `p_DOB` date NOT NULL,
  `hospital` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_czech_cs;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`p_id`, `p_name`, `phone_num`, `p_mail`, `p_pass`, `p_img`, `Age`, `p_gender`, `p_DOB`, `hospital`) VALUES
(303, 'Maya', '0321-1254321', 'maya.mehra65@gmail.com', '09876', 'r3.jpg', 31, 'Female', '2021-10-16', NULL),
(1013, 'Zaman', '0321-125432', 'Jamal.z@gmail.com', 'elmo', 'r2.jpg', 12, 'Male', '2021-09-08', 389),
(1110, 'Summaiya Jahan', '0321-5432', 'J.sam21@gmail.com', 'palmtree', 'p1.avif', 23, 'Male', '2000-07-21', 449);

-- --------------------------------------------------------

--
-- Table structure for table `p_reports`
--

CREATE TABLE `p_reports` (
  `rep_code` int(11) NOT NULL,
  `vac_dose` varchar(7) NOT NULL,
  `Vac_details` int(11) DEFAULT NULL,
  `vac_appoint` int(11) DEFAULT NULL,
  `patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_czech_cs;

--
-- Dumping data for table `p_reports`
--

INSERT INTO `p_reports` (`rep_code`, `vac_dose`, `Vac_details`, `vac_appoint`, `patient`) VALUES
(310, 'Second', 1505, 1, 1110),
(311, 'First', 1505, 19, 1013);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_detail`
--

CREATE TABLE `vaccine_detail` (
  `vac_code` int(11) NOT NULL,
  `vac_name` varchar(150) NOT NULL,
  `Vac_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_czech_cs;

--
-- Dumping data for table `vaccine_detail`
--

INSERT INTO `vaccine_detail` (`vac_code`, `vac_name`, `Vac_status`) VALUES
(1505, 'Sinovac', 1),
(1680, 'Pfizer', 1),
(1758, 'Sinopharm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vac_appoint`
--

CREATE TABLE `vac_appoint` (
  `App_num` int(11) NOT NULL,
  `cnic` varchar(30) NOT NULL,
  `vac_date` date NOT NULL,
  `hospital` int(11) DEFAULT NULL,
  `patient` int(11) DEFAULT NULL,
  `vac_name` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_czech_cs;

--
-- Dumping data for table `vac_appoint`
--

INSERT INTO `vac_appoint` (`App_num`, `cnic`, `vac_date`, `hospital`, `patient`, `vac_name`) VALUES
(1, '17301-1667936-8', '2020-01-01', 449, 1110, 1505),
(19, '12310-1234567-9', '2020-07-17', 449, 1013, 1505);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ad_id`),
  ADD UNIQUE KEY `ad_mail` (`ad_mail`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `doc_email` (`doc_email`),
  ADD UNIQUE KEY `doc_phone` (`doc_phone`),
  ADD KEY `hospital` (`hospital`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `p_mail` (`p_mail`),
  ADD KEY `hospital` (`hospital`);

--
-- Indexes for table `p_reports`
--
ALTER TABLE `p_reports`
  ADD PRIMARY KEY (`rep_code`),
  ADD KEY `Vac_details` (`Vac_details`),
  ADD KEY `vac_appoint` (`vac_appoint`),
  ADD KEY `patient` (`patient`);

--
-- Indexes for table `vaccine_detail`
--
ALTER TABLE `vaccine_detail`
  ADD PRIMARY KEY (`vac_code`),
  ADD UNIQUE KEY `vac_name` (`vac_name`);

--
-- Indexes for table `vac_appoint`
--
ALTER TABLE `vac_appoint`
  ADD PRIMARY KEY (`App_num`),
  ADD UNIQUE KEY `cnic` (`cnic`),
  ADD KEY `hospital` (`hospital`),
  ADD KEY `patient` (`patient`),
  ADD KEY `vac_name` (`vac_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `p_reports`
--
ALTER TABLE `p_reports`
  MODIFY `rep_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT for table `vac_appoint`
--
ALTER TABLE `vac_appoint`
  MODIFY `App_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`hospital`) REFERENCES `hospitals` (`hospital_id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`hospital`) REFERENCES `hospitals` (`hospital_id`);

--
-- Constraints for table `p_reports`
--
ALTER TABLE `p_reports`
  ADD CONSTRAINT `p_reports_ibfk_1` FOREIGN KEY (`Vac_details`) REFERENCES `vaccine_detail` (`vac_code`),
  ADD CONSTRAINT `p_reports_ibfk_2` FOREIGN KEY (`vac_appoint`) REFERENCES `vac_appoint` (`App_num`),
  ADD CONSTRAINT `p_reports_ibfk_3` FOREIGN KEY (`patient`) REFERENCES `patients` (`p_id`);

--
-- Constraints for table `vac_appoint`
--
ALTER TABLE `vac_appoint`
  ADD CONSTRAINT `vac_appoint_ibfk_1` FOREIGN KEY (`hospital`) REFERENCES `hospitals` (`hospital_id`),
  ADD CONSTRAINT `vac_appoint_ibfk_2` FOREIGN KEY (`patient`) REFERENCES `patients` (`p_id`),
  ADD CONSTRAINT `vac_appoint_ibfk_3` FOREIGN KEY (`vac_name`) REFERENCES `vaccine_detail` (`vac_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
