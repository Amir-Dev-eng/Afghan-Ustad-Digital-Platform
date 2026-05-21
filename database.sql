-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2026 at 12:00 PM
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
-- Database: `afghanustaddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `instructor` varchar(150) NOT NULL,
  `instructor_image` varchar(500) DEFAULT NULL,
  `description` text NOT NULL,
  `duration` varchar(50) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `course_file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `instructor`, `instructor_image`, `description`, `duration`, `thumbnail`, `course_file`, `created_at`) VALUES
(11, 'Ms Word', 'Afghan Ustad', '1766666450_portrait-young-woman-checking-organic-groceries.png', 'aljlkaj', '3 Houirs', '1766666450_reading-recipe.png', '1766644264_Men Perfumes.zip', '2025-12-25 06:31:04'),
(12, 'Math Of Tenth Class', 'Amir khan', '1766666242_task_01kbmpj70nfsf8z9ht5c9hbdz7_1764852707_img_1.webp', 'This is the Math\'s lecture Teach By Amir Khan Niazai', '12 hours', '1766666242_reading-recipe.png', '1766666242_RE_ Images for ND.zip', '2025-12-25 12:37:22'),
(13, 'HTML', 'Amirkhan', '1766670582_portrait-young-woman-checking-organic-groceries.png', 'HThis Course Design for Beginners', '3 hours', '1766670582_portrait-young-woman-checking-organic-groceries.png', '1766670582_RE_ Images for ND.zip', '2025-12-25 13:49:42'),
(14, 'CSS', 'Imdad', '1766671178_diet-concept-with-female-scientist-healthy-food.png', 'ghkjdkdjf', '5', '1766671178_delicious-veggie-dishes-still-life.png', '1766671178_Men Perfumes.zip', '2025-12-25 13:59:38'),
(16, 'Ms Word', 'Amin', '1766685471_A head-turning, men\'s vanilla cologne intertwining….jpg', 'ok', '12 hours', '1766685471_20 Best Selling & Smelling Cologne (2021).jpg', '1766685471_MY COURSES.zip', '2025-12-25 17:57:51'),
(17, 'java', 'Ezatullah', '1766919728_reading-recipe.png', 'Ezat is a good teacher', '12 hours', '1766919728_reading-recipe.png', '1766919728_Denim-16-2-1.zip', '2025-12-28 11:02:08'),
(18, 'Bootstrap', 'Amirkhan', '1766919822_Apple_logo_black.svg', 'Amirkhan is eligibl for this', '13 Hours', '1766919822_delicious-veggie-dishes-still-life.png', '1766919822_MY COURSES.zip', '2025-12-28 11:03:42'),
(19, 'UI/UX', 'Hamasi', '1766919928_Apple_logo_black.svg', 'Amin is perfect for this course', '3 hours', '1766919928_delicious-veggie-dishes-still-life.png', '1766919928_Men Perfumes.zip', '2025-12-28 11:05:28'),
(20, 'React', 'Shan Safi', '1766919990_reading-recipe.png', 'Shan is pefect for this course', '23 hours', '1766919990_delicious-veggie-dishes-still-life.png', '1766919990_Men Perfumes.zip', '2025-12-28 11:06:30'),
(21, 'Shopify', 'Said', '1766920267_download.png', 'Said is full stack developer', '8 hours', '1766920267_delicious-veggie-dishes-still-life.png', '1766920267_RE_ Images for ND.zip', '2025-12-28 11:11:07'),
(23, 'kankor', 'Shabrooz', '1766920409_A1B24332-3145-410C-8B25-8F86A7C332DB.webp', 'He is one the special teacher of this course', '3 Months', '1766920409_delicious-veggie-dishes-still-life.png', '1766920409_MY COURSES.zip', '2025-12-28 11:13:29'),
(24, 'hdhd', 'djkbfk', '1767029111_5ED31F1A-CA4D-43F3-9491-BA9950E02DDD.webp', 'jhdk', '34', '1767029111_A7552720-4D70-49EC-B2F4-1F86DF68C8D7 (2).webp', '1767029111_MY COURSES.zip', '2025-12-29 17:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('unread','read') DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `status`) VALUES
(5, 'Sliman', 'slimannaizai123@gmail.com', '099887788', 'hjah', 'angknqe', '2026-01-01 06:50:44', 'read'),
(6, 'Naeem', 'amir1@gmail.com', '0787485538', 'Web Creating', 'jkhrkgjhe', '2026-01-01 07:01:49', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `media` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `media`, `status`, `created_at`, `updated_at`) VALUES
(5, 'ghjj', 'jkkk', '1767195422_c8b945cc1abb433bacac002c12e4e39b.HD-720p-3.0Mbps-50021933.mp4', 1, '2025-12-31 15:37:02', '2025-12-31 15:37:02'),
(6, 'Math', 'This Course is very Perfect', '1767196000_reading-recipe.png', 1, '2025-12-31 15:46:40', '2025-12-31 15:46:40'),
(7, 'Chemistry', 'I want to start this Course', '1767199779_WhatsApp Video 2025-12-16 at 11.45.30_6f9865a7.mp4', 1, '2025-12-31 16:49:39', '2025-12-31 16:49:39'),
(9, 'Kankor Preparation Full Course With Afghan ustad', 'دغه شمېر کډوال له ایران او پاکستان څخه په جبر د تورخم، سپین بولدک، بهرامچې، ورېښمو پل او اسلام کلا له لارو هېواد ته راستانه شوي.\r\n\r\nیاد کمېسیون ویلي، تېره ورځ یي ۶۹۴کډوالې کورنۍ بیا خپلو اصلې مېنو ته انتقال کړې دي.\r\n\r\nپه تازه راستنو شویو کډوالو میلیونونه افغانۍ نغدي مرستې هم وېشل شوې.', '1767206133_portrait-young-woman-checking-organic-groceries.png', 1, '2025-12-31 18:35:33', '2025-12-31 18:35:33'),
(10, 'Siman', 'lkafadkjhkajdskjhkjahi', '1767250622_diet-concept-with-female-scientist-healthy-food.png', 1, '2026-01-01 06:57:02', '2026-01-01 06:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Admin Afghan Ustad', 'afghanustad789@gmail.com', '$2y$10$iV4NfLHlFvuoo2dD8K4e4uOHGnwcOcKo4LfuEyn1kRuCCT92MERZ6', 'admin', '2025-12-21 10:10:22'),
(3, 'Afghan Ustad', 'afghanustad789.com', '$2y$10$psC82c6s79Io6dFGR50dsepy40p7Rjimx4L07hfl5z0J6knGdaGRW', 'admin', '2025-12-21 15:08:59'),
(4, 'faisal Niazai', 'faisal789@gmail.com', '$2y$10$5yQoPhNZs3Mmip2lJdz3EenEostykgnFhN9cfVD6C71GSLsyIsJY6', 'user', '2025-12-21 15:19:39'),
(5, 'Afsar', 'afsar123@gmail.com', '$2y$10$ihUdvFt69Tae3vrOfrRaSuRR/BqdOF1u0IVdl/ZmKvbIRv5dohF.6', 'user', '2025-12-21 15:20:28'),
(6, 'Ezatullah', 'ezat123@gmail.com', '$2y$10$4gfHnIntlMiomiFD5AviGer6b8lWITAXeYeqrJB0Jae7e6GSZ93dm', 'user', '2025-12-21 15:26:29'),
(7, 'Afghan Ustad', 'afghanustad@gmail.com', '$2y$10$glEIXKb2A51Y9YdlkhkwiO2RE4M2RHvE6xBBLQ3aRvIpCXOMAjAhi', 'admin', '2025-12-21 16:08:15'),
(8, 'Inaam', 'inaam@gmail.com', '$2y$10$CxdVG/od2ko..kcqmUz/c.ETFr.4.a3ydBt8EM4iVT7Ec8tDosWI.', 'user', '2025-12-22 10:01:17'),
(9, 'aa', 'aa@gmail.com', '$2y$10$5XEQ2xmoBLGKqeWNed8J3ODOszHZcBxiMsoDnvIMWaHIPp3E9YuUe', 'user', '2025-12-22 13:38:22'),
(10, 'Amirkhan Mutaqi', 'amirkhan89@gmail.com', '$2y$10$2qOdEomFCfbXURCL95pBXuKMZ2DSZJl9YFjJ0Mm5qK2Cu4XtZW52a', 'user', '2025-12-29 07:24:47'),
(11, 'Imran', 'imrankhan789@gmail.com', '$2y$10$baITJG6dyQQMgUk4C8Yvx.YjloWNipfE92SraR5hotIXzNKpv8qR6', 'user', '2025-12-31 09:23:31'),
(12, 'Said', 'said123@gmail.com', '$2y$10$QNJex7Xi00WU/Mn2nZi.6O7DAuvenDz0lZ/3W6/2bRIShXdNORCGq', 'user', '2025-12-31 09:24:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
