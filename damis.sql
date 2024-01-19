-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 05:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assets`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asset_no` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `serial_no` varchar(50) DEFAULT NULL,
  `cost` bigint(20) NOT NULL,
  `gfs_code` varchar(255) DEFAULT NULL,
  `gfs_description` varchar(255) DEFAULT NULL,
  `accumulated_depreciation` double(8,2) DEFAULT NULL,
  `acquisition_date` varchar(255) NOT NULL,
  `acquisition_type` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `assettype_id` bigint(20) UNSIGNED NOT NULL,
  `condition_id` bigint(20) UNSIGNED NOT NULL,
  `extra_attribute` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`extra_attribute`)),
  `registered_by` bigint(20) UNSIGNED DEFAULT NULL,
  `is_assigned` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `asset_no`, `description`, `serial_no`, `cost`, `gfs_code`, `gfs_description`, `accumulated_depreciation`, `acquisition_date`, `acquisition_type`, `remarks`, `assettype_id`, `condition_id`, `extra_attribute`, `registered_by`, `is_assigned`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '1233', 'fundamental of Biology', '3434343', 50000, NULL, NULL, NULL, '2023-09-01', 'Monetary', NULL, 3, 2, NULL, 1, 1, 0, '2023-09-26 06:14:00', '2023-10-12 16:58:53'),
