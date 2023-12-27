-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2023 at 11:28 AM
-- Server version: 8.0.32
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `category` varchar(50) DEFAULT NULL,
  `image_link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `title`, `description`, `category`, `image_link`) VALUES
(1, 'Linux for Beginners', 'Learn the basics of Linux operating system and get started with Linux.', 'Linux', 'images/images5.jpg'),
(2, 'Linux Command Line Basics', 'Explore the command line interface in Linux and master essential command line skills.', 'Linux', 'images/images1.jpg'),
(3, 'Learn Linux in 5 Days and Level Up Your Career', 'Get hands-on experience with Linux and boost your career prospects.', 'Linux', 'images/courses-image3.jpg'),
(4, 'Linux Administration: Go from Beginner to Advanced', 'Become proficient in Linux system administration and manage Linux servers effectively.', 'Linux', 'images/images5.jpg'),
(5, 'Linux Shell Scripting: A Project-Based Approach to Learning', 'Develop practical shell scripting skills in Linux through hands-on projects.', 'Linux', 'images/images1.jpg'),
(6, 'Prenatal Yoga', 'Learn safe and effective yoga practices during pregnancy.', 'Health & Fitness', 'images/yoga3.jpg'),
(7, 'Exercise Physiology', 'Understand the science behind exercise and how it affects the human body.', 'Health & Fitness', 'images/yoga2.jpg'),
(8, '15 Minutes x 15 Days Yoga Mobility Challenge', 'Improve your flexibility and mobility through a 15-day yoga challenge.', 'Health & Fitness', 'images/yoga3.jpg'),
(9, 'Diet And Nutrition Coach Certification: Beginner To Advanced', 'Become a certified diet and nutrition coach with comprehensive knowledge.', 'Health & Fitness', 'images/yoga2.jpg'),
(10, 'The No. 1 Breathwork & Meditation course | \"Breath is Life\"', 'Learn various breathwork and meditation techniques for holistic well-being.', 'Health & Fitness', 'images/yoga3.jpg'),
(11, 'Discover Your Life Purpose', 'Uncover your life purpose and align your career choices accordingly.', 'Career Development', 'images/my1.jpg'),
(12, 'Win Any Job Interview - TOP Strategies For Job Interviews', 'Master effective strategies to excel in job interviews and secure your dream job.', 'Career Development', 'images/my3.jpg'),
(13, 'Career Hacking: World\'s Bestselling Job Search Course', 'Learn proven techniques for job searching and stand out in the competitive job market.', 'Career Development', 'images/courses-image2.jpg'),
(14, 'Career Change: Become a Paid Expert in What You Love', 'Transition into a new career and become an expert in the field you are passionate about.', 'Career Development', 'images/slider-image1.jpg'),
(15, 'Dressing to Win in the Workplace', 'Discover the art of dressing professionally and confidently in the workplace.', 'Career Development', 'images/courses-image5.jpg'),
(16, 'Ultimate Web Designer & Web Developer Course', 'Become a proficient web designer and developer with this comprehensive course.', 'Web Development', 'images/courses-image1.jpg'),
(17, 'HTML5 and CSS3 Fundamentals', 'Master the fundamentals of HTML5 and CSS3 for creating modern and responsive websites.', 'Web Development', 'images/courses-image1.jpg'),
(18, 'The Advanced Web Developer Bootcamp', 'Take your web development skills to the next level with advanced techniques and projects.', 'Web Development', 'images/courses-image3.jpg'),
(19, 'Javascript for Beginners', 'Learn the basics of JavaScript programming language for adding interactivity to websites.', 'Web Development', 'images/courses-image4.jpg'),
(20, 'Programming for Entrepreneurs - JavaScript', 'Develop entrepreneurial skills through JavaScript programming and build real-world projects.', 'Web Development', 'images/courses-image5.jpg'),
(21, 'Discover Your Life Purpose', 'Uncover your life purpose and align your career choices accordingly.', 'Personality Development', 'images/my1.jpg'),
(22, 'Win Any Job Interview - TOP Strategies For Job Interviews', 'Master effective strategies to excel in job interviews and secure your dream job.', 'Personality Development', 'images/my3.jpg'),
(23, 'Career Hacking: World\'s Bestselling Job Search Course', 'Learn proven techniques for job searching and stand out in the competitive job market.', 'Personality Development', 'images/my1.jpg'),
(24, 'Career Change: Become a Paid Expert in What You Love', 'Transition into a new career and become an expert in the field you are passionate about.', 'Personality Development', 'images/my3.jpg'),
(25, 'Dressing to Win in the Workplace', 'Discover the art of dressing professionally and confidently in the workplace.', 'Personality Development', 'images/my1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `popularcourses`
--

CREATE TABLE `popularcourses` (
  `pcid` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `popularcourses`
--

INSERT INTO `popularcourses` (`pcid`, `title`, `description`, `image`) VALUES
(1, 'Learn Linux in 5 Days and Level Up Your Career', 'Use the in-demand Linux skills you learn in this course to get promoted or start a new career as a Linux professional.', 'images/courses-image3.jpg'),
(2, 'Graphic & Web Design', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'images/courses-image2.jpg'),
(3, 'Marketing Communication', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'images/courses-image3.jpg'),
(4, 'Summer Kids', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'images/courses-image4.jpg'),
(5, 'Business & Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'images/courses-image5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup_data`
--

