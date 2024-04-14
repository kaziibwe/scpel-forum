-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2024 at 05:40 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scpel_threads`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_05_123808_create_threads_table', 1),
(6, '2024_04_05_133457_create_reactions', 1),
(7, '2024_04_06_143417_create_reactions', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `id` bigint UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thread_id` bigint UNSIGNED DEFAULT NULL,
  `reaction_id` bigint UNSIGNED DEFAULT NULL,
  `name_reacted_to` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reactions`
--

INSERT INTO `reactions` (`id`, `firstname`, `lastname`, `email`, `message`, `thread_id`, `reaction_id`, `name_reacted_to`, `created_at`, `updated_at`) VALUES
(1, 'alfredka', 'jami', 'alfredkaziibwe19@gmail.com', 'parentReaction() because it now represents the parent reaction. We changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.\r\n parentReaction() because it now represents the parent reaction. We changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.', 8, NULL, 'kaziibwe  Alfred', '2024-04-08 14:23:16', '2024-04-08 14:23:16'),
(2, 'jami100', 'jedo', 'jami@gmail.com', 'represents the parent reaction. We changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.represents the parent reaction. We changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.represents the parent reaction. We changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.', 8, 1, 'alfredka  jami', '2024-04-08 14:25:25', '2024-04-08 14:25:25'),
(3, 'alfredkaziibwe19@gmail.com', 'jedo', 'marthakarungi90@gmail.com', '\'reaction_id\', assuming that this column holds the ID of the parent reaction.represents the parent reaction. We changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.\r\n\'reaction_id\', assuming that this column holds the ID of the parent reaction.represents the parent reaction. We changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.', 8, 2, 'jami100  jedo', '2024-04-08 14:26:14', '2024-04-08 14:26:14'),
(4, 'jami100@gmail.com', 'kjsf', 'jami100@gmail.com', 'parentReaction() because it now represents the parent reaction. We changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.\r\nparentReaction() because it now represents the parent reaction. We changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.', 8, 1, 'alfredka  jami', '2024-04-08 14:26:59', '2024-04-08 14:26:59'),
(6, 'kaziibwe', 'Alfred', 'greenvoltalimited@gmail.com', 'ow4eltjpfowelkfml \r\n                        We changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.\r\nWe changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.\r\nWe changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.\r\nWe changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.\r\nWe changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.', 5, NULL, 'alfredkaziibwe100@gmail.com  Ssessaazi', '2024-04-08 14:38:51', '2024-04-08 14:38:51'),
(10, 'kaziibwe', 'Alfred', 'greenvoltalimited@gmail.com', 'opEquals between two class objects. This is the default opEquals function which from my understanding simply compares the two memory addresses. I don\'t see why this would ever be considered unsafe, even if the class isn\'t marked as @safe. Is doing this operation with a @safe class really any more or less risky than doing it with a', 3, NULL, 'jami  Albert', '2024-04-11 00:07:26', '2024-04-11 00:07:26'),
(11, 'albert', 'albert', 'alfredkaziibwe@gmail.com', 'I don\'t see why this would ever be considered unsafe, even if the class isn\'t marked as @safe. Is doing this operation with a @ I don\'t see why this would ever be considered unsafe, even if the class isn\'t marked as @safe. Is doing this operation with a @ I don\'t see why this would ever be considered unsafe, even if the class isn\'t marked as @safe. Is doing this operation with a @ I don\'t see why this would ever be considered unsafe, even if the class isn\'t marked as @safe. Is doing this operation with a @', 3, 10, 'kaziibwe  Alfred', '2024-04-11 00:08:12', '2024-04-11 00:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` bigint UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `firstname`, `lastname`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'jami', 'Albert', 'jami100@gmail.com', 'Why is `opequals` for objects not `@safe` by default?', 'this  the first release of scpel\r\n     \r\n                      I am rather new to D, and have just began using the @safe and @nogc attributes. I have just begun using FLUID, a GUI library that requires safe delegates to be passed to it\'s objects.\r\n\r\nWhile writing in @safe mode has mostly been not very difficult, and I usually have a sense of why the compiler rejects what it rejects, I was quite surprised when the compiler rejected an opEquals between two class objects. This is the default opEquals function which from my understanding simply compares the two memory addresses.\r\n\r\nI don\'t see why this would ever be considered unsafe, even if the class isn\'t marked as @safe. Is doing this operation with a @safe class really any more or less risky than doing it with a @system class?\r\n\r\nIs this just an oversight, or was this a deliberate choice?   this  the first release of scpel', '2024-04-05 18:14:11', '2024-04-05 18:14:11'),
(5, 'alfredkaziibwe100@gmail.com', 'Ssessaazi', 'emmymorgan1278@gmail.com', 'dfiok[p]l[[poiuytf', 'hgsdafdfghj', '2024-04-05 19:49:06', '2024-04-05 19:49:06'),
(6, 'kiiza', 'Moses', 'alfredkaziibwe19@gmail.com', 'information that was released was not true', '- GUI library that requires safe delegates to be passed to it\'s objects. While writing in @safe mode has mostly been not very difficult, and I usually have a sense of why the compiler rejects what it rejects, I was quite surprised when the compiler rejected an opEquals between two class objects. -This is the default opEquals function which from my understanding simply compares the two memory addresses. I don\'t see why this would ever be considered unsafe, even if the class isn\'t marked as @safe. Is doing this operation with a @safe class really any more or less risky than doing it with a @system class? Is this just an oversight, or was this a deliberate choice? this the first release of scpel\r\n a GUI library that requires safe delegates to be passed to it\'s objects. While writing in @safe mode has mostly been not very difficult, and I usually have a sense of why the compiler rejects what it rejects, I was quite surprised when the compiler rejected an opEquals between two class objects. -This is the default opEquals function which from my understanding simply compares the two memory addresses. I don\'t see why this would ever be considered unsafe, even if the class isn\'t marked as @safe. Is doing this operation with a @safe class really any more or less risky than doing it with a @system class? Is this just an oversight, or was this a deliberate choice? this the first release of scpel', '2024-04-06 14:40:53', '2024-04-06 14:40:53'),
(7, 'laravel', 'mister', 'laravel@gmail.com', 'why did you chose laravel ?', 'To make the default id parameter in your route the ID of the latest thread, you can modify your route closure to fetch the latest thread ID dynamically. Here\'s how you can do it:To make the default id parameter in your route the ID of the latest thread, you can modify your route closure to fetch the latest thread ID dynamically. Here\'s how you can do it:To make the default id parameter in your route the ID of the latest thread, you can modify your route closure to fetch the latest thread ID dynamically. Here\'s how you can do it:To make the default id parameter in your route the ID of the latest thread, you can modify your route closure to fetch the latest thread ID dynamically. Here\'s how you can do it:To make the default id parameter in your route the ID of the latest thread, you can modify your route closure to fetch the latest thread ID dynamically. Here\'s how you can do it:To make the default id parameter in your route the ID of the latest thread, you can modify your route closure to fetch the latest thread ID dynamically. Here\'s how you can do it:To make the default id parameter in your route the ID of the latest thread, you can modify your route closure to fetch the latest thread ID dynamically. Here\'s how you can do it:To make the default id parameter in your route the ID of the latest thread, you can modify your route closure to fetch the latest thread ID dynamically. Here\'s how you can do it:To make the default id parameter in your route the ID of the latest thread, you can modify your route closure to fetch the latest thread ID dynamically. Here\'s how you can do it:', '2024-04-08 11:23:40', '2024-04-08 11:23:40'),
(8, 'kaziibwe', 'Alfred', 'alfredkaziibwe19@gmail.com', 'Onboarding process', 'We changed the name of the relationship from parentReaction() to parentReaction() because it now represents the parent reaction.\r\nWe changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.\r\nWe changed the name of the relationship from parentReaction() to parentReaction() because it now represents the parent reaction.\r\nWe changed the column used for the relationship to \'reaction_id\', assuming that this column holds the ID of the parent reaction.', '2024-04-08 13:41:26', '2024-04-08 13:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alfredkaziibwe19@gmail.com', 'alfredkaziibwe19@gmail.com', NULL, '$2y$12$1H.PsvY8veb6gZwy2rY5wOKJhUbBswhSQUik/aaE4.svHp7gXsl1S', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reactions_thread_id_foreign` (`thread_id`),
  ADD KEY `reactions_reaction_id_foreign` (`reaction_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reactions`
--
ALTER TABLE `reactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reactions`
--
ALTER TABLE `reactions`
  ADD CONSTRAINT `reactions_reaction_id_foreign` FOREIGN KEY (`reaction_id`) REFERENCES `reactions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reactions_thread_id_foreign` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
