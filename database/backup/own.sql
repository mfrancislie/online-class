-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 07:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `own`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `subject` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `added_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `description`, `due_date`, `subject`, `file`, `added_at`) VALUES
(1, 'Prelim', 'This is your prelim exam for this semester.', '2022-02-16', 'Java Programming', '09022022032500JeneselMedio_resume.docx', '2022-02-09 02:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `teacher` int(11) NOT NULL,
  `sem_code` enum('SY2021','SY2022') NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`id`, `subject`, `teacher`, `sem_code`, `created_on`, `updated_on`) VALUES
(1, 'Capstone', 11, 'SY2022', '2021-11-27 21:05:09', '2021-11-27 21:05:09'),
(2, 'DBMS', 11, 'SY2022', '2021-11-27 21:35:37', '2021-11-27 21:35:37'),
(3, 'Java Programming', 59, 'SY2021', '2021-12-07 16:19:38', '2021-12-28 10:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(255) NOT NULL,
  `q_code` enum('Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10') NOT NULL,
  `sem_code` enum('SY2022','SY2023') NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `question`, `answer`, `choice1`, `choice2`, `choice3`, `q_code`, `sem_code`, `subject`) VALUES
(1, 'Java is a ____ Programming Language.                      ', 'OOP', 'Easy', 'Heyyy', 'Depends', 'Q1', 'SY2022', 'Java Programming'),
(4, 'What do you mean?                      ', 'Secret', 'thinking', 'Little Tree', 'Hello', 'Q2', 'SY2022', 'Java Programming');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `subject` enum('inquiries','concern','capstone','project') NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(225) NOT NULL,
  `message` longtext NOT NULL,
  `dt_sent` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `subject`, `sender`, `receiver`, `message`, `dt_sent`, `updated`) VALUES
(7, 'concern', 'Elgen', 'Ella', 'Hello sir            \r\n           ', '2022-03-03 00:48:22', '2022-03-03 00:48:22'),
(10, 'concern', 'Elgenn', 'Grace', '   aascd         \r\n           ', '2022-03-05 20:41:53', '2022-03-05 20:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `usn` varchar(225) NOT NULL,
  `sem_code` enum('SY2021','SY2022','','') NOT NULL,
  `final_grade` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `recorded_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `subject`, `usn`, `sem_code`, `final_grade`, `remarks`, `recorded_by`, `updated_on`) VALUES
(9, 'Capstone', '150001375001', 'SY2021', 0, '', 0, '2021-11-30 10:54:44'),
(10, 'Capstone', '1500013750012', 'SY2021', 0, '', 0, '2021-11-30 10:55:25'),
(11, 'Java Progra', '15000137500', 'SY2021', 0, '', 0, '2021-12-07 16:20:25'),
(12, 'Java Programming', '112121212121', 'SY2022', 0, '', 0, '2022-01-03 16:00:52'),
(13, 'Java Programming', '150001375001', 'SY2021', 0, '', 0, '2022-01-10 13:59:56'),
(14, 'Java Programming', '15000137511', 'SY2022', 0, '', 0, '2022-02-09 11:32:37'),
(15, 'Capstone', '15000137511', 'SY2022', 0, '', 0, '2022-02-09 11:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(244) NOT NULL,
  `q_code` enum('Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10') NOT NULL,
  `sem_code` enum('SY2022','SY2023') NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `answer`, `choice1`, `choice2`, `choice3`, `q_code`, `sem_code`, `subject`) VALUES
