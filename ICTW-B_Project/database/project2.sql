-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 02:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(256) NOT NULL,
  `college_desc` varchar(256) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`college_id`, `college_name`, `college_desc`, `date`) VALUES
(1, 'Dharmsinh Desai University', 'Dharmsinh Desai University formerly known as Dharmsinh Desai Institute of Technology was founded on 2 January 1968 as an institution of higher learning in Nadiad, Gujarat, India in the fields of Engineering, Technology, Medical Science, Dental Science etc.', '2021-07-02 17:38:00'),
(2, 'Indian Institute of Technology-Ghandhinagar', 'Indian Institute of Technology Gandhinagar is a public engineering institution located in Gandhinagar, Gujarat, India. It has been declared to be an Institute of National Importance by the Government of India.', '2021-07-02 17:40:12'),
(3, 'Sardar Vallabhbhai National Institute of Technology', 'Sardar Vallabhbhai National Institute of Technology Surat, is a public technical university established by the Parliament of India in 1961.', '2021-07-02 17:41:28'),
(4, 'Nirma University\r\n', 'Nirma University is a private university located in Ahmedabad, Gujarat, India. It functions under the aegis of the Nirma Education and Research Foundation.', '2021-07-02 17:42:45'),
(5, 'Lalbhai Dalpatbhai College of Engineering', 'Lalbhai Dalpatbhai College of Engineering, is a state college located in Ahmedabad, Gujarat, India.', '2021-07-02 17:43:24'),
(6, 'Dhirubhai Ambani Institute of Information and Communication Technology', 'Dhirubhai Ambani Institute of Information and Communication Technology, is a private Self-financed University/Institute located in Gandhinagar, Gujarat, India. It is named after the Gujarati entrepreneur and Reliance group founder Dhirubhai Ambani', '2021-07-02 17:45:05'),
(7, 'Birla Vishvakarma Mahavidyalaya', 'Birla Vishvakarma Mahavidyalaya is a grant-aided engineering institution located in the educational town of Vallabh Vidyanagar, Gujarat, India. It is affiliated to Gujarat Technological University and became an autonomous institution in August 2015.', '2021-07-02 17:45:41'),
(8, 'Maharaja Sayajirao University of Baroda', 'Maharaja Sayajirao University of Baroda, formerly Baroda College is a public university in the city of Vadodara/Baroda, in Gujarat state, India. Originally established as a college in 1881.', '2021-07-02 17:46:24'),
(9, 'Chandubhai S Patel Institute of Technology', 'Chandubhai S Patel Institute of Technology, is the first institute established in year 2000 at Education Campus, Changa (now CHARUSAT).', '2021-07-02 17:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_by` int(11) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(3, 'Its Nice and Nice environment is there.', 5, 3, '2021-07-08 00:06:31'),
(8, 'Average placement is about 6 to 7 LPA', 6, 10, '2021-07-08 15:27:21'),
(10, 'Environment there is very fine.', 5, 9, '2021-07-08 15:43:20'),
(11, 'Nice', 5, 3, '2021-07-08 15:46:36'),
(12, 'Its fine.', 7, 3, '2021-07-08 15:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(256) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(5, 'About campus', 'Tell me about campus life and environment of in Dharmsinh Desai University.', 1, 8, '2021-07-08 00:05:05'),
(6, 'About placement', 'What is the average placement of it.', 2, 3, '2021-07-08 15:26:18'),
(7, 'About life in it', 'Tell me about life of students at IIT', 2, 3, '2021-07-08 15:31:38'),
(8, 'about faculties', 'tell me about faculties at IIT', 2, 3, '2021-07-08 15:55:19'),
(9, 'what is life at DAIICT', 'What is lif of students at DAIICT', 6, 13, '2021-07-08 16:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `password`, `dt`, `email`) VALUES
(3, 'Meetkumar', '$2y$10$t.noo0/.Bf4QJUlj2.oWj.47gU/CupUpf62P1JDlAA.MdkC94zTzu', '2021-05-23 16:21:38', 'samplephpsendmail@gmail.com'),
(7, 'a', '$2y$10$4ncqvZdzm51puA5psB139O2yu29.3LBjmFt1GhiEBVhQ5vk/uhHIe', '2021-07-07 23:56:54', 'abc1@yahoo.com'),
(8, 'Kushal', '$2y$10$sfqkaTEJS6bUnMCB9Whjoe905MPWmcTh46HIkR4lPWqFDkal79MxC', '2021-07-08 00:04:00', 'kushal@gmail.com'),
(9, 'Jashpal', '$2y$10$kyX5quDVoeq2PYMpxnKYJuFb/eN4JfSgNPlQaeSOn1s9uXNAP20Fq', '2021-07-08 13:52:32', 'samplephpsendmail@gmail.com'),
(10, 'Meet ', '$2y$10$.sILoH3jtVE1Thcjj3ZAg.i6NddebytUxpQzroPyOTfztZVuxzweO', '2021-07-08 15:18:07', 'meet@gmail.com'),
(13, 'Kushal patel', '$2y$10$9cWQU5uAw/MmLuwEuV.zJOWbDmxqfz113uuahA/HBxpuZ.oVBpMdK', '2021-07-08 15:59:24', 'kushalpatel@gmail.com'),
(14, 'Metesh', '$2y$10$GwhCrKnKndAWeUb7R02x3uWL./H1jQaNekbPVgmOZlzpJrJzjS9cK', '2021-07-08 16:01:51', 'abcd@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
