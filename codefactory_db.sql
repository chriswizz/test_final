-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2019 at 10:56 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codefactory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(55) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `title`, `image`, `description`, `active`) VALUES
(1, 'Frontend Developer', '', 'Quis sint consectetur et sunt consequat eiusmod pariatur in eiusmod et quis non. Ut duis proident consectetur amet cupidatat velit proident ea dolor ut dolor in.', 1),
(2, 'Full Stack Web Developer', '', 'Quis sint consectetur et sunt consequat eiusmod pariatur in eiusmod et quis non. Ut duis proident consectetur amet cupidatat velit proident ea dolor ut dolor in.', 1),
(3, 'Backend Developer', '', 'Quis sint consectetur et sunt consequat eiusmod pariatur in eiusmod et quis non. Ut duis proident consectetur amet cupidatat velit proident ea dolor ut dolor in.', 1),
(4, 'BIM Factory', '', 'Quis sint consectetur et sunt consequat eiusmod pariatur in eiusmod et quis non. Ut duis proident consectetur amet cupidatat velit proident ea dolor ut dolor in.', 1),
(5, 'Basic Course JavaScript', '', 'Quis sint consectetur et sunt consequat eiusmod pariatur in eiusmod et quis non. Ut duis proident consectetur amet cupidatat velit proident ea dolor ut dolor in.', 1),
(6, 'Basic Course HTML/CSS', '', 'Quis sint consectetur et sunt consequat eiusmod pariatur in eiusmod et quis non. Ut duis proident consectetur amet cupidatat velit proident ea dolor ut dolor in.', 1),
(7, 'Python Programming', '', 'Quis sint consectetur et sunt consequat eiusmod pariatur in eiusmod et quis non. Ut duis proident consectetur amet cupidatat velit proident ea dolor ut dolor in.', 1),
(8, 'Java Developer', '', 'Quis sint consectetur et sunt consequat eiusmod pariatur in eiusmod et quis non. Ut duis proident consectetur amet cupidatat velit proident ea dolor ut dolor in.', 1),
(9, 'UX Design for Coders', '', 'Quis sint consectetur et sunt consequat eiusmod pariatur in eiusmod et quis non. Ut duis proident consectetur amet cupidatat velit proident ea dolor ut dolor in.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses_tags`
--

CREATE TABLE `courses_tags` (
  `course_tag_id` int(11) UNSIGNED NOT NULL,
  `fk_course_id` int(11) UNSIGNED DEFAULT NULL,
  `fk_tag_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_tags`
--

INSERT INTO `courses_tags` (`course_tag_id`, `fk_course_id`, `fk_tag_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 6),
(5, 1, 7),
(6, 1, 8),
(7, 1, 9),
(8, 1, 10),
(9, 1, 11),
(10, 1, 12),
(11, 1, 13),
(12, 2, 1),
(13, 2, 2),
(14, 2, 3),
(15, 2, 6),
(16, 2, 7),
(17, 2, 8),
(18, 2, 9),
(19, 2, 10),
(20, 2, 11),
(21, 2, 12),
(22, 2, 13),
(23, 2, 14),
(24, 2, 15),
(25, 2, 16),
(26, 2, 17),
(27, 2, 18),
(28, 2, 19),
(29, 3, 1),
(30, 3, 2),
(31, 3, 3),
(32, 3, 14),
(33, 3, 15),
(34, 3, 16),
(35, 3, 17),
(36, 3, 18),
(37, 3, 19),
(38, 4, 1),
(39, 4, 4),
(40, 4, 20),
(41, 5, 1),
(42, 5, 5),
(43, 5, 9),
(44, 6, 1),
(45, 6, 5),
(46, 6, 7),
(47, 6, 8),
(48, 7, 1),
(49, 7, 3),
(50, 7, 21),
(51, 8, 1),
(52, 8, 3),
(53, 8, 22),
(54, 9, 1),
(55, 9, 2),
(56, 9, 5),
(57, 9, 23);

-- --------------------------------------------------------

--
-- Table structure for table `course_items`
--

CREATE TABLE `course_items` (
  `course_item_id` int(11) UNSIGNED NOT NULL,
  `fk_course_id` int(11) UNSIGNED DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `price` int(11) NOT NULL,
  `active` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_items`
--

INSERT INTO `course_items` (`course_item_id`, `fk_course_id`, `start_date`, `end_date`, `price`, `active`) VALUES
(1, 1, '2019-09-09', '2019-10-31', 249000, 1),
(2, 1, '2020-01-13', '2020-03-05', 249000, 1),
(3, 1, '2020-05-11', '2020-07-02', 249000, 1),
(4, 1, '2020-09-07', '2020-10-30', 249000, 1),
(5, 2, '2020-01-13', '2020-04-23', 399000, 1),
(6, 2, '2020-05-11', '2020-08-20', 399000, 1),
(7, 2, '2020-09-07', '2020-12-17', 399000, 1),
(8, 3, '2019-11-04', '2019-12-20', 249000, 1),
(9, 3, '2020-03-09', '2020-04-23', 249000, 1),
(10, 3, '2020-07-06', '2020-08-20', 249000, 1),
(11, 3, '2020-11-02', '2020-12-17', 249000, 1),
(12, 4, '2019-02-04', '2019-03-29', 250000, 1),
(13, 5, '2019-08-31', '2019-09-01', 29000, 1),
(14, 5, '2019-09-21', '2019-09-22', 29000, 1),
(15, 5, '2019-10-19', '2019-10-20', 29000, 1),
(16, 5, '2019-11-23', '2019-11-24', 29000, 1),
(17, 5, '2020-01-11', '2020-01-12', 29000, 1),
(18, 5, '2020-02-22', '2020-02-23', 29000, 1),
(19, 5, '2020-03-21', '2020-03-22', 29000, 1),
(20, 5, '2020-04-18', '2020-04-19', 29000, 1),
(21, 5, '2020-05-23', '2020-05-24', 29000, 1),
(22, 5, '2020-06-20', '2020-06-21', 29000, 1),
(23, 5, '2020-07-18', '2020-07-19', 29000, 1),
(24, 5, '2020-08-22', '2020-08-23', 29000, 1),
(25, 5, '2020-09-19', '2020-09-20', 29000, 1),
(26, 5, '2020-10-17', '2020-10-18', 29000, 1),
(27, 5, '2020-11-21', '2020-11-22', 29000, 1),
(28, 5, '2020-12-19', '2020-12-20', 29000, 1),
(29, 6, '2019-11-09', '2019-11-10', 29000, 1),
(30, 6, '2019-11-30', '2019-12-01', 29000, 1),
(31, 6, '2020-02-08', '2020-02-09', 29000, 1),
(32, 6, '2020-03-07', '2020-03-08', 29000, 1),
(33, 6, '2020-04-04', '2020-04-05', 29000, 1),
(34, 6, '2020-05-09', '2020-05-10', 29000, 1),
(35, 6, '2020-06-06', '2020-06-07', 29000, 1),
(36, 6, '2020-07-04', '2020-07-05', 29000, 1),
(37, 6, '2020-08-08', '2020-08-09', 29000, 1),
(38, 6, '2020-09-05', '2020-09-06', 29000, 1),
(39, 6, '2020-10-03', '2020-10-04', 29000, 1),
(40, 6, '2020-11-07', '2020-11-08', 29000, 1),
(41, 6, '2020-12-05', '2020-12-06', 29000, 1),
(42, 7, '2020-03-23', '2020-03-26', 45000, 1),
(43, 7, '2020-05-11', '2020-05-14', 45000, 1),
(44, 7, '2020-07-06', '2020-07-09', 45000, 1),
(45, 7, '2020-09-07', '2020-09-10', 45000, 1),
(46, 7, '2020-11-02', '2020-11-05', 45000, 1),
(47, 8, '2019-11-18', '2020-01-24', 249000, 1),
(48, 8, '2020-03-09', '2020-05-07', 249000, 1),
(49, 8, '2020-06-15', '2020-08-06', 249000, 1),
(50, 8, '2020-09-07', '2020-10-30', 249000, 1),
(53, 9, '2019-05-11', '2019-05-12', 45000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) UNSIGNED NOT NULL,
  `tag` varchar(55) NOT NULL,
  `fk_tag_category` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_id`, `tag`, `fk_tag_category`) VALUES
(1, 'Beginner', 1),
(2, 'Advanced', 1),
(3, 'Full time', 2),
(4, 'Part time', 2),
(5, 'Weekend', 2),
(6, 'Version Control (Git -GitHub)', 3),
(7, 'HTML5', 3),
(8, 'CSS3', 3),
(9, 'JavaScript', 3),
(10, 'jQuery', 3),
(11, 'Bootstrap', 3),
(12, 'TypeScript', 3),
(13, 'Angular 6.0', 3),
(14, 'SQL (MySQL)', 3),
(15, 'PHP', 3),
(16, 'AJAX', 3),
(17, 'Symfony PHP framework', 3),
(18, 'WordPress', 3),
(19, 'Software Testing', 3),
(20, 'BIM', 3),
(21, 'Python', 3),
(22, 'Java', 3),
(23, 'UX', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tag_categories`
--

CREATE TABLE `tag_categories` (
  `tag_category_id` int(11) UNSIGNED NOT NULL,
  `tag_category` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag_categories`
--

INSERT INTO `tag_categories` (`tag_category_id`, `tag_category`) VALUES
(1, 'Level'),
(2, 'Time'),
(3, 'Content');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_email` varchar(55) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_course_items`
--

CREATE TABLE `users_course_items` (
  `user_course_item_id` int(11) UNSIGNED NOT NULL,
  `fk_user_id` int(11) UNSIGNED DEFAULT NULL,
  `fk_course_item_id` int(11) UNSIGNED DEFAULT NULL,
  `registered` tinyint(1) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `courses_tags`
--
ALTER TABLE `courses_tags`
  ADD PRIMARY KEY (`course_tag_id`),
  ADD KEY `fk_course_id` (`fk_course_id`),
  ADD KEY `fk_tag_id` (`fk_tag_id`);

--
-- Indexes for table `course_items`
--
ALTER TABLE `course_items`
  ADD PRIMARY KEY (`course_item_id`),
  ADD KEY `fk_course_id` (`fk_course_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `fk_tag_category` (`fk_tag_category`);

--
-- Indexes for table `tag_categories`
--
ALTER TABLE `tag_categories`
  ADD PRIMARY KEY (`tag_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_course_items`
--
ALTER TABLE `users_course_items`
  ADD PRIMARY KEY (`user_course_item_id`),
  ADD KEY `fk_user_id` (`fk_user_id`),
  ADD KEY `fk_course_item_id` (`fk_course_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses_tags`
--
ALTER TABLE `courses_tags`
  MODIFY `course_tag_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `course_items`
--
ALTER TABLE `course_items`
  MODIFY `course_item_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tag_categories`
--
ALTER TABLE `tag_categories`
  MODIFY `tag_category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_course_items`
--
ALTER TABLE `users_course_items`
  MODIFY `user_course_item_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses_tags`
--
ALTER TABLE `courses_tags`
  ADD CONSTRAINT `courses_tags_ibfk_1` FOREIGN KEY (`fk_course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `courses_tags_ibfk_2` FOREIGN KEY (`fk_tag_id`) REFERENCES `tags` (`tag_id`);

--
-- Constraints for table `course_items`
--
ALTER TABLE `course_items`
  ADD CONSTRAINT `course_items_ibfk_1` FOREIGN KEY (`fk_course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_ibfk_1` FOREIGN KEY (`fk_tag_category`) REFERENCES `tag_categories` (`tag_category_id`);

--
-- Constraints for table `users_course_items`
--
ALTER TABLE `users_course_items`
  ADD CONSTRAINT `users_course_items_ibfk_1` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `users_course_items_ibfk_2` FOREIGN KEY (`fk_course_item_id`) REFERENCES `course_items` (`course_item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
