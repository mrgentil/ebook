-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 02 mars 2020 à 13:49
-- Version du serveur :  5.7.24
-- Version de PHP : 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zamengapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` float DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `active` enum('active','disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disabled',
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `slug`, `description`, `file`, `cost`, `status`, `category_id`, `created_at`, `updated_at`, `pdf`, `user_id`, `active`, `author_name`) VALUES
(1, 'Etude et mise en place de l\'interconnexion des sites distants. Cas du CH Monkole1', 'etude-et-mise-en-place-de-linterconnexion-des-sites-distants-cas-du-ch-monkole1', 'You\'ll notice above that the timezone (2nd) parameter was passed as a string rather than a \\DateTimeZone instance. All DateTimeZone parameters have been augmented so you can pass a DateTimeZone instance, string or integer offset to GMT and the timezone will be created for you. This is again shown in the next example which also introduces the now() function.', 'books\\February2020\\ymfMBuvgpC9R8Wc5lgmQ.jpg', NULL, 'GRATUIT', '4', '2020-02-20 09:14:00', '2020-03-02 10:50:02', '[{\"download_link\":\"books\\\\February2020\\\\6S7AxnNO8XIJJt7sPtBI.pdf\",\"original_name\":\"laravel-favorite.pdf\"}]', 1, 'active', NULL),
(2, 'Etude et mise en place de l\'interconnexion des sites distants. Cas du CH Monkole', 'etude-et-mise-en-place-de-l-interconnexion-des-sites-distants-cas-du-ch-monkole', 'You\'ll notice above that the timezone (2nd) parameter was passed as a string rather than a \\DateTimeZone instance. All DateTimeZone parameters have been augmented so you can pass a DateTimeZone instance, string or integer offset to GMT and the timezone will be created for you. This is again shown in the next example which also introduces the now() function.', 'books\\February2020\\JtWkoq6G4UP6mMugs7nd.jpg', 200, 'PAYANT', '5', '2020-02-20 09:15:26', '2020-02-28 13:49:05', '[{\"download_link\":\"books\\\\February2020\\\\Ud2NW69o5Bzr7DoqGJNL.pdf\",\"original_name\":\"laravel-favorite.pdf\"}]', 1, 'active', NULL),
(3, 'Etude et mise en place de l\'interconnexion des sites distants. Cas du CH Monkole', 'etude-et-mise-en-place-de-l-interconnexion-des-sites-distants-cas-du-ch-monkole', 'You\'ll notice above that the timezone (2nd) parameter was passed as a string rather than a \\DateTimeZone instance. All DateTimeZone parameters have been augmented so you can pass a DateTimeZone instance, string or integer offset to GMT and the timezone will be created for you. This is again shown in the next example which also introduces the now() function.', 'books\\February2020\\DH7tHAptMswqLL2bNqoW.jpg', NULL, 'GRATUIT', '4', '2020-02-20 09:19:28', '2020-02-28 13:50:37', '[{\"download_link\":\"books\\\\February2020\\\\rgqeYYi9z9yeg55oHN0c.pdf\",\"original_name\":\"laravel-favorite.pdf\"}]', 1, 'active', NULL),
(4, 'Etude et mise en place de l\'interconnexion des sites distants. Cas du CH Monkole', 'etude-et-mise-en-place-de-l-interconnexion-des-sites-distants-cas-du-ch-monkole', 'You\'ll notice above that the timezone (2nd) parameter was passed as a string rather than a \\DateTimeZone instance. All DateTimeZone parameters have been augmented so you can pass a DateTimeZone instance, string or integer offset to GMT and the timezone will be created for you. This is again shown in the next example which also introduces the now() function.', 'books\\February2020\\uwJMKh6F2g1hp7pgBrkd.jpg', 12, 'PAYANT', '6', '2020-02-20 09:20:11', '2020-02-28 13:51:22', '[{\"download_link\":\"books\\\\February2020\\\\ivQ9OPdxDw99NOg4hPr6.pdf\",\"original_name\":\"laravel-favorite.pdf\"}]', 1, 'active', NULL),
(5, 'Etude et mise en place de l\'interconnexion des sites distants. Cas du CH Monkole', 'etude-et-mise-en-place-de-l-interconnexion-des-sites-distants-cas-du-ch-monkole', 'You\'ll notice above that the timezone (2nd) parameter was passed as a string rather than a \\DateTimeZone instance. All DateTimeZone parameters have been augmented so you can pass a DateTimeZone instance, string or integer offset to GMT and the timezone will be created for you. This is again shown in the next example which also introduces the now() function.', 'books\\February2020\\SlMEz7H6TLGGCNXiI7ed.jpg', 120, 'PAYANT', '6', '2020-02-20 09:21:41', '2020-02-28 13:52:09', '[{\"download_link\":\"books\\\\February2020\\\\pXFYAzdl1gCqkPbDg73z.pdf\",\"original_name\":\"laravel-favorite.pdf\"}]', 1, 'active', NULL),
(6, 'Etude et mise en place de l\'interconnexion des sites distants. Cas du CH Monkole', 'etude-et-mise-en-place-de-l-interconnexion-des-sites-distants-cas-du-ch-monkole', 'You\'ll notice above that the timezone (2nd) parameter was passed as a string rather than a \\DateTimeZone instance. All DateTimeZone parameters have been augmented so you can pass a DateTimeZone instance, string or integer offset to GMT and the timezone will be created for you. This is again shown in the next example which also introduces the now() function.', 'books\\February2020\\ljF3MMtj8FCRUpc1hB3n.jpg', NULL, 'GRATUIT', '5', '2020-02-20 09:22:32', '2020-02-28 13:54:04', '[{\"download_link\":\"books\\\\February2020\\\\vaREwEmZo0geVa0fPMH2.pdf\",\"original_name\":\"laravel-favorite.pdf\"}]', 1, 'active', NULL),
(7, 'Etude et mise en place de l\'interconnexion des sites distants. Cas du CH Monkole', 'etude-et-mise-en-place-de-l-interconnexion-des-sites-distants-cas-du-ch-monkole', 'You\'ll notice above that the timezone (2nd) parameter was passed as a string rather than a \\DateTimeZone instance. All DateTimeZone parameters have been augmented so you can pass a DateTimeZone instance, string or integer offset to GMT and the timezone will be created for you. This is again shown in the next example which also introduces the now() function.', 'books\\February2020\\v5vsh4wiu1aorqwoRAxn.jpg', 15, 'PAYANT', '4', '2020-02-20 09:23:11', '2020-02-28 13:54:46', '[{\"download_link\":\"books\\\\February2020\\\\LHswuBaaA7xsZVpD0Wfg.pdf\",\"original_name\":\"laravel-favorite.pdf\"}]', 1, 'active', NULL),
(8, 'Etude et mise en place de l\'interconnexion des sites distants. Cas du CH Monkole', 'etude-et-mise-en-place-de-l-interconnexion-des-sites-distants-cas-du-ch-monkole', 'You\'ll notice above that the timezone (2nd) parameter was passed as a string rather than a \\DateTimeZone instance. All DateTimeZone parameters have been augmented so you can pass a DateTimeZone instance, string or integer offset to GMT and the timezone will be created for you. This is again shown in the next example which also introduces the now() function.', 'books\\February2020\\RWlvDyI5k1E0f0wylXmX.jpg', 120, 'PAYANT', '4', '2020-02-20 09:23:52', '2020-02-28 13:55:24', '[{\"download_link\":\"books\\\\February2020\\\\iBo4uPVBgu9tg5ZXT3CX.pdf\",\"original_name\":\"laravel-favorite.pdf\"}]', 1, 'active', NULL),
(9, 'Etude et mise en place de l\'interconnexion des sites distants. Cas du CH Monkole', 'etude-et-mise-en-place-de-l-interconnexion-des-sites-distants-cas-du-ch-monkole', 'Etude et mise en place de l\'interconnexion des sites distants. Cas du CH Monkole', 'books\\February2020\\Su86CI68E8rXC96JKGex.jpg', 58, 'PAYANT', '6', '2020-02-27 13:02:09', '2020-02-29 04:46:08', '[{\"download_link\":\"books\\\\February2020\\\\S59spFbDKET9ZJKxqIX0.pdf\",\"original_name\":\"laravel-favorite.pdf\"}]', 1, 'active', NULL),
(10, 'La chèvre de Mr Seguin', 'la-chevre-de-mr-seguin', 'Ce livre est un livre', 'books\\March2020\\MAnqlbBZzQ91MuDympSd.jpg', NULL, 'GRATUIT', '6', '2020-03-02 12:03:43', '2020-03-02 12:05:14', '[{\"download_link\":\"books\\\\March2020\\\\cfn2e1i6K9RwzlIxrNiP.pdf\",\"original_name\":\"jenssegers-date.pdf\"}]', 3, 'active', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2020-02-12 09:44:59', '2020-02-12 09:44:59'),
(2, NULL, 1, 'Category 2', 'category-2', '2020-02-12 09:44:59', '2020-02-12 09:44:59'),
(3, NULL, 2, 'Books', 'books', '2020-02-20 08:25:48', '2020-02-20 08:25:48'),
(4, 3, 3, 'Mémoires', 'memoires', '2020-02-20 08:33:31', '2020-02-25 15:14:57'),
(5, 3, 3, 'TFC', 'tfc', '2020-02-20 08:34:04', '2020-02-25 15:12:46'),
(6, 3, 3, 'Livres', 'livres', '2020-02-20 08:35:48', '2020-02-25 15:12:23'),
(7, 3, 3, 'Religions', 'religions', '2020-02-28 14:06:03', '2020-03-01 17:50:31'),
(8, 3, 3, 'Romans', 'romans', '2020-02-28 14:07:00', '2020-02-28 14:07:00');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commenter_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `child_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `commenter_id`, `commenter_type`, `guest_name`, `guest_email`, `commentable_type`, `commentable_id`, `comment`, `approved`, `child_id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Optimus', 'optimus@contact.com', 'App\\Post', '1', 'In eleifend sapien a faucibus elementum. Sed use ndrerit purus et dignissim. Nulla luctus sequatue a eleifend. Fusce nec ante vel mi pulvinar ultrics. Nulla sodales lorem nisi.', 1, NULL, '2020-02-28 07:57:52', '2020-02-28 07:57:52'),
(2, '1', 'App\\User', NULL, NULL, 'App\\Post', '1', 'In eleifend sapien a faucibus elementum. Sed use ndrerit purus et dignissim. Nulla luctus sequatue a eleifend. Fusce nec ante vel mi pulvinar ultrics. Nulla sodales lorem nisi.', 1, NULL, '2020-02-28 07:58:08', '2020-02-28 07:58:08'),
(3, '1', 'App\\User', NULL, NULL, 'App\\Post', '1', 'Suspendisse ac tellus congue, eleifend leo eu, elementum ligula. Suspendisse eget interdum\r\nest. Nam suscipit diam nulla, porttitor blandit risus viverra sed. In hac...', 1, 1, '2020-02-28 08:19:57', '2020-02-28 08:19:57');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Guerth Manzala', 'admin@admin.com', '+243820558443', 'Nam suscipit diam nulla, porttitor blandit risus viverra sed', 'Suspendisse ac tellus congue, eleifend leo eu, elementum ligula. Suspendisse eget interdum\r\nest. Nam suscipit diam nulla, porttitor blandit risus viverra sed. In hac...', '2020-03-01 04:40:31', '2020-03-01 04:40:31');

-- --------------------------------------------------------

--
-- Structure de la table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '{}', 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'title', 'text', 'Titre', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'slug', 'text', 'Slug', 1, 0, 0, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', 3),
(59, 7, 'description', 'text_area', 'Description', 1, 0, 1, 1, 1, 1, '{}', 4),
(60, 7, 'file', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 5),
(61, 7, 'cost', 'text', 'Prix', 0, 1, 1, 1, 1, 1, '{}', 6),
(62, 7, 'status', 'select_dropdown', 'Gratuit / Payant ?', 1, 1, 1, 1, 1, 1, '{\"default\":\"GRATUIT\",\"options\":{\"GRATUIT\":\"Gratuit\",\"PAYANT\":\"Payant\"}}', 7),
(64, 7, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 9),
(65, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(73, 7, 'book_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"books\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(74, 7, 'category_id', 'text', 'Category', 1, 1, 1, 1, 1, 1, '{}', 9),
(75, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(76, 9, 'first_name', 'text', 'Prénom', 1, 1, 1, 1, 1, 1, '{}', 2),
(77, 9, 'last_name', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{}', 3),
(78, 9, 'company_name', 'text', 'Entreprise', 0, 1, 1, 1, 1, 1, '{}', 4),
(79, 9, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 5),
(80, 9, 'phone', 'text', 'Téléphone', 1, 1, 1, 1, 1, 1, '{}', 6),
(81, 9, 'address', 'text', 'Adresse', 1, 1, 1, 1, 1, 1, '{}', 7),
(82, 9, 'city', 'text', 'Ville', 1, 1, 1, 1, 1, 1, '{}', 8),
(83, 9, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 9),
(84, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(85, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(86, 9, 'order_belongsto_user_relationship', 'relationship', 'Utilisateur', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"books\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(87, 9, 'comment', 'text', 'Commentaire', 0, 1, 1, 1, 1, 1, '{}', 12),
(88, 9, 'book_id', 'text', 'Livre', 1, 1, 1, 1, 1, 1, '{}', 13),
(89, 9, 'status', 'text', 'Statut', 0, 1, 1, 1, 1, 1, '{}', 14),
(90, 9, 'order_belongsto_book_relationship', 'relationship', 'books', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Book\",\"table\":\"books\",\"type\":\"belongsTo\",\"column\":\"book_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"books\",\"pivot\":\"0\",\"taggable\":null}', 15),
(91, 7, 'pdf', 'file', 'Le fichier .pdf', 1, 0, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required|file\",\"messages\":{\"required\":\"Le champ :attribute est obligatoire.\",\"file\":\"Le champ :attribute doit \\u00eatre un fichier.\"}}}', 12),
(92, 7, 'user_id', 'text', 'Utilisateur', 0, 1, 1, 1, 1, 1, '{}', 13),
(93, 7, 'book_belongsto_user_relationship', 'relationship', 'Utilisateur', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"books\",\"pivot\":\"0\",\"taggable\":\"0\"}', 14),
(94, 7, 'active', 'select_dropdown', 'Statut', 1, 1, 1, 1, 1, 1, '{\"default\":\"active\",\"options\":{\"active\":\"Actif\",\"disabled\":\"En atttente\"}}', 13),
(95, 7, 'author_name', 'text', 'Nom de l\'auteur', 0, 1, 1, 1, 1, 1, 'null', 14),
(96, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(97, 10, 'name', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{}', 2),
(98, 10, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(99, 10, 'phone', 'text', 'Téléphone', 1, 1, 1, 1, 1, 1, '{}', 4),
(101, 10, 'message', 'text', 'Message', 1, 1, 1, 1, 1, 1, '{}', 6),
(102, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(103, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(104, 10, 'subject', 'text', 'Sujet', 0, 1, 1, 1, 1, 1, '{}', 5);

-- --------------------------------------------------------

--
-- Structure de la table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-02-12 09:44:46', '2020-02-12 09:44:46'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-02-12 09:44:46', '2020-02-12 09:44:46'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-02-12 09:44:46', '2020-02-20 09:09:57'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2020-02-12 09:44:58', '2020-02-12 09:44:58'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2020-02-12 09:45:00', '2020-02-12 09:45:00'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-02-12 09:45:01', '2020-02-12 09:45:01'),
(7, 'books', 'books', 'Livre', 'Livres', NULL, 'App\\Book', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-02-20 08:57:42', '2020-02-29 18:20:53'),
(9, 'orders', 'orders', 'Commande', 'Commandes', NULL, 'App\\Order', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-02-26 10:37:05', '2020-02-26 13:33:15'),
(10, 'contacts', 'contacts', 'Contact', 'Contacts', NULL, 'App\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-02-29 18:12:49', '2020-03-01 04:32:31');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

CREATE TABLE `favorites` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `favoriteable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favoriteable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `favorites`
--

