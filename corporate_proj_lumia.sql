-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2023 at 11:57 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corporate_proj_lumia`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'uploads/about.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <ul>\n                                <li><i class=\"bx bx-check-double\"></i> Lorem ipsum\n                                </li>\n                                <li><i class=\"bx bx-check-double\"></i> Lorem Ipsum\n                                </li>\n                            </ul>', '2023-06-08 10:22:28', '2023-06-08 10:22:28'),
(14, 'About Us', 'uploads/about.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <ul>\r\n                                <li><i class=\"bx bx-check-double\"></i> Lorem ipsum\r\n                                </li>\r\n                                <li><i class=\"bx bx-check-double\"></i> Lorem Ipsum\r\n                                </li>\r\n                            </ul>', '2023-06-08 10:22:28', '2023-06-08 10:22:28'),
(15, 'About Us', 'uploads/about.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <ul>\r\n                                <li><i class=\"bx bx-check-double\"></i> Lorem ipsum\r\n                                </li>\r\n                                <li><i class=\"bx bx-check-double\"></i> Lorem Ipsum\r\n                                </li>\r\n                            </ul>', '2023-06-08 10:22:28', '2023-06-08 10:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Zahra Alizada', 'zahra@gmail.com', '$2y$10$Txnlfgn1rfxCZ5NMTaE8eOffva14gG/MUFTsTdlqbBnsQW.0YWMQe', '2023-06-14 04:50:14', '2023-06-14 04:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `communications`
--

DROP TABLE IF EXISTS `communications`;
CREATE TABLE IF NOT EXISTS `communications` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communications`
--

