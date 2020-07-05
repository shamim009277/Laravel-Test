-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 06:49 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `content`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `type`, `section`, `description`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'World\'s longest natural sea beach under threat', 2, 2, 'Cox\'s Bazar in Bangladesh is the world\'s longest natural sea beach, and a popular tourist destination in the country.\r\n\r\nBut while it has traditionally been celebrated for its lack of development, there are now growing fears that new buildings being constructed along the beach are going to threaten its environment and wildlife.\r\n\r\nThe BBC\'s Anbarasan Ethirajan paid a visit to Cox\'s Bazar to find out more.', '5f008c16d5b49.jpg', NULL, 1, '2020-07-04 08:03:02', '2020-07-04 08:03:02'),
(2, 'Key Features of Laravel Framework', 1, 1, 'Laravel is also popular due to its Object-Oriented libraries as well as many other pre-installed libraries. These pre-installed libraries are not found in any other PHP frameworks.\r\n\r\nOne of the preinstalled libraries is an Authentication library which is easy-to-implement and has many latest features, such as checking active users, Bcrypt hashing, password reset, CSRF (Cross-site Request Forgery) protection, and encryption.\r\n\r\nFurthermore, this framework is divided into individual modules that adopt modern PHP principles allowing developers to build responsive, modular, and handy web apps.', '5f008e0eaa541.png', 'https://www.youtube.com/embed/98ChVWjI6KI', 1, '2020-07-04 08:11:26', '2020-07-04 08:11:26'),
(3, 'Cybersecurity, Modern Technology and Business Threats', 2, 2, 'The year 2020 is overcome with the COVID-19. But the virus isn’t the only threat to our security. 2020 is also set to revolutionize the world with advancements that will shape the future of lives and businesses, alike. We now have 5G and IoT to Artificial Intelligence, Cloud technology, and Machine Learning. These technologies will become an integral part of our daily lives in creating efficiency, saving time, reducing costs, and unlocking new opportunities.\r\n\r\nThough this optimistic language is something you hear quite often (and it’s not untrue to a large degree), the more the world transforms towards a digital future, the higher the rise in threats of Cyberattacks.', '5f00c509d40fa.jpg', NULL, 1, '2020-07-04 12:06:01', '2020-07-04 12:06:01'),
(4, 'New Features and Changes in Laravel 7.0', 1, 1, 'Laravel 7 is now released and includes many new features including Laravel Airlock, better routing speed, custom Eloquent casts, Blade component tags, fluent string operations, a new HTTP client, CORS support, and many more features.\r\n\r\nLaravel has a variety of built-in, helpful cast types; however, you may occasionally need to define your own cast types. You may now accomplish this by defining a class that implements the CastsAttributes interface.\r\n\r\nClasses that implement this interface must define a get and set methods. The get method is responsible for transforming a raw value from the database into a cast value, while the set method should transform a cast value into a raw value that can be stored in the database.', '5f014fa1e9141.png', 'https://www.youtube.com/embed/jlOeqUwLYig', 1, '2020-07-04 21:57:21', '2020-07-04 21:57:21'),
(5, 'VueJS Components, Templates, and Experiments Exemples', 1, 1, 'Vue White Dashboard is a free and open-source Bootstrap 4 and Vue.js Admin Dashboard with a huge number of components built to fit together and look amazing. Vue White Dashboard features over 16 individual components, giving you the freedom of choosing and combining. This means that there are thousands of possible combinations. All components can take variations in color, that you can easily modify using SASS files.\r\n\r\nVue QRcode Reader is a set of VueJS components for detecting and decoding QR codes. It allows you to detect and decode QR codes, without leaving the browser. All components are responsive. Beyond that, it is close to zero stylings so that you can make them fit your layout. Usage is simple and straight forward.', '5f0150cc77ae0.png', 'https://www.youtube.com/embed/nhBVL41-_Cw', 1, '2020-07-04 22:02:20', '2020-07-04 22:02:20'),
(6, 'Integrate Vue Router', 1, 2, 'In a JavaScript web application, a router is the part that syncs the currently displayed view with the browser address bar content.\r\n\r\nIn other words, it’s the part that makes the URL change when you click something in the page, and helps to show the correct view when you hit a specific URL.\r\n\r\nTraditionally the Web is built around URLs. When you hit a certain URL, a specific page is displayed.\r\n\r\nWith the introduction of applications that run inside the browser and change what the user sees, many applications broke this interaction, and you had to manually update the URL with the browser’s History API.\r\n\r\nYou need a router when you need to sync URLs to views in your app. It’s a very common need, and all the major modern frameworks now allow you to manage routing.\r\n\r\nThe Vue Router library is the way to go for Vue.js applications. Vue does not enforce the use of this library. You can use whatever generic routing library you want, or also create your own History API integration, but the benefit of using Vue Router is that it’s official.\r\n\r\nThis means it’s maintained by the same people who maintain Vue, so you get a more consistent integration in the framework, and the guarantee that it’s always going to be compatible in the future, no matter what.', '5f01529ecb023.png', 'https://www.youtube.com/embed/4lk9-PYensI', 1, '2020-07-04 22:10:06', '2020-07-04 22:10:06'),
(7, 'Best Place Visit in Bangladesh - Sundarbans Mangrove Forest', 2, 2, 'The Sundarbans mangrove forest, one of the largest such forests in the world (140,000 ha), lies on the delta of the Ganges, Brahmaputra and Meghna rivers on the Bay of Bengal. It is adjacent to the border of India’s Sundarbans World Heritage site inscribed in 1987. The site is intersected by a complex network of tidal waterways, mudflats and small islands of salt-tolerant mangrove forests, and presents an excellent example of ongoing ecological processes. The area is known for its wide range of fauna, including 260 bird species, the Bengal tiger and other threatened species such as the estuarine crocodile and the Indian python.\r\n\r\nThe three wildlife sanctuaries in the south cover an area of 139,700 ha and are considered core breeding areas for a number of endangered species. Situated in a unique bioclimatic zone within a typical geographical situation in the coastal region of the Bay of Bengal, it is a landmark of ancient heritage of mythological and historical events. Bestowed with magnificent scenic beauty and natural resources, it is internationally recognized for its high biodiversity of mangrove flora and fauna both on land and water.', '5f01558b95d2a.jpg', NULL, 1, '2020-07-04 22:22:35', '2020-07-04 22:22:35'),
(8, 'Looking For Best Place in Bangladesh?', 2, 2, 'Best places to visit in Bangladesh. Sundarbans Mangrove Forest. Sundarbans is the largest mangrove forest on earth and a UNESCO world heritage site. Chittagong Hill-Tracts. Chittagong Hill-Tracts area is a naturally beautiful place full of beautiful hills. Srimangal. Rangamati. Paharpur. St. Gaur. Sylhet.\r\n\r\nBest places to visit in Bangladesh. Sundarbans Mangrove Forest. Sundarbans is the largest mangrove forest on earth and a UNESCO world heritage site. Chittagong Hill-Tracts. Chittagong Hill-Tracts area is a naturally beautiful place full of beautiful hills. Srimangal. Rangamati. Paharpur. St. Gaur. Sylhet.\r\n\r\nBest places to visit in Bangladesh. Sundarbans Mangrove Forest. Sundarbans is the largest mangrove forest on earth and a UNESCO world heritage site. Chittagong Hill-Tracts. Chittagong Hill-Tracts area is a naturally beautiful place full of beautiful hills. Srimangal. Rangamati. Paharpur. St. Gaur. Sylhet.', '5f01563f914e2.jpg', NULL, 1, '2020-07-04 22:25:35', '2020-07-04 22:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2020_07_03_135358_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'Towhedul Islam', 'towhidshamim009@gmail.com', NULL, '$2y$10$zu0zS/MbWzO4sQrarDV.NOBSIf/sZqkK.KFOlfdChb1HMSOqHdkzG', NULL, '2020-07-04 06:29:14', '2020-07-04 06:29:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`),
  ADD UNIQUE KEY `blogs_link_unique` (`link`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