(1, 'Who is our national hero?', 'Jose Rizal', 'Lapu-Lapu', 'Heneral Luna', 'Juan Luna', 'Q1', 'SY2022', 'Java Programming');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `type` enum('exam','quiz','','') NOT NULL,
  `attempt1` int(11) NOT NULL,
  `attempt2` int(11) NOT NULL,
  `attempt3` int(11) NOT NULL,
  `usn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `course` enum('BSIT','HRM') NOT NULL,
  `year` enum('1st','2nd','3rd','4th') NOT NULL,
  `address` varchar(255) NOT NULL,
  `contacts` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('New','Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `usn`, `username`, `password`, `firstname`, `lastname`, `gender`, `course`, `year`, `address`, `contacts`, `email`, `registered_at`, `updated_at`, `status`) VALUES
(2154550, '1500013750012', 'Jadey', '202cb962ac59075b964b07152d234b70', 'Jadey', 'ponce', 'Male', 'BSIT', '3rd', 'Lapu-lapu', '0973242343', 'Jade@gmail.com', '2022-03-05 22:03:52', '2022-03-05 22:08:38', 'New'),
(2154551, '1500013750015', 'Casee', '202cb962ac59075b964b07152d234b70', 'Casee', 'Alco', 'Female', 'BSIT', '4th', 'Lapu-lapu City Cebu', '0973242321', 'caseeponce@gmail.com', '2022-03-05 22:09:56', '2022-03-05 22:10:41', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` enum('1st','2nd','3rd','4th') NOT NULL,
  `course` enum('BSIT','HRM','BSCS','BSBA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `year`, `course`) VALUES
(42, 'Capstone', '4th', 'BSIT'),
(43, 'Sytem Analysis and Design', '4th', 'BSIT'),
(44, 'Physical Education', '4th', 'BSIT'),
(45, 'Soft Eng', '4th', 'BSIT'),
(46, 'Java Programming', '3rd', 'BSIT'),
(47, 'Capstone', '2nd', 'BSIT'),
(48, 'Sytem Analysis and Design', '2nd', 'BSIT'),
(49, 'Capstone', '3rd', 'BSIT'),
(50, 'Capstone', '3rd', 'BSIT'),
(51, 'Capstone', '4th', 'BSIT');

-- --------------------------------------------------------

--
-- Table structure for table `submitted_activities`
--

CREATE TABLE `submitted_activities` (
  `id` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `due_date` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `grade` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submitted_activities`
--

INSERT INTO `submitted_activities` (`id`, `title`, `due_date`, `subject`, `uid`, `file`, `uploaded_on`, `grade`) VALUES
(1, 'Prelim', '2022-02-16', 'Java Programming', '61', 'activities/09022022080642JeneselMedio_resume.docx', '2022-02-09 15:06:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(5, 'Start Classes for 2nd Semester ', '2022-01-29 00:00:00', '2022-01-30 00:00:00'),
(6, 'Payroll', '2022-01-30 00:00:00', '2022-01-31 00:00:00'),
(7, 'Assignment', '2022-02-09 00:00:00', '2022-02-10 00:00:00'),
(8, 'Examination', '2022-03-03 00:00:00', '2022-03-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contacts` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `password`, `firstname`, `lastname`, `gender`, `address`, `contacts`, `email`, `registered_at`, `updated_at`) VALUES
(22, 'Angela', '202cb962ac59075b964b07152d234b70', 'Angela', 'Rosario', 'Female', 'Lapu-lapu City Cebu', '0976763434', 'teacher@gmail.com', '2022-03-05 22:20:20', '2022-03-05 22:20:20'),
(23, 'Denvir', '202cb962ac59075b964b07152d234b70', 'Denvir', 'Alco', 'Male', 'Consolacion Cebu', '0976763434', 'Den@gmail.com', '2022-03-05 22:23:52', '2022-03-05 22:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('Student','Admission','Teacher','Cashier') NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contacts` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `firstname`, `lastname`, `gender`, `address`, `contacts`, `email`, `registered_at`, `updated_at`) VALUES
(11, 'Admission', 'Ella', '202cb962ac59075b964b07152d234b70', 'Ella', 'Medio', 'Female', 'Sambag San Vicente Liloan Cebu', '0973242343', 'Ella@gmail.com', '2021-11-27 11:07:13', '2021-11-27 11:07:13'),
(68, 'Student', 'Jadey', '202cb962ac59075b964b07152d234b70', 'Jadey', 'ponce', 'Male', 'Lapu-lapu', '0973242343', 'Jade@gmail.com', '2022-03-05 22:03:52', '2022-03-05 22:03:52'),
(69, 'Student', 'Casee', '202cb962ac59075b964b07152d234b70', 'Casee', 'Alco', 'Female', 'Lapu-lapu City Cebu', '0973242321', 'caseeponce@gmail.com', '2022-03-05 22:09:57', '2022-03-05 22:09:57'),
(72, 'Teacher', 'Angela', '202cb962ac59075b964b07152d234b70', 'Angela', 'Rosario', 'Female', 'Lapu-lapu City Cebu', '0976763434', 'teacher@gmail.com', '2022-03-05 22:20:20', '2022-03-05 22:20:20'),
(73, 'Teacher', 'Denvir', '202cb962ac59075b964b07152d234b70', 'Denvir', 'Alco', 'Male', 'Consolacion Cebu', '0976763434', 'Den@gmail.com', '2022-03-05 22:23:52', '2022-03-05 22:23:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitted_activities`
--
ALTER TABLE `submitted_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2154552;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `submitted_activities`
--
ALTER TABLE `submitted_activities`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
