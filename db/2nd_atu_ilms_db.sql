-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 10:33 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atu_ilms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `industrial_attachment_registration`
--

--DROP TABLE `industrial_attachment_registration`;

CREATE TABLE IF NOT EXISTS `industrial_attachment_registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `other_name` varchar(255) NOT NULL,
  `index_number` varchar(25) NOT NULL,
  `program` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `session` varchar(200) NOT NULL,
  `faculty` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `industry_supervisor_grade` int(11) NOT NULL,
  `school_supervisor_grade` int(11) NOT NULL,
  `industry_supervisor_name` varchar(255) NOT NULL,
  `school_supervisor_name` varchar(255) NOT NULL,
  `industry_supervisor_contact` varchar(25) NOT NULL,
  `school_supervisor_contact` varchar(25) NOT NULL,
  `attachment_region` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_id`, `password`, `user_type`) VALUES
(1, 'Test', 'User', '01171100D', 'cc03e747a6afbbcbf8be7668acfebee5', 'user'),
(2, 'Administrator', 'Liaison', '01171000D', '0192023a7bbd73250516f069df18b500', 'admin'),
(4, 'Mahama', 'Issah', '01171054D', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(5, 'Wright', 'Octopos', '01171055D', '252cdd7f4e7b9143dccca1fa76af1278', 'user'),
(6, 'David', 'Amoateng', '01171053D', '252cdd7f4e7b9143dccca1fa76af1278', 'user'),
(7, 'New', 'User', 'New001', '68a0099b3f45357798639a30c5fe3154', 'user'),
(8, 'Wright', 'Octopos', '01171053D', '25f9e794323b453885f5181f1b624d0b', 'user'),
(9, 'Bob', 'Anum', '01171053D', '2acba7f51acfd4fd5102ad090fc612ee', 'user'),
(10, 'John', 'Doe', 'user101', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(11, 'John', 'Doe', 'user101', '6e0b7076126a29d5dfcbd54835387b7b', 'user'),
(12, 'John', 'Doe', 'Doe001', '008bd5ad93b754d500338c253d9c1770', 'user'),
(13, 'Robert', 'Anum', 'Anum101', '2f2a96e26f4304e9ee37940b06bcb9e4', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `virtual_attachment_receipts_paid`
--

DROP TABLE `virtual_attachment_receipts_paid`;

CREATE TABLE `virtual_attachment_receipts_paid` (
  `id` int(11) NOT NULL,
  `receipt_number` varchar(255) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `virtual_attachment_receipts_paid`
--

INSERT INTO `virtual_attachment_receipts_paid` (`id`, `receipt_number`, `date`) VALUES
(1, '1234567890', '2020-03-07 14:03:25'),
(2, '0987654321', '2020-03-07 14:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `virtual_attachment_registration`
--

DROP TABLE `virtual_attachment_registration`;

CREATE TABLE `virtual_attachment_registration` (
  `id` int(11) NOT NULL,
  `student_first_name` varchar(255) NOT NULL,
  `student_last_name` varchar(255) NOT NULL,
  `other_name` varchar(255) NOT NULL,
  `student_index_number` varchar(25) NOT NULL,
  `program` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `school_supervisor_grade` int(100) NOT NULL,
  `industry_supervisor_grade` int(11) NOT NULL,
  `school_supervisor_name` varchar(255) NOT NULL,
  `industry_supervisor_name` varchar(255) NOT NULL,
  `school_supervisor_contact` varchar(25) NOT NULL,
  `industry_supervisor_contact` varchar(25) NOT NULL,
  `attachment_region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `virtual_attachment_registration`
--

INSERT INTO `virtual_attachment_registration` (`id`, `student_first_name`, `student_last_name`, `other_name`, `student_index_number`, `program`, `level`, `session`, `faculty`, `date`, `school_supervisor_grade`, `industry_supervisor_grade`, `school_supervisor_name`, `industry_supervisor_name`, `school_supervisor_contact`, `industry_supervisor_contact`, `attachment_region`) VALUES
(1, 'Wright', 'Octopos', 'Kwesi', '123456789', 'Computer Science', '300', 'Full-time', 'Faculty of Applied Science', '2020-03-07 14:43:15', 0, 0, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `industrial_attachment_registration`
--
ALTER TABLE `industrial_attachment_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `virtual_attachment_receipts_paid`
--
ALTER TABLE `virtual_attachment_receipts_paid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `virtual_attachment_registration`
--
ALTER TABLE `virtual_attachment_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `industrial_attachment_registration`
--
ALTER TABLE `industrial_attachment_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `virtual_attachment_receipts_paid`
--
ALTER TABLE `virtual_attachment_receipts_paid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `virtual_attachment_registration`
--
ALTER TABLE `virtual_attachment_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
