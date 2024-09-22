-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2024 at 09:27 PM
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
-- Database: `topics`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `CategoryName`, `created_at`, `updated_at`) VALUES
(1, 'Design', '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(2, 'Marketing', '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(3, 'Finance', '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(4, 'Music', '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(5, 'Education', '2024-09-22 08:53:06', '2024-09-22 08:53:06');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` text NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `ReadCondition` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `Name`, `Email`, `Subject`, `Content`, `ReadCondition`, `created_at`, `updated_at`) VALUES
(1, 'Trace Blick', 'heaney.ruth@hotmail.com', 'Cupiditate non voluptas.', 'Explicabo excepturi ratione reiciendis atque sapiente. Debitis alias rerum et quia similique provident rerum. Et omnis et ipsum et atque amet.', 1, '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(2, 'Davion Quigley PhD', 'dietrich.sherman@heathcote.com', 'Ullam saepe accusantium enim.', 'Quia expedita sequi rerum officia laudantium enim. Aut numquam illum voluptas omnis molestias ab. Quidem praesentium enim quo nobis eos non.', 0, '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(3, 'Prince Kertzmann', 'jayde.ferry@pfannerstill.com', 'Quia et sequi.', 'Eveniet autem libero quam odio ipsam tempore molestiae veniam. Quidem aut eum ut velit.', 0, '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(4, 'Isobel Kuhic', 'flavie.pfannerstill@gmail.com', 'Vel explicabo in.', 'Maiores tempore est autem incidunt. Eveniet voluptates quaerat nihil eos voluptate aspernatur ut. Et maiores sit est rem qui ea nesciunt asperiores. Quia reprehenderit et quo nam itaque fugiat voluptatem velit. Voluptas delectus est doloremque omnis.', 1, '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(5, 'Dr. Sophie Carter', 'ikling@gmail.com', 'Voluptatem cumque veniam repudiandae.', 'Porro ipsum fugit et aut rerum dolores. Quis non ipsa eos unde qui id et. Aut eaque id aut voluptatem non aut.', 1, '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(6, 'Carlee Moen', 'vito.abbott@quitzon.com', 'Culpa qui eos velit reiciendis.', 'Aliquid et voluptates deserunt cum. Aliquam repudiandae soluta sequi voluptatibus voluptates enim. Qui corporis atque qui minus culpa maiores.', 0, '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(7, 'Rachael Bernhard', 'van24@lockman.com', 'Est molestiae rerum.', 'Qui dolor enim qui aut vitae et. Odio ipsam eligendi neque quo quisquam et. Esse itaque aut eos quos omnis unde unde. Voluptas vitae dolorum ducimus et laborum voluptas. Quod sunt nemo molestiae maiores ipsa.', 1, '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(8, 'Emmanuelle Schoen', 'schroeder.carolyne@yahoo.com', 'Repellendus et dignissimos adipisci.', 'Nisi eveniet sint saepe nostrum quasi. Omnis beatae necessitatibus placeat deserunt quo facere. Modi doloribus est itaque. Sed dolorem at magnam quas deserunt recusandae sequi.', 1, '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(9, 'Hulda Renner', 'swift.roel@hintz.com', 'Dolor ut nihil eum.', 'Inventore laboriosam consequuntur iusto quibusdam non officia mollitia. Laboriosam et ea perferendis quo rerum. Aut beatae similique in qui consectetur quisquam. Eos odio laudantium sit ea nemo.', 1, '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(10, 'Berry Abernathy', 'ndicki@hamill.com', 'Voluptatem illo tenetur et.', 'Quasi consequatur voluptas non ratione est. Molestiae enim exercitationem voluptas corrupti fugit est necessitatibus tenetur. Ducimus totam molestias numquam modi voluptatibus.', 1, '2024-09-22 08:53:06', '2024-09-22 08:53:06'),
(11, 'Mrs. Carmella Trantow', 'ebrown@yahoo.com', 'Natus est qui impedit.', 'Magnam soluta harum reiciendis amet. Ex velit velit aut minus rerum ut facilis. Fuga similique debitis laborum molestiae.', 0, '2024-09-22 09:01:07', '2024-09-22 09:01:07'),
(12, 'Karson Toy', 'keeling.adell@boehm.org', 'Nulla repellat nam.', 'Quos occaecati eligendi et cumque quaerat dolor. Quaerat quod officia ea eum nihil cum aut nobis. Fugit accusamus nisi vero minima voluptatem cum repellat.', 0, '2024-09-22 09:01:07', '2024-09-22 09:01:07'),
(13, 'Prof. Eudora Gulgowski PhD', 'nhessel@reichert.org', 'Voluptatem necessitatibus nobis.', 'Occaecati non et et consequatur rerum ipsam ut. Quia voluptas iure quia enim molestiae reprehenderit. Vitae cum minima incidunt nostrum non. Consequatur dolore ratione qui repellendus et et ut cupiditate.', 0, '2024-09-22 09:01:07', '2024-09-22 09:01:07'),
(14, 'Jovany Erdman', 'fmarks@rempel.net', 'Explicabo magni velit tenetur.', 'Consectetur excepturi blanditiis necessitatibus facere unde rerum et. Et similique facere quos quo dolore labore error molestiae. Nostrum tempore officiis autem est et.', 1, '2024-09-22 09:01:07', '2024-09-22 09:01:07'),
(15, 'Asia Brakus', 'mccullough.adah@yahoo.com', 'Earum ipsam in.', 'Eligendi id laboriosam numquam et ab doloribus laudantium. Consequatur optio pariatur quidem sit sed quos voluptatum. Dignissimos corporis et qui. Quas totam sed dolorem voluptatem quia consequatur deserunt.', 1, '2024-09-22 09:01:07', '2024-09-22 09:01:07'),
(16, 'Nicolette Yundt', 'lukas56@eichmann.info', 'Ducimus saepe recusandae.', 'Expedita minus modi nemo ut repellendus occaecati. Officiis minus numquam repudiandae et labore occaecati eaque. Sunt et voluptas placeat dolorem est et ut. Tempore non itaque nulla rerum deleniti.', 0, '2024-09-22 09:01:07', '2024-09-22 09:01:07'),
(17, 'Eleonore Bogan', 'wcassin@yahoo.com', 'Aut odit aut.', 'Hic neque dignissimos in perspiciatis. Architecto qui dolore totam voluptas. Rerum in ut officiis sequi ex odio. Ipsa quaerat pariatur dolor aut.', 1, '2024-09-22 09:01:07', '2024-09-22 09:01:07'),
(18, 'Evangeline Spinka', 'nitzsche.frederique@carter.net', 'Numquam dolor rerum.', 'Aut consequatur libero quis. Esse tempore numquam id illo in accusantium. Quis enim fugit sit laboriosam ducimus incidunt. Id iusto autem totam voluptas voluptatem aliquid.', 1, '2024-09-22 09:01:07', '2024-09-22 09:01:07'),
(19, 'Bettye Stanton', 'loy24@gmail.com', 'Quisquam in magni natus expedita.', 'Qui odit aspernatur natus odio. Eveniet aut perspiciatis dolores atque. Est sit neque est autem.', 0, '2024-09-22 09:01:07', '2024-09-22 09:01:07'),
(20, 'Josue Schinner DVM', 'kunze.kennedi@hotmail.com', 'Sint temporibus consequatur.', 'Inventore quia natus suscipit. Optio natus tenetur et perferendis dignissimos iure nesciunt. Debitis explicabo similique quibusdam qui repellendus quia ad. Nostrum fugit omnis nostrum explicabo est aliquam possimus. Voluptatem reiciendis nihil beatae perferendis qui.', 0, '2024-09-22 09:01:07', '2024-09-22 09:01:07'),
(21, 'Ardella Lubowitz', 'langworth.gerhard@yahoo.com', 'Quae quasi quidem.', 'Magnam ad corporis voluptas libero et sequi. Vero sit repellendus quis consequatur tempora. Ea reprehenderit praesentium et laudantium asperiores excepturi. Sed ad ullam omnis placeat.', 1, '2024-09-22 09:02:08', '2024-09-22 09:02:08'),
(22, 'Dr. Hillard Mueller', 'zwelch@hotmail.com', 'Deleniti dolore molestias.', 'Rerum adipisci est voluptatibus. Molestias autem saepe eos est accusantium recusandae unde sit. Quas rerum esse quis impedit. Consequatur ut dicta quidem explicabo itaque voluptas beatae nam.', 0, '2024-09-22 09:02:08', '2024-09-22 09:02:08'),
(23, 'Miss Marcelle Smith', 'raina.hermiston@wyman.com', 'Accusantium eius enim ducimus et.', 'Minus nulla adipisci et sed necessitatibus ut. Quaerat commodi deserunt velit aliquid laudantium distinctio. Eius laborum quae ut natus est voluptatem nobis.', 0, '2024-09-22 09:02:08', '2024-09-22 09:02:08'),
(24, 'Marina Runte', 'ydouglas@mcglynn.com', 'Qui ipsa enim vel.', 'Sit asperiores hic et sed officiis. Minima ratione doloremque similique possimus voluptate inventore asperiores. Alias doloremque voluptatem veniam tempore dolor non quae.', 1, '2024-09-22 09:02:08', '2024-09-22 09:02:08'),
(25, 'Alize O\'Hara', 'rory35@hotmail.com', 'Occaecati quaerat deserunt.', 'Quod harum magnam ad distinctio culpa placeat numquam. Molestiae voluptatem modi sit quo qui. Possimus pariatur minima quae suscipit repellat eum. Sit expedita quam fugiat dolore perspiciatis minima omnis.', 1, '2024-09-22 09:02:08', '2024-09-22 09:02:08'),
(26, 'Eleazar Kessler', 'nitzsche.judy@halvorson.org', 'Fugit ut voluptatem voluptas.', 'Dolorem incidunt ut praesentium excepturi voluptatem eos provident. Non impedit sed cum facere minus similique. Est aliquid nostrum harum eum nihil quis cupiditate nemo.', 1, '2024-09-22 09:02:08', '2024-09-22 09:02:08'),
(27, 'Garrick Reichert II', 'martin.homenick@gmail.com', 'Minus qui nobis non deleniti.', 'Laboriosam neque officiis ut quos dolorem totam fugiat. Architecto distinctio exercitationem optio mollitia quod eos est voluptas. Laboriosam aliquid illum quia accusantium. Excepturi consectetur in molestiae harum saepe.', 1, '2024-09-22 09:02:08', '2024-09-22 09:02:08'),
(28, 'Pasquale Bradtke', 'yost.coleman@gmail.com', 'Quas ut sit aut.', 'Est exercitationem quo ratione cumque. Esse rerum delectus consectetur soluta cumque dolorem corporis aliquam. Quis ea ea praesentium reprehenderit voluptatum assumenda voluptates.', 1, '2024-09-22 09:02:08', '2024-09-22 09:02:08'),
(29, 'Prof. Virginie Beatty', 'braden.nienow@gmail.com', 'Rem vero dolorem at.', 'Recusandae velit labore animi. Dolore dignissimos fugit quia doloribus quisquam. Eius sed magnam tempore nobis aut minima est.', 0, '2024-09-22 09:02:08', '2024-09-22 09:02:08'),
(30, 'Clement Williamson', 'rodrick54@stroman.net', 'Culpa porro aut.', 'Dolor pariatur rerum ipsum voluptas quas. Voluptas sunt cupiditate autem et voluptas numquam. Omnis quasi quam rerum assumenda. Sapiente vel rerum quasi nostrum quis sit illo. Ab alias aut sequi non assumenda quibusdam voluptatibus nulla.', 0, '2024-09-22 09:02:08', '2024-09-22 09:02:08');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_12_120147_create_categories_table', 1),
(5, '2024_09_12_120307_create_topics_table', 1),
(6, '2024_09_15_124614_create_testimonials_table', 1),
(7, '2024_09_15_200648_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('pKyzcDdWCLSeXOgxORkdWiZ2GAi68syCXCwNGbbw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXZZd1JvczZSMGdhaGR0R1VsdkxpMTdjMHVXcHNyWWJsNE4xM3ZtTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90b3BpY3MvbGlzdD9wYWdlPTMiO319', 1727033233);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Published` tinyint(1) NOT NULL DEFAULT 0,
  `Image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `Name`, `Content`, `Published`, `Image`, `created_at`, `updated_at`) VALUES
(1, 'salma', 'Deserunt repellendus error voluptatum aut quas et. Eligendi deserunt quam laboriosam et numquam. Molestiae vero inventore cupiditate quasi architecto saepe.', 1, 'rocky-xiong-UE04nFCgDUE-unsplash.jpg', '2024-09-22 11:32:09', '2024-09-22 11:39:33'),
(2, 'Ahmed', 'Provident soluta cumque repellat magnam qui. Dolor odit est est sit nihil sequi. Soluta sunt repellendus et eaque alias non. Totam eos illum aut consectetur ea.', 0, '1727016355.png', '2024-09-22 11:32:09', '2024-09-22 11:45:55'),
(3, 'Aliaa', 'Nesciunt cumque qui repudiandae at eum iure architecto. Saepe ab dicta optio sint magni sed. Ut eum rerum et tenetur debitis sint. Itaque impedit dignissimos atque molestias.', 1, '1727016374.png', '2024-09-22 11:32:09', '2024-09-22 11:46:14'),
(4, 'Dondon', 'Non impedit ut ex incidunt facere. Consectetur fugit necessitatibus aut illo. Cupiditate voluptates exercitationem alias non quo. Vitae expedita quo dolorum voluptatibus corporis officiis commodi.', 1, '1727016393.png', '2024-09-22 11:32:09', '2024-09-22 11:46:33'),
(5, 'omar', 'Cupiditate assumenda quod consectetur non quasi fuga. Pariatur ut dolor quis necessitatibus ut odit. Animi aut perferendis fugiat velit hic saepe qui. Veniam necessitatibus et qui provident. Voluptatum iste aut aspernatur omnis vel doloribus. Error eum qui officia dignissimos reiciendis quaerat.', 1, '1727016410.png', '2024-09-22 11:32:09', '2024-09-22 11:46:50'),
(6, 'Adel', 'Non aut quae cum velit. Nemo qui itaque quam facere hic saepe consequatur ut. Atque aut dolorum molestiae dolores dolorem inventore et.', 1, '1727016427.png', '2024-09-22 11:32:09', '2024-09-22 11:47:07'),
(7, 'sherif', 'Qui quidem laborum quo occaecati. Quia minima distinctio aliquam voluptas nam voluptatem. Ut maxime in nesciunt temporibus incidunt accusantium magnam. Eaque beatae veritatis ex qui dolores non.', 1, '1727016440.png', '2024-09-22 11:32:09', '2024-09-22 11:47:20'),
(8, 'Dalila', 'Ducimus magnam delectus quae asperiores. Consequatur eum voluptatibus quo et et. Dolorum dolorem rerum est non expedita laborum. Cum quis reprehenderit cum. Quisquam quo quo molestiae aut. Aut sit repellat libero provident omnis iure vel. Eius porro autem distinctio est voluptates et.', 1, '1727016462.png', '2024-09-22 11:32:09', '2024-09-22 11:47:42'),
(9, 'Basma', 'Officiis doloremque temporibus nobis ut rerum minus. Inventore ratione eos et autem et. Ullam eum accusantium molestias dicta quis adipisci temporibus tempora. Maiores qui commodi repellendus vitae sed error.', 0, 'rocky-xiong-UE04nFCgDUE-unsplash.jpg', '2024-09-22 11:32:09', '2024-09-22 11:47:57'),
(10, 'Nourhan', 'Iure laborum sint praesentium voluptatem et. Aut officiis aut debitis quidem. Incidunt et pariatur eum quam dolorem. Culpa hic est ut dignissimos incidunt aut. Quo velit cumque est eveniet. Ab ipsa culpa rerum et delectus sunt at. Iusto sit id iure velit est.', 0, 'rocky-xiong-UE04nFCgDUE-unsplash.jpg', '2024-09-22 11:32:09', '2024-09-22 11:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `NumberOfViews` int(11) NOT NULL DEFAULT 0,
  `Trending` tinyint(1) NOT NULL DEFAULT 0,
  `Published` tinyint(1) NOT NULL DEFAULT 0,
  `Category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `Title`, `Content`, `NumberOfViews`, `Trending`, `Published`, `Category_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Web Design', 'Ipsa blanditiis eligendi omnis maxime. Aliquid laborum dicta earum corporis. Voluptas sed consequatur temporibus error commodi quidem maxime voluptatem. Sint voluptas aut minus.', 5, 0, 1, 1, 'undraw_Finance_re_gnv2.png', '2024-09-22 09:02:08', '2024-09-22 12:30:16'),
(2, 'Advertising', 'Eligendi et illum dolorem et. Quia omnis et tenetur iure et. Veritatis sed odit aut itaque rem.', 7, 0, 1, 2, '1727015604.png', '2024-09-22 09:02:08', '2024-09-22 11:33:24'),
(3, 'Podcast', 'Neque ut error reiciendis vitae aut asperiores ullam. Perspiciatis officia harum doloribus assumenda voluptatibus enim. Laboriosam id quae ut dolorem sequi fuga. Commodi a dolores consequatur reiciendis qui et et consectetur.', 2, 1, 1, 4, 'undraw_Remote_design_team_re_urdx.png', '2024-09-22 09:02:08', '2024-09-22 11:15:11'),
(4, 'Finance', 'Aperiam est molestiae ut similique soluta impedit. Impedit neque quia possimus est voluptatum. Ipsam voluptas et ad in occaecati placeat. Sed at voluptas excepturi.', 8, 1, 1, 3, 'undraw_Podcast_audience_re_4i5q.png', '2024-09-22 09:02:08', '2024-09-22 11:21:03'),
(5, 'graphic', 'Et laborum exercitationem a iure eligendi eaque dolor. In rerum iste molestiae est est dolore possimus. Quis eos molestiae alias aut velit ea.', 6, 1, 1, 1, 'colleagues-working-cozy-office-medium-shot.png', '2024-09-22 09:02:08', '2024-09-22 11:26:21'),
(6, 'Logo Design', 'Enim culpa harum ea distinctio saepe sint ab. At rem temporibus voluptatum odit. Et maxime velit eveniet similique deserunt officiis quos est. Aperiam hic libero fugit quod et expedita natus.', 6, 0, 1, 1, '1727015708.png', '2024-09-22 09:02:08', '2024-09-22 11:35:09'),
(7, 'video content', 'Officiis unde facere similique non dolores laudantium. Consectetur alias eum est perferendis sint iusto ullam similique.', 7, 0, 1, 2, '1727014577.png', '2024-09-22 09:02:08', '2024-09-22 11:16:17'),
(8, 'viral tweet', 'Rerum facere aut vitae modi enim. Sunt libero esse iusto voluptas sunt. Consequatur rem voluptas omnis eligendi labore laudantium voluptatem.', 4, 0, 1, 2, '1727015731.png', '2024-09-22 09:02:08', '2024-09-22 11:35:31'),
(9, 'investment', 'Voluptas totam voluptatem ut. Dolore quas quia voluptas et qui. Quam necessitatibus est perspiciatis. Quam at iste optio numquam.', 2, 0, 1, 3, 'undraw_viral_tweet_gndb.png', '2024-09-22 09:02:08', '2024-09-22 11:21:34'),
(10, 'Composing Songs', 'Magnam quia rem enim possimus nam. Doloremque in eos numquam nesciunt repellat. Minus voluptatibus temporibus nostrum sed. Est autem qui est.', 2, 0, 1, 4, 'undraw_online_ad_re_ol62.png', '2024-09-22 09:02:08', '2024-09-22 11:33:45'),
(21, 'Online Music', 'Ipsa blanditiis eligendi omnis maxime. Aliquid laborum dicta earum corporis. Voluptas sed consequatur temporibus error commodi quidem maxime voluptatem. Sint voluptas aut minus.', 0, 0, 1, 4, '1727006961.png', '2024-09-22 09:09:21', '2024-09-22 09:09:21'),
(23, 'graduation', 'Ipsa blanditiis eligendi omnis maxime. Aliquid laborum dicta earum corporis. Voluptas sed consequatur temporibus error commodi quidem maxime voluptatem. Sint voluptas aut minus.', 0, 0, 1, 5, '1727007130.png', '2024-09-22 09:12:10', '2024-09-22 09:12:10'),
(24, 'educator', 'Ipsa blanditiis eligendi omnis maxime. Aliquid laborum dicta earum corporis. Voluptas sed consequatur temporibus error commodi quidem maxime voluptatem. Sint voluptas aut minus.', 1, 1, 1, 5, '1727007156.png', '2024-09-22 09:12:36', '2024-09-22 11:26:58'),
(25, 'digital Art', 'So how can you stand out, do something unique and interesting, build an online business, and get paid enough to change life. Please visit TemplateMo website to download free website templates.', 0, 0, 1, 1, '1727014979.png', '2024-09-22 11:22:59', '2024-09-22 11:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `UserName`, `email`, `active`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Basma', 'Abdallah', 'Basma', 'Basma@gmail.com', 1, '2024-09-22 11:55:17', '$2y$12$OWvi0oypkXr7Od201xMmr.FP5d9lamo/51PTMIrlwYfnT11ttcygG', NULL, '2024-09-22 08:54:53', '2024-09-22 08:57:37'),
(2, 'active', 'user', 'to_test_in_active_user', 'active_user@gmail.com', 0, '2024-09-22 08:57:27', '$2y$12$NivhrqGIfIkRVA8XcChj7O2HFm/LpZRh97yRrl6vL25mN/jbLdkXi', NULL, '2024-09-22 08:57:27', '2024-09-22 08:58:21'),
(3, 'admin', 'admin', 'admin', 'admin@gmail.com', 1, '2024-09-22 08:58:44', '$2y$12$d1a1C1nzswuAurDruf4HjuIQnTa6Xx9C1QLSMgarcZxzI3Y7.iF/y', NULL, '2024-09-22 08:58:44', '2024-09-22 08:58:44'),
(4, 'verify', 'email', 'to_test_unverified_email', 'to_test_unverified_email@gmail.com', 1, NULL, '$2y$12$VUTPwsqgeqKYSZ98mvoMGOR3GNKHzpKjazXPyHoXFXGxdY.KxJEQO', NULL, '2024-09-22 08:59:25', '2024-09-22 08:59:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_categoryname_unique` (`CategoryName`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonials_name_unique` (`Name`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `topics_title_unique` (`Title`),
  ADD KEY `topics_category_id_foreign` (`Category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`UserName`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_category_id_foreign` FOREIGN KEY (`Category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
