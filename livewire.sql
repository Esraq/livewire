-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2026 at 12:35 PM
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
-- Database: `livewire`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_councils`
--

CREATE TABLE `academic_councils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_councils`
--

INSERT INTO `academic_councils` (`id`, `weight`, `name`, `image`, `position`, `created_at`, `updated_at`) VALUES
(1, 1, 'test', 'uploads/academic-councils/1790058710_1OoGEm.png', 'test', '2026-09-22 00:31:50', '2026-09-22 00:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Eid Event', 'alumni/QoN6vhGwQo8w2ivj0xcz9pOBMYNz4WCgrJnGU75Z.png', 'eid event', '2026-09-21 22:41:28', '2026-09-21 22:41:28'),
(3, 'test', 'alumni/heIQiLEHRmZBLWPMC32ldsKpdIVdeWvEYRFC8A0N.png', 'ftfrvfrv', '2026-09-21 22:52:35', '2026-09-21 22:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `award_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `serial_no`, `faculty_id`, `award_name`, `created_at`, `updated_at`) VALUES
(2, 1, 4, 'South Asia Business Merit Scholarship', '2026-09-21 21:24:32', '2026-09-21 21:24:32'),
(3, 2, 3, 'test', '2026-09-21 21:25:27', '2026-09-21 21:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bots`
--

CREATE TABLE `bots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bots`
--

INSERT INTO `bots` (`id`, `weight`, `name`, `image`, `position`, `created_at`, `updated_at`) VALUES
(2, 1, 'Esraq Humayun', 'uploads/bots/1790057632_JbOcz2.png', 'AP', '2026-09-22 00:13:52', '2026-09-22 00:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `convocations`
--

CREATE TABLE `convocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `convocations`
--

INSERT INTO `convocations` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(5, 'eeeeeeeeeeeeee', 'convocations/KHmhDIa5cPONBYRq54nsplVFkbiDKekvd5vQGC3K.jpg', 'cvrvxrvxv  rgvrvxv vrrrrrrrrrrrrrrrrrrrrrrrrre', '2026-09-21 23:37:15', '2026-09-21 23:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `school_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 3, 'Department of Computer Science And Engineering', '2026-09-21 03:47:17', '2026-09-21 03:47:17'),
(2, 3, 'ICT', '2026-09-21 03:47:17', '2026-09-21 03:47:17'),
(3, 3, 'MIS', '2026-09-21 03:48:33', '2026-09-21 03:48:33'),
(4, 3, 'EEE', '2026-09-21 03:48:33', '2026-09-21 03:48:33'),
(5, 3, 'Mechatronics Engineering', '2026-09-21 03:49:59', '2026-09-21 03:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` int(11) NOT NULL,
  `faculty_id` int(10) NOT NULL,
  `institution_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `serial_no`, `faculty_id`, `institution_name`, `position`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(3, 1, 4, 'diu', 'Lecturer', '2026-09-22', '2026-10-02', '2026-09-21 21:49:19', '2026-09-21 21:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `membership_body` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `serial_no`, `faculty_id`, `membership_body`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 'IEEE', '2026-09-21 21:30:27', '2026-09-21 21:30:27'),
(3, 2, 4, 'ICCA', '2026-09-21 21:30:49', '2026-09-21 21:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2026_09_14_085348_create_results_table', 2),
(6, '2026_09_14_135625_create_trains_table', 3),
(7, '2026_09_14_150505_create_teachings_table', 4),
(8, '2026_09_14_155032_create_research_table', 5),
(9, '2026_09_14_162018_create_publications_table', 6),
(10, '2026_09_14_181116_create_awards_table', 7),
(11, '2026_09_15_031405_create_members_table', 8),
(12, '2026_09_15_034728_create_experiances_table', 9),
(13, '2026_09_20_065030_create_banners_table', 10),
(14, '2026_09_20_071348_create_notices_table', 11),
(15, '2026_09_20_073442_create_alumnis_table', 12),
(16, '2026_09_20_091331_create_convocations_table', 13),
(17, '2026_09_20_094330_create_events_table', 14),
(18, '2026_09_20_095524_create_newsevents_table', 14),
(19, '2026_09_20_101841_create_bots_table', 15),
(20, '2026_09_20_163904_create_syndicates_table', 16),
(21, '2026_09_20_000004_create_academic_councils_table', 17),
(22, '2026_09_21_032942_create_schools_table', 18),
(23, '2026_09_21_033147_create_departments_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `image`, `title`, `file_name`, `date`, `created_at`, `updated_at`) VALUES
(2, 'notices/images/hT7T3hVVo5rLTq2yHCEOFAlffkjNTdNIOAjM3vPq.png', 'IQAC Meeting', 'notices/files/DGyEqQgnozIMWylmKukzgKFcqnm7OrEPrWxv9Y5B.pdf', '2026-09-22', '2026-09-21 22:28:00', '2026-09-21 22:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `doi` varchar(255) NOT NULL,
  `publication_name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `serial_no`, `faculty_id`, `doi`, `publication_name`, `created_at`, `updated_at`) VALUES
(5, 1, 3, 'rahat', 'testrahat', '2026-09-21 21:09:09', '2026-09-21 21:09:09'),
(6, 1, 4, 'https://www.researchgate.net/publication/398944647_Enhancing_Cancer_Diagnosis_Accuracy_with_a_Hybrid_ML_Model_A_Study_on_UAE_Patient_Data', 'Humayun, E., Lim, K. C., Zabil, M. H. M., Do, N. Q., Selamat, A., & Krejcar, O. (2025). Smart Forensics: Leveraging Machine Learning-Driven Solutions for Enhanced Digital Investigations. Scientific Culture, Vol. 11, Current Issue. (Accepted, Scopus/Scimago Q1 Indexed)', '2026-09-21 21:13:20', '2026-09-22 03:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `research_interest` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `serial_no`, `faculty_id`, `research_interest`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'cs', '2026-09-14 10:11:04', '2026-09-14 10:11:23'),
(3, 1, 3, 'ai', '2026-09-21 07:50:52', '2026-09-21 07:50:52'),
(4, 1, 4, 'ML', '2026-09-21 07:52:18', '2026-09-21 07:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `degree_name` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `board` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `degree_name`, `institution`, `board`, `year`, `created_at`, `updated_at`) VALUES
(8, 3, 'BSC CSE', 'KYAU', '-', '2018', '2026-09-20 22:42:16', '2026-09-20 22:42:16'),
(9, 2, 'BSC SWE', 'KYAU', '-', '2018', '2026-09-20 22:43:30', '2026-09-20 22:43:30'),
(10, 4, 'BSC IN Software Engineering', 'AIUB', '-', '2017', '2026-09-21 00:28:33', '2026-09-21 00:28:33'),
(11, 4, 'MSC IN Software Engineering', 'AIUB', '-', '2019', '2026-09-21 00:28:59', '2026-09-21 00:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'School of Business and Social Science', '2026-09-21 03:42:13', '2026-09-21 03:42:13'),
(2, 'School of Biomedical and Life Science', '2026-09-21 03:43:42', '2026-09-21 03:43:42'),
(3, 'School of Science and Engineering', '2026-09-21 03:43:42', '2026-09-21 03:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `syndicates`
--

CREATE TABLE `syndicates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `syndicates`
--

INSERT INTO `syndicates` (`id`, `weight`, `name`, `image`, `position`, `created_at`, `updated_at`) VALUES
(2, 1, 'test', 'uploads/syndicates/1790058194_WOD8Oo.png', 'Lecturer', '2026-09-22 00:23:14', '2026-09-22 00:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `teachings`
--

CREATE TABLE `teachings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `subject_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachings`
--

INSERT INTO `teachings` (`id`, `serial_no`, `faculty_id`, `subject_name`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'AI', '2026-09-14 09:42:15', '2026-09-14 09:42:15'),
(2, 2, NULL, 'CS', '2026-09-14 09:43:28', '2026-09-14 09:43:41'),
(4, 1, 3, 'CSE', '2026-09-21 01:37:46', '2026-09-21 01:37:46'),
(5, 1, 4, 'Mobile Application Development', '2026-09-22 03:28:07', '2026-09-22 03:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `training_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`id`, `serial_no`, `faculty_id`, `training_name`, `created_at`, `updated_at`) VALUES
(3, 1, 4, 'Udemy Flutter Complete Guide', '2026-09-21 01:23:00', '2026-09-21 01:23:00'),
(4, 1, 3, 'testing', '2026-09-21 01:27:58', '2026-09-21 01:27:58'),
(5, 2, 4, 'Laravel Development', '2026-09-22 03:20:02', '2026-09-22 03:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `department_id` int(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `position`, `email`, `mobile_no`, `department_id`, `image`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '', 'admin@gmail.com', '', NULL, NULL, NULL, 1, '$2y$10$vq6ScrZqZY4NRJRuZi50Pekj2rZFvjGWzCljzygI/NKTk9rEOybaO', NULL, '2026-09-12 22:58:22', '2026-09-20 21:25:09'),
(2, 'Esraq Humayun', '', 'teacher@gmail.com', '', 1, NULL, NULL, 0, '$2y$10$VP9xtBDdWdqzb701.s41b.ZyV0NMG.GyUF2dwjsQBBhzbzIM.rU.S', NULL, '2026-09-12 22:58:22', '2026-09-20 22:05:45'),
(3, 'Md.Rahat Khan', '', 'rahat.cse@kyau.edu.bd', '017752866376', 1, 'uploads/users/1789964093_d3PTYg.png', NULL, 0, '$2y$10$bt7HYqGcbAbWc/YQvcKpwe.fb.PYG3fSuXb3ku7LHXl0vscps32f2', NULL, '2026-09-20 22:14:53', '2026-09-21 22:09:54'),
(4, 'Esraq Humayun', 'Assistant Professor', 'esraq.cse@kyau.edu.bd', '01784212041', 1, 'uploads/users/1789972054_ol6t6j.jpg', NULL, 0, '$2y$10$VdO4dfocUZACTixp0w7b4OX5rYaT.LQzvQvrpk092JNS6P9bFgsKm', NULL, '2026-09-21 00:27:34', '2026-09-21 01:02:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_councils`
--
ALTER TABLE `academic_councils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bots`
--
ALTER TABLE `bots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `convocations`
--
ALTER TABLE `convocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `experiences_serial_no_unique` (`serial_no`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syndicates`
--
ALTER TABLE `syndicates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachings`
--
ALTER TABLE `teachings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_councils`
--
ALTER TABLE `academic_councils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bots`
--
ALTER TABLE `bots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `convocations`
--
ALTER TABLE `convocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `syndicates`
--
ALTER TABLE `syndicates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachings`
--
ALTER TABLE `teachings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
