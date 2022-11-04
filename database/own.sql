-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 07:38 AM
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
(5, 'Capstone', 2200121, 'SY2021', '2022-04-11 07:40:23', '2022-04-11 07:40:23'),
(6, 'Database', 2200121, 'SY2021', '2022-04-11 07:44:16', '2022-04-11 07:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `events_teacher`
--

CREATE TABLE `events_teacher` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events_teacher`
--

INSERT INTO `events_teacher` (`id`, `title`, `start`, `end`) VALUES
(2, 'asdf', '2022-03-11 00:00:00', '2022-03-12 00:00:00');

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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `contact`, `email`, `address`) VALUES
(10, 'jamessdf', '09665375972', 'jame@gmail.com', 'asdfasdf');

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
(16, 'Capstone', '1500013750015', 'SY2021', 90, 'Passed', 0, '2022-03-24 01:01:25'),
(17, 'Database', '1500013750017', 'SY2022', 0, '', 0, '2022-04-11 08:18:11');

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
  `role` enum('student','','','') NOT NULL,
  `code` mediumint(50) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `course` enum('BSIT','HRM') NOT NULL,
  `year` enum('1st','2nd','3rd','4th') NOT NULL,
  `sem_code` enum('SY2021','SY2022','','') NOT NULL,
  `description` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contacts` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `role`, `code`, `usn`, `username`, `password`, `firstname`, `lastname`, `gender`, `course`, `year`, `sem_code`, `description`, `address`, `contacts`, `email`, `registered_at`, `updated_at`, `status`) VALUES