CREATE TABLE `signup_data` (
  `id` int NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `semail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `spassword` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `scpassword` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_data`
--

INSERT INTO `signup_data` (`id`, `user_name`, `semail`, `spassword`, `scpassword`) VALUES
(1, 'Akash T', 'akshay@gmail.com', 'root', 'root'),
(6, 'mrsanw', 'akshday@gmail.com', 'i', 'i'),
(7, 'test', 'test@gmail.com', '12345', '12345'),
(8, 'Akash Tq', 'dd@gmail.com', 'q', 'q'),
(9, 'Ayana', 'fff@gmail.com', 'l', 'l'),
(10, 'Akz', 'akashtyo@gmail.com', 'test', 'test'),
(11, 'Abc', 'admin@gmail.com', '123456', '123456'),
(12, 'xyz', 'ashok93tidke@gmail.com', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `video_progress`
--

CREATE TABLE `video_progress` (
  `pid` int NOT NULL,
  `id` int NOT NULL,
  `video_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `progress` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_progress`
--

INSERT INTO `video_progress` (`pid`, `id`, `video_id`, `progress`) VALUES
(1, 10, 'video1', '32'),
(2, 10, 'video1', '32'),
(3, 10, 'video1', '32'),
(4, 10, 'video1', '45'),
(5, 10, 'video1', '45'),
(6, 10, 'video1', '45'),
(7, 10, 'video1', '45'),
(8, 10, 'video1', '45'),
(9, 10, 'video1', '30'),
(10, 10, 'video1', '30'),
(11, 10, 'video1', '30'),
(12, 10, 'video1', '30'),
(13, 10, 'video1', '30'),
(14, 10, 'video1', '64'),
(15, 10, 'video1', '64'),
(16, 10, 'video1', '64'),
(17, 10, 'video1', '64'),
(18, 10, 'video1', '80'),
(19, 10, 'video1', '80'),
(20, 10, 'video1', '80'),
(21, 10, 'video1', '80'),
(22, 10, 'video1', '80'),
(23, 10, 'video1', '80'),
(24, 10, 'video1', '80'),
(25, 10, 'video1', '80'),
(26, 10, 'video1', '37'),
(27, 10, 'video1', '37'),
(28, 10, 'video1', '37'),
(29, 10, 'video1', '37'),
(30, 10, 'video1', '38'),
(31, 1, 'video1', '22'),
(32, 1, 'video1', '42'),
(33, 1, 'video1', '56'),
(34, 1, 'video1', '68'),
(35, 1, 'video1', '80'),
(36, 1, 'video1', '99'),
(37, 9, 'video1', '46'),
(38, 9, 'video1', '54'),
(39, 1, 'video1', '0'),
(40, 1, 'video1', '0'),
(41, 1, 'video1', '0'),
(42, 1, 'video1', '0'),
(43, 1, 'video1', '0'),
(44, 1, 'video1', '0'),
(45, 1, 'video1', '0'),
(46, 1, 'video1', '40'),
(47, 1, 'video1', '40'),
(48, 1, 'video1', '63'),
(49, 1, 'video1', '40'),
(50, 1, 'video1', '63'),
(51, 1, 'video1', '63'),
(52, 1, 'video1', '78'),
(53, 1, 'video1', '78'),
(54, 1, 'video1', '78'),
(55, 1, 'video1', '78'),
(56, 1, 'video1', '78'),
(57, 1, 'video1', '78'),
(58, 1, 'video1', '78'),
(59, 1, 'video1', '78'),
(60, 1, 'video1', '78'),
(61, 1, 'video1', '78'),
(62, 1, 'video1', '54'),
(63, 1, 'video1', '54'),
(64, 1, 'video1', '54'),
(65, 1, 'video1', '54'),
(66, 1, 'video1', '54'),
(67, 1, 'video1', '54'),
(68, 1, 'video1', '54'),
(69, 1, 'video1', '42'),
(70, 1, 'video1', '42'),
(71, 1, 'video1', '42'),
(72, 1, 'video1', '29'),
(73, 1, 'video1', '29'),
(74, 1, 'video1', '29'),
(75, 1, 'video1', '29'),
(76, 1, 'video1', '29'),
(77, 1, 'video1', '68'),
(78, 1, 'video1', '68'),
(79, 1, 'video1', '68'),
(80, 1, 'video1', '69'),
(81, 1, 'video1', '69'),
(82, 1, 'video1', '69'),
(83, 1, 'video1', '69'),
(84, 1, 'video1', '69'),
(85, 1, 'video1', '69'),
(86, 1, 'video1', '69'),
(87, 1, 'video1', '69'),
(88, 1, 'video1', '69'),
(89, 1, 'video1', '69'),
(90, 1, 'video1', '69'),
(91, 1, 'video1', '69'),
(92, 1, 'video1', '69'),
(93, 1, 'video1', '69'),
(94, 1, 'video1', '69'),
(95, 1, 'video1', '69'),
(96, 1, 'video1', '69'),
(97, 1, 'video1', '69'),
(98, 1, 'video1', '69'),
(99, 1, 'video1', '69'),
(100, 1, 'video1', '69'),
(101, 1, 'video1', '69'),
(102, 1, 'video1', '69'),
(103, 1, 'video1', '70'),
(104, 1, 'video1', '70'),
(105, 1, 'video1', '70'),
(106, 1, 'video1', '70'),
(107, 1, 'video1', '70'),
(108, 1, 'video1', '70'),
(109, 1, 'video1', '70'),
(110, 1, 'video1', '70'),
(111, 1, 'video1', '70'),
(112, 1, 'video1', '70'),
(113, 1, 'video1', '70'),
(114, 1, 'video1', '70'),
(115, 1, 'video1', '70'),
(116, 1, 'video1', '70'),
(117, 1, 'video1', '70'),
(118, 1, 'video1', '70'),
(119, 1, 'video1', '70'),
(120, 1, 'video1', '70'),
(121, 1, 'video1', '70'),
(122, 1, 'video1', '70'),
(123, 1, 'video1', '70'),
(124, 1, 'video1', '70'),
(125, 1, 'video1', '71'),
(126, 1, 'video1', '71'),
(127, 1, 'video1', '71'),
(128, 1, 'video1', '71'),
(129, 1, 'video1', '71'),
(130, 1, 'video1', '71'),
(131, 1, 'video1', '71'),
(132, 1, 'video1', '71'),
(133, 1, 'video1', '71'),
(134, 1, 'video1', '71'),
(135, 1, 'video1', '71'),
(136, 1, 'video1', '71'),
(137, 1, 'video1', '71'),
(138, 1, 'video1', '71'),
(139, 1, 'video1', '71'),
(140, 1, 'video1', '71'),
(141, 1, 'video1', '71'),
(142, 1, 'video1', '71'),
(143, 1, 'video1', '71'),
(144, 1, 'video1', '71'),
(145, 1, 'video1', '71'),
(146, 1, 'video1', '71'),
(147, 1, 'video1', '71'),
(148, 1, 'video1', '72'),
(149, 1, 'video1', '35'),
(150, 1, 'video1', '54'),
(151, 1, 'video1', '54'),
(152, 1, 'video1', '54'),
(153, 1, 'video1', '54'),
(154, 1, 'video1', '54'),
(155, 1, 'video1', '54'),
(156, 1, 'video1', '72'),
(157, 1, 'video1', '72'),
(158, 1, 'video1', '72'),
(159, 1, 'video1', '72'),
(160, 1, 'video1', '72'),
(161, 1, 'video1', '72'),
(162, 1, 'video1', '72'),
(163, 1, 'video1', '72'),
(164, 1, 'video1', '72'),
(165, 1, 'video1', '73'),
(166, 1, 'video1', '73'),
(167, 1, 'video1', '73'),
(168, 1, 'video1', '73'),
(169, 1, 'video1', '73'),
(170, 1, 'video1', '73'),
(171, 1, 'video1', '73'),
(172, 1, 'video1', '73'),
(173, 1, 'video1', '73'),
(174, 1, 'video1', '73'),
(175, 1, 'video1', '73'),
(176, 1, 'video1', '73'),
(177, 1, 'video1', '73'),
(178, 1, 'video1', '73'),
(179, 1, 'video1', '73'),
(180, 12, 'video1', '0'),
(181, 12, 'video1', '0'),
(182, 12, 'video1', '0'),
(183, 12, 'video1', '0'),
(184, 12, 'video1', '0'),
(185, 12, 'video1', '0'),
(186, 12, 'video1', '0'),
(187, 12, 'video1', '52'),
(188, 12, 'video1', '52'),
(189, 12, 'video1', '52'),
(190, 12, 'video1', '52'),
(191, 12, 'video1', '52'),
(192, 12, 'video1', '74'),
(193, 12, 'video1', '74'),
(194, 12, 'video1', '74'),
(195, 12, 'video1', '74'),
(196, 12, 'video1', '74'),
(197, 12, 'video1', '89'),
(198, 12, 'video1', '89'),
(199, 12, 'video1', '89'),
(200, 12, 'video1', '89'),
(201, 12, 'video1', '89'),
(202, 12, 'video1', '89'),
(203, 12, 'video1', '89'),
(204, 12, 'video1', '22'),
(205, 12, 'video1', '22'),
(206, 12, 'video1', '22'),
(207, 12, 'video1', '22'),
(208, 12, 'video1', '22'),
(209, 12, 'video1', '22'),
(210, 12, 'video1', '22'),
(211, 12, 'video1', '53'),
(212, 12, 'video1', '53'),
(213, 12, 'video1', '53'),
(214, 12, 'video1', '53'),
(215, 12, 'video1', '53'),
(216, 12, 'video1', '53'),
(217, 12, 'video1', '53'),
(218, 12, 'video1', '53'),
(219, 12, 'video1', '53'),
(220, 12, 'video1', '53'),
(221, 12, 'video1', '53'),
(222, 12, 'video1', '53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `popularcourses`
--
ALTER TABLE `popularcourses`
  ADD PRIMARY KEY (`pcid`);

--
-- Indexes for table `signup_data`
--
ALTER TABLE `signup_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_progress`
--
ALTER TABLE `video_progress`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `popularcourses`
--
ALTER TABLE `popularcourses`
  MODIFY `pcid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup_data`
--
ALTER TABLE `signup_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `video_progress`
--
ALTER TABLE `video_progress`
  MODIFY `pid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
