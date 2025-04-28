-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 07:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1234', '2024-05-15 10:06:19.000000');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `trainer_id` int(5) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `course_id`, `user_id`, `trainer_id`, `status`, `created_at`) VALUES
(8, 6, 3, 4, 'Pending', '2024-08-16 05:07:26.326119'),
(9, 6, 3, 4, 'Approved', '2024-08-16 05:15:17.004497'),
(10, 5, 3, 4, 'Approved', '2024-08-16 05:15:57.383150'),
(11, 3, 3, 2, 'Pending', '2024-08-16 05:11:37.696822');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `image`, `status`, `created_at`) VALUES
(1, 'Full Stack Development', 'Full_Stack.png', 'Active', '2024-07-30 07:21:30.725786'),
(2, 'Mobile Development', 'Mobile-App-Development-Process-Banner.jpg', 'Active', '2024-07-30 07:21:59.600639'),
(4, 'Graphic Designing', 'graphic-design-trends-2024-blog-header.png', 'Active', '2024-07-30 07:24:43.063986');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Harsh', 'h@gmail.com', 'hii', '          hii                      ', '2024-05-15 11:10:19.504125'),
(2, 'Manmit Kaur', 'manmit@gmail.com', 'Test', 'Testing Purpose', '2024-07-30 07:16:20.778887'),
(3, 'mridul', 'mridul@gmail.com', 'new subject', '                    kjfg           ', '2024-08-16 04:40:46.659472'),
(4, 'neha', 'neha@gmail.com', 'hehehe', 'hiiiiiiiiiiiiiiiiiiiiiii                  ', '2024-08-16 05:17:50.594716');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `trainer_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `category_id`, `trainer_id`, `image`, `duration`, `price`, `status`, `created_at`) VALUES
(1, 'Kotlin', 2, 1, 'kotlin-logo-social-21c8518b19eb96d96f35e0057bb92b7e1281a24820e0fa09e39c42f184bd7faa.png', '3 month', '8000', 'Active', '2024-08-02 06:10:44.159473'),
(3, 'PHP', 1, 2, 'meta-image (1).png', '2-2.5 Months', '5000', 'Active', '2024-07-30 07:36:00.198774'),
(4, 'Angular', 1, 2, 'angular.png', '2 month', '10000', 'Active', '2024-08-02 06:18:11.675832'),
(5, 'figma', 4, 4, 'topic6.png', '2 months', '3000', 'Active', '2024-08-16 04:50:51.692797'),
(6, 'reactjs', 1, 4, 'topic4.png', '3months', '63453', 'Active', '2024-08-16 04:50:30.498442');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_register`
--

CREATE TABLE `trainer_register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'trainer',
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_register`
--

INSERT INTO `trainer_register` (`id`, `name`, `email`, `password`, `image`, `contact`, `address`, `status`, `type`, `created_at`) VALUES
(1, 'ram', 'ram@gmail.com', '1234', 'about2.png', '69798798', 'hsp', 'Approved', 'trainer', '2024-05-18 07:46:22.405932'),
(2, 'Manmit Kaur', 'manmit@gmail.com', '123', 'person2.jpg', '0987654321', 'Ludhiana, Punjab', 'Approved', 'trainer', '2024-07-30 07:30:59.028311'),
(3, 'poonam', 'demo@gmail.com', '123', '', '9999999999', 'Jalandhar', 'Rejected', 'trainer', '2024-07-30 07:33:26.630324'),
(4, 'manu', 'manu@gmail.com', '123', 'team2.png', '9876545678', 'jal', 'Approved', 'trainer', '2024-08-16 04:44:16.672953');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(255) NOT NULL,
  `tutorial_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `trainerid` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `tutorial_name`, `image`, `course_id`, `trainerid`, `description`, `status`, `created_at`) VALUES
(3, 'vector', 'topic8.png', '5', '4', '                                 the best tutorial                             ', 'Active', '2024-08-16 05:15:06.544302'),
(4, 'react router dom', 'section_bg01.png', 'Select Course', '4', 'the best tutorial\r\n     ', 'Active', '2024-08-16 05:14:21.058367');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `address`, `status`, `created_at`) VALUES
(1, 'user1', 'user1@gmail.com', '1234', '69798798', 'hsp', 'Active', '2024-05-18 08:30:21.679630'),
(2, 'Student', 'student@gmail.com', '123', '9876543210', 'Ludhiana, Punjab', 'Active', '2024-07-30 07:29:59.199032'),
(3, 'neha', 'neha@gmail.com', '123', '8976543276', 'jal', 'Active', '2024-08-16 04:52:07.313072');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer_register`
--
ALTER TABLE `trainer_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trainer_register`
--
ALTER TABLE `trainer_register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
