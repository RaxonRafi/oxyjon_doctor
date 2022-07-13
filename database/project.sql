-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 02:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `time_of_day` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `patient_mobile_no` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `height_ft` int(10) NOT NULL,
  `height_inches` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `birth_date` date NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `lead_sources` varchar(10) NOT NULL,
  `caregiver` varchar(10) NOT NULL,
  `oxyjon_app` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `residing_in` varchar(20) NOT NULL,
  `aadhar_card_num` int(30) NOT NULL,
  `medical_insurance_num` int(30) NOT NULL,
  `medical_insurance_provider` varchar(20) NOT NULL,
  `education` varchar(50) NOT NULL,
  `current_profession` varchar(50) NOT NULL,
  `emergency_contact_name` varchar(50) NOT NULL,
  `emergency_contact_num` int(20) NOT NULL,
  `emr_email` varchar(50) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `procedures` varchar(50) NOT NULL,
  `diabetes_type` varchar(20) NOT NULL,
  `coronary_artery` varchar(10) NOT NULL,
  `heart_attack` varchar(10) NOT NULL,
  `high_cholesterol` varchar(10) NOT NULL,
  `high_blood_pressure` varchar(10) NOT NULL,
  `neuropathy_vascular_disease` varchar(10) NOT NULL,
  `neuropathy_kidney_disease` varchar(10) NOT NULL,
  `retinopathy` varchar(10) NOT NULL,
  `conditions` varchar(50) NOT NULL,
  `hospital_admission` varchar(10) NOT NULL,
  `hospital_admission_reason` varchar(50) NOT NULL,
  `days` int(10) NOT NULL,
  `physician_visit` varchar(10) NOT NULL,
  `Num_physician_visit` varchar(10) NOT NULL,
  `blood_sugar` varchar(10) NOT NULL,
  `frequency_blood_sugar` varchar(30) NOT NULL,
  `recent_episode_high_bs` varchar(10) NOT NULL,
  `food_habit` varchar(30) NOT NULL,
  `exercise` varchar(10) NOT NULL,
  `type_of_exercise` varchar(20) NOT NULL,
  `days_of_exc` int(10) NOT NULL,
  `minutes_of_exc` int(10) NOT NULL,
  `early_morning` varchar(20) NOT NULL,
  `breakfast` varchar(20) NOT NULL,
  `mid_morning` varchar(20) NOT NULL,
  `lunch` varchar(20) NOT NULL,
  `evening_snack` varchar(20) NOT NULL,
  `dinner` varchar(20) NOT NULL,
  `bed_time` varchar(20) NOT NULL,
  `water_intake` varchar(20) NOT NULL,
  `constipation` varchar(10) NOT NULL,
  `eat_out` int(10) NOT NULL,
  `sleeping_hours` int(10) NOT NULL,
  `trouble_spots` varchar(30) NOT NULL,
  `smoking` varchar(20) NOT NULL,
  `drinking` varchar(20) NOT NULL,
  `examine_feet` varchar(20) NOT NULL,
  `dental_exam` varchar(20) NOT NULL,
  `father_condition` varchar(30) NOT NULL,
  `mother_condition` varchar(30) NOT NULL,
  `brother_condition` varchar(30) NOT NULL,
  `sister_condition` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `time_of_day` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
