-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2025 at 01:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewasetu_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE `tbl_states` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 1,
  `name` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`id`, `country_id`, `name`, `status`) VALUES
(1, 101, 'Andhra Pradesh', 0),
(2, 101, 'Arunachal Pradesh', 0),
(3, 101, 'Assam', 0),
(4, 101, 'Bihar', 0),
(5, 101, 'Chhattisgarh', 0),
(6, 101, 'Goa', 0),
(7, 101, 'Gujarat', 0),
(8, 101, 'Haryana', 0),
(9, 101, 'Himachal Pradesh', 0),
(10, 101, 'Jharkhand', 0),
(11, 101, 'Karnataka', 0),
(12, 101, 'Kerala', 0),
(13, 101, 'Madhya Pradesh', 0),
(14, 101, 'Maharashtra', 0),
(15, 101, 'Manipur', 0),
(16, 101, 'Meghalaya', 0),
(17, 101, 'Mizoram', 0),
(18, 101, 'Nagaland', 0),
(19, 101, 'Odisha', 0),
(20, 101, 'Punjab', 0),
(21, 101, 'Rajasthan', 0),
(22, 101, 'Sikkim', 0),
(23, 101, 'Tamil Nadu', 0),
(24, 101, 'Telangana', 0),
(25, 101, 'Tripura', 0),
(26, 101, 'Uttar Pradesh', 0),
(27, 101, 'Uttarakhand', 0),
(28, 101, 'West Bengal', 0),
(29, 101, 'Andaman and Nicobar Islands', 0),
(30, 101, 'Chandigarh', 0),
(31, 101, 'Dadra and Nagar Haveli and Dam', 0),
(32, 101, 'Delhi', 0),
(33, 101, 'Jammu and Kashmir', 0),
(34, 101, 'Ladakh', 0),
(35, 101, 'Lakshadweep', 0),
(36, 101, 'Puducherry', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_states`
--
ALTER TABLE `tbl_states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_states`
--
ALTER TABLE `tbl_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
