-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 10:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masterpieceproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `discount` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `discount`, `created_at`, `updated_at`) VALUES
(2, 'CIVIL ENGINEERING', 'civil engineering.jpg', 'civil engineering', 0, '2023-03-20 13:11:28', '2023-03-20 13:11:28'),
(3, 'ELECTRICAL ENGINEERING', 'electrical engineering..jpg', 'electrical engineering', 20, '2023-03-20 13:13:03', '2023-03-24 05:59:23'),
(4, 'MECHANICAL ENGINEERING', 'Mechanical Engineering.jpg', 'Mechanical Engineering', 0, '2023-03-20 13:15:33', '2023-03-20 13:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `exp_date` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `user_name`, `address`, `city`, `card_name`, `card_number`, `exp_date`, `cvv`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'aqaba', 'aqaba', 'scsx', '1', 1, 1, 1, '2023-03-20 12:15:11', '2023-03-20 12:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'very helpful', 1, '2023-03-20 15:42:23', '2023-03-20 15:42:23'),
(2, 2, 'very helpful', 2, '2023-03-20 15:42:55', '2023-03-20 15:42:55'),
(3, 2, 'very helpful', 3, '2023-03-20 15:43:03', '2023-03-20 15:43:03'),
(4, 2, 'very helpful', 4, '2023-03-20 15:43:10', '2023-03-20 15:43:10'),
(5, 2, 'very helpful', 5, '2023-03-20 15:43:18', '2023-03-20 15:43:18'),
(6, 2, 'very helpful', 6, '2023-03-20 15:43:25', '2023-03-20 15:43:25'),
(8, 2, 'very helpful', 8, '2023-03-20 15:43:39', '2023-03-20 15:43:39'),
(9, 2, 'very helpful', 9, '2023-03-20 15:43:46', '2023-03-20 15:43:46'),
(10, 2, 'very helpful', 10, '2023-03-20 15:44:02', '2023-03-20 15:44:02'),
(11, 2, 'very helpful', 11, '2023-03-20 15:44:09', '2023-03-20 15:44:09'),
(12, 2, 'very helpful', 12, '2023-03-20 15:44:16', '2023-03-20 15:44:16'),
(13, 2, 'very helpful', 13, '2023-03-20 15:44:24', '2023-03-20 15:44:24'),
(14, 2, 'very helpful', 14, '2023-03-20 15:44:32', '2023-03-20 15:44:32'),
(15, 2, 'very helpful', 15, '2023-03-20 15:44:40', '2023-03-20 15:44:40'),
(16, 4, 'Great instructor and beautiful content', 1, '2023-03-20 15:45:38', '2023-03-20 15:45:38'),
(17, 4, 'Great instructor and beautiful content', 2, '2023-03-20 15:45:53', '2023-03-20 15:45:53'),
(18, 4, 'Great instructor and beautiful content', 3, '2023-03-20 15:46:00', '2023-03-20 15:46:00'),
(19, 4, 'Great instructor and beautiful content', 4, '2023-03-20 15:46:08', '2023-03-20 15:46:08'),
(20, 4, 'Great instructor and beautiful content', 5, '2023-03-20 15:46:15', '2023-03-20 15:46:15'),
(21, 4, 'Great instructor and beautiful content', 6, '2023-03-20 15:46:22', '2023-03-20 15:46:22'),
(22, 4, 'Great instructor and beautiful content', 8, '2023-03-20 15:46:29', '2023-03-20 15:46:29'),
(23, 4, 'Great instructor and beautiful content', 9, '2023-03-20 15:46:38', '2023-03-20 15:46:38'),
(24, 4, 'Great instructor and beautiful content', 10, '2023-03-20 15:46:44', '2023-03-20 15:46:44'),
(25, 4, 'Great instructor and beautiful content', 12, '2023-03-20 15:46:51', '2023-03-20 15:46:51'),
(26, 4, 'Great instructor and beautiful content', 13, '2023-03-20 15:46:57', '2023-03-20 15:46:57'),
(27, 4, 'Great instructor and beautiful content', 14, '2023-03-20 15:47:06', '2023-03-20 15:47:06'),
(28, 4, 'Great instructor and beautiful content', 15, '2023-03-20 15:47:13', '2023-03-20 15:47:13'),
(29, 5, 'A very important course', 1, '2023-03-20 15:48:38', '2023-03-20 15:48:38'),
(30, 5, 'A very important course', 2, '2023-03-20 15:48:47', '2023-03-20 15:48:47'),
(31, 5, 'A very important course', 3, '2023-03-20 15:48:55', '2023-03-20 15:48:55'),
(32, 5, 'A very important course', 4, '2023-03-20 15:49:01', '2023-03-20 15:49:01'),
(33, 5, 'A very important course', 5, '2023-03-20 15:49:08', '2023-03-20 15:49:08'),
(34, 5, 'A very important course', 6, '2023-03-20 15:49:15', '2023-03-20 15:49:15'),
(35, 5, 'A very important course', 8, '2023-03-20 15:49:24', '2023-03-20 15:49:24'),
(36, 5, 'A very important course', 9, '2023-03-20 15:49:32', '2023-03-20 15:49:32'),
(37, 5, 'A very important course', 10, '2023-03-20 15:49:40', '2023-03-20 15:49:40'),
(38, 5, 'A very important course', 11, '2023-03-20 15:49:46', '2023-03-20 15:49:46'),
(39, 5, 'A very important course', 12, '2023-03-20 15:49:54', '2023-03-20 15:49:54'),
(40, 5, 'A very important course', 13, '2023-03-20 15:50:04', '2023-03-20 15:50:04'),
(41, 5, 'A very important course', 14, '2023-03-20 15:50:11', '2023-03-20 15:50:11'),
(42, 5, 'A very important course', 5, '2023-03-20 15:50:20', '2023-03-20 15:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phoneNumber`, `message`, `created_at`, `updated_at`) VALUES
(1, 's', 's', 's@gmail.com', 790369502, 'ddddd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video_course` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `new_price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `duration_of_the_course` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `feature` varchar(255) NOT NULL DEFAULT '0',
  `discount` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `short_description`, `long_description`, `image`, `video_course`, `user_id`, `category_id`, `price`, `new_price`, `duration_of_the_course`, `status`, `feature`, `discount`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Electrical Engineering: Power Electronics Masterclass\r\n', 'Further your knowledge in power engineering by learning to design rectifiers, dc-to-dc converters, and inverters\r\n', 'This course is designed to provide a complete overview of one of the main areas of electrical engineering and power engineering: power electronics. The three main types of power electronics devices (i.e., rectifiers, dc-to-dc converters, and inverters) are discussed in detail in the lectures. For each device, the ideal circuit is discussed along with different circuit topologies to provide a wide range of practical uses.\r\n', 'ELE1.jpg', 'VID-ELE.mp4', 10, 3, '65.00', '52.00', 15, 'accepted', '0', 20, NULL, '2023-03-20 13:23:18', '2023-03-24 05:59:23'),
(2, 'The Comprehensive ETABS Professional Course ', '21 Hours of Course Content with Practical Case studies\r\n', 'Steel Structures especially PEB are somewhat tricky to model, analyze and design. Majority of the people are comfortable in RCC Design, but very few are expert in Steel Design. After covering this section , you will be able to calculate wind and seismic loads as per the Indian Standards , Model the Steel Structures i.e. Portal , Plan Bracing and Elevation Bracing, Analyze , Review the Modal Shapes and Design the Structure. Instructor will also teach you how to do the value engineering and optimize the Steel Structures. At the end of this lecture series , you will be comfortable with Steel Structures.\r\n', 'CIVIL1.jpg', 'VID-CIVIL.mp4', 8, 2, '65.00', '0.00', 21, 'accepted', '1', 0, NULL, '2023-03-20 13:25:32', '2023-03-20 13:25:32'),
(3, 'Centrifugal pumps : Principles , Operation and Design\r\n', 'A complete understanding of construction details and functioning of centrifugal pumps for successful plant operation\r\n', 'Centrifugal pumps of various designs and applications are encountered nowadays throughout refining, petrochemical and process industries as well as in power generation and environmental engineering.\r\nThis course is designed to provide you with a complete understanding of construction details and functioning of centrifugal pumps. This understanding is a prerequisite for successful operation of plant and piping system.', 'MEC1.jpg', 'VID-MIC.mp4', 9, 4, '80.00', '0.00', 10, 'accepted', '0', 0, NULL, '2023-03-20 13:27:09', '2023-03-20 13:27:09'),
(4, 'The Complete Basic Electricity & Electronics Course\r\n', 'Learn how Electricity, Electronic Components and Circuits work. Join over 5,000 happy students!\r\n', 'Knowledge of Electricity and Electronics is extremely valuable nowadays!\r\nElectronic circuits are everywhere, from computers and smartphones, to home appliances and cars. Think of all the everyday objects that are becoming “smart”... in the future, most of the things that we own will contain some electronics. Jobs in electronics are in high demand and well paid in almost every country!', 'ELE2.jpg', 'VID-ELE.mp4', 10, 3, '60.00', '48.00', 12, 'accepted', '1', 20, NULL, '2023-03-20 13:29:05', '2023-03-24 05:59:23'),
(5, 'ETABS & SAFE : Advanced Course For RCC and Steel Structures\r\n', 'ETABS and SAFE with Structural Detailing + Structural Sheets\r\n', 'This \" ETABS & SAFE : Advanced Course For RCC and Steel Structures \" course covers almost every thing in ETABS & SAFE . So that you don\'t look around.\r\nThis course  teaches you about Etabs with safe . so that your proper idea how to exports the results  to csi safe . After that you will know how to do the structural detailing and generating the structural sheets.', 'CIVIL2.jpg', 'VID-CIVIL.mp4', 8, 2, '75.00', '0.00', 18, 'accepted', '0', 0, NULL, '2023-03-20 13:30:12', '2023-03-20 13:30:12'),
(6, 'Mechanical Engineering-Machine Designing-1\r\n', 'learn Machines Component Designing\r\n', 'If your interested in learning how the machines are designed. Then this course will be the first step toward this motive. This course provides you a clear understanding of how machines are designed. This is the first course in which you will learn the designing & modeling of supportive components.\r\n', 'MEC2.jpg', 'VID-MIC.mp4', 9, 4, '35.00', '0.00', 8, 'accepted', '0', 0, NULL, '2023-03-20 13:30:55', '2023-03-20 13:30:55'),
(8, 'Crash Course Electronics and PCB Design\n', 'Learn Electronics and PCB Design from the Ground up with Altium CircuitMaker and Labcenter Proteus\r\n', 'Crash Course Electronics was designed for one thing -- to take you from mystery to mastery in Electronics and PCB Design. This massive course was custom made for those interested in learning electronics from the ground up that wish to leverage that knowledge to build actual printed circuit boards (PCBs). There is no other course like this in existence that has the depth and breadth of Crash Course Electronics. The course starts with atomic physics and the electron, before you know it you are learning Ohm\'s Law, circuit analysis, AC, DC, complex impedance, RC and RL circuits,  filters, amplifiers, transistors, FETs,  analog and digital theory -- too much to list here! \r\n', 'ELE3.jpg', 'VID-ELE.mp4', 10, 3, '75.00', '60.00', 20, 'accepted', '0', 20, NULL, '2023-03-20 13:32:12', '2023-03-24 05:59:23'),
(9, 'STAAD PRO & RCDC Complete Building Design & Detailing ', 'Master Staad Pro & RCDC to perform Structurally Designing and Detailing of RCC Buildings\r\n', 'This course will teach you all the essential things you need for designing an RCC building. The course is designed in such a way that the student does need not have any prior experience with the software. The course starts at the level of beginners, with the basic creation of properties, modeling, and load application. Importing of the plan from AutoCAD into Staad Pro is also covered. We will create load patterns, load cases, and also base fixities for the modal. Once the building is designed we will run the analysis and reiterate the design. This course ends at the advanced stage where students will be thought how to make the structure safe and economic from the industry point of view\r\n', 'CIVIL3.jpg', 'VID-CIVIL.mp4', 8, 2, '60.00', '0.00', 13, 'accepted', '0', 0, NULL, '2023-03-20 13:32:58', '2023-03-20 13:32:58'),
(10, 'Introduction to Hydroelectric Power Plant Engineering\r\n', 'Hydroelectric power plant design, components, terminology and how they work! Essential power plant engineering!\r\n', 'Humans have been harnessing the power of water for thousands of years. The potential energy of water has been used to drive mills, pumps and for numerous other applications. Converting the potential and kinetic energy of water to electrical energy however, is a relatively new concept. Modern hydroelectric power plants represent the pinnacle of hydropower engineering, but how do they work? How efficient are they? Are they really \'green\'?\n', 'MEC3.jpg', 'VID-MIC.mp4', 12, 4, '20.00', '0.00', 6, 'accepted', '1', 0, NULL, '2023-03-20 13:34:17', '2023-03-20 13:34:17'),
(11, 'Electric Circuits for Electrical Engineering and Electronics\r\n', 'Start your career in electrical & electronics engineering by learning everything about electric circuits and electronics\r\n', 'This course is designed to provide a complete overview of electric circuit analysis used in electrical engineering and electronics engineering. Electric circuit analysis is the most fundamental concept for electrical engineering, electronics engineering, and computer engineering. It is for that reason that electric circuit analysis is usually the first course taught in electrical, electronics, and computer engineering programs at universities, as basically anything related to electrical, electronics, or computer engineering stems from electric circuit analysis.\n', 'ELE4.jpg', 'VID-ELE.mp4', 13, 3, '75.00', '60.00', 18, 'accepted', '0', 20, NULL, '2023-03-20 13:34:59', '2023-03-24 05:59:23'),
(12, 'Structural Engineering Abaqus Tutorials\r\n', 'The most comprehensive course with 13.5 hours of real life structural examples under various loading conditions\r\n', 'Welcome to the Structural Engineering Abaqus Tutorial, the only course you need to learn how to deal with real-life structural engineering examples. This course is specially designed for mechanical, civil engineering students who want to expand their finite element knowledge. This course will teach you the theory behind input parameters as well as modelling and analyse the results.\r\n', 'CIVIL4.jpg', 'VID-CIVIL.mp4', 11, 2, '60.00', '0.00', 14, 'accepted', '0', 0, NULL, '2023-03-20 13:35:51', '2023-03-20 13:35:51'),
(13, 'Machine Design : Theories of failure and Design for fatigue\r\n', 'Learn about the Theories of mechanical failure and principles of designing for fatigue for mechanical engineering\r\n', 'Machine design is the practice of designing structural elements of a product to meet functional and durability criteria .\r\nFailure prevention is a big part of study for Machine design . This course deals with the various theories of failure in Static and dynamic (cyclic) loading conditions.', 'MEC4.jpg', 'VID-MIC.mp4', 12, 4, '20.00', '16.00', 10, 'accepted', '0', 20, NULL, '2023-03-20 13:36:39', '2023-03-23 16:05:21'),
(14, 'MATLAB/Simulink for Power System Simulations\r\n', 'Learn how to simulate power systems in MATLAB/Simulink by building several Simulink power system models\r\n', 'This course is designed to allow you to simulate power systems in MATLAB/Simulink. This course not only gives a review of the theory of how power systems operate, but also gives several examples on how to run different types of power system studies using MATLAB/Simulink.\r\n', 'ELE5.jpg', 'VID-ELE.mp4', 13, 3, '40.00', '32.00', 12, 'accepted', '0', 20, NULL, '2023-03-20 13:59:53', '2023-03-24 05:59:23'),
(15, 'Fundamentals of Bridge Design-Concept of design and modeling\r\n', 'Learn design concept of different types of bridges from one source. We\'ll focus on getting the basics right.\r\n', 'This course covers fundamental concepts and methods in bridge design. Starting with the very basics, we consider definition of the bridge, different types and what is the statically system of each type of bridges. We then move on to look at bridge components ; what are they and how the loads transfer through them? We\'ll cover the different types of  design codes and the different types of loads in detail. Worked examples are used extensively to demonstrate the practical application of theory.\r\n', 'CIVIL5.jpg', 'VID-CIVIL.mp4', 11, 2, '45.00', '0.00', 12, 'accepted', '1', 0, NULL, '2023-03-20 14:01:07', '2023-03-20 14:01:07');

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
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `video_lecture` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `name`, `description`, `video_lecture`, `file`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'lecture one', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=ehi_hkLlutw&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8', NULL, 3, 3, '2023-03-20 14:11:12', '2023-03-20 14:11:12'),
(2, 'lecture one', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=ehi_hkLlutw&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8', NULL, 3, 6, '2023-03-20 14:11:43', '2023-03-20 14:11:43'),
(3, 'lecture one', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=ehi_hkLlutw&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8', NULL, 3, 10, '2023-03-20 14:12:06', '2023-03-20 14:12:06'),
(4, 'lecture one', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=ehi_hkLlutw&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8', NULL, 3, 13, '2023-03-20 14:12:19', '2023-03-20 14:12:19'),
(5, 'lecture two', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=YbjmphKVVpA&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8&index=2', NULL, 3, 3, '2023-03-20 14:13:56', '2023-03-20 14:13:56'),
(6, 'lecture two', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=YbjmphKVVpA&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8&index=2', NULL, 3, 6, '2023-03-20 14:14:09', '2023-03-20 14:14:09'),
(7, 'lecture two', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=YbjmphKVVpA&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8&index=2', NULL, 3, 10, '2023-03-20 14:14:18', '2023-03-20 14:14:18'),
(8, 'lecture two', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=YbjmphKVVpA&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8&index=2', NULL, 3, 13, '2023-03-20 14:14:33', '2023-03-20 14:14:33'),
(9, 'lecture three', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=ZCFKUqCFd_A&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8&index=3', NULL, 3, 3, '2023-03-20 14:16:16', '2023-03-20 14:16:16'),
(10, 'lecture three', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=ZCFKUqCFd_A&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8&index=3', NULL, 3, 6, '2023-03-20 14:16:27', '2023-03-20 14:16:27'),
(11, 'lecture three', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=ZCFKUqCFd_A&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8&index=3', NULL, 3, 10, '2023-03-20 14:16:35', '2023-03-20 14:16:35'),
(12, 'lecture three', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=ZCFKUqCFd_A&list=PLt_gyY3ZHcxEKUW1s2zyXW_fqxzkiPDm8&index=3', NULL, 3, 13, '2023-03-20 14:16:45', '2023-03-20 14:16:45'),
(13, 'lecture one', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=JvF1VG_V59k&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu', NULL, 3, 2, '2023-03-20 14:18:08', '2023-03-20 14:18:08'),
(14, 'lecture one', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=JvF1VG_V59k&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu', NULL, 3, 5, '2023-03-20 14:18:51', '2023-03-20 14:18:51'),
(15, 'lecture one', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=JvF1VG_V59k&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu', NULL, 3, 9, '2023-03-20 14:18:59', '2023-03-20 14:18:59'),
(16, 'lecture one', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=JvF1VG_V59k&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu', NULL, 3, 12, '2023-03-20 14:19:09', '2023-03-20 14:19:09'),
(17, 'lecture two', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=MWPyrpaRd7o&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu&index=2', NULL, 3, 2, '2023-03-20 14:20:20', '2023-03-20 14:20:20'),
(18, 'lecture two', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=MWPyrpaRd7o&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu&index=2', NULL, 3, 5, '2023-03-20 14:20:29', '2023-03-20 14:20:29'),
(19, 'lecture two', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=MWPyrpaRd7o&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu&index=2', NULL, 3, 9, '2023-03-20 14:20:36', '2023-03-20 14:20:36'),
(20, 'lecture two', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=MWPyrpaRd7o&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu&index=2', NULL, 3, 12, '2023-03-20 14:20:43', '2023-03-20 14:20:43'),
(21, 'lecture three', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=mzxBwx33EPM&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu&index=3', NULL, 3, 2, '2023-03-20 14:21:15', '2023-03-20 14:21:15'),
(22, 'lecture three', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=mzxBwx33EPM&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu&index=3', NULL, 3, 5, '2023-03-20 14:21:26', '2023-03-20 14:21:26'),
(23, 'lecture three', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=mzxBwx33EPM&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu&index=3', NULL, 3, 9, '2023-03-20 14:21:33', '2023-03-20 14:21:33'),
(24, 'lecture three', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=mzxBwx33EPM&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu&index=3', NULL, 3, 12, '2023-03-20 14:21:40', '2023-03-20 14:21:40'),
(25, 'lecture one', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=ZRLXDiiUv8Q&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka', NULL, 3, 1, '2023-03-20 14:22:54', '2023-03-20 14:22:54'),
(26, 'lecture one', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=ZRLXDiiUv8Q&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka', NULL, 3, 4, '2023-03-20 14:23:08', '2023-03-20 14:23:08'),
(27, 'lecture one', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=ZRLXDiiUv8Q&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka', NULL, 3, 8, '2023-03-20 14:23:28', '2023-03-20 14:23:28'),
(28, 'lecture one', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=ZRLXDiiUv8Q&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka', NULL, 3, 11, '2023-03-20 14:24:11', '2023-03-20 14:24:11'),
(29, 'lecture one', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=ZRLXDiiUv8Q&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka', NULL, 3, 14, '2023-03-20 14:24:20', '2023-03-20 14:24:20'),
(30, 'lecture two', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=k9SwNST1eW0&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka&index=2', NULL, 3, 1, '2023-03-20 14:27:01', '2023-03-20 14:27:01'),
(31, 'lecture two', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=k9SwNST1eW0&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka&index=2', NULL, 3, 4, '2023-03-20 14:27:24', '2023-03-20 14:27:24'),
(32, 'lecture two', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=k9SwNST1eW0&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka&index=2', NULL, 3, 8, '2023-03-20 14:27:32', '2023-03-20 14:27:32'),
(33, 'lecture two', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=k9SwNST1eW0&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka&index=2', NULL, 3, 11, '2023-03-20 14:27:40', '2023-03-20 14:27:40'),
(34, 'lecture two', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=k9SwNST1eW0&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka&index=2', NULL, 3, 14, '2023-03-20 14:27:55', '2023-03-20 14:27:55'),
(35, 'lecture three', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=4frpZ4Q0q58&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka&index=3', NULL, 3, 1, '2023-03-20 14:28:32', '2023-03-20 14:28:32'),
(36, 'lecture three', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=4frpZ4Q0q58&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka&index=3', NULL, 3, 4, '2023-03-20 14:28:42', '2023-03-20 14:28:42'),
(37, 'lecture three', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=4frpZ4Q0q58&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka&index=3', NULL, 3, 8, '2023-03-20 14:29:17', '2023-03-20 14:29:17'),
(38, 'lecture three', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=4frpZ4Q0q58&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka&index=3', NULL, 3, 11, '2023-03-20 14:29:25', '2023-03-20 14:29:25'),
(39, 'lecture three', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=4frpZ4Q0q58&list=PLSQl0a2vh4HCLqA-rhMi_Z_WnBkD3wUka&index=3', NULL, 3, 14, '2023-03-20 14:29:32', '2023-03-20 14:29:32'),
(40, 'lecture one', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=JvF1VG_V59k&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu', NULL, 3, 15, '2023-03-20 14:31:42', '2023-03-20 14:31:42'),
(41, 'lecture two', 'You can watch the lecture via the link:', 'https://www.youtube.com/watch?v=MWPyrpaRd7o&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu&index=2', NULL, 3, 15, '2023-03-20 14:32:19', '2023-03-20 14:32:19'),
(42, 'lecture three', 'You can watch the lecture via the link:\r\n', 'https://www.youtube.com/watch?v=mzxBwx33EPM&list=PLCV9OyAY5K-VFY3wvJeV-we8IFFyKPeUu&index=3', NULL, 3, 15, '2023-03-20 14:32:58', '2023-03-20 14:32:58');

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
(5, '2023_02_09_161254_create_categories_table', 1),
(6, '2023_02_09_165503_create_contacts_table', 1),
(7, '2023_02_11_152938_create_courses_table', 1),
(8, '2023_02_15_092456_create_lectures_table', 1),
(9, '2023_02_15_122712_create_comments_table', 1),
(10, '2023_02_18_120711_create_carts_table', 1),
(11, '2023_02_18_121431_create_orders_table', 1),
(12, '2023_02_18_122645_create_order_details_table', 1),
(13, '2023_02_19_202739_create_sessions_table', 1),
(14, '2023_02_22_065019_create_checkouts_table', 1),
(15, '2023_03_19_151022_create_subscribers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `order_date`, `created_at`, `updated_at`) VALUES
(1, 4, '210.00', '2023-03-20 18:15:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `course_id`, `user_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 4, 1, '65.00', '2023-03-20 12:15:11', '2023-03-20 12:15:11'),
(2, 1, 1, 4, 1, '65.00', '2023-03-20 12:15:11', '2023-03-20 12:15:11'),
(3, 1, 3, 4, 1, '80.00', '2023-03-20 12:15:11', '2023-03-20 12:15:11');

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
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
  `phone` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `education` varchar(255) DEFAULT NULL,
  `the_description` varchar(255) DEFAULT NULL,
  `Linkedin_link` varchar(255) DEFAULT NULL,
  `job_position` varchar(255) DEFAULT NULL,
  `certificates_and_credits` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `cv_pdf` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'icon.png',
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `status` varchar(255) NOT NULL DEFAULT 'accepted',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `education`, `the_description`, `Linkedin_link`, `job_position`, `certificates_and_credits`, `experience`, `skills`, `address`, `cv_pdf`, `image`, `role`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 798745236, '2023-03-20 09:46:46', '$2y$10$Kw7mAO0HYx3mBtzUSGqJFOHbowptYpJ4tdLxLetFZmg7OILfRwjbK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icon.png', 'admin', 'accepted', NULL, NULL, '2023-03-20 09:46:46', '2023-03-28 05:32:42'),
(2, 'mohammad', 'mohammadalnuqeiti@gmail.com', 790369501, NULL, '$2y$10$aYfy9U50tmSNZ8CnbStIAOZoCsrJAYb1p3K7O5hqd5K1PUc0H4PEm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icon.png', 'user', 'accepted', NULL, NULL, '2023-03-20 09:54:36', '2023-03-20 09:54:36'),
(3, 'engineer', 'mohammadalnuqeiti@gmail.com\n', 790369500, NULL, '$2y$10$RaXHEW/tEBGeWAVSZYwbMOcjxDHxwQd0wy7jFwGf9CdmIYeJO1mg2', 'Graduate Research Assistant at Purdue University', 'the description', 'https://www.linkedin.com/in/mohammad-alnuqeiti-1954b1251/', 'Job position', 'Certificates and credits', 'Experience', 'Skills', 'amaan', '1679317019.pdf', 'user.png', 'engineer', 'accepted', NULL, NULL, '2023-03-20 09:56:59', '2023-03-28 05:10:12'),
(4, 'ahmed', 'ahmed@gmail.com', 790369874, NULL, '$2y$10$FBIL8d/pHeBUv7lAFwuMquL1bSL6HVCYC7DlSbbOLFXu5VfpK14u6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icon.png', 'user', 'accepted', NULL, NULL, '2023-03-20 12:07:18', '2023-03-20 12:07:18'),
(5, 'abed', 'abed@gmail.com', 790456855, NULL, '$2y$10$12Ty3dHPUxO7.2RUflgqOuvjRXVGyPCp5oRvmVR31hVhQg/diDvVK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icon.png', 'user', 'accepted', NULL, NULL, '2023-03-20 12:07:54', '2023-03-20 12:07:54'),
(6, 'asem', 'asem@gmail.com', 778974584, NULL, '$2y$10$E0yvVaXb3LJFoyCQiLCESu6aR2mTa5xu3EKuOdRAnOspcYXQMVBt.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icon.png', 'user', 'accepted', NULL, NULL, '2023-03-20 12:08:18', '2023-03-20 12:08:18'),
(7, 'amro', 'amro@gmail.com', 778965485, NULL, '$2y$10$3eAFREtQuXF7z8IExZp2puDR8oCZscJ8SdDq8e2iJuW/gDQJxWE/i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icon.png', 'user', 'accepted', NULL, NULL, '2023-03-20 12:08:50', '2023-03-20 12:08:50'),
(8, 'Mohammad Ibrahim', 'MohammadIbrahim@gmail.com', 798756412, NULL, '$2y$10$dhRogqjPafhhJ07X0qKVye/hSowOV7cJWymV..h13X7yB9m/UImM6', 'Bachelor\'s degree in Civil Engineering - University of Jordan', 'Head of Specialization in Structural Engineering - Jordan Engineers Association - Certified Trainer in Structural Design, Supervision and Engineering Management - Jordan Engineers Association', 'https://www.linkedin.com/in/mohammad-alnuqeiti-1954b1251/', 'Founding partner in Spectrum Response Engineering Consultancy', 'Head of Specialization in Structural Engineering - Jordan Engineers Association - Certified Trainer in Structural Design, Supervision and Engineering Management - Jordan Engineers Association', 'Previously Head of Structural Design Department - Formerly Head of Project Supervision and Management Department', 'Previously Head of Structural Design Department - Formerly Head of Project Supervision and Management Department', 'amaan', '1679406313.pdf', 'coach.jpg', 'engineer', 'rejected', NULL, NULL, '2023-03-21 10:45:14', '2023-03-27 09:02:49'),
(9, 'Wesam Abu Eid', 'Wesam@gmail.com', 789856485, NULL, '$2y$10$2D1YsepZ9rCGDlkMctvk.eLOSzma43dQIbSTxaKa.Mk7mxKIJsfHS', 'Bachelor of Mechanical Engineering, Hashemite University', 'ACI Autodesk Certified Instructor from Autodesk since 2014, Certified Trainer at the Engineers Training Center, Consultant Engineer from the Jordanian Engineers Association, Certified Arbitrator, Federation of Arab Engineers', 'https://www.linkedin.com/in/mohammad-alnuqeiti-1954b1251/', 'mechanical engineer', 'ACI Autodesk Certified Instructor from Autodesk since 2014, Certified Trainer at the Engineers Training Center, Consultant Engineer from the Jordanian Engineers Association, Certified Arbitrator, Federation of Arab Engineers', 'Senior Consultant Engineer and Founder - Affiliation Engineers Consulting Worked for several Jordanian and Arab consulting companies', 'Senior Consultant Engineer and Founder - Affiliation Engineers Consulting Worked for several Jordanian and Arab consulting companies', 'aqaba', '1679406417.pdf', 'coach.jpg', 'engineer', 'accepted', NULL, NULL, '2023-03-21 10:46:57', '2023-03-21 10:46:57'),
(10, 'Khaled Tayseer', 'Khaled@gmail.com', 798795642, NULL, '$2y$10$LZfk/HVNo8b.QvfcGPLQuOjDv2eiroPPMRY/UOoQgoR0Byd4uvnW.', 'Bachelor of Electrical Engineering, Yarmouk University', 'ACI Autodesk Certified Instructor from Autodesk since 2014, Certified Trainer at the Engineers Training Center, Consultant Engineer from the Jordanian Engineers Association, Certified Arbitrator, Federation of Arab Engineers', 'https://www.linkedin.com/in/mohammad-alnuqeiti-1954b1251/', 'Electrical Engineer', 'ACI Autodesk Certified Instructor from Autodesk since 2014, Certified Trainer at the Engineers Training Center, Consultant Engineer from the Jordanian Engineers Association, Certified Arbitrator, Federation of Arab Engineers', 'Senior Consultant Engineer and Founder - Affiliation Engineers Consulting Worked for several Jordanian and Arab consulting companies', 'Senior Consultant Engineer and Founder - Affiliation Engineers Consulting Worked for several Jordanian and Arab consulting companies', 'amaan', '1679406498.pdf', 'coach.jpg', 'engineer', 'accepted', NULL, NULL, '2023-03-21 10:48:18', '2023-03-21 10:48:18'),
(11, 'Raed Khaleel', 'Raed@gmail.com', 789745874, NULL, '$2y$10$v8DKBZmalZ.eyfQRBkk9getKiKNN1YX7nvq26WV7oS6SMwOChAcMq', 'Bachelor\'s degree in Civil Engineering - University of Jordan', 'Head of Specialization in Structural Engineering - Jordan Engineers Association - Certified Trainer in Structural Design, Supervision and Engineering Management - Jordan Engineers Association', 'https://www.linkedin.com/in/mohammad-alnuqeiti-1954b1251/', 'Founding partner in Spectrum Response Engineering Consultancy', 'Head of Specialization in Structural Engineering - Jordan Engineers Association - Certified Trainer in Structural Design, Supervision and Engineering Management - Jordan Engineers Association', 'Previously Head of Structural Design Department - Formerly Head of Project Supervision and Management Department', 'Previously Head of Structural Design Department - Formerly Head of Project Supervision and Management Department', 'irbed', '1679406670.pdf', 'coach.jpg', 'engineer', 'accepted', NULL, NULL, '2023-03-21 10:51:10', '2023-03-21 10:51:10'),
(12, 'Rami ali', 'Rami@gmail.com', 787987958, NULL, '$2y$10$H8zEhS/MnXziWuKRoQVmhOAbFXdJT65Dr.p0w0Fm/bfJVmnnF.5te', 'Bachelor of Mechanical Engineering, Hashemite University', 'ACI Autodesk Certified Instructor from Autodesk since 2014, Certified Trainer at the Engineers Training Center, Consultant Engineer from the Jordanian Engineers Association, Certified Arbitrator, Federation of Arab Engineers', 'https://www.linkedin.com/in/mohammad-alnuqeiti-1954b1251/', 'mechanical engineer', 'ACI Autodesk Certified Instructor from Autodesk since 2014, Certified Trainer at the Engineers Training Center, Consultant Engineer from the Jordanian Engineers Association, Certified Arbitrator, Federation of Arab Engineers', 'Senior Consultant Engineer and Founder - Affiliation Engineers Consulting Worked for several Jordanian and Arab consulting companies', 'Senior Consultant Engineer and Founder - Affiliation Engineers Consulting Worked for several Jordanian and Arab consulting companies', 'aqaba', '1679406773.pdf', 'coach.jpg', 'engineer', 'accepted', NULL, NULL, '2023-03-21 10:52:53', '2023-03-21 10:52:53'),
(13, 'Osama Khaled', 'Osama@gmail.com', 798789574, NULL, '$2y$10$nCz0K791dKuJt0Vd3pBtfO1UVyjGRj9FsoFW3nDXZWfVi/sVGMytC', 'Bachelor of Electrical Engineering, Yarmouk University', 'ACI Autodesk Certified Instructor from Autodesk since 2014, Certified Trainer at the Engineers Training Center, Consultant Engineer from the Jordanian Engineers Association, Certified Arbitrator, Federation of Arab Engineers', 'https://www.linkedin.com/in/mohammad-alnuqeiti-1954b1251/', 'Electrical Engineer', 'ACI Autodesk Certified Instructor from Autodesk since 2014, Certified Trainer at the Engineers Training Center, Consultant Engineer from the Jordanian Engineers Association, Certified Arbitrator, Federation of Arab Engineers', 'Senior Consultant Engineer and Founder - Affiliation Engineers Consulting Worked for several Jordanian and Arab consulting companies', 'Senior Consultant Engineer and Founder - Affiliation Engineers Consulting Worked for several Jordanian and Arab consulting companies', 'amaan', '1679406877.pdf', 'coach.jpg', 'engineer', 'accepted', NULL, NULL, '2023-03-21 10:54:37', '2023-03-21 10:54:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_course_id_foreign` (`course_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkouts_order_id_foreign` (`order_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_course_id_foreign` (`course_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_user_id_foreign` (`user_id`),
  ADD KEY `courses_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lectures_user_id_foreign` (`user_id`),
  ADD KEY `lectures_course_id_foreign` (`course_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_course_id_foreign` (`course_id`),
  ADD KEY `order_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD CONSTRAINT `checkouts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `lectures_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lectures_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