INSERT INTO `communications` (`id`, `address`, `email1`, `email2`, `phone1`, `phone2`, `created_at`, `updated_at`) VALUES
(1, 'A108 Adam Street New York, NY 535022', 'info@example.com', 'contact@example.com', '+1 5589 55488 51', '+1 5589 22475 14', '2023-06-09 07:52:56', '2023-06-09 07:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Zahra Alizada', 'zahra@gmail.com', 'Subject 1', 'message 1', '2023-06-13 01:51:22', '2023-06-13 01:51:22'),
(17, 'Zahra Alizada', 'zahra@gmail.com', '4', '4', '2023-06-13 06:38:57', '2023-06-13 06:38:57'),
(16, '3', '3@bk.ru', '3', '3', '2023-06-13 02:47:17', '2023-06-13 02:47:17'),
(15, '2', '2@gmail.com', '2', '2', '2023-06-13 02:46:24', '2023-06-13 02:46:24'),
(14, '1', '1@gmail.com', '1', '1', '2023-06-13 02:45:19', '2023-06-13 02:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `icon_cards`
--

DROP TABLE IF EXISTS `icon_cards`;
CREATE TABLE IF NOT EXISTS `icon_cards` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icon_cards`
--

INSERT INTO `icon_cards` (`id`, `title`, `description`, `icon`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi', '<i class=\"bx bxl-dribbble\"></i>', 'home', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(2, 'Sed ut perspiciatis', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', '<i class=\"bx bx-file\"></i>', 'home', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(3, 'Magni Dolores', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia', '<i class=\"bx bx-tachometer\"></i>', 'home', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(4, 'Lorem Ipsum', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', '<i class=\"bi bi-briefcase\"></i>', 'services', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(5, 'Sed ut perspiciatis', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', '<i class=\"bi bi-bar-chart\"></i>', 'services', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(6, 'Magni Dolore', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', '<i class=\"bi bi-brightness-high\"></i>', 'services', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(7, 'Dolor Sitema', 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata', '<i class=\"bi bi-card-checklist\"></i>', 'services', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(8, 'Nemo Enim', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '<i class=\"bi bi-binoculars\"></i>', 'services', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(9, 'Eiusmod Tempor', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi', '<i class=\"bi bi-calendar4-week\"></i>', 'services', '2023-06-09 09:24:39', '2023-06-09 09:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `image_cards`
--

DROP TABLE IF EXISTS `image_cards`;
CREATE TABLE IF NOT EXISTS `image_cards` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_cards`
--

INSERT INTO `image_cards` (`id`, `fullname`, `position`, `description`, `image`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Walter White', 'Chief Executive Officer', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut ', 'team-1.jpg', 'team', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(2, 'Sarah Jhinson', 'Product Manager', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut ', 'team-2.jpg', 'team', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(3, 'William Anderson', 'CTO', 'Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus ', 'team-3.jpg', 'team', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(4, 'Saul Goodman', 'Ceo & Founder', '\n                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit\n                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,\n                                    risus at semper.\n                                    ', 'testimonials-1.jpg', 'testimonials', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(5, 'Sara Wilsson', 'Designer', '\n                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid\n                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet\n                                    legam anim culpa.\n                                    ', 'testimonials-2.jpg', 'testimonials', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(6, 'Jena Karlis', 'Store Owner', '\n                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem\n                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint\n                                    minim.\n                                    ', 'testimonials-3.jpg', 'testimonials', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(7, 'Matt Brandon', 'Freelancer', '\n                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim\n                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem\n                                    dolore labore illum veniam.\n                                    ', 'testimonials-4.jpg', 'testimonials', '2023-06-09 09:24:39', '2023-06-09 09:24:39'),
(8, 'John Larson', 'Entrepreneur', '\n                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster\n                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam\n                                    culpa fore nisi cillum quid.\n                                    ', 'testimonials-5.jpg', 'testimonials', '2023-06-09 09:24:39', '2023-06-09 09:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_06_08_133345_static_elements', 1),
(3, '2023_06_08_141002_abouts', 2),
(4, '2023_06_09_081847_portfolios', 3),
(5, '2023_06_09_085857_portfolios', 4),
(6, '2023_06_09_102747_portfolios', 5),
(7, '2023_06_09_111835_categories', 6),
(8, '2023_06_09_113156_communications', 7),
(9, '2023_06_09_120522_contacts', 8),
(10, '2023_06_09_120952_social_links', 9),
(11, '2023_06_09_121748_icon_cards', 10),
(12, '2023_06_09_121908_image_cards', 10),
(13, '2023_06_14_080357_admin', 11);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proj_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proj_url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `subtitle`, `image1`, `image2`, `image3`, `description`, `slug`, `client`, `proj_date`, `proj_url`, `category`, `created_at`, `updated_at`) VALUES
(1, 'App 1', 'App', 'portfolio-2.jpg', '', '', 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius. ', 'app-1', 'App 1', '2023-06-09 10:40:45', '', '1', '2023-06-09 06:40:45', '2023-06-09 06:40:45'),
(2, 'App 1', 'App', 'portfolio-1.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'app-1', 'App 1', '2023-06-09 10:53:23', '', '1', '2023-06-09 06:53:23', '2023-06-09 06:53:23'),
(3, 'App 2', 'App', 'card-2.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'app-1', 'App 1', '2023-06-09 10:53:23', '', '1', '2023-06-09 06:53:23', '2023-06-09 06:53:23'),
(4, 'Card 2', 'Card', 'portfolio-1.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'card-2', 'Card 2', '2023-06-09 10:53:23', '', '3', '2023-06-09 06:53:23', '2023-06-09 06:53:23'),
(5, 'Card 1', 'Card', 'card-2.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'card-1', 'Card 1', '2023-06-09 10:53:23', '', '3', '2023-06-09 06:53:23', '2023-06-09 06:53:23'),
(6, 'Web 2', 'Web', 'portfolio-2.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'web-2', 'Web 2', '2023-06-09 10:53:23', '', '2', '2023-06-09 06:53:23', '2023-06-09 06:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

DROP TABLE IF EXISTS `social_links`;
CREATE TABLE IF NOT EXISTS `social_links` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_card_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `name`, `link`, `icon`, `type`, `image_card_id`, `created_at`, `updated_at`) VALUES
(1, 'Facebook-Walter', 'walter@facebook.com', '<i class=\"bi bi-facebook\"></i>', 'team', 1, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(2, 'Twitter-Walter', 'walter@twitter.com', '<i class=\"bi bi-twitter\"></i>', 'team', 1, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(3, 'Instagram-Walter', 'walter@instagram.com', '<i class=\"bi bi-instagram\"></i>', 'team', 1, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(4, 'Linkedin-Walter', 'walter@linkedin.com', '<i class=\"bi bi-linkedin\"></i>', 'team', 1, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(5, 'Facebook-sarah', 'sarah@facebook.com', '<i class=\"bi bi-facebook\"></i>', 'team', 2, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(6, 'Twitter-sarah', 'sarah@twitter.com', '<i class=\"bi bi-twitter\"></i>', 'team', 2, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(7, 'Instagram-sarah', 'sarah@instagram.com', '<i class=\"bi bi-instagram\"></i>', 'team', 2, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(8, 'Linkedin-sarah', 'sarah@linkedin.com', '<i class=\"bi bi-linkedin\"></i>', 'team', 2, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(9, 'Facebook-william', 'william@facebook.com', '<i class=\"bi bi-facebook\"></i>', 'team', 3, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(10, 'Twitter-william', 'william@twitter.com', '<i class=\"bi bi-twitter\"></i>', 'team', 3, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(11, 'Instagram-william', 'william@instagram.com', '<i class=\"bi bi-instagram\"></i>', 'team', 3, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(12, 'Linkedin-william', 'william@linkedin.com', '<i class=\"bi bi-linkedin\"></i>', 'team', 3, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(13, 'Facebook-website', 'website@facebook.com', '<i class=\"bi bi-facebook\"></i>', 'website', 0, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(14, 'Twitter-website', 'website@twitter.com', '<i class=\"bi bi-twitter\"></i>', 'website', 0, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(15, 'Instagram-website', 'website@instagram.com', '<i class=\"bi bi-instagram\"></i>', 'website', 0, '2023-06-09 09:33:34', '2023-06-09 09:33:34'),
(16, 'Linkedin-website', 'website@linkedin.com', '<i class=\"bi bi-linkedin\"></i>', 'website', 0, '2023-06-09 09:33:34', '2023-06-09 09:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `static_elements`
--

DROP TABLE IF EXISTS `static_elements`;
CREATE TABLE IF NOT EXISTS `static_elements` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `static_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static_elements`
--

INSERT INTO `static_elements` (`id`, `static_key`, `static_value`, `created_at`, `updated_at`) VALUES
(1, 'banner_title', 'Welcome to Lumia', NULL, NULL),
(2, 'banner_description', 'We are team of talented designers making websites with Bootstrap', NULL, NULL),
(3, 'home_title', 'What We Do', NULL, NULL),
(4, 'home_description', 'Magnam dolores commodi suscipit consequatur ex aliquid', NULL, NULL),
(5, 'services_title', 'Services', NULL, NULL),
(6, 'services_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem', NULL, NULL),
(7, 'portfolio_title', 'Portfolio', NULL, NULL),
(8, 'portfolio_description', 'Sit sint consectetur velit quisquam cupiditate impedit suscipit', NULL, NULL),
(9, 'testmotionals_title', 'Testimonials', NULL, NULL),
(10, 'testmotionals_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem', NULL, NULL),
(11, 'team_title', 'Team', NULL, NULL),
(12, 'team_description', 'Sit sint consectetur velit quos quisquam cupiditate nemo qui', NULL, NULL),
(13, 'contact_title', 'Contact', NULL, NULL),
(14, 'contact_description', 'Magnam dolores commodi suscipit eius consequatur ex aliquid fuga', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