INSERT INTO `favorites` (`user_id`, `favoriteable_type`, `favoriteable_id`, `created_at`, `updated_at`) VALUES
(1, 'App\\Book', 4, '2020-03-01 05:33:23', '2020-03-01 05:33:23'),
(3, 'App\\Book', 10, '2020-03-02 12:13:28', '2020-03-02 12:13:28');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-02-12 09:44:48', '2020-02-12 09:44:48');

-- --------------------------------------------------------

--
-- Structure de la table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Tableau de bord', '', '_self', 'voyager-boat', '#000000', NULL, 1, '2020-02-12 09:44:48', '2020-02-20 09:08:41', 'voyager.dashboard', 'null'),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 6, '2020-02-12 09:44:48', '2020-02-29 18:14:28', 'voyager.media.index', NULL),
(3, 1, 'Utilisateurs', '', '_self', 'voyager-person', '#000000', NULL, 3, '2020-02-12 09:44:48', '2020-02-26 10:40:16', 'voyager.users.index', 'null'),
(4, 1, 'Rôles', '', '_self', 'voyager-lock', '#000000', NULL, 2, '2020-02-12 09:44:48', '2020-02-26 10:40:16', 'voyager.roles.index', 'null'),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 11, '2020-02-12 09:44:49', '2020-02-26 10:40:08', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-02-12 09:44:49', '2020-02-20 09:08:13', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-02-12 09:44:49', '2020-02-20 09:08:13', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-02-12 09:44:49', '2020-02-20 09:08:13', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-02-12 09:44:49', '2020-02-20 09:08:13', 'voyager.bread.index', NULL),
(10, 1, 'Paramètres', '', '_self', 'voyager-settings', '#000000', NULL, 12, '2020-02-12 09:44:49', '2020-02-26 10:40:08', 'voyager.settings.index', 'null'),
(11, 1, 'Catégories', '', '_self', 'voyager-categories', '#000000', NULL, 10, '2020-02-12 09:44:59', '2020-02-29 18:14:28', 'voyager.categories.index', 'null'),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 7, '2020-02-12 09:45:00', '2020-02-29 18:14:28', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 8, '2020-02-12 09:45:02', '2020-02-29 18:14:28', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-02-12 09:45:07', '2020-02-20 09:08:13', 'voyager.hooks', NULL),
(15, 1, 'Livres', '', '_self', 'voyager-book', '#000000', NULL, 9, '2020-02-20 08:57:43', '2020-02-29 18:14:28', 'voyager.books.index', 'null'),
(17, 1, 'Commandes', '', '_self', 'voyager-basket', '#000000', NULL, 4, '2020-02-26 10:37:05', '2020-02-26 10:40:17', 'voyager.orders.index', 'null'),
(18, 1, 'Contacts', '', '_self', 'voyager-mail', '#000000', NULL, 5, '2020-02-29 18:12:50', '2020-02-29 18:14:28', 'voyager.contacts.index', 'null');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(28, '2020_02_20_102653_add_category_id_field_on_books_table', 3),
(29, '2018_06_30_113500_create_comments_table', 4),
(30, '2020_02_21_135506_create_favorites_table', 4),
(31, '2020_02_21_140552_create_reviews_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `book_id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `company_name`, `email`, `phone`, `address`, `city`, `user_id`, `created_at`, `updated_at`, `comment`, `book_id`, `active`) VALUES
(2, 'Guerth', 'Manzala', NULL, 'guerthmanzala@gmail.com', '+243820558443', 'Kinshasa', 'Kinshasa', 1, '2020-02-26 13:49:46', '2020-02-26 13:49:46', NULL, 7, 1),
(3, 'Guerth', 'Manzala', NULL, 'guerthmanzala@gmail.com', '+243820558443', 'Kinshasa', 'Kinshasa', 1, '2020-02-26 13:49:46', '2020-02-26 13:49:46', NULL, 3, 1),
(4, 'bvvg', 'aaa', 'aaa', 'aaaa@aaa', 'aaaaahhhhhhhh', 'aaaa', 'aaa', 1, '2020-02-26 15:37:36', '2020-02-26 15:37:36', NULL, 8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-02-12 09:45:03', '2020-02-12 09:45:03');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-02-12 09:44:49', '2020-02-12 09:44:49'),
(2, 'browse_bread', NULL, '2020-02-12 09:44:49', '2020-02-12 09:44:49'),
(3, 'browse_database', NULL, '2020-02-12 09:44:49', '2020-02-12 09:44:49'),
(4, 'browse_media', NULL, '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(5, 'browse_compass', NULL, '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(6, 'browse_menus', 'menus', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(7, 'read_menus', 'menus', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(8, 'edit_menus', 'menus', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(9, 'add_menus', 'menus', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(10, 'delete_menus', 'menus', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(11, 'browse_roles', 'roles', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(12, 'read_roles', 'roles', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(13, 'edit_roles', 'roles', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(14, 'add_roles', 'roles', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(15, 'delete_roles', 'roles', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(16, 'browse_users', 'users', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(17, 'read_users', 'users', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(18, 'edit_users', 'users', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(19, 'add_users', 'users', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(20, 'delete_users', 'users', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(21, 'browse_settings', 'settings', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(22, 'read_settings', 'settings', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(23, 'edit_settings', 'settings', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(24, 'add_settings', 'settings', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(25, 'delete_settings', 'settings', '2020-02-12 09:44:50', '2020-02-12 09:44:50'),
(26, 'browse_categories', 'categories', '2020-02-12 09:44:59', '2020-02-12 09:44:59'),
(27, 'read_categories', 'categories', '2020-02-12 09:44:59', '2020-02-12 09:44:59'),
(28, 'edit_categories', 'categories', '2020-02-12 09:44:59', '2020-02-12 09:44:59'),
(29, 'add_categories', 'categories', '2020-02-12 09:44:59', '2020-02-12 09:44:59'),
(30, 'delete_categories', 'categories', '2020-02-12 09:44:59', '2020-02-12 09:44:59'),
(31, 'browse_posts', 'posts', '2020-02-12 09:45:01', '2020-02-12 09:45:01'),
(32, 'read_posts', 'posts', '2020-02-12 09:45:01', '2020-02-12 09:45:01'),
(33, 'edit_posts', 'posts', '2020-02-12 09:45:01', '2020-02-12 09:45:01'),
(34, 'add_posts', 'posts', '2020-02-12 09:45:01', '2020-02-12 09:45:01'),
(35, 'delete_posts', 'posts', '2020-02-12 09:45:01', '2020-02-12 09:45:01'),
(36, 'browse_pages', 'pages', '2020-02-12 09:45:02', '2020-02-12 09:45:02'),
(37, 'read_pages', 'pages', '2020-02-12 09:45:02', '2020-02-12 09:45:02'),
(38, 'edit_pages', 'pages', '2020-02-12 09:45:03', '2020-02-12 09:45:03'),
(39, 'add_pages', 'pages', '2020-02-12 09:45:03', '2020-02-12 09:45:03'),
(40, 'delete_pages', 'pages', '2020-02-12 09:45:03', '2020-02-12 09:45:03'),
(41, 'browse_hooks', NULL, '2020-02-12 09:45:07', '2020-02-12 09:45:07'),
(42, 'browse_books', 'books', '2020-02-20 08:57:42', '2020-02-20 08:57:42'),
(43, 'read_books', 'books', '2020-02-20 08:57:42', '2020-02-20 08:57:42'),
(44, 'edit_books', 'books', '2020-02-20 08:57:42', '2020-02-20 08:57:42'),
(45, 'add_books', 'books', '2020-02-20 08:57:42', '2020-02-20 08:57:42'),
(46, 'delete_books', 'books', '2020-02-20 08:57:42', '2020-02-20 08:57:42'),
(52, 'browse_orders', 'orders', '2020-02-26 10:37:05', '2020-02-26 10:37:05'),
(53, 'read_orders', 'orders', '2020-02-26 10:37:05', '2020-02-26 10:37:05'),
(54, 'edit_orders', 'orders', '2020-02-26 10:37:05', '2020-02-26 10:37:05'),
(55, 'add_orders', 'orders', '2020-02-26 10:37:05', '2020-02-26 10:37:05'),
(56, 'delete_orders', 'orders', '2020-02-26 10:37:05', '2020-02-26 10:37:05'),
(57, 'browse_contacts', 'contacts', '2020-02-29 18:12:49', '2020-02-29 18:12:49'),
(58, 'read_contacts', 'contacts', '2020-02-29 18:12:49', '2020-02-29 18:12:49'),
(59, 'edit_contacts', 'contacts', '2020-02-29 18:12:49', '2020-02-29 18:12:49'),
(60, 'add_contacts', 'contacts', '2020-02-29 18:12:49', '2020-02-29 18:12:49'),
(61, 'delete_contacts', 'contacts', '2020-02-29 18:12:50', '2020-02-29 18:12:50');

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Lorem Ipsum Post', '', 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-12 09:45:01', '2020-02-28 07:08:22'),
(2, 1, 1, 'My Sample Post', '', 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n<h2>We can use all kinds of format!</h2>\n<p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-12 09:45:01', '2020-02-28 07:08:40'),
(3, 1, 1, 'Latest Post', '', 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-12 09:45:01', '2020-02-28 07:08:58'),
(4, 1, 1, 'Yarr Post', '', 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-12 09:45:01', '2020-02-28 07:09:17');

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `customer_service_rating` int(11) DEFAULT NULL,
  `quality_rating` int(11) DEFAULT NULL,
  `friendly_rating` int(11) DEFAULT NULL,
  `pricing_rating` int(11) DEFAULT NULL,
  `recommend` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` enum('Sales','Service','Parts') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `reviewrateable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewrateable_id` bigint(20) UNSIGNED NOT NULL,
  `author_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `customer_service_rating`, `quality_rating`, `friendly_rating`, `pricing_rating`, `recommend`, `department`, `title`, `body`, `approved`, `reviewrateable_type`, `reviewrateable_id`, `author_type`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 4, 0, 0, 0, 0, 'Yes', 'Sales', 'ZamengApp', 'Another great quality product that anyone who see’s me wearing has asked where to purchase one of their own.', 1, 'App\\Book', 6, 'App\\User', 1, '2020-02-21 13:38:15', '2020-02-21 13:38:15'),
(2, 3, 0, 0, 0, 0, 'Yes', 'Sales', 'ZamengApp', 'Another great quality product that anyone who see’s me wearing has asked where to purchase one of their own.', 1, 'App\\Book', 6, 'App\\User', 1, '2020-02-21 13:48:25', '2020-02-21 13:48:25');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-02-12 09:44:49', '2020-02-12 09:44:49'),
(2, 'user', 'Normal User', '2020-02-12 09:44:49', '2020-02-12 09:44:49');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'ZamengApp', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\February2020\\QV0BAa8zwRUIqFGZmHL5.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'ZamengApp Admin', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Bienvenue dans l\'administration de ZamengApp', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-02-12 09:45:03', '2020-02-12 09:45:03'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-02-12 09:45:03', '2020-02-12 09:45:03'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-02-12 09:45:03', '2020-02-12 09:45:03'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-02-12 09:45:04', '2020-02-12 09:45:04'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-02-12 09:45:05', '2020-02-12 09:45:05'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-02-12 09:45:05', '2020-02-12 09:45:05');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Guerth Manzala', 'guerthmanzala@gmail.com', 'users/default.png', NULL, '$2y$10$WZeR.8eGrudNAWt8.81Q1ulaubooUFJx1mVPbc2Lz.hu.pSrPpWiG', 'BXlcGmBhfBqN6Z4OVKR955XDUr0I55YGxOCowDyUTBWlrEzTTCYes8qWAWEL', NULL, '2020-02-12 09:44:59', '2020-03-02 11:56:58'),
(2, 2, 'Optimus Guerth', 'guerthmanzala@contact.com', 'users/default.png', NULL, '$2y$10$Sh1G1bjMmTnKk7UMltBFV.hoFJrWmbk3IiiQZbBfhaTuRkaWBRDXK', NULL, NULL, '2020-02-20 14:15:31', '2020-02-20 14:15:31'),
(3, 2, 'Amiel Furaah', 'amielfuraah@gmail.com', 'users/default.png', NULL, '$2y$10$nnGa0tpqTZH/fgl8f2FoI.GhzAAElayy1jjs5VtD5/t88BnHgfGTa', NULL, NULL, '2020-03-02 11:59:14', '2020-03-02 11:59:14');

-- --------------------------------------------------------

--
-- Structure de la table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_user_id_index` (`user_id`),
  ADD KEY `books_category_id_index` (`category_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_child_id_foreign` (`child_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Index pour la table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`user_id`,`favoriteable_id`,`favoriteable_type`),
  ADD KEY `favorites_favoriteable_type_favoriteable_id_index` (`favoriteable_type`,`favoriteable_id`),
  ADD KEY `favorites_user_id_index` (`user_id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Index pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Index pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_reviewrateable_type_reviewrateable_id_index` (`reviewrateable_type`,`reviewrateable_id`),
  ADD KEY `reviews_author_type_author_id_index` (`author_type`,`author_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Index pour la table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Index pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT pour la table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