(2154559, 'student', 0, '1500013750015', 'Carl', '123', 'Carly', 'Inopia', 'Male', 'BSIT', '2nd', 'SY2021', '1st Yr - 2nd Sem', 'Lapu-lapu City', '0966543987', 'jadey@gmail.com', '2022-04-02 06:58:12', '2022-04-12 21:40:55', '1'),
(2154561, 'student', 0, '1500013750016', 'Den', '1234', 'Den', 'Inopia', 'Female', 'BSIT', '3rd', 'SY2022', '2st Yr - 2nd Sem', 'Lapu-Lapu City', '0973434344', 'den@gmail.com', '2022-04-05 00:31:46', '2022-04-12 21:40:49', '1'),
(2154562, 'student', 0, '1500013750017', 'Anton', '123', 'Antony', 'Caloy', 'Male', 'BSIT', '3rd', 'SY2022', '1st Yr- 2nd Sem', 'Lapu-Lapu City', '0973434344', 'anton@gmail.com', '2022-04-05 00:32:23', '2022-04-12 21:41:38', '0'),
(2154563, 'student', 0, '1500013750018', 'Gellow', '12', 'Gellow', 'Inopia', 'Male', 'BSIT', '3rd', 'SY2022', '4th Yr- 1st Sem', 'Lapu-Lapu City', '0973434344', 'gellow@gmail.com', '2022-04-05 00:33:57', '2022-04-12 21:41:30', '0'),
(2154564, 'student', 0, '1500013750019', 'Marky', '12', 'Marky', 'Quillano', 'Male', 'BSIT', '3rd', 'SY2021', '3rd Yr- 2nd Sem', 'Lapu-Lapu City', '0973434344', 'marky@gmail.com', '2022-04-05 00:34:58', '2022-04-12 21:41:54', '1'),
(2154565, 'student', 0, '1500013750020', 'Aljon', '12', 'Aljon', 'Ando', 'Male', 'BSIT', '3rd', 'SY2022', '3rd Yr- 2nd Sem', 'Lapu-Lapu City', '0973434344', 'Aljon@gmail.com', '2022-04-05 00:35:35', '2022-04-12 21:42:01', '1'),
(2154567, 'student', 0, '1500013750021', 'Casey', '12', 'Casey', 'Inopia', 'Female', 'HRM', '3rd', 'SY2021', '2nd Yr- 2nd Sem', 'Lapu-Lapu City', '0973434344', 'case@gmail.com', '2022-04-05 00:45:28', '2022-04-12 21:42:15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stud_calendar`
--

CREATE TABLE `stud_calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_calendar`
--

INSERT INTO `stud_calendar` (`id`, `title`, `start`, `end`) VALUES
(1, 'End of Classes', '2022-03-08 17:13:17', '2022-03-31 17:13:17');

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
(51, 'Capstone', '4th', 'BSIT'),
(52, 'Capstone', '4th', 'BSIT'),
(53, 'Sytem Analysis and Design', '4th', 'BSIT'),
(54, 'Sytem Analysis and Design', '2nd', 'BSIT'),
(55, 'Capstone', '2nd', 'BSIT'),
(56, 'Capstone', '1st', 'BSIT'),
(57, 'Capstone', '1st', 'BSIT'),
(58, 'Capstone', '1st', 'BSIT'),
(59, 'Capstone', '2nd', 'BSIT'),
(60, 'Capstone', '4th', ''),
(61, 'Sytem Analysis and Design', '3rd', 'BSIT'),
(62, 'Physical Education', '3rd', 'BSIT'),
(63, 'Physical Education', '3rd', 'BSIT'),
(64, 'Capstone', '3rd', 'BSIT'),
(65, 'Physical Education', '3rd', ''),
(66, 'Physical Education', '3rd', 'BSIT'),
(67, 'Physical Education', '3rd', 'BSIT');

-- --------------------------------------------------------

--
-- Table structure for table `subject_code`
--

CREATE TABLE `subject_code` (
  `id` int(30) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_code`
--

INSERT INTO `subject_code` (`id`, `subject_code`, `description`) VALUES
(3, 'SY2021', 'Subject Code       \r\n                         '),
(4, 'SY2022', 'Subject Code                            \r\n                          '),
(6, 'SY2023', 'Subject Code\r\n                            \r\n                          ');

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
(21, 'Rizal Day', '2022-03-10 00:00:00', '2022-03-11 00:00:00'),
(22, 'Holiday', '2022-03-25 00:00:00', '2022-03-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `role` enum('Teacher') NOT NULL,
  `password` varchar(225) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contacts` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `code`, `teacher_id`, `role`, `password`, `firstname`, `lastname`, `gender`, `address`, `contacts`, `email`, `registered_at`, `updated_at`, `status`) VALUES
(2200121, 'Jadey', 0, '750012432', 'Teacher', '1234', 'Jadey', 'Ando', 'Male', 'Lapu-lapu City', '0966543987', 'jadey@gmail.com', '2022-04-05 00:50:43', '2022-04-05 00:50:43', '1'),
(2200122, 'Elgeny', 0, '750012433', 'Teacher', '123', 'Elgeny', 'Ando', 'Female', 'Lapu-lapu City', '0966543987', 'Elgen@gmail.com', '2022-04-05 00:51:15', '2022-04-05 00:51:15', '1'),
(2200123, 'Grace', 0, '750012434', 'Teacher', '123', 'Grace', 'Ando', 'Female', 'Lapu-lapu City', '0966543987', 'grace@gmail.com', '2022-04-05 00:51:45', '2022-04-05 00:51:45', '1'),
(2200126, 'Arman', 0, '750012435', 'Teacher', '123', 'Arman', 'Dilapa', 'Male', 'Lapu-lapu City', '0966543987', 'arman@gmail.com', '2022-04-05 00:54:17', '2022-04-05 00:54:17', '1'),
(2200127, 'catty', 0, '750012436', 'Teacher', '12', 'Catty', 'Inopia', 'Female', 'Lapu-Lapu City', '0973434344', 'catty@gmail.com', '2022-04-05 07:47:10', '2022-04-05 07:47:10', '1'),
(22001214, 'Ailyn', 0, '750012437', 'Teacher', '123', 'Ailyn', 'Buhay', 'Female', 'Lapu-lapu City', '0966543987', 'ailyn@gmail.com', '2022-04-05 00:52:37', '2022-04-05 00:52:37', '1'),
(22001215, 'Kaye', 0, '750012438', 'Teacher', '123', 'Kaye', 'Inopia', 'Female', 'Lapu-lapu City', '0966543987', 'kaye@gmail.com', '2022-04-05 00:53:42', '2022-04-05 00:53:42', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('Student','Admission','Teacher','Cashier') NOT NULL,
  `code` mediumint(50) NOT NULL,
  `username` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `role`, `code`, `username`, `password`, `firstname`, `lastname`, `gender`, `address`, `contacts`, `email`, `registered_at`, `updated_at`) VALUES
(11, 'Admission', 0, 'Admin', '123', 'Ella', 'Medio', 'Female', 'Sambag San Vicente Liloan Cebu', '0973242343', 'Ella@gmail.com', '2021-11-27 11:07:13', '2021-11-27 11:07:13'),
(81, 'Teacher', 0, 'Jadey', '123', 'Jadey', 'Ando', 'Male', 'Lapu-lapu City', '0966543987', 'jadey@gmail.com', '2022-04-05 00:50:43', '2022-04-05 00:50:43'),
(82, 'Teacher', 0, 'elgen', '123', 'Elgen', 'Ando', 'Female', 'Lapu-lapu City', '0966543987', 'Elgen@gmail.com', '2022-04-05 00:51:15', '2022-04-05 00:51:15'),
(83, 'Teacher', 0, 'Grace', '123', 'Grace', 'Ando', 'Female', 'Lapu-lapu City', '0966543987', 'grace@gmail.com', '2022-04-05 00:51:45', '2022-04-05 00:51:45'),
(84, 'Teacher', 0, 'Ailyn', '123', 'Ailyn', 'Buhay', 'Female', 'Lapu-lapu City', '0966543987', 'ailyn@gmail.com', '2022-04-05 00:52:37', '2022-04-05 00:52:37'),
(85, 'Teacher', 0, 'Kaye', '123', 'Kaye', 'Inopia', 'Female', 'Lapu-lapu City', '0966543987', 'kaye@gmail.com', '2022-04-05 00:53:42', '2022-04-05 00:53:42'),
(86, 'Teacher', 0, 'Arman', '123', 'Arman', 'Dilapa', 'Male', 'Lapu-lapu City', '0966543987', 'arman@gmail.com', '2022-04-05 00:54:17', '2022-04-05 00:54:17'),
(87, 'Teacher', 0, 'catty', '12', 'Catty', 'Inopia', 'Female', 'Lapu-Lapu City', '0973434344', 'catty@gmail.com', '2022-04-05 07:47:10', '2022-04-05 07:47:10');

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
-- Indexes for table `events_teacher`
--
ALTER TABLE `events_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
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
-- Indexes for table `stud_calendar`
--
ALTER TABLE `stud_calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_code`
--
ALTER TABLE `subject_code`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events_teacher`
--
ALTER TABLE `events_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2154568;

--
-- AUTO_INCREMENT for table `stud_calendar`
--
ALTER TABLE `stud_calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `subject_code`
--
ALTER TABLE `subject_code`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `submitted_activities`
--
ALTER TABLE `submitted_activities`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22001217;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
