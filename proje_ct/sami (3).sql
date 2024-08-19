-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 08:49 AM
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
-- Database: `sami`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `days` varchar(11) NOT NULL,
  `time` varchar(30) NOT NULL,
  `teachers` int(11) DEFAULT NULL,
  `courses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `days`, `time`, `teachers`, `courses`) VALUES
(1, 'MWF', '1pm to 3pm', 1, 1),
(2, 'MWF', '3pm to 5pm', 3, 3),
(3, 'TTS', '3pm to 5pm', 3, 3),
(4, 'TTS', '5pm to 7pm', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `subject`, `email`, `phone`, `Message`) VALUES
(6, 'Asad Ali', 'want to know about courses', 'asadfarzand711@gmail.com', '023224424', 'Hi i am asad');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `fess` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cname`, `duration`, `fess`, `img`, `description`) VALUES
(1, 'web designing', '4 months', 5000, 'Website designing.jpg', 'This course is about web designing'),
(2, 'web development', '4 months', 3000, 'Website designing.jpg', 'this course is about web developmentssss'),
(3, 'Graphics Design and Animation', '4 monthss', 2000, 'Graphics.jpg', 'this is about graphics');

-- --------------------------------------------------------

--
-- Table structure for table `create_assign`
--

CREATE TABLE `create_assign` (
  `id` int(11) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL,
  `duedate` date NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_assign`
--

INSERT INTO `create_assign` (`id`, `batch`, `topic`, `marks`, `duedate`, `file`) VALUES
(1, 'web designing', 'make a home page', 5, '2023-08-05', 'doc.pdf'),
(2, 'web designing', 'make a home page', 5, '2023-08-05', 'doc.pdf'),
(3, 'Web development', 'find laregst num in three given numberssasa', 5, '2023-08-05', 'doc.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `Phone`, `password`, `role`) VALUES
(22, 'asad', 'asadfarzand711@gmail.com', '03002810477', '202cb962ac59075b964b07152d234b70', 'Student'),
(23, 'admin', 'admin@gmail.com', '123456789', '202cb962ac59075b964b07152d234b70', 'admin'),
(24, 'safdar', 'safdar@gmail.com', '123456789', '202cb962ac59075b964b07152d234b70', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `courses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `address`, `qualification`, `dob`, `doj`, `gender`, `cnic`, `picture`, `courses`) VALUES
(8, 'asad', 'admin@gmail.com', '0332458765', 'dadd', '6th class', '2023-08-11', '2023-08-11', 'Male', '42501-2815628', 'Website designing.jpg', 1),
(9, 'asad', 'admin@gmail.com', '05467694847', 'H no A277 block c  main road bhittaiabad gulistane', '6th class', '2023-08-11', '2023-08-11', 'Male', '425013457373', 'Graphics.jpg', 3),
(10, 'sami', 'sami@1234', '03002810477', 'daddsas', 'Matric', '2023-08-11', '2023-08-11', 'Male', '42501-2815628', 'Website designing.jpg', 1),
(11, 'sami', 'sami@1234', '05467694847', 'H no A277 block c  main road bhittaiabad gulistane', '8th class', '2023-08-11', '2023-08-11', 'Male', '4250137381645', 'Graphics.jpg', 3),
(12, 'Sultan Alam neduet', 'sami@1234', '03082341652', 'H no A277 block c  main road bhittaiabad gulistane', '0', '2023-08-11', '2023-08-11', 'Male', '425013457373', '', 0),
(13, 'AsmaFarzand', 'admin@gmail.com', '05467694847', 'daddsas', 'Graduation', '2023-08-11', '2023-08-11', 'Female', '4250197980339', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `phone`, `address`, `qualification`, `experience`, `dob`, `doj`, `gender`, `cnic`, `image`) VALUES
(1, 'Sir safdar', 'safdar@gmail.com', '0332458765', 'H no A277 block c  main road bhittaiabad gulistane', 'Bachelors', '4 years', '2023-08-04', '2023-08-04', 'Male', '4250137381645', 'safder ali.jpg'),
(2, 'Sir saqib', 'saqib@gmail.com', '0332458765', 'H no A277 block c  main road bhittaiabad gulistane', 'Masters', '2 years', '2023-08-04', '2023-08-04', 'Male', '4250137381645', ''),
(3, 'Sultan Alam', 'salman@gmail.com', '0332458765', 'H no A277 block c  main road bhittaiabad gulistane', 'Masters', '4 years', '2023-08-02', '2023-08-05', 'Male', '425013457373', 'D.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers` (`teachers`),
  ADD KEY `courses` (`courses`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_assign`
--
ALTER TABLE `create_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Foreign Key` (`courses`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `create_assign`
--
ALTER TABLE `create_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`teachers`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `batch_ibfk_2` FOREIGN KEY (`courses`) REFERENCES `courses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
