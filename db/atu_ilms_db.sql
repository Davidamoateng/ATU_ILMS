-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 02:06 AM
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
-- Table structure for table `assigned_supervisors`
--

CREATE TABLE `assigned_supervisors` (
  `id` int(11) NOT NULL,
  `regions` varchar(255) NOT NULL,
  `supervisor_1_faculty_of_applied_arts` varchar(255) NOT NULL,
  `supervisor_2_faculty_of_applied_arts` varchar(255) NOT NULL,
  `supervisor_1_faculty_of_applied_science` varchar(255) NOT NULL,
  `supervisor_2_faculty_of_applied_science` varchar(255) NOT NULL,
  `supervisor_1_faculty_of_built_environment` varchar(255) NOT NULL,
  `supervisor_2_faculty_of_built_environment` varchar(255) NOT NULL,
  `supervisor_1_faculty_of_business` varchar(255) NOT NULL,
  `supervisor_2_faculty_of_business` varchar(255) NOT NULL,
  `supervisor_1_faculty_of_engineering` varchar(255) NOT NULL,
  `supervisor_2_faculty_of_engineering` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigned_supervisors`
--

INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, `supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, `supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, `supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) VALUES
(1, 'Ashanti Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-03 18:07:11'),
(2, 'Ahafo Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-03 18:07:11'),
(3, 'Bono East Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-03 18:07:11'),
(4, 'Brong Ahafo Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-03 18:07:11'),
(5, 'Central Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-03 18:07:11'),
(6, 'Eastern Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-03 18:07:11'),
(7, 'Greater Accra Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-03 18:07:11'),
(8, 'North East Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-03 18:07:11'),
(9, 'Northern Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-03 18:07:11'),
(10, 'Oti Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-03 18:07:11'),
(11, 'Ashanti Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:55:07'),
(12, 'Ahafo Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:55:07'),
(13, 'Bono East Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:55:07'),
(14, 'Brong Ahafo Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:55:07'),
(15, 'Central Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:55:07'),
(16, 'Eastern Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:55:07'),
(17, 'Greater Accra Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:55:07'),
(18, 'North East Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:55:07'),
(19, 'Northern Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:55:07'),
(20, 'Oti Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:55:07'),
(21, 'Ashanti Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:56:07'),
(22, 'Ahafo Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:56:07'),
(23, 'Bono East Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:56:07'),
(24, 'Brong Ahafo Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:56:07'),
(25, 'Central Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:56:07'),
(26, 'Eastern Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:56:07'),
(27, 'Greater Accra Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:56:07'),
(28, 'North East Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:56:07'),
(29, 'Northern Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:56:07'),
(30, 'Oti Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-04 13:56:07'),
(31, 'Ashanti Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-05 11:32:59'),
(32, 'Ahafo Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-05 11:32:59'),
(33, 'Bono East Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-05 11:33:00'),
(34, 'Brong Ahafo Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-05 11:33:00'),
(35, 'Central Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-05 11:33:00'),
(36, 'Eastern Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-05 11:33:00'),
(37, 'Greater Accra Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-05 11:33:00'),
(38, 'North East Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-05 11:33:00'),
(39, 'Northern Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-05 11:33:00'),
(40, 'Oti Region', 'Felix Okine', 'Felix Okine', 'John Ekpe', 'John Ekpe', 'Bryne Adams', 'Bryne Adams', 'Tony Adeboyega', 'Tony Adeboyega', 'Eric Antwi', 'Eric Antwi', '2020-07-05 11:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `attachment_reports`
--

CREATE TABLE `attachment_reports` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `introduction` mediumtext NOT NULL,
  `objective` mediumtext NOT NULL,
  `brief_history` mediumtext NOT NULL,
  `vision_mission` mediumtext NOT NULL,
  `department` mediumtext NOT NULL,
  `major_activities` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `detailed_account` mediumtext NOT NULL,
  `general_observation` mediumtext NOT NULL,
  `knowledge` mediumtext NOT NULL,
  `contribution` mediumtext NOT NULL,
  `observation` mediumtext NOT NULL,
  `conclusion` mediumtext NOT NULL,
  `recommendation` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachment_reports`
--

INSERT INTO `attachment_reports` (`id`, `username`, `index_number`, `date`, `introduction`, `objective`, `brief_history`, `vision_mission`, `department`, `major_activities`, `description`, `detailed_account`, `general_observation`, `knowledge`, `contribution`, `observation`, `conclusion`, `recommendation`) VALUES
(5, 'Mahama Issah', '01171054D', '2020-07-05 11:39:16', 'something here', 'something here', 'something here', 'something here', 'something here', 'something here', 'something here', 'something here', 'something here', 'something here', 'something here', 'something here', 'something here', 'something here');

-- --------------------------------------------------------

--
-- Table structure for table `atu_students`
--

CREATE TABLE `atu_students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `index_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atu_students`
--

INSERT INTO `atu_students` (`id`, `first_name`, `last_name`, `index_number`) VALUES
(1, 'David', 'Amoateng', '01171053D'),
(2, 'Salifu', 'Gebilila', '01171511D'),
(3, 'Robert', 'Anum', '01173832D'),
(4, 'Mahama', 'Ayuba', '01171303D'),
(5, 'Nana', 'Addo', '01161055D'),
(6, 'Atika', 'Razak', '01172649D');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_attachment_registration`
--

CREATE TABLE `industrial_attachment_registration` (
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

--
-- Dumping data for table `industrial_attachment_registration`
--

INSERT INTO `industrial_attachment_registration` (`id`, `first_name`, `last_name`, `other_name`, `index_number`, `program`, `level`, `session`, `faculty`, `date`, `industry_supervisor_grade`, `school_supervisor_grade`, `industry_supervisor_name`, `school_supervisor_name`, `industry_supervisor_contact`, `school_supervisor_contact`, `attachment_region`) VALUES
(1, 'Anum', 'Akuetteh', 'Bob', '01173832D', 'Computer Sceince', '300', 'Full-time', 'Faculty of Applied Science', '2020-06-29 13:23:10', 100, 100, '', '', '', '', ''),
(3, 'Test', 'User', 'Ato', '01171100D', 'Furniture Design & Production', '100', 'Part-time', 'Faculty of Built Environment', '2020-07-04 19:52:24', 0, 0, '', '', '', '', ''),
(4, 'Kojo', 'Atinka', 'Crow', '01172006D', 'Hotel, Catering & Institutional Management', '200', 'Full-time', 'Faculty of Applied Science', '2020-07-04 20:15:05', 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `industry_supervisor_grade`
--

CREATE TABLE `industry_supervisor_grade` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `specific_skill_1_score` int(5) NOT NULL,
  `specific_skill_2_score` int(5) NOT NULL,
  `specific_skill_3_score` int(5) NOT NULL,
  `specific_skill_4_score` int(5) NOT NULL,
  `employability_skills_1_score` int(5) NOT NULL,
  `employability_skills_2_score` int(5) NOT NULL,
  `employability_skills_3_score` int(5) NOT NULL,
  `employability_skills_4_score` int(5) NOT NULL,
  `employability_skills_5_score` int(5) NOT NULL,
  `employability_skills_6_score` int(5) NOT NULL,
  `employability_skills_7_score` int(5) NOT NULL,
  `employability_skills_8_score` int(5) NOT NULL,
  `work_attitude_1_score` int(5) NOT NULL,
  `work_attitude_2_score` int(5) NOT NULL,
  `work_attitude_3_score` int(5) NOT NULL,
  `work_attitude_4_score` int(5) NOT NULL,
  `human_relations_1_score` int(5) NOT NULL,
  `human_relations_2_score` int(5) NOT NULL,
  `human_relations_3_score` int(5) NOT NULL,
  `human_relations_4_score` int(5) NOT NULL,
  `grade` int(11) NOT NULL,
  `supervisor_first_name` varchar(200) NOT NULL,
  `supervisor_last_name` varchar(200) NOT NULL,
  `supervisor_phone_number` varchar(20) NOT NULL,
  `department_section_unit` varchar(200) NOT NULL,
  `general_remarks` mediumtext NOT NULL,
  `suggestions` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industry_supervisor_grade`
--

INSERT INTO `industry_supervisor_grade` (`id`, `username`, `index_number`, `specific_skill_1_score`, `specific_skill_2_score`, `specific_skill_3_score`, `specific_skill_4_score`, `employability_skills_1_score`, `employability_skills_2_score`, `employability_skills_3_score`, `employability_skills_4_score`, `employability_skills_5_score`, `employability_skills_6_score`, `employability_skills_7_score`, `employability_skills_8_score`, `work_attitude_1_score`, `work_attitude_2_score`, `work_attitude_3_score`, `work_attitude_4_score`, `human_relations_1_score`, `human_relations_2_score`, `human_relations_3_score`, `human_relations_4_score`, `grade`, `supervisor_first_name`, `supervisor_last_name`, `supervisor_phone_number`, `department_section_unit`, `general_remarks`, `suggestions`, `date`) VALUES
(8, 'Nana Addo', '01161055D', 0, 2, 2, 2, 4, 4, 4, 2, 3, 3, 3, 4, 5, 5, 5, 5, 5, 5, 5, 0, 68, 'Kofi', 'Kofi', '0249876123', '', '', '', '2020-06-28 13:05:51'),
(9, 'Salifu Gebilila', '01171511D', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 100, 'Daniel', 'Daniel', '0249876123', 'Hardware', '', '', '2020-06-28 13:14:28'),
(10, 'Mahama Issah', '01171054D', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 60, 'Kwesi', 'Kwesi', '+233542054285', 'Systems Integration', 'He showed good attitude towards work.', '', '2020-06-28 13:21:28'),
(11, 'David Amoateng', '01171053D', 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 5, 5, 5, 5, 60, 'Daniel', 'Tsikata', '0248889888', 'Hardware Department', 'He was very good  in terms of work', 'He should keep it up', '2020-06-28 13:31:37'),
(12, 'Test User', '01171100D', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 40, 'Tsatsu', 'Tsikata', '+233542054285', 'Systems Integration', 'Very Hard Working', 'Keep it up', '2020-06-28 16:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `school_supervisors`
--

CREATE TABLE `school_supervisors` (
  `id` int(11) NOT NULL,
  `supervisor_name` varchar(255) NOT NULL,
  `supervisor_department` varchar(255) NOT NULL,
  `supervisor_contact` varchar(20) NOT NULL,
  `supervisor_faculty` varchar(255) NOT NULL,
  `supervisor_id` varchar(25) NOT NULL,
  `supervisor_region_residence` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_supervisors`
--

INSERT INTO `school_supervisors` (`id`, `supervisor_name`, `supervisor_department`, `supervisor_contact`, `supervisor_faculty`, `supervisor_id`, `supervisor_region_residence`) VALUES
(1, 'Kwame Ampadu', 'Computer Science', '02147483647', 'Faculty of Applied Science', '01171111D', 'Ashanti Region'),
(2, 'Dr. Nana Yaw Asabre', 'Computer Science', '02147483647', 'Faculty of Applied Science', '01172222D', 'Ashanti Region'),
(3, 'Mr. Agyiri', 'Mechanical Engineering', '02748799213', 'Faculty of Engineering', '01173333D', 'Oti Region'),
(4, 'Nina Pearl Doe', 'Accountancy', '+23300000000', 'Faculty of Business', '01174444D', 'Eastern Region'),
(5, 'John Doe', 'Furniture Design & Production', '1111111111', 'Faculty of Applied Arts', '01175555D', 'Volta Region'),
(6, 'Bryne Adams', 'Building Technology', '+2330999000', 'Faculty of Built Environment', '01176666D', 'Volta Region'),
(7, 'Felix Okine', 'Languages & Liberal Studies', '0208896671', 'Faculty of Applied Arts', '01191000D', 'Ahafo Region'),
(8, 'Tony Adeboyega', 'Marketing', '02006673299', 'Faculty of Business', '011910110D', 'North East Region'),
(9, 'John Ekpe', 'Mathematics & Statistics', '0269981479', 'Faculty of Applied Science', '011612020D', 'Oti Region'),
(10, 'Eric Antwi', 'Civil Engineering', '02466732210', 'Faculty of Engineering', '01162019D', 'Central Region');

-- --------------------------------------------------------

--
-- Table structure for table `school_supervisor_grade`
--

CREATE TABLE `school_supervisor_grade` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `completion_1_score` int(5) NOT NULL,
  `completion_2_score` int(5) NOT NULL,
  `completion_3_score` int(5) NOT NULL,
  `completion_4_score` int(5) NOT NULL,
  `placement_1_score` int(5) NOT NULL,
  `attitude_1_score` int(5) NOT NULL,
  `communication_1_score` int(5) NOT NULL,
  `communication_2_score` int(5) NOT NULL,
  `appearance_1_score` int(5) NOT NULL,
  `grade` int(11) NOT NULL,
  `supervisor_first_name` varchar(200) NOT NULL,
  `supervisor_last_name` varchar(200) NOT NULL,
  `supervisor_phone_number` varchar(20) NOT NULL,
  `general_remarks` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_supervisor_grade`
--

INSERT INTO `school_supervisor_grade` (`id`, `username`, `index_number`, `completion_1_score`, `completion_2_score`, `completion_3_score`, `completion_4_score`, `placement_1_score`, `attitude_1_score`, `communication_1_score`, `communication_2_score`, `appearance_1_score`, `grade`, `supervisor_first_name`, `supervisor_last_name`, `supervisor_phone_number`, `general_remarks`, `date`) VALUES
(1, 'Test User', '01171100D', 5, 5, 5, 5, 5, 5, 5, 5, 5, 50, 'Kofi', 'Babone', '0248889807', 'Serious At Work', '2020-06-28 17:07:23'),
(2, 'David Amoateng', '01171053D', 4, 4, 4, 4, 3, 3, 3, 3, 3, 36, 'Kwesi', 'Mensah', '0249876123', 'Very Very Hard working and Serious', '2020-06-28 17:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `students_assumption`
--

CREATE TABLE `students_assumption` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `other_name` varchar(200) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `program` varchar(200) NOT NULL,
  `index_number` varchar(200) NOT NULL,
  `session` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `supervisor_name` varchar(200) NOT NULL,
  `supervisor_contact` varchar(20) NOT NULL,
  `supervisor_email` varchar(100) NOT NULL,
  `company_region` varchar(200) NOT NULL,
  `company_address` mediumtext NOT NULL,
  `registration_type` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_assumption`
--

INSERT INTO `students_assumption` (`id`, `first_name`, `last_name`, `other_name`, `mobile_number`, `program`, `index_number`, `session`, `level`, `company_name`, `supervisor_name`, `supervisor_contact`, `supervisor_email`, `company_region`, `company_address`, `registration_type`, `date`) VALUES
(1, 'Nana', 'Addo', 'dankwa', '0245578660', 'Computer Science', '01161055D', 'Full-time', '200', 'Persol Systems', 'Eric Agyekum', '0547789005', 'wisdom@gmail.com', 'Greater Accra', 'Industrial Area', 'Virtual Attachment', '2020-06-29 16:06:23'),
(2, 'Mahama', 'Issah', 'Ayuba', '0542020200', 'Science Laboratory Technology', '01171054D', 'Full-time', '100', 'Persol Systems', 'Jake Blankson', '02748799213', 'Steve@gmail.com', 'North East Region', 'old town', 'Virtual Attachment', '2020-07-05 11:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors_login`
--

CREATE TABLE `supervisors_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisors_login`
--

INSERT INTO `supervisors_login` (`id`, `username`, `password`, `date`, `status`) VALUES
(5, 'John Ekpe', 'cat', '2020-07-04 17:26:33', 'school'),
(6, 'Eric Antwi', '123', '2020-07-04 18:24:49', 'school'),
(7, 'Eric Antwi', '123', '2020-07-04 18:24:49', 'industry');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

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
(1, 'Test', 'User', '01171100D', '47ec2dd791e31e2ef2076caf64ed9b3d', 'user'),
(2, 'Administrator', 'Liaison', '01171000D', ' 0192023a7bbd73250516f069df18b500', 'admin'),
(4, 'Mahama', 'Issah', '01171054D', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(9, 'Bob', 'Anum', '01171056D', '2acba7f51acfd4fd5102ad090fc612ee', 'user'),
(15, 'Nana', 'Addo', '01161055D', '95ebc3c7b3b9f1d2c40fec14415d3cb8', 'user'),
(16, 'Salifu', 'Gebilila', '01171511D', '85171c5d2f93970d1b8d38b50c5657ca', 'user'),
(17, 'Kofi', 'Annan', '01170000D', 'f5ecc8e935ca6ea6b789efd2c099f577', 'user'),
(18, 'Anum', 'Akuetteh', '01173832D', 'a82762f30c1a27faa4f256b24fcaff24', 'user'),
(19, 'Admin', 'Test', '01151000D', 'cc03e747a6afbbcbf8be7668acfebee5', 'admin'),
(21, 'Liaison', 'Admin', '01161000D', 'a66abb5684c45962d887564f08346e8d', 'admin'),
(22, 'Admin Try', 'Admin', '01131000D', '063651a8be3d6a010d106194e0264173', 'admin'),
(23, 'Kojo', 'Atinka', '01172006D', '27f7df0a7f631c7817907b7ff1a7ab9e', 'user'),
(27, 'David', 'Amoateng', '01171053D', '252cdd7f4e7b9143dccca1fa76af1278', 'user'),
(29, 'Atika', 'Razak', '01172649D', 'd5e213401662915049ef26a363390365', 'user'),
(30, 'Fresh', 'Admin', '01191000D', '0745dc7435366c036e0b60723f7fa442', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `virtual_attachment_receipts_paid`
--

CREATE TABLE `virtual_attachment_receipts_paid` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `receipt_number` varchar(255) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `virtual_attachment_receipts_paid`
--

INSERT INTO `virtual_attachment_receipts_paid` (`id`, `username`, `index_number`, `receipt_number`, `date`) VALUES
(1, 'Salifu Gebilila', '01171511D', '1234567890', '2020-03-07 14:03:25'),
(2, 'Test User', '01171100D', '0987654321', '2020-03-07 14:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `virtual_attachment_registration`
--

CREATE TABLE `virtual_attachment_registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `other_name` varchar(255) NOT NULL,
  `index_number` varchar(25) NOT NULL,
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

INSERT INTO `virtual_attachment_registration` (`id`, `first_name`, `last_name`, `other_name`, `index_number`, `program`, `level`, `session`, `faculty`, `date`, `school_supervisor_grade`, `industry_supervisor_grade`, `school_supervisor_name`, `industry_supervisor_name`, `school_supervisor_contact`, `industry_supervisor_contact`, `attachment_region`) VALUES
(4, 'wright', 'octopos', '', '01171053D', 'Accountancy', '100', 'Full-time', 'Faculty of Applied Arts', '2020-05-30 21:25:13', 36, 60, '', '', '', '', ''),
(5, 'Nana', 'Addo', 'dankwa', '01161055D', 'Accountancy', '200', 'Part-time', 'Faculty of Business', '2020-06-27 01:19:23', 0, 68, '', '', '', '', ''),
(6, 'Mahama', 'Issah', 'Ayuba', '01171054D', 'Science Laboratory Technology', '100', 'Full-time', 'Faculty of Applied Science', '2020-06-27 01:52:59', 0, 60, '', 'Jake Blankson', '', '02748799213', 'Greater Accra'),
(8, 'Salifu', 'Gebilila', 'Java god', '01171511D', 'Electrical / Electronics Engineering', '300', 'Full-time', 'Faculty of Applied Arts', '2020-06-28 13:08:50', 0, 100, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `week1_table`
--

CREATE TABLE `week1_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week1_table`
--

INSERT INTO `week1_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(14, 'Kofi Annan', '01170000D', '2020-06-27 15:37:33', 'did', 'done', 'jobbed', 'worked', 'PHP is bae'),
(15, 'David Amoateng', '01171053D', '2020-06-27 15:46:27', 'VB', 'JAVA', 'HTML', 'PHP', 'Java Script'),
(16, 'Test User', '01171100D', '2020-06-27 15:50:51', 'woke up again', 'i took my bath', 'i brush my teeth', 'i ate rice and stew', 'i slept alone till daylight'),
(19, 'Nana Addo', '01161055D', '2020-06-27 16:04:31', 'Developed', 'The', 'Nation', 'GHana', 'Accra'),
(22, 'Mahama Issah', '01171054D', '2020-06-27 16:10:40', 'Cyber', 'Computer', 'User Interface', 'Web Design', 'Desktop'),
(23, 'Salifu Gebilila', '01171511D', '2020-06-28 21:03:22', 'Mac', 'Dell', 'Acer', 'Toshiba', 'Thank God'),
(24, 'Kojo Atinka', '01172006D', '2020-07-05 13:45:16', 'Something Here', 'Something Here', 'Something Here', 'Something Here', 'Something Here');

-- --------------------------------------------------------

--
-- Table structure for table `week2_table`
--

CREATE TABLE `week2_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week2_table`
--

INSERT INTO `week2_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Kojo Atinka', '01172006D', '2020-07-05 14:28:58', 'Text', 'Book', 'Charcoal', 'Pen', 'pepsi'),
(2, 'Mahama Issah', '01171054D', '2020-07-05 14:31:48', 'Me ', 'you', 'there', 'them', 'we'),
(3, 'Test User', '01171100D', '2020-07-05 14:36:55', 'Football', 'Tennis', 'Volley', 'Basketball', 'Soccer'),
(4, 'Salifu Gebilila', '01171511D', '2020-07-05 14:51:59', 'Computers', 'Dell', 'Acer', 'Toshiba', 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `week3_table`
--

CREATE TABLE `week3_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week3_table`
--

INSERT INTO `week3_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 17:18:55', 'Awoshi', 'Kaneshi', 'Lapaz', 'Kasoa', 'Achimota');

-- --------------------------------------------------------

--
-- Table structure for table `week4_table`
--

CREATE TABLE `week4_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week4_table`
--

INSERT INTO `week4_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 17:14:28', 'Nokia', 'Samsung', 'Tecno', 'Itel', 'LG');

-- --------------------------------------------------------

--
-- Table structure for table `week5_table`
--

CREATE TABLE `week5_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week5_table`
--

INSERT INTO `week5_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 17:13:29', 'Pearl', 'Rubi', 'C#', 'Java', 'C++');

-- --------------------------------------------------------

--
-- Table structure for table `week6_table`
--

CREATE TABLE `week6_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week6_table`
--

INSERT INTO `week6_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 17:04:20', 'Sasso', 'Heaven', 'Easy on', 'Angel', 'Roma');

-- --------------------------------------------------------

--
-- Table structure for table `week7_table`
--

CREATE TABLE `week7_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week7_table`
--

INSERT INTO `week7_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 17:02:06', 'Chelsea', 'Barcelona', 'Real Madrid', 'Atletico Madrid', 'Inter Milan');

-- --------------------------------------------------------

--
-- Table structure for table `week8_table`
--

CREATE TABLE `week8_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week8_table`
--

INSERT INTO `week8_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 16:55:00', 'Accra', 'Ashanti', 'Western', 'Eastern', 'North East');

-- --------------------------------------------------------

--
-- Table structure for table `week9_table`
--

CREATE TABLE `week9_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week9_table`
--

INSERT INTO `week9_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 16:43:07', 'Accra', 'Lagos', 'Tunis', 'Lome', 'Tripoli');

-- --------------------------------------------------------

--
-- Table structure for table `week10_table`
--

CREATE TABLE `week10_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week10_table`
--

INSERT INTO `week10_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 16:41:09', 'Ghana', 'Togo', 'Brazil', 'Gabon', 'Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `week11_table`
--

CREATE TABLE `week11_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week11_table`
--

INSERT INTO `week11_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 16:39:35', 'Betway', 'Mybet', 'u bet', 'SoccaBet', 'Safaribet');

-- --------------------------------------------------------

--
-- Table structure for table `week12_table`
--

CREATE TABLE `week12_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week12_table`
--

INSERT INTO `week12_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 16:35:34', 'Mathew', 'Mark', 'Peter', 'John', 'Genesis');

-- --------------------------------------------------------

--
-- Table structure for table `week13_table`
--

CREATE TABLE `week13_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week13_table`
--

INSERT INTO `week13_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 16:33:05', 'Messi', 'Tervez', 'Ronaldo', 'Lampard', 'Rhobino');

-- --------------------------------------------------------

--
-- Table structure for table `week14_table`
--

CREATE TABLE `week14_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week14_table`
--

INSERT INTO `week14_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 16:30:39', 'Cowbell', 'Kingcracker', 'Nunu', 'Milo', 'Sugar');

-- --------------------------------------------------------

--
-- Table structure for table `week15_table`
--

CREATE TABLE `week15_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week15_table`
--

INSERT INTO `week15_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 16:13:57', 'Phone', 'TV', 'Tape', 'Laptop', 'Monitor');

-- --------------------------------------------------------

--
-- Table structure for table `week16_table`
--

CREATE TABLE `week16_table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monday_activities` mediumtext NOT NULL,
  `tuesday_activities` mediumtext NOT NULL,
  `wednesday_activities` mediumtext NOT NULL,
  `thursday_activities` mediumtext NOT NULL,
  `friday_activities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week16_table`
--

INSERT INTO `week16_table` (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) VALUES
(1, 'Salifu Gebilila', '01171511D', '2020-07-05 16:12:00', 'Nissan', 'Opel', 'Toyota', 'Benz', 'BMW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_supervisors`
--
ALTER TABLE `assigned_supervisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachment_reports`
--
ALTER TABLE `attachment_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atu_students`
--
ALTER TABLE `atu_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_attachment_registration`
--
ALTER TABLE `industrial_attachment_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry_supervisor_grade`
--
ALTER TABLE `industry_supervisor_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_supervisors`
--
ALTER TABLE `school_supervisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_supervisor_grade`
--
ALTER TABLE `school_supervisor_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_assumption`
--
ALTER TABLE `students_assumption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisors_login`
--
ALTER TABLE `supervisors_login`
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
-- Indexes for table `week1_table`
--
ALTER TABLE `week1_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week2_table`
--
ALTER TABLE `week2_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week3_table`
--
ALTER TABLE `week3_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week4_table`
--
ALTER TABLE `week4_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week5_table`
--
ALTER TABLE `week5_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week6_table`
--
ALTER TABLE `week6_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week7_table`
--
ALTER TABLE `week7_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week8_table`
--
ALTER TABLE `week8_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week9_table`
--
ALTER TABLE `week9_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week10_table`
--
ALTER TABLE `week10_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week11_table`
--
ALTER TABLE `week11_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week12_table`
--
ALTER TABLE `week12_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week13_table`
--
ALTER TABLE `week13_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week14_table`
--
ALTER TABLE `week14_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week15_table`
--
ALTER TABLE `week15_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week16_table`
--
ALTER TABLE `week16_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigned_supervisors`
--
ALTER TABLE `assigned_supervisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `attachment_reports`
--
ALTER TABLE `attachment_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `atu_students`
--
ALTER TABLE `atu_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `industrial_attachment_registration`
--
ALTER TABLE `industrial_attachment_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `industry_supervisor_grade`
--
ALTER TABLE `industry_supervisor_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `school_supervisors`
--
ALTER TABLE `school_supervisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `school_supervisor_grade`
--
ALTER TABLE `school_supervisor_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students_assumption`
--
ALTER TABLE `students_assumption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supervisors_login`
--
ALTER TABLE `supervisors_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `virtual_attachment_receipts_paid`
--
ALTER TABLE `virtual_attachment_receipts_paid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `virtual_attachment_registration`
--
ALTER TABLE `virtual_attachment_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `week1_table`
--
ALTER TABLE `week1_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `week2_table`
--
ALTER TABLE `week2_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `week3_table`
--
ALTER TABLE `week3_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week4_table`
--
ALTER TABLE `week4_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week5_table`
--
ALTER TABLE `week5_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week6_table`
--
ALTER TABLE `week6_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week7_table`
--
ALTER TABLE `week7_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week8_table`
--
ALTER TABLE `week8_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week9_table`
--
ALTER TABLE `week9_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week10_table`
--
ALTER TABLE `week10_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week11_table`
--
ALTER TABLE `week11_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week12_table`
--
ALTER TABLE `week12_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week13_table`
--
ALTER TABLE `week13_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week14_table`
--
ALTER TABLE `week14_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week15_table`
--
ALTER TABLE `week15_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week16_table`
--
ALTER TABLE `week16_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