(2, '100239', 'Dell Computer', 'SRT- 27874992', 520000, NULL, NULL, NULL, '2023-09-14', 'Monetary', NULL, 9, 1, NULL, 1, 1, 0, '2023-09-26 06:40:31', '2023-10-12 17:02:59'),
(3, '5427341u238', 'HP computer', '51618495189', 129000, NULL, NULL, NULL, '2023-09-30', 'Non-Monetary', NULL, 9, 2, NULL, 1, 1, 0, '2023-10-01 03:37:07', '2023-10-12 17:02:20'),
(4, '234632', 'HP Mouse', '43fgth6t', 5000, NULL, NULL, NULL, '2023-10-21', 'Monetary', NULL, 9, 1, NULL, 1, 1, 0, '2023-10-02 01:18:28', '2023-10-12 17:02:06'),
(5, '11212121', 'Database Concepts Book 2', '2342314', 12000, NULL, NULL, NULL, '2023-10-20', 'Monetary', NULL, 3, 1, NULL, 8, 1, 1, '2023-10-02 02:20:00', '2023-10-02 02:24:49'),
(6, '4876378', 'HP Keyboard', '32123344', 15000, NULL, NULL, NULL, '2023-10-12', 'Monetary', NULL, 9, 1, NULL, 8, 1, 1, '2023-10-02 03:55:34', '2023-10-02 04:38:59'),
(7, '6726212', 'Touchpad', '2222211111', 520000, NULL, NULL, NULL, '2023-10-26', 'Monetary', NULL, 9, 3, NULL, 8, 1, 1, '2023-10-02 03:58:24', '2023-10-02 04:38:59'),
(8, '567587482', 'Computer Fundamentals', '7572o256', 16000, NULL, NULL, NULL, '2023-10-12', 'Non-Monetary', NULL, 3, 3, NULL, 5, 1, 1, '2023-10-02 08:29:08', '2023-10-02 08:35:56'),
(9, '11098888', 'Advanced Database Concepts Book', '88888888', 129000, NULL, NULL, NULL, '2023-10-28', 'Monetary', NULL, 3, 1, NULL, 1, 1, 1, '2023-10-04 06:02:10', '2023-10-13 02:15:59'),
(10, 'Rerum quidem eligend', 'Omnis velit quasi to', 'Qui aut nesciunt nu', 12900, NULL, NULL, NULL, '2022-01-14', 'Non-Monetary', NULL, 2, 2, NULL, 1, 1, 1, '2023-10-13 02:29:55', '2023-10-13 02:42:56'),
(11, 'Impedit ipsa cum e', 'Deserunt asperiores ', 'Dolor autem in volup', 34500000, NULL, NULL, NULL, '1989-06-28', 'Non-Monetary', NULL, 9, 1, NULL, 1, 1, 1, '2023-10-13 02:49:03', '2023-10-13 02:51:44'),
(12, 'Facere dolore nostru', 'Sit magna impedit a', 'Eos dolorem ut est r', 90000, NULL, NULL, NULL, '2022-07-01', 'Monetary', NULL, 9, 4, NULL, 1, 1, 1, '2023-10-13 02:54:24', '2023-10-13 02:55:38'),
(13, '12567114324', 'HP Keyboard', 'rewf34543', 129000, NULL, NULL, NULL, '2023-10-26', 'Monetary', NULL, 9, 1, NULL, 1, 0, 1, '2023-10-16 04:48:06', '2023-10-16 04:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `asset_assignments`
--

CREATE TABLE `asset_assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asset_id` bigint(20) UNSIGNED NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `room_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assigned_by` bigint(20) UNSIGNED DEFAULT NULL,
  `headOfDepartment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `headOfSection_id` bigint(20) UNSIGNED DEFAULT NULL,
  `headOfOffice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_assignments`
--

INSERT INTO `asset_assignments` (`id`, `asset_id`, `remarks`, `department_id`, `section_id`, `room_id`, `assigned_by`, `headOfDepartment_id`, `headOfSection_id`, `headOfOffice_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 2, 'For new employee', 1, 2, NULL, NULL, NULL, 7, NULL, 1, '2023-09-27 02:47:33', '2023-10-05 03:04:19'),
(2, 1, 'testing update 3', 1, 1, 2, NULL, NULL, NULL, 5, 1, '2023-10-01 07:49:45', '2023-10-04 05:29:27'),
(3, 1, 'Testing update', 1, 1, 2, 1, 6, NULL, 5, 1, '2023-10-01 11:15:32', '2023-10-04 05:19:40'),
(4, 3, 'testing 3', 1, 1, 2, 1, 6, NULL, 5, 1, '2023-10-01 11:25:43', '2023-10-04 05:26:35'),
(5, 1, 'test 4', 1, 2, 6, 1, NULL, 7, NULL, 1, '2023-10-01 11:26:01', '2023-10-19 11:25:13'),
(6, 1, 'test 5', 1, 1, 6, 1, NULL, NULL, 4, 1, '2023-10-01 11:26:24', '2023-10-01 11:26:24'),
(7, 1, 'fgdhg', 1, 2, NULL, 1, NULL, 7, NULL, 1, '2023-10-01 11:35:13', '2023-10-01 11:35:13'),
(8, 3, 'testing update 2', 1, 1, 2, 1, 6, NULL, 5, 1, '2023-10-01 11:36:50', '2023-10-04 05:25:19'),
(9, 1, 'fasdgfg', 1, 2, NULL, 1, NULL, 7, NULL, 1, '2023-10-01 11:38:20', '2023-10-01 11:38:20'),
(10, 4, 'testing', 2, NULL, 2, 6, 8, NULL, 5, 1, '2023-10-02 02:02:50', '2023-10-23 03:26:23'),
(11, 5, 'testing', 2, 4, NULL, 8, 8, 9, NULL, 1, '2023-10-02 02:24:49', '2023-10-02 02:24:49'),
(12, 7, 'testing multiple assets', 2, NULL, 2, 8, 8, NULL, 5, 1, '2023-10-02 04:38:59', '2023-10-23 03:26:23'),
(13, 6, 'testing multiple assets', 2, NULL, 6, 8, 8, NULL, 4, 1, '2023-10-02 04:38:59', '2023-10-23 03:22:53'),
(14, 8, 'assigned to office bearer', 1, 1, 2, 1, NULL, NULL, 5, 1, '2023-10-02 08:33:35', '2023-10-02 08:33:35'),
(15, 8, 'assigned to office bearer', 1, 1, 2, 1, NULL, NULL, 5, 1, '2023-10-02 08:35:56', '2023-10-02 08:35:56'),
(16, 9, 'For IPT Students', 1, 2, NULL, 1, 6, 7, NULL, 1, '2023-10-13 02:15:59', '2023-10-16 04:40:39'),
(17, 10, 'Iure dolorum quo rep', 1, 2, NULL, 1, 6, 7, NULL, 1, '2023-10-13 02:42:56', '2023-10-16 04:32:07'),
(18, 11, 'Qui ad expedita sint', 1, NULL, NULL, 1, 6, NULL, NULL, 1, '2023-10-13 02:51:44', '2023-10-13 02:51:44'),
(19, 12, 'Labore harum quaerat', 1, 2, NULL, 1, 6, 7, NULL, 1, '2023-10-13 02:54:49', '2023-10-16 04:46:00'),
(20, 12, 'Labore harum quaerat', 1, 2, NULL, 1, 6, 7, NULL, 1, '2023-10-13 02:55:38', '2023-10-16 04:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `asset_classes`
--

CREATE TABLE `asset_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `asset_type_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_disposals`
--

CREATE TABLE `asset_disposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_types`
--

CREATE TABLE `asset_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_types`
--

INSERT INTO `asset_types` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'land', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(2, 'MPM', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(3, 'Books', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(4, 'Building', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(5, 'Funiture', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(6, 'Biological Asset', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(7, 'Infrasructure', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(8, 'Intangible Asset', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(9, 'Electronics', 1, '2023-09-26 06:39:32', '2023-09-26 06:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Block A -1', 1, '2023-09-26 05:57:13', '2023-09-26 05:57:13'),
(2, 'Block-F', 1, '2023-09-26 06:00:45', '2023-09-26 06:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'new', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(2, 'very good', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(3, 'good', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(4, 'fair', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(5, 'poor', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(6, 'very poor', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(7, 'obsolete', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `department_code` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `department_code`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'ICT and Technology Development', '', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(2, 'Industrial Research', '', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(3, 'Human Resources and Administration ', '', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(4, 'Finance', '', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(5, 'Engineering Development', '', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '$2y$10$53n.ojv.ZQMBH259quDea.1vnzJLYVLYvX7W1bHj/Kw4UCo9Nf5WG',
  `phone` varchar(255) DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `room_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `department_id`, `section_id`, `room_id`, `role_id`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Joyce ', 'Chitukula', 'store@gmail.com', '$2y$10$53n.ojv.ZQMBH259quDea.1vnzJLYVLYvX7W1bHj/Kw4UCo9Nf5WG', '0763461198', NULL, NULL, NULL, 3, 1, NULL, '2023-09-26 06:10:07', '2023-09-26 06:10:07'),
(2, 'Ester', 'Masoud', 'section@gmail.com', '$2y$10$53n.ojv.ZQMBH259quDea.1vnzJLYVLYvX7W1bHj/Kw4UCo9Nf5WG', '0789645322', NULL, NULL, NULL, 5, 1, NULL, '2023-09-26 06:12:22', '2023-09-26 06:12:22'),
(4, 'Bashiri', 'idd', 'bashiriidd3@gmail.com', '$2y$10$53n.ojv.ZQMBH259quDea.1vnzJLYVLYvX7W1bHj/Kw4UCo9Nf5WG', '+255748245671', 1, 1, 6, 6, 1, NULL, '2023-10-01 04:10:49', '2023-10-01 04:10:49'),
(5, 'Karim', 'ally', 'karim@gmail.com', '$2y$10$53n.ojv.ZQMBH259quDea.1vnzJLYVLYvX7W1bHj/Kw4UCo9Nf5WG', '+255748245671', 1, 1, 2, 6, 1, NULL, '2023-10-01 06:03:42', '2023-10-01 06:03:42'),
(6, 'Basso', 'Sulle', 'director@gmail.com', '$2y$10$53n.ojv.ZQMBH259quDea.1vnzJLYVLYvX7W1bHj/Kw4UCo9Nf5WG', '068799871', 1, NULL, 3, 2, 1, NULL, '2023-10-01 06:39:41', '2023-10-01 06:39:41'),
(7, 'Erica', 'Freeman', 'erica@gmail.com', '$2y$10$53n.ojv.ZQMBH259quDea.1vnzJLYVLYvX7W1bHj/Kw4UCo9Nf5WG', '0645324563', 1, 2, 1, 5, 1, NULL, '2023-10-01 06:42:25', '2023-10-01 06:42:25'),
(8, 'Salum', 'Ally', 'ind_director@gmail.com', '$2y$10$53n.ojv.ZQMBH259quDea.1vnzJLYVLYvX7W1bHj/Kw4UCo9Nf5WG', '03246234', 2, NULL, 7, 2, 1, NULL, '2023-10-02 02:02:32', '2023-10-02 02:02:32'),
(9, 'John', 'Jone', 'ind_section@gmail.com', '$2y$10$53n.ojv.ZQMBH259quDea.1vnzJLYVLYvX7W1bHj/Kw4UCo9Nf5WG', '0754628345', 2, 4, 10, 5, 1, NULL, '2023-10-02 02:22:14', '2023-10-02 02:22:14'),
(10, 'Joyce', 'Chitukula', 'joyce@gmail.com', '$2y$10$53n.ojv.ZQMBH259quDea.1vnzJLYVLYvX7W1bHj/Kw4UCo9Nf5WG', '0763353632', 1, 1, 5, 5, 1, NULL, '2023-10-26 09:38:03', '2023-10-26 09:38:03');

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
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Ground Floor', 1, '2023-09-26 05:57:47', '2023-09-26 05:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

CREATE TABLE `institutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `institution_code` varchar(255) NOT NULL,
  `vote_code` varchar(255) NOT NULL,
  `vote_name` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_09_15_120212_create_asset_types_table', 1),
(5, '2023_09_15_120330_create_departments_table', 1),
(6, '2023_09_15_120436_create_conditions_table', 1),
(7, '2023_09_15_120539_create_roles_table', 1),
(8, '2023_09_15_120819_create_sections_table', 1),
(9, '2023_09_15_121321_create_transfer_histories_table', 1),
(10, '2023_09_15_121750_create_asset_disposals_table', 1),
(11, '2023_09_15_130654_create_institutions_table', 1),
(12, '2023_09_18_065630_create_asset_classes_table', 1),
(13, '2023_09_18_082446_create_buildings_table', 1),
(14, '2023_09_18_082827_create_floors_table', 1),
(15, '2023_09_18_084124_create_rooms_table', 1),
(16, '2023_09_18_084744_create_addresses_table', 1),
(17, '2023_09_18_085132_create_employees_table', 1),
(18, '2023_09_19_060612_create_users_table', 1),
(19, '2023_09_19_061430_create_assets_table', 1),
(21, '2023_09_24_200330_create_asset_assignments_table', 1),
(22, '2023_09_19_061532_create_requests_table', 2);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `asset_id` bigint(20) UNSIGNED NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `request_status` enum('active','forwarded','pending','accepted','rejected') NOT NULL DEFAULT 'active',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `sender_id`, `asset_id`, `remarks`, `quantity`, `receiver_id`, `request_status`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 'For new employee', 2, 10, 'active', 1, '2023-10-26 09:47:16', '2023-10-26 09:47:16'),
(2, 5, 2, 'For new employee', 1, 10, 'active', 1, '2023-10-26 09:47:39', '2023-10-26 09:47:39'),
(3, 5, 2, 'For new employee', 1, 10, 'active', 1, '2023-10-26 09:50:19', '2023-10-26 09:50:19'),
(4, 5, 6, 'For new employee', 1, 10, 'active', 1, '2023-10-26 09:55:53', '2023-10-26 09:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'estate', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(2, 'director', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(3, 'store keeper', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(4, 'stock checker', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(5, 'head of section', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08'),
(6, 'head of office', 1, '2023-09-26 05:47:08', '2023-09-26 05:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `floor_id` bigint(20) UNSIGNED NOT NULL,
  `building_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `capacity`, `floor_id`, `building_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Internal Auditor', '2', 1, 1, 1, '2023-09-26 05:58:30', '2023-09-26 05:58:30'),
(2, 'Library', '40', 1, 1, 1, '2023-09-26 05:59:03', '2023-09-26 05:59:03'),
(3, 'Supplies Office', '2', 1, 1, 1, '2023-09-26 05:59:21', '2023-09-26 05:59:21'),
(4, 'Procurement Office', '2', 1, 1, 1, '2023-09-26 05:59:43', '2023-09-26 05:59:43'),
(5, 'ICT Officer', '2', 1, 1, 1, '2023-09-26 06:00:01', '2023-09-26 06:00:01'),
(6, 'T-Hub', '20', 1, 1, 1, '2023-09-26 06:00:19', '2023-09-26 06:00:19'),
(7, 'Researcher Officer -F01', '2', 1, 2, 1, '2023-09-26 06:01:54', '2023-09-26 06:01:54'),
(8, 'Material Science Laboratory-F02', '15', 1, 2, 1, '2023-09-26 06:02:29', '2023-09-26 06:02:29'),
(9, 'Material Science Laboratory-F03', '15', 1, 2, 1, '2023-09-26 06:02:57', '2023-09-26 06:02:57'),
(10, 'Research Office-F09', '2', 1, 2, 1, '2023-09-26 06:04:18', '2023-09-26 06:04:18'),
(11, 'Research Officer -F08', '2', 1, 2, 1, '2023-09-26 06:04:52', '2023-09-26 06:04:52'),
(12, 'Technician Iinstrumentations', '2', 1, 2, 1, '2023-09-26 06:06:45', '2023-09-26 06:06:45'),
(13, 'Researchers Lather and Textile', '2', 1, 2, 1, '2023-09-26 06:07:17', '2023-09-26 06:07:17'),
(14, 'HOD Leather and Textile', '2', 1, 2, 1, '2023-09-26 06:07:49', '2023-09-26 06:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `department_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'ICT', 1, 1, '2023-09-26 06:10:44', '2023-09-26 06:10:44'),
(2, 'Instrumentation', 1, 1, '2023-09-26 06:10:54', '2023-09-26 06:10:54'),
(3, 'Technology Transfer', 1, 1, '2023-09-26 06:11:10', '2023-09-26 06:11:10'),
(4, 'Industry', 2, 1, '2023-10-02 02:20:54', '2023-10-02 02:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_histories`
--

CREATE TABLE `transfer_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$fcI6yO5rlPtzb2Nt3RDxaeq3FUXxm67kVEgAerYVL7XQAc0JP2MOe', 1, 1, 'PoIaNkv2KizY869ocTA2mr4OiezZ7QMhooOyFxbqpymCqP1jMewc0fsA9jgI', '2023-09-26 05:47:08', '2023-09-26 05:47:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_department_id_foreign` (`department_id`),
  ADD KEY `addresses_section_id_foreign` (`section_id`),
  ADD KEY `addresses_room_id_foreign` (`room_id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assets_assettype_id_foreign` (`assettype_id`),
  ADD KEY `assets_condition_id_foreign` (`condition_id`),
  ADD KEY `assets_registered_by_foreign` (`registered_by`);

--
-- Indexes for table `asset_assignments`
--
ALTER TABLE `asset_assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_assignments_asset_id_foreign` (`asset_id`),
  ADD KEY `asset_assignments_department_id_foreign` (`department_id`),
  ADD KEY `asset_assignments_section_id_foreign` (`section_id`),
  ADD KEY `asset_assignments_room_id_foreign` (`room_id`),
  ADD KEY `asset_assignments_assigned_by_foreign` (`assigned_by`),
  ADD KEY `asset_assignments_assigned_todept_foreign` (`headOfDepartment_id`),
  ADD KEY `asset_assignments_assigned_tosec_foreign` (`headOfSection_id`),
  ADD KEY `asset_assignments_assigned_torm_foreign` (`headOfOffice_id`);

--
-- Indexes for table `asset_classes`
--
ALTER TABLE `asset_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_classes_asset_type_id_foreign` (`asset_type_id`);

--
-- Indexes for table `asset_disposals`
--
ALTER TABLE `asset_disposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_types`
--
ALTER TABLE `asset_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_department_id_foreign` (`department_id`),
  ADD KEY `employee_section_id_foreign` (`section_id`),
  ADD KEY `employee_room_id_foreign` (`room_id`),
  ADD KEY `employee_role_id_foreign` (`role_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_sender_id_foreign` (`sender_id`),
  ADD KEY `requests_receiver_id_foreign` (`receiver_id`),
  ADD KEY `requests_asset_id_foreign` (`asset_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_floor_id_foreign` (`floor_id`),
  ADD KEY `rooms_building_id_foreign` (`building_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_department_id_foreign` (`department_id`);

--
-- Indexes for table `transfer_histories`
--
ALTER TABLE `transfer_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `asset_assignments`
--
ALTER TABLE `asset_assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `asset_classes`
--
ALTER TABLE `asset_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset_disposals`
--
ALTER TABLE `asset_disposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset_types`
--
ALTER TABLE `asset_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `institutions`
--
ALTER TABLE `institutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transfer_histories`
--
ALTER TABLE `transfer_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `assets`
--
ALTER TABLE `assets`
  ADD CONSTRAINT `assets_assettype_id_foreign` FOREIGN KEY (`assettype_id`) REFERENCES `asset_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assets_condition_id_foreign` FOREIGN KEY (`condition_id`) REFERENCES `conditions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assets_registered_by_foreign` FOREIGN KEY (`registered_by`) REFERENCES `employee` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `asset_assignments`
--
ALTER TABLE `asset_assignments`
  ADD CONSTRAINT `asset_assignments_asset_id_foreign` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `asset_assignments_assigned_by_foreign` FOREIGN KEY (`assigned_by`) REFERENCES `employee` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `asset_assignments_assigned_todept_foreign` FOREIGN KEY (`headofDepartment_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `asset_assignments_assigned_torm_foreign` FOREIGN KEY (`headofOffice_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `asset_assignments_assigned_tosec_foreign` FOREIGN KEY (`headofSection_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `asset_assignments_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `asset_assignments_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `asset_assignments_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `asset_classes`
--
ALTER TABLE `asset_classes`
  ADD CONSTRAINT `asset_classes_asset_type_id_foreign` FOREIGN KEY (`asset_type_id`) REFERENCES `asset_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_asset_id_foreign` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rooms_floor_id_foreign` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
